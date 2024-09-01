<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Plan\StorePlanRequest;
use App\Http\Requests\Admin\Plan\UpdatePlanRequest;

class PlanController extends Controller
{
    use Uploader;
    public function __construct()
    {
        $this->middleware('permission:subscriptions');
    }

   
    public function index()
    {
        $plans = Plan::latest()->withCount('activeuser')->paginate(20);

        return view('admin.plan.index', compact('plans'));
    }


    public function create()
    {
        return view('admin.plan.create');
    }

    
    public function store(StorePlanRequest $request)
    {
        try {
            // Retrieve validated data from the request
            $validatedData = $request->validated();
    
            // Prepare the data for the 'limits' JSON field
            $limits = [
                'messages_limit' => $validatedData['limits']['messages_limit'] ?? null,
                'contact_limit' => $validatedData['limits']['contact_limit'] ?? null,
                'device_limit' => $validatedData['limits']['device_limit'] ?? null,
                'template_limit' => $validatedData['limits']['template_limit'] ?? null,
                'apps_limit' => $validatedData['limits']['apps_limit'] ?? null,
                'chatbot' => $validatedData['limits']['chatbot'] ?"yes": "no",
                'bulk_message' => $validatedData['limits']['bulk_message']?"yes":"no",
                'schedule_message' => $validatedData['limits']['schedule_message']? "yes": "no",
                'access_chat_list' => $validatedData['limits']['access_chat_list'] ?"yes": "no",
                'access_group_list' => $validatedData['limits']['access_group_list'] ?"yes": "no",
            ];
    
            // Create a new plan record in the database
            $plan = Plan::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'business_size' => $validatedData['business_size'],
                'trial_days' => $request->is_trial?$request->trial_days :null,
                'is_trial' => $request->is_trial ? true: false,
                'icon' => $this->saveFile($request, 'icon'),
                'limits' => $limits, // No need to manually encode to JSON
                'is_popular' => $request->is_popular ? true: false,
                'is_recommended' => $request->is_recommended? true: false,
                'is_featured' => $request->is_featured ? true: false,
                'status' => $request->status ? true: false,
                'days' => $request->days,
                'price' => $request->price,
            ]);
    
            return redirect()->route('admin.plan.index')->with('success', 'Plan created successfully!');
        } catch (\Exception $e) {

            return redirect()->back()->withInput()->withErrors(['error' => 'Plan creation failed: '.$e->getMessage()]);
        }
    }
    
    
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('admin.plan.edit', compact('plan'));
    }

   
    public function update(UpdatePlanRequest $request, $id)
    {


        $plan = Plan::findOrFail($id);
        try {
            // Retrieve validated data from the request
            $validatedData = $request->validated();

            if($request->hasFile('icon')){
                $plan->icon =  $this->saveFile($request, 'icon') ;
               ! empty($plan->icon) ? $this->removeFile($plan->icon) : '';
            }
           
            // Prepare the data for the 'limits' JSON field
            $limits = [
                'messages_limit' => $validatedData['limits']['messages_limit'] ?? null,
                'contact_limit' => $validatedData['limits']['contact_limit'] ?? null,
                'device_limit' => $validatedData['limits']['device_limit'] ?? null,
                'template_limit' => $validatedData['limits']['template_limit'] ?? null,
                'apps_limit' => $validatedData['limits']['apps_limit'] ?? null,
                'chatbot' => $validatedData['limits']['chatbot'] ?"yes": "no",
                'bulk_message' => $validatedData['limits']['bulk_message']?"yes":"no",
                'schedule_message' => $validatedData['limits']['schedule_message']? "yes": "no",
                'access_chat_list' => $validatedData['limits']['access_chat_list'] ?"yes": "no",
                'access_group_list' => $validatedData['limits']['access_group_list'] ?"yes": "no",
            ];
    
       
            // Create a new plan record in the database
       $plan->update([
                'title' => $request->title,
                'description' => $request->description,
                'business_size' => $request->business_size,
                'trial_days' => $request->is_trial?$request->trial_days :null,
                'is_trial' => $request->is_trial ? true: false,
                'icon' => $plan->icon,
                'limits' => $limits, // No need to manually encode to JSON
                'is_popular' => $request->is_popular ? true: false,
                'is_recommended' => $request->is_recommended? true: false,
                'is_featured' => $request->is_featured ? true: false,
                'status' => $request->status ? true: false,
                'days' => $request->days,
                'price' => $request->price,
            ]);
   
            // return redirect()->back()->with('success', 'Plan updated successfully!');

            return response()->json([
                'message' => __('Plan updated successfully!'),
                'redirect' => route('admin.plan.index')],200);

        } catch (\Exception $e) {

            // return redirect()->back()->withInput()->withErrors(['error' => 'Plan update failed: '.$e->getMessage()]);

            return response()->json([
                'message' => __('Plan update failed: '.$e->getMessage()),
            ], 403);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::withCount('activeuser')->findOrFail($id);
        if ($plan->activeuser_count != 0) {
            return response()->json([
                'message' => __('You cant delete this plan because this plan already using some users'),
            ], 403);
        }

        $icon = $plan->icon;
        $plan->delete();
        $this->removeFile($icon);
        return response()->json([
            'redirect' => route('admin.plan.index'),
            'message' => __('Plan deleted successfully.'),
        ]);

    }
}

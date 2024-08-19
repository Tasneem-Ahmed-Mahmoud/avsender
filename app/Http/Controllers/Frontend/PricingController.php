<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Post;
use App\Models\User;
use App\Traits\Seo;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;
use Str;

class PricingController extends Controller
{
    use Seo;

    /**
     * Display a pricing page of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve FAQs with 'faq' type, featured, in the current language
        $faqs = Post::where('type', 'faq')
            ->where('featured', 1)
            ->where('lang', app()->getLocale())
            ->with('excerpt')
            ->latest()
            ->get();

        // Retrieve active plans
        $plans = Plan::where('status', 1)->where('lang', app()->getLocale())
            ->latest()
            ->get();

        // Set metadata for SEO
        $this->metadata('seo_pricing');

        // Return the plans view with FAQs and plans data
        return view('frontend.plans', compact('faqs', 'plans'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function register(Request $request, $id)
    {
        // Find the active plan by ID or fail
        $plan = Plan::where('status', 1)->where('lang', app()->getLocale())->findOrFail($id);

        // Set page metadata
        $meta['title'] = $plan->title ?? '';
        $this->pageMetaData($meta);

        // Return the registration view with the plan and request data
        return view('frontend.plan-steps.register', compact('plan', 'request'));
    }

    /**
     * Register a user with a plan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerPlan(Request $request, $id)
    {
        // dd($request->all());
        // Validate incoming request data
        $request->validate([
            'fname' => ['required', 'string', 'max:125'],
            'lname' => ['required', 'string', 'max:125'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        // Find the active plan by ID or fail
        $plan = Plan::where('status', 1)->findOrFail($id);

        // Create a new user with the provided data
        $user = User::create([
            'name' => $request->fname . " " . $request->lname,
            'email' => $request->email,
            'role' => 'user',
            'status' => 1,
            'plan' => json_encode($plan->data),
            'plan_id' => $plan->id,
            'will_expire' => $plan->is_trial == 1 ? now()->addDays($plan->trial_days) : null,
            'authkey' => $this->generateAuthKey(),
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);
        return redirect()->route('choose.payment.method', $plan->id);

    }

    /**
     * Generate a unique authentication key.
     *
     * @return string
     */
    public function generateAuthKey()
    {
        do {
            $rend = Str::random(50);
            $exists = User::where('authkey', $rend)->exists();
        } while ($exists);

        return $rend;
    }

    public function choosePlan(Plan $plan)
    {
      
        $plans=Plan::where('title',$plan->title)->where('lang', app()->getLocale())->get();
       
        return view('frontend.plan-steps.plan', compact('plans'));
    }

    public function choosePaymentMethod(Plan $plan)
    {

      
        return view('frontend.plan-steps.payment', compact('plan'));

    }

    public function proceedPayment(Request $request)
    {

        $user = Auth::user();
        // Redirect based on trial status
        if ($user->will_expire === null) {
            return redirect('user/subscription/' . $request->plan_id);
        }
        // Store a session message and redirect to device creation
        Session::put('new-user', __('Lets create a whatsapp device'));
        return redirect('/user/device/create');

    }

}

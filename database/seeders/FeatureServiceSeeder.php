<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\Slug;
use App\Models\FeatureService;
use Illuminate\Database\Seeder;

class FeatureServiceSeeder extends Seeder
{
    use Slug;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $FeatureServices = [
            "Bulk message" => [
                [
                    "photo" => "uploads/bulk-message/1.svg",
                    "description" =>"Organize and classify messages and create groups."
                ],
                [
                    "photo" => "uploads/bulk-message/2.svg",
                    "description" =>"Send various types of media, including files, images, and videos."
                ],
                [
                    "photo" => "uploads/bulk-message/3.svg",
                    "description" => "Target customers with multiple messages without keeping mobile numbers."
                ],
                [
                    "photo" => "uploads/bulk-message/4.svg",
                    "description" =>"Send variable messages, appointments, and reminders."
                ],
                [
                    "photo" => "uploads/bulk-message/5.svg",
                    "description" =>  "Schedule messages over the web."
                ],
            ],

            "Template messaging" => [
                [
                    "photo" => "uploads/featureServices/Time-Saving.svg",
                    "description" => "Time-Saving."
                ],
                [
                    "photo" => "uploads/featureServices/Controlled Communication.svg",
                    "description" => "Controlled Communication."

                ],
                [
                    "photo" => "uploads/featureServices/Quick Responses.svg",
                    "description" => "Quick Responses."

                ],
                [
                    "photo" => "uploads/featureServices/Error Reduction.svg",
                    "description" => "Error Reduction."

                ],

                [
                    "photo" => "uploads/featureServices/Feedback Mechanism.svg",
                    "description" => "Feedback Mechanism."

                ],
                [
                    "photo" => "uploads/featureServices/Integration with CRM Systems.svg",
                    "description" => "Integration with CRM Systems."

                ],
            ],
        ];

        foreach ($FeatureServices as $featureTitle => $services) {
            $post_id = Post::where("title", $featureTitle)->first()->id;
            foreach ($services as $service) {

                FeatureService::create([
                    "photo" => $service["photo"],
                    "description" => $service["description"],
                    "post_id" => $post_id,
                    "slug"=>$this->slugValue($service["description"]),
                ]);
            }
        }

    }
}

// [ "photo"=>"",
// "description"=>""]

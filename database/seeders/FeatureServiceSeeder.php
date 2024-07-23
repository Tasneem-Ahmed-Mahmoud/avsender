<?php

namespace Database\Seeders;

use App\Models\FeatureService;
use App\Models\Post;
use Illuminate\Database\Seeder;

class FeatureServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $FeatureServices = [
            "Bulk message" => [
                [
                    "photo" => "uploads/featureServices/organize.svg",
                    "description" => [
                        "en" => "Organize and classify messages and create groups.",
                        "ar" => "تنظيم وتصنيف الرسائل وإنشاء مجموعات."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/send-VariousType.svg",
                    "description" => [
                        "en" => "Send various types of media, including files, images, and videos.",
                        "ar" => "إرسال أنواع مختلفة من الوسائط، بما في ذلك الملفات والصور ومقاطع الفيديو."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/target.svg",
                    "description" => [
                        "en" => "Target customers with multiple messages without keeping mobile numbers.",
                        "ar" => "استهداف العملاء برسائل متعددة دون الاحتفاظ بأرقام الهواتف."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/SendVariablesMessages.svg",
                    "description" => [
                        "en" => "Send variable messages, appointments, and reminders.",
                        "ar" => "إرسال رسائل متغيرة، ومواعيد، وتذكيرات."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/ScheduleMessages.svg",
                    "description" => [
                        "en" => "Schedule messages over the web.",
                        "ar" => "جدولة الرسائل عبر الويب."
                    ],
                ],
            ],
        
            "Template messaging" => [
                [
                    "photo" => "uploads/featureServices/Time-Saving.svg",
                    "description" => [
                        "en" => "Time-Saving.",
                        "ar" => "توفير الوقت."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/Controlled Communication.svg",
                    "description" => [
                        "en" => "Controlled Communication.",
                        "ar" => "التواصل المنضبط."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/Quick Responses.svg",
                    "description" => [
                        "en" => "Quick Responses.",
                        "ar" => "الاستجابات السريعة."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/Error Reduction.svg",
                    "description" => [
                        "en" => "Error Reduction.",
                        "ar" => "تقليل الأخطاء."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/Feedback Mechanism.svg",
                    "description" => [
                        "en" => "Feedback Mechanism.",
                        "ar" => "آلية التغذية الراجعة."
                    ],
                ],
                [
                    "photo" => "uploads/featureServices/Integration with CRM Systems.svg",
                    "description" => [
                        "en" => "Integration with CRM Systems.",
                        "ar" => "التكامل مع أنظمة إدارة علاقات العملاء."
                    ],
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
                ]);
            }
        }

    }
}

// [ "photo"=>"",
// "description"=>""]

<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            // Yearly plans
            [
                "title" => ['en' => "Pro", 'ar' => "محترف"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "business_size" => ['en' => 'For startups', 'ar' => 'للشركات الناشئة'],
                "icon" => "uploads/plans/pro-en.svg",
                "price" => 115,
                "is_popular" => 0,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "5",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
                'is_featured' => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "days" => 365,
            ],
            [
                //id=2
                "title" => ["en" => "Enterprise", "ar" => "المؤسسات الكبيرة"],
                "business_size" => ["en" => "For big companies", "ar" => "للشركات الكبرى"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/enterprise-en.svg",
                "price" => 115,
                "days" => 365,
                "is_popular" => 1,
                "is_featured" => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "unlimited",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],
            [
                "title" => ['en' => "Basic", 'ar' => "أساسي"],
                "business_size" => ["en" => "For individuals", "ar" => "للأفراد"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/basic-en.svg",
                "price" => 115,
                "days" => 365,
                "is_popular" => 0,
                "is_featured" => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "limits" => [
                    "messages_limit" => "10,000",
                    "contact_limit" => "8,000",
                    "device_limit" => "2",
                    "template_limit" => "1",
                    "apps_limit" => "0",
                    "chatbot" => "no",
                    "bulk_message" => "yes",
                    "schedule_message" => "no",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],

// old

            [
                //id=6
                "title" => ['en' => "Vip", 'ar' => "مميز"],
                "business_size" => ["en" => "For individuals", "ar" => "للأفراد"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/basic-en.svg",
                "price" => 0,
                "days" => 365,
                "is_popular" => 0,
                "is_featured" => 0,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 0,
                "trial_days" => 2147483647,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "unlimited",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],

            // Monthly plans
            [
                "title" => ['en' => "Pro", 'ar' => "محترف"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "business_size" => ['en' => 'For startups', 'ar' => 'للشركات الناشئة'],
                "icon" => "uploads/plans/pro-en.svg",
                "price" => 35,
                "is_popular" => 0,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "5",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
                'is_featured' => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "days" => 30,
            ],
            [
                "title" => ["en" => "Enterprise", "ar" => "المؤسسات الكبيرة"],
                "business_size" => ["en" => "For big companies", "ar" => "للشركات الكبرى"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/enterprise-en.svg",
                "price" => 45,
                "days" => 30,
                "is_popular" => 1,
                "is_featured" => 1,
                'is_recommended' => 1,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "unlimited",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],
            [
               // id=3
                "title" => ['en' => "Basic", 'ar' => "أساسي"],
                "business_size" => ["en" => "For individuals", "ar" => "للأفراد"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/basic-en.svg",
                "price" => 55,
                "days" => 30,
                "is_popular" => 0,
                "is_featured" => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "limits" => [
                    "messages_limit" => "10,000",
                    "contact_limit" => "8,000",
                    "device_limit" => "2",
                    "template_limit" => "1",
                    "apps_limit" => "0",
                    "chatbot" => "no",
                    "bulk_message" => "yes",
                    "schedule_message" => "no",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],

            //old

            [
                //id=7
                "title" => ['en' => "Special offer", 'ar' => " عرض خاص"],
                "business_size" => ["en" => "For individuals", "ar" => "للأفراد"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/basic-en.svg",
                "price" => 155,
                "days" => 30,
                "is_popular" => 0,
                "is_featured" => 1,
                'is_recommended' => 1,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 1,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "5",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],

            [
                // 1d=1
                "title" => ['en' => "Starter", 'ar' => " Starter"],
                "business_size" => ["en" => "For individuals", "ar" => "للأفراد"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/basic-en.svg",
                "price" => 225,
                "days" => 30,
                "is_popular" => 0,
                "is_featured" => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 1,
                "trial_days" => 0,
                "limits" => [
                    "messages_limit" => "100000",
                    "contact_limit" => "8000",
                    "device_limit" => "2",
                    "template_limit" => "1",
                    "apps_limit" => "0",
                    "chatbot" => "no",
                    "bulk_message" => "yes",
                    "schedule_message" => "no",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],

            [
                //id=4
                "title" => ['en' => "Avnology", 'ar' => "Avnology"],
                "business_size" => ["en" => "For individuals", "ar" => "للأفراد"],
                "description" => ['en' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.", 'ar' => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit."],
                "icon" => "uploads/plans/basic-en.svg",
                "price" => 449,
                "days" => 30,
                "is_popular" => 0,
                "is_featured" => 1,
                'is_recommended' => 0,
                "is_trial" => 0,
                "status" => 0,
                "trial_days" => 1,
                "limits" => [
                    "messages_limit" => "unlimited",
                    "contact_limit" => "unlimited",
                    "device_limit" => "unlimited",
                    "template_limit" => "unlimited",
                    "apps_limit" => "unlimited",
                    "chatbot" => "yes",
                    "bulk_message" => "yes",
                    "schedule_message" => "yes",
                    "access_chat_list" => "yes",
                    "access_group_list" => "yes",
                ],
            ],

        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }

    }
}

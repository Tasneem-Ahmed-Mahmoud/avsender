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
            // yearly plans
            [
                "title" => "Pro",
                "business_size" => "For startups",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/pro-en.svg",
                "price" => "115",
                "days" => "365",
                "lang" => "en",
                "is_popular"=>false,
                'data' => '{
                 "Messages limit" : "unlimited",
                 "Contact limit" : "unlimited",
                 "Device limit" :"5",
                "Template limit" : "unlimited",
                "Apps limit" : "unlimited",
                "Chatbot":"true",
                "Bulk message":"true",
                "Schedule message":"true",
                "Access chat list":"true",
                "Access group list":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],
            [
                "title" => "Enterprise",
                "business_size" => "For big companies",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/enterprise-en.svg",
                "price" => "115",
                "days" => "365",
                "lang" => "en",
                "is_popular"=>true,
                'data' => '{
                 "Messages limit" : "unlimited",
                 "Contact limit" : "unlimited",
                 "Device limit" :"unlimited",
                "Template limit" : "unlimited",
                "Apps limit" : "unlimited",
                "Chatbot":"true",
                "Bulk message":"true",
                "Schedule message":"true",
                "Access chat list":"true",
                "Access group list":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [
                "title" => "Basic",
                "business_size" => "For individuals",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/basic-en.svg",
                "price" => "115",
                "days" => "365",
                "lang" => "en",
                "is_popular"=>false,
                'data' => '{
                 "Messages limit" : "10,000",
                 "Contact limit" : "8,000",
                 "Device limit" :"2",
                "Template limit" : "1",
                "Apps limit" : "0",
                "Chatbot":"false",
                "Bulk message":"true",
                "Schedule message":"false",
                "Access chat list":"true",
                "Access group list":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [
                "title" => "محترف",
                "business_size" => "للشركات الناشئة",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/pro-ar.svg",
                "price" => "115",
                "days" => "365",
                "lang" => "ar",
                "is_popular"=>false,
                'data' => '{
                "الحد الاقصي للرسائل" : "لا محدود",
                 "الحد الأقصى للاتصال" : "لا محدود",
                 "الحد الأقصى للأجهزة" :"5",
                "الحد الأقصى للنماذج" : "لا محدود",
                "الحد الأقصى للتطبيقات" : "لا محدود",
                "Chatbot":"true",
                "رسائل جماعية":"true",
                "رسائل مجدولة":"true",
                "مدخل الى قائمة الدردشة":"true",
                "مدخل الى قائمة المجموعة":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [
                "title" => "المؤسسات الكبيرة",
                "business_size" => "للشركات الكبرى",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/enterprise-ar.svg",
                "price" => "115",
                "days" => "365",
                "lang" => "ar",
                "is_popular"=>true,
                'data' => '{
                "الحد الاقصي للرسائل" : "لا محدود",
                 "الحد الأقصى للاتصال" : "لا محدود",
                 "الحد الأقصى للأجهزة" :"لا محدود",
                "الحد الأقصى للنماذج" : "لا محدود",
                "الحد الأقصى للتطبيقات" : "لا محدود",
                "Chatbot":"true",
                "رسائل جماعية":"true",
                "رسائل مجدولة":"true",
                "مدخل الى قائمة الدردشة":"true",
                "مدخل الى قائمة المجموعة":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [

                "title" => "أساسي ",
                "business_size" => "للأفراد",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/basic-ar.svg",
                "price" => "115",
                "days" => "365",
                "lang" => "ar",
                "is_popular"=>false,
                'data' => '{
                "الحد الاقصي للرسائل" : "10.000",
                "الحد الأقصى للاتصال" :"8.000",
                 "الحد الأقصى للأجهزة" :"2",
                "الحد الأقصى للنماذج" : "1",
                "الحد الأقصى للتطبيقات" : "0",
                "Chatbot":"false",
                "رسائل جماعية":"true",
                "رسائل مجدولة":"false",
                "مدخل الى قائمة الدردشة":"true",
                "مدخل الى قائمة المجموعة":"true"
                }',

                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],
            // monthely plans


            [
                "title" => "Pro",
                "business_size" => "For startups",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/pro-en.svg",
                "price" => "35",
                "days" => "30",
                "lang" => "en",
                "is_popular"=>false,
                'data' => '{
                 "Messages limit" : "unlimited",
                 "Contact limit" : "unlimited",
                 "Device limit" :"5",
                "Template limit" : "unlimited",
                "Apps limit" : "unlimited",
                "Chatbot":"true",
                "Bulk message":"true",
                "Schedule message":"true",
                "Access chat list":"true",
                "Access group list":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],
            [
                "title" => "Enterprise",
                "business_size" => "For big companies",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/enterprise-en.svg",
                "price" => "45",
                "days" => "30",
                "lang" => "en",
                "is_popular"=>true,
                'data' => '{
                 "Messages limit" : "unlimited",
                 "Contact limit" : "unlimited",
                 "Device limit" :"unlimited",
                "Template limit" : "unlimited",
                "Apps limit" : "unlimited",
                "Chatbot":"true",
                "Bulk message":"true",
                "Schedule message":"true",
                "Access chat list":"true",
                "Access group list":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [
                "title" => "Basic",
                "business_size" => "For individuals",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/basic-en.svg",
                "price" => "55",
                "days" => "30",
                "lang" => "en",
                "is_popular"=>false,
                'data' => '{
                 "Messages limit" : "10,000",
                 "Contact limit" : "8,000",
                 "Device limit" :"2",
                "Template limit" : "1",
                "Apps limit" : "0",
                "Chatbot":"false",
                "Bulk message":"true",
                "Schedule message":"false",
                "Access chat list":"true",
                "Access group list":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [
                "title" => "محترف",
                "business_size" => "للشركات الناشئة",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/pro-ar.svg",
                "price" => "35",
                "days" => "30",
                "lang" => "ar",
                "is_popular"=>false,
                'data' => '{
                "الحد الاقصي للرسائل" : "لا محدود",
                 "الحد الأقصى للاتصال" : "لا محدود",
                 "الحد الأقصى للأجهزة" :"5",
                "الحد الأقصى للنماذج" : "لا محدود",
                "الحد الأقصى للتطبيقات" : "لا محدود",
                "Chatbot":"true",
                "رسائل جماعية":"true",
                "رسائل مجدولة":"true",
                "مدخل الى قائمة الدردشة":"true",
                "مدخل الى قائمة المجموعة":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [
                "title" => "المؤسسات الكبيرة",
                "business_size" => "للشركات الكبرى",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/enterprise-ar.svg",
                "price" => "45",
                "days" => "30",
                "lang" => "ar",
                "is_popular"=>true,
                'data' => '{
                "الحد الاقصي للرسائل" : "لا محدود",
                 "الحد الأقصى للاتصال" : "لا محدود",
                 "الحد الأقصى للأجهزة" :"لا محدود",
                "الحد الأقصى للنماذج" : "لا محدود",
                "الحد الأقصى للتطبيقات" : "لا محدود",
                "Chatbot":"true",
                "رسائل جماعية":"true",
                "رسائل مجدولة":"true",
                "مدخل الى قائمة الدردشة":"true",
                "مدخل الى قائمة المجموعة":"true"
                }',
                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ],

            [

                "title" => "أساسي ",
                "business_size" => "للأفراد",
                "description" => "Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. ",
                "icon" => "uploads/plans/basic-ar.svg",
                "price" => "55",
                "days" => "30",
                "lang" => "ar",
                "is_popular"=>false,
                'data' => '{
                "الحد الاقصي للرسائل" : "10.000",
                "الحد الأقصى للاتصال" :"8.000",
                 "الحد الأقصى للأجهزة" :"2",
                "الحد الأقصى للنماذج" : "1",
                "الحد الأقصى للتطبيقات" : "0",
                "Chatbot":"false",
                "رسائل جماعية":"true",
                "رسائل مجدولة":"false",
                "مدخل الى قائمة الدردشة":"true",
                "مدخل الى قائمة المجموعة":"true"
                }',

                'iconname' => 'fas fa-star',
                'is_featured' => '1',
                'is_recommended' => '0',
                "labelcolor" => "price-color-1",
                "is_trial" => 0,
                "status" => "1",
                "trial_days" => "1",

            ]

        ];

        Plan::insert($plans);

    }
}

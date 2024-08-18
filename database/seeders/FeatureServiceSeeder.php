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
                    "lang"=>"en" ,
                    "photo" => "uploads/bulk-msg/1.svg",
                    "description" =>"Organize and classify messages and create groups."
                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/bulk-msg/2.svg",
                    "description" =>"Send various types of media, including files, images, and videos."
                ],
                [   "lang"=>"en" ,
                    "photo" => "uploads/bulk-msg/3.svg",
                    "description" => "Target customers with multiple messages without keeping mobile numbers."
                ],
                [   "lang"=>"en" ,
                    "photo" => "uploads/bulk-msg/4.svg",
                    "description" =>"Send variable messages, appointments, and reminders."
                ],
                [   "lang"=>"en" ,
                    "photo" => "uploads/bulk-msg/5.svg",
                    "description" =>  "Schedule messages over the web."
                ],
            ],
            "رسالة جماعية" => [
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/bulk-msg/1.svg",
                    "description" =>" .تنظيم وتصنيف الرسائل وانشاء مجموعات  "
                ],
                [   "lang"=>"ar" ,
                    "photo" => "uploads/bulk-msg/2.svg",
                    "description" =>".ارسال جميع أنواع المستندات والتي تتضمن  الملفات والصور والفيديو"
                ],
                [   "lang"=>"ar" ,
                    "photo" => "uploads/bulk-msg/3.svg",
                    "description" => ".استهداف العملاء برسائل متعددة دون حفظ الأرقام    "
                ],
                [   "lang"=>"ar" ,
                    "photo" => "uploads/bulk-msg/4.svg",
                    "description" =>"ارسال رسائل متغيرة، وجدولة مواعيد وتذكيرات."
                ],
                [   "lang"=>"ar" ,
                    "photo" => "uploads/bulk-msg/5.svg",
                    "description" =>  "مجدولة الرسائل عبر الموقع."
                ],
            ],

            "Template messaging" => [
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/temp-msg/1.svg",
                    "description" => "Time-Saving."
                ],
                [   
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/temp-msg/2.svg",
                    "description" => "Controlled Communication."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/temp-msg/3.svg",
                    "description" => "Quick Responses."

                ],
                [   
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/temp-msg/4.svg",
                    "description" => "Error Reduction."

                ],

                [  
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/temp-msg/5.svg",
                    "description" => "Feedback Mechanism."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/temp-msg/6.svg",
                    "description" => "Integration with CRM Systems."

                ],
            ],
            "قالب الرسائل " => [
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/temp-msg/1.svg",
                    "description" => "   توفير الوقت."
                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/temp-msg/2.svg",
                    "description" => "التواصل المحكم. "

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/temp-msg/3.svg",
                    "description" => "الردود السريعة."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/temp-msg/4.svg",
                    "description" =>"تقليل الأخطاء."

                ],

                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/temp-msg/5.svg",
                    "description" => "آلية تقييم الآداء."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/temp-msg/6.svg",
                    "description" => "التكامل مع أنظمة CRM."

                ],
            ],
            "Schedule message" => [
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/1.svg",
                    "description" => "Birthdays and Anniversaries reminder."
                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/2.svg",
                    "description" => "Planning Ahead."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/3.svg",
                    "description" => "Time Zone Management."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/4.svg",
                    "description" => "Quick Responses."

                ],

                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/5.svg",
                    "description" => "Consistent Communication."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/6.svg",
                    "description" => "Automated Marketing Campaigns."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/7.svg",
                    "description" => "Welcome and Onboarding Messages."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/8.svg",
                    "description" => "Customer Follow-ups."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/sced-msg/9.svg",
                    "description" => "Event Invitations."

                ],
            
            ],
            "جدولة الرسالة" => [
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/1.svg",
                    "description" => "رسائل تذكير للأعياد الميلاد و الذكرى السنوية.   "
                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/2.svg",
                    "description" => "      التخطيط المسبق.  "
                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/3.svg",
                    "description" =>  "إدارة الوقت.  "

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/4.svg",
                    "description" => "    الرد السريع. "

                ],

                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/5.svg",
                    "description" => "التواصل المستمر."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/6.svg",
                    "description" => "حملات التسويق الالي."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/7.svg",
                    "description" => "رسائل ترحيب."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/8.svg",
                    "description" => "متابعة العملاء."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/sced-msg/9.svg",
                    "description" => "دعوة لحضور الفعاليات."

                ],
            
            ],

            "Auto Responder (BOT)" => [
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/auto-responder/1.svg",
                    "description" => "Immediate Responses."
                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/auto-responder/2.svg",
                    "description" => "Handle Multiple Conversations."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/auto-responder/3.svg",
                    "description" => "Reduce Operational Costs."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/auto-responder/4.svg",
                    "description" => "Automate Repetitive Tasks."

                ],

                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/auto-responder/5.svg",
                    "description" => "personalize interactions making customers feel valued and understood.."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/auto-responder/6.svg",
                    "description" => "24 Hr Clock Support."
                ],
            ],

            "المستجيب التلقائي (BOT)" => [
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/auto-responder/1.svg",
                    "description" => "الاستجابات الفورية."
                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/auto-responder/2.svg",
                    "description" => "التعامل مع المحادثات المتعددة."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/auto-responder/3.svg",
                    "description" => "تقليل تكاليف التشغيل."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/auto-responder/4.svg",
                    "description" => "الية المهام المتكررة."

                ],

                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/auto-responder/5.svg",
                    "description" => "التفاعل الشخصي يجعل العميل يشعر بالتقدير والفهم."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/auto-responder/6.svg",
                    "description" => "دعم على مدار 24 ساعة."
                ],
            ],

            "RESET API for App" => [
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/reset-api/1.svg",
                    "description" => "Smart chatbot."
                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/reset-api/2.svg",
                    "description" => "Reminders and appointments."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/reset-api/3.svg",
                    "description" => "Marketing and advertising messages."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/reset-api/4.svg",
                    "description" => "OTP Verification code messages."

                ],

                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/reset-api/5.svg",
                    "description" => "Receivable and payment letters."

                ],
                [
                    "lang"=>"en" ,
                    "photo" => "uploads/featureServices/reset-api/6.svg",
                    "description" => "Automate messages and alerts."
                ],
            ],

            "للتطبيقات (API) إعادة تعيين" => [
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/reset-api/1.svg",
                    "description" => " الرد الآلي Chatbot."
                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/reset-api/2.svg",
                    "description" => "المواعيد والاشعارات."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/reset-api/3.svg",
                    "description" => " رسائل تسويقية واعلانية."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/reset-api/4.svg",
                    "description" => "رسائل رمز التحقق OTP."

                ],

                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/reset-api/5.svg",
                    "description" => "خطاب المدفوعات المستحقة."

                ],
                [
                    "lang"=>"ar" ,
                    "photo" => "uploads/featureServices/reset-api/6.svg",
                    "description" => "الرسائل والتنبيهات التلقائية."
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

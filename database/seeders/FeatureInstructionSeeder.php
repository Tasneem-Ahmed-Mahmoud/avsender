<?php

namespace Database\Seeders;

use App\Models\FeatureInstruction;
use App\Models\Post;
use App\Traits\Slug;
use Illuminate\Database\Seeder;

class FeatureInstructionSeeder extends Seeder
{
    use Slug;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $FeatureInstructions = [

            // bulk messages en
            "Bulk message" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/1.svg",
                    "instruction" => "Click on “ Send bulk message “ on side bar , and click on button “ send bulk message “.",

                ],
                ["lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/2.svg",
                    "instruction" => "You can add record , contact list , message log or import contact from CSV.",
                ],
                ["lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/3.svg",
                    "instruction" => " You can also click on button “ send bulk message with templet  “.",
                ],
                ["lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/4.svg",
                    "instruction" => "Here you can select from yor templets , and select device number and the group you want to send the messages to them .",
                ],
            ],
            //    bulk messages ar
            "رسالة جماعية" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/1.svg",
                    "instruction" => '  "اضغط على "ارسل رسالة جماعية" في القائمة الجانبية، ثم اضغط على زر "ارسل رسالة جماعية . ',

                ],
                ["lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/2.svg",
                    "instruction" => '   يمكنك ايضاً الضغط على الزر "إرسال رسالة جماعية باستخدام النماذج.',
                ],
                ["lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/3.svg",
                    "instruction" => ' هنا يمكنك الاختيار من النماذج، واختيار رقم الجهاز والمجموعة التي تريد ارسال الرسائل لهم.',
                ],
                ["lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/4.svg",
                    "instruction" => '.هنا يمكنك الاختيار من بين القوالب واختيار رقم الجهاز والمجموعة التي تريد إرسال الرسائل إليهم',
                ],
            ],
            // template messages en
            "Template messaging" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/1.svg",
                    "instruction" => "Click on “My Templates “ on side bar , then click on button “ create template ”.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/2.svg",
                    "instruction" => " Choose type of your template, if you choose “ plain text ” , you can only enter text for your message.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/3.svg",
                    "instruction" => " You can also choose “ text with media “ to add file and a caption for it to be sent with the chosen file in the templet message.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/4.svg",
                    "instruction" => "4- You can also choose “ message with button “ and add template name , add message caption , footer text and text to be shown on the button.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/5.svg",
                    "instruction" => "You can also choose “List message “ and add template name , templet title ( header of the message ) , message body and the text to be shown on the footer of the message.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/6.svg",
                    "instruction" => "You can also choose “ send location “ to send a location with the template message by adding longitude and latitude Coordinates on the shown fields.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/7.svg",
                    "instruction" => " Each templet message have 3 action that you can edit templet message , view it or remove it.",
                ],

            ],

            // template messaging ar

            "قالب الرسائل" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/1.svg",
                    "instruction" => '"اضغط على "النماذج الخاصة بي" في القائمة الجانبية، ثم اضغط على زر "انشاء نموذج". ',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/2.svg",
                    "instruction" => '	اختر نوع النموذج الخاص بك، اذا اخترت "نص عادي"، يمكنك فقط إدخال نص لرسالتك.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/3.svg",
                    "instruction" => '	يمكنك ايضاً اختيار "نص مع  وسائل المحتوى" لإضافة ملف وتعليق ليتم إرساله  مع الملف المختار في رسائل النماذج.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/4.svg",
                    "instruction" => 'يمكنك ايضاً اختيار "رسالة بالزر" وإضافة تسمية توضيحية للرسالة ونص اسفل والنص الذي سيتم عرضه على الزر.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/5.svg",
                    "instruction" => '	يمكنك ايضاً اختيار "قائمة الرسائل" واضافة اسم وعنوان للنموذج (رأس النص) ونص الرسالة والنص الذي سيظهر في اسفل النص.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/6.svg",
                    "instruction" => '	يمكنك أيضًا اختيار خيار "إرسال الموقع" لإرسال الموقع مع رسالة النموذج من خلال إدخال إحداثيات خطوط الطول والعرض في الحقول المتاحة.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/7.svg",
                    "instruction" => 'تحتوي كل رسالة من النماذج على ٣ إجراءات يمكنك من خلالها تعديل قالب الرسائل او مشاهدتها او ازالتها.',
                ],
            ],

            // scedule messages en
            "Schedule message" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/1.svg",
                    "instruction" => "Click on “ scheduled message“ on side bar , and click on button “ create schedule “.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/2.svg",
                    "instruction" => "You can enter the name of the schedule message , device number , receiver group , date and time of the message , your time zone , message type and enter the message body .",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/3.svg",
                    "instruction" => "You can view the log of each message to know the name of the receivers , their device number and the sent date and time of each messages .",
                ],

            ],
            // scedule messages ar
            "جدولة الرسالة" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/sced-msg/1.svg",
                    "instruction" => 'اضغط على "رسالة مجدولة"  في القائمة الجانبية، ثم اضغط على "انشاء جدول".',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/2.svg",
                    "instruction" => 'يمكنك تحديد اسم الرسالة المجدولة ورقم الجهاز ومجموعة المستلمين، بالإضافة إلى تاريخ ووقت إرسال الرسالة، والمنطقة الزمنية، ونوع الرسالة، وإدخال نص الرسالة.',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/3.svg",
                    "instruction" => '	يمكنك مراجعة سجل كل رسالة للاطلاع على أسماء المستلمين وأرقام أجهزتهم، بالإضافة إلى تاريخ ووقت إرسال كل رسالة.',
                ],

            ],

            //  Auto Responder service en
            "Auto Responder (BOT)" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/auto-responder/1.svg",
                    "instruction" => '1- Click on “chatbot (auto reply) “ on side bar.',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/auto-responder/2.svg",
                    "instruction" => "Click on “ create reply “ button , the popup will appear and you can enter your message , select your device , choose the reply type (ex : message ) , keyword match type and write the reply you want to appear to your customer.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/auto-responder/3.svg",
                    "instruction" => "You can also edit and remove the reply of your already existing replies.",
                ],

            ],

            //  Auto Responder service ar
            "المستجيب التلقائي (BOT)" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/auto-responder/1.svg",
                    "instruction" => ' اضغط على “chatbot (الرد التلقائي)” في الشريط الجانبي.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/auto-responder/2.svg",
                    "instruction" => 'اضغط على زر "إنشاء رد"، ستظهر النافذة المنبثقة ويمكنك إدخال رسالتك واختيار جهازك واختيار نوع الرد (مثال: رسالة) ونوع مطابقة الكلمة الرئيسية وكتابة الرد الذي تريد ظهوره لعميلك.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/auto-responder/3.svg",
                    "instruction" => "يمكنك أيضًا تعديل وإزالة الرد على ردودك الموجودة بالفعل.",
                ],

            ],

            //  RESET API service

            //   en
            "RESET API for App" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/1.svg",
                    "instruction" => 'Click on “ My apps “ on side bar.',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/2.svg",
                    "instruction" => "Click on “ Create app “ button , you can select number , name of the app and the website link.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/3.svg",
                    "instruction" => " Click on “ Integration “ appear on the card of the app.",
                ],
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/4.svg",
                    "instruction" => " You can choose 4 f the programming languages available ( cUrl- Php - Node Js. - Python ) and share it with your client.",
                ],

            ],

            //  RESET API service  ar
            "للتطبيقات (API) إعادة تعيين" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/1.svg",
                    "instruction" => 'اضغط على "تطبيقاتي" في القائمة الجانبية.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/2.svg",
                    "instruction" => ' اضغط على زر " إنشاء تطبيق "، يمكنك تحديد الرقم واسم التطبيق ورابط الموقع.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/3.svg",
                    "instruction" => 'الضغط على " التكامل " التي تظهر على بطاقة التطبيق.',
                ],
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/4.svg",
                    "instruction" => ' يمكنك الاستخدام لغة ٤ لغات من البرمجة المتاحة (cUrl- Php - Node Js. – Python) ومشاركتها مع عميلك.',
                ],

            ],

            "bulk message" => [
                ["lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/2.svg",
                    "instruction" => "You can add record , contact list , message log or import contact from CSV.",
                ],
                ["lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/3.svg",
                    "instruction" => " You can also click on button “ send bulk message with templet  “.",
                ],
                ["lang" => "en",
                    "photo" => "uploads/featureInstructions/bulk-msg/4.svg",
                    "instruction" => "Here you can select from yor templets , and select device number and the group you want to send the messages to them .",
                ],
            ],
            //    bulk messages ar
            "الرسائل الجماعية" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/1.svg",
                    "instruction" => '  "اضغط على "ارسل رسالة جماعية" في القائمة الجانبية، ثم اضغط على زر "ارسل رسالة جماعية . ',

                ],
                ["lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/2.svg",
                    "instruction" => '   يمكنك ايضاً الضغط على الزر "إرسال رسالة جماعية باستخدام النماذج.',
                ],
                ["lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/3.svg",
                    "instruction" => ' هنا يمكنك الاختيار من النماذج، واختيار رقم الجهاز والمجموعة التي تريد ارسال الرسائل لهم.',
                ],
                ["lang" => "ar",
                    "photo" => "uploads/featureInstructions/bulk-msg/4.svg",
                    "instruction" => '.هنا يمكنك الاختيار من بين القوالب واختيار رقم الجهاز والمجموعة التي تريد إرسال الرسائل إليهم',
                ],
            ],
            // template messages en
            "Template messaging" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/1.svg",
                    "instruction" => "Click on “My Templates “ on side bar , then click on button “ create template ”.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/2.svg",
                    "instruction" => " Choose type of your template, if you choose “ plain text ” , you can only enter text for your message.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/3.svg",
                    "instruction" => " You can also choose “ text with media “ to add file and a caption for it to be sent with the chosen file in the templet message.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/4.svg",
                    "instruction" => "4- You can also choose “ message with button “ and add template name , add message caption , footer text and text to be shown on the button.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/5.svg",
                    "instruction" => "You can also choose “List message “ and add template name , templet title ( header of the message ) , message body and the text to be shown on the footer of the message.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/6.svg",
                    "instruction" => "You can also choose “ send location “ to send a location with the template message by adding longitude and latitude Coordinates on the shown fields.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/temp-msg/7.svg",
                    "instruction" => " Each templet message have 3 action that you can edit templet message , view it or remove it.",
                ],

            ],

            // template messaging ar

            "مراسلة النماذج" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/1.svg",
                    "instruction" => '"اضغط على "النماذج الخاصة بي" في القائمة الجانبية، ثم اضغط على زر "انشاء نموذج". ',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/2.svg",
                    "instruction" => '	اختر نوع النموذج الخاص بك، اذا اخترت "نص عادي"، يمكنك فقط إدخال نص لرسالتك.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/3.svg",
                    "instruction" => '	يمكنك ايضاً اختيار "نص مع  وسائل المحتوى" لإضافة ملف وتعليق ليتم إرساله  مع الملف المختار في رسائل النماذج.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/4.svg",
                    "instruction" => 'يمكنك ايضاً اختيار "رسالة بالزر" وإضافة تسمية توضيحية للرسالة ونص اسفل والنص الذي سيتم عرضه على الزر.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/5.svg",
                    "instruction" => '	يمكنك ايضاً اختيار "قائمة الرسائل" واضافة اسم وعنوان للنموذج (رأس النص) ونص الرسالة والنص الذي سيظهر في اسفل النص.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/6.svg",
                    "instruction" => '	يمكنك أيضًا اختيار خيار "إرسال الموقع" لإرسال الموقع مع رسالة النموذج من خلال إدخال إحداثيات خطوط الطول والعرض في الحقول المتاحة.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/temp-msg/7.svg",
                    "instruction" => 'تحتوي كل رسالة من النماذج على ٣ إجراءات يمكنك من خلالها تعديل قالب الرسائل او مشاهدتها او ازالتها.',
                ],
            ],

            // scedule messages en
            "Schedule message" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/1.svg",
                    "instruction" => "Click on “ scheduled message“ on side bar , and click on button “ create schedule “.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/2.svg",
                    "instruction" => "You can enter the name of the schedule message , device number , receiver group , date and time of the message , your time zone , message type and enter the message body .",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/3.svg",
                    "instruction" => "You can view the log of each message to know the name of the receivers , their device number and the sent date and time of each messages .",
                ],

            ],
            // scedule messages ar
            "الرسائل المجدولة" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/sced-msg/1.svg",
                    "instruction" => 'اضغط على "رسالة مجدولة"  في القائمة الجانبية، ثم اضغط على "انشاء جدول".',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/2.svg",
                    "instruction" => 'يمكنك تحديد اسم الرسالة المجدولة ورقم الجهاز ومجموعة المستلمين، بالإضافة إلى تاريخ ووقت إرسال الرسالة، والمنطقة الزمنية، ونوع الرسالة، وإدخال نص الرسالة.',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/sced-msg/3.svg",
                    "instruction" => '	يمكنك مراجعة سجل كل رسالة للاطلاع على أسماء المستلمين وأرقام أجهزتهم، بالإضافة إلى تاريخ ووقت إرسال كل رسالة.',
                ],

            ],

            //  Auto Responder service en
            "Auto Responder (BOT)" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/auto-responder/1.svg",
                    "instruction" => '1- Click on “chatbot (auto reply) “ on side bar.',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/auto-responder/2.svg",
                    "instruction" => "Click on “ create reply “ button , the popup will appear and you can enter your message , select your device , choose the reply type (ex : message ) , keyword match type and write the reply you want to appear to your customer.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/auto-responder/3.svg",
                    "instruction" => "You can also edit and remove the reply of your already existing replies.",
                ],

            ],

            //  Auto Responder service ar
            "الرد الآلي (Chat bot)" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/auto-responder/1.svg",
                    "instruction" => ' اضغط على “chatbot (الرد التلقائي)” في الشريط الجانبي.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/auto-responder/2.svg",
                    "instruction" => 'اضغط على زر "إنشاء رد"، ستظهر النافذة المنبثقة ويمكنك إدخال رسالتك واختيار جهازك واختيار نوع الرد (مثال: رسالة) ونوع مطابقة الكلمة الرئيسية وكتابة الرد الذي تريد ظهوره لعميلك.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/auto-responder/3.svg",
                    "instruction" => "يمكنك أيضًا تعديل وإزالة الرد على ردودك الموجودة بالفعل.",
                ],

            ],

            //  RESET API service

            //   en
            "RESET API for App" => [
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/1.svg",
                    "instruction" => 'Click on “ My apps “ on side bar.',
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/2.svg",
                    "instruction" => "Click on “ Create app “ button , you can select number , name of the app and the website link.",
                ],

                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/3.svg",
                    "instruction" => " Click on “ Integration “ appear on the card of the app.",
                ],
                [
                    "lang" => "en",
                    "photo" => "uploads/featureInstructions/reset-api/4.svg",
                    "instruction" => " You can choose 4 f the programming languages available ( cUrl- Php - Node Js. - Python ) and share it with your client.",
                ],

            ],

            //  RESET API service  ar
            "تعيين واجهة برمجة التطبيقات للتطبيق" => [
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/1.svg",
                    "instruction" => 'اضغط على "تطبيقاتي" في القائمة الجانبية.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/2.svg",
                    "instruction" => ' اضغط على زر " إنشاء تطبيق "، يمكنك تحديد الرقم واسم التطبيق ورابط الموقع.',
                ],

                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/3.svg",
                    "instruction" => 'الضغط على " التكامل " التي تظهر على بطاقة التطبيق.',
                ],
                [
                    "lang" => "ar",
                    "photo" => "uploads/featureInstructions/reset-api/4.svg",
                    "instruction" => ' يمكنك الاستخدام لغة ٤ لغات من البرمجة المتاحة (cUrl- Php - Node Js. – Python) ومشاركتها مع عميلك.',
                ],

            ],

        ];

        foreach ($FeatureInstructions as $featureTitle => $instructions) {
            $post_id = Post::where("title", $featureTitle)->first()->id;
            foreach ($instructions as $instruction) {

                FeatureInstruction::create([
                    "photo" => $instruction["photo"],
                    "instruction" => $instruction["instruction"],
                    "post_id" => $post_id,
                    "slug" => $this->slugValue($instruction["instruction"]),
                ]);
            }
        }

    }
}

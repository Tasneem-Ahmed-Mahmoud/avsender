<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\Slug;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    use Slug;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            // First feature
            [
                'title_en' => 'Template messaging',
                'title_ar' => 'مراسلة النماذج',
                'metadata_en' => [
                    ['key' => 'excerpt', 'value' => 'Create multistage campaigns in just a few clicks and plan your campaigns ahead of time with pre-built templates'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Template messaging.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Template messaging.svg'],
                    ['key' => 'main_description', 'value' => 'Create multistage campaigns in just a few clicks and plan your campaigns ahead of time with pre-built templates Adapt customer journeys based on real-time events. such as purchases, browses, or any event unique to your customers Seamlessly integrate with marketing tools and CRMs like Clevertap and Moengage to send tailored campaigns.'],
                ],
                'metadata_ar' => [
                    ['key' => 'excerpt', 'value' => 'أنشئ حملات متعددة ببعض الضغطات فقط وخطط لحملاتك مسبقاً باستخدام نماذج موجودة مسبقاً'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Template messaging-ar.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Template messaging-ar.svg'],
                    ['key' => 'main_description', 'value' => 'أنشئ حملات متعددة المراحل ببعض الضغطات فقط وخطط لحملاتك مسبقاً باستخدام نماذج موجودة مسبقاً وقم بتكييف رحلة العميل ببناء على الاحداث في الوقت الفعلي. كعمليات الشراء او التصفح او أي حدث فريد لعملائك. يمكنك التكامل بسلاسة مع أدوات التسويق إدارة علاقة العميل مثل Clevertap وMoengage لإرسال حملات مخصصة.'],
                ],
            ],
            // Second feature
            [
                'title_en' => 'Bulk message',
                'title_ar' => 'الرسائل الجماعية',
                'metadata_en' => [
                    ['key' => 'excerpt', 'value' => 'AV Bulk messaging is the dissemination of large numbers of messages for delivery to WASender software.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Bulk message.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Bulk message.svg'],
                    ['key' => 'main_description', 'value' => 'It is used by media companies, banks and other enterprises and consumer brands for a variety of purposes including entertainment, enterprise and mobile marketing. A bulk message is a message that is sent from a single WhatsApp Business user to multiple phone numbers at the same time. All receivers of the message will see it coming in as a private message. WhatsApp bulk messaging first was a consumer-only feature, but it’s now also available for businesses. For businesses, this means they can now also use WhatsApp for outbound marketing activities.'],
                ],
                'metadata_ar' => [
                    ['key' => 'excerpt', 'value' => 'رسائل AV الجماعية هو نشر اكبر عدد من الرسائل لتسليمها الى برنامج WASender'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Bulk message-ar.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Bulk message-ar.svg'],
                    ['key' => 'main_description', 'value' => 'الرسائل الجماعية يتم استخدامه من قبل شركات الاعلام والبنوك والمؤسسات اخرى، والعلامات التجارية تستخدمه شركات الإعلام والبنوك وغيرها من المؤسسات والعلامات التجارية المستهلكة لمجموعة متنوعة من الأغراض بما في ذلك الترفيه والتسويق المؤسسة والتسويق عبر الهاتف المحمول. الرسائل الجماعية هي رسالة يتم إرسالها من مستخدم واحد لتطبيق WhatsApp Business إلى أرقام هواتف متعددة في نفس الوقت. سيرى جميع متلقي الرسالة أنها تصل كرسالة خاصة. كانت الرسائل الجماعية في WhatsApp في البداية ميزة مخصصة للمستهلكين فقط، ولكنها الآن متاحة أيضًا للشركات. بالنسبة للشركات، هذا يعني أنها يمكنها الآن أيضًا استخدام WhatsApp لأنشطة التسويق الخارجي.'],
                ],
            ],
            // Third feature
            [
                'title_en' => 'Schedule message',
                'title_ar' => 'الرسائل المجدولة',
                'metadata_en' => [
                    ['key' => 'excerpt', 'value' => 'WhatsApp users can schedule posts on the app to plan and send text, photos or videos. The posts can be scheduled for WhatsApp business or to send wishes on birthdays and festivals.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Schedule message.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Schedule message.svg'],
                    ['key' => 'main_description', 'value' => 'With 2 billion+ active users, WhatsApp is the most widely used communication app. WhatsApp allows you to share text messages, multi-media, location & now money. With all these useful features, you may want to schedule a WhatsApp message for wishing someone their birthday or remind your friends about some events. Or if you’re a business, you may want to schedule payment reminders on the last day of subscriptions or cart reminders to your customers’ WhatsApp. Or, your business needs to automate WhatsApp Business greeting messages to all new customers/subscribers.'],
                ],
                'metadata_ar' => [
                    ['key' => 'excerpt', 'value' => 'يمكن لمستخدمي WhatsApp جدولة المنشورات على التطبيق لتخطيط وإرسال النصوص أو الصور أو مقاطع الفيديو. يمكن جدولة المشاركات واتساب للأعمال أو لإرسال التمنيات في أعياد الميلاد والمهرجانات.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Schedule message-ar.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Schedule message-ar.svg'],
                    ['key' => 'main_description', 'value' => 'مع أكثر من 2 مليار مستخدم نشط، يُعتبر تطبيق واتساب الأكثر استخدامًا على نطاق واسع في مجال الاتصال. يتيح لك التطبيق مشاركة الرسائل النصية والوسائط المتعددة، بالإضافة إلى الموقع والمال. ومع توفر كل هذه الميزات المفيدة، قد ترغب في جدولة رسالة على واتساب لتتمنى لشخص عيد ميلاده، أو لتذكير أصدقائك ببعض الأحداث. وإذا كنت تمثل شركة، فقد تحتاج إلى جدولة تذكيرات بالدفع في اليوم الأخير من الاشتراكات أو تذكيرات بشأن سلة التسوق للعملاء على واتساب. كما يمكن أن يحتاج عملك إلى أتمتة رسائل الترحيب الخاصة بـواتساب للأعمال لجميع العملاء أو المشتركين الجدد.'],
                ],
            ],
            // Fourth feature
            [
                'title_en' => 'Auto Responder / WhatsApp Chatbot',
                'title_ar' => 'الرد الآلي - WhatsApp Chatbot',
                'metadata_en' => [
                    ['key' => 'excerpt', 'value' => 'If you are looking for how to set auto-reply in WhatsApp business and WhatsApp auto-reply message sample, you are at the right place. In this post, we’ll help you understand the nitty-gritty of WhatsApp Chatbots. To start off with, let’s talk about how auto-response for WhatsApp works.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Auto Responder.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Auto Responder.svg'],
                    ['key' => 'main_description', 'value' => "WhatsApp chatbot is an automated system that responds to users' messages automatically based on what it was programmed for. Artificial intelligence technologies may be used in building the bot to respond to users in a better way. We have worked on delivering the content specified by the designer, allowing you to specify specific services to provide to your bot users. It also allows you to message users at any time you want. Our simple WhatsApp API helps you create an interactive bot or an automated responder, without any technical expertise. Simply provide the bot with automated questions and inquiries that suit your business. This smart bot will be your customer’s assistant, providing them with details about your products or services in a lively and direct manner. The best part about the bot is that it can interact with an unlimited number of conversations at the same time and perform the associated operations during the customer interaction."],
                ],
                'metadata_ar' => [
                    ['key' => 'excerpt', 'value' => 'اذا كنت تبحث عن كيفية تعيين الرد الالي في WhatsApp Business ونموذج رسالة الرد الالي على WhatsApp، فأنت في المكان الصحيح. سنساعدك على فهم التفاصيل الدقيقة لWhatsApp Chatbots. لنتحدث اولاً عن كيفية عمل رد الالي لتطبيق WhatsApp.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/Auto Responder-ar.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/Auto Responder-ar.svg'],
                    ['key' => 'main_description', 'value' => "WhatsApp chatbot هو نظام آلي يرد على رسائل المستخدمين تلقائيًا بناءً على ما تمت برمجته من أجله. قد تُستخدم تقنيات الذكاء الاصطناعي في بناء البوت للرد على المستخدمين بطريقة أفضل. لقد عملنا على تقديم المحتوى المحدد من قبل المصمم، مما يتيح لك تحديد خدمات محددة لتقديمها لمستخدمي البوت. كما يتيح لك إرسال الرسائل للمستخدمين في أي وقت تريده. تساعدك واجهة برمجة تطبيقات WhatsApp البسيطة على إنشاء روبوت تفاعلي أو استجابة تلقائية، دون أي خبرة تقنية. كل ما عليك هو تزويد البوت بالأسئلة والاستفسارات الآلية التي تناسب عملك. سيكون هذا البوت الذكي مساعدًا لعملائك، حيث يقدم لهم تفاصيل حول منتجاتك أو خدماتك بطريقة حية ومباشرة. وأفضل جزء في البوت هو أنه يمكنه التفاعل مع عدد غير محدود من المحادثات في نفس الوقت وأداء العمليات المرتبطة بالتفاعل مع العميل."],
                ],
            ],
            // Fifth feature
            [
                'title_en' => 'WhatsApp Automation with API',
                'title_ar' => 'الأتمتة في WhatsApp عبر API',
                'metadata_en' => [
                    ['key' => 'excerpt', 'value' => 'The WhatsApp API is a powerful tool that allows businesses to connect with customers in a seamless and automated manner. Learn how to use it for your business.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/WhatsApp Automation with API.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/WhatsApp Automation with API.svg'],
                    ['key' => 'main_description', 'value' => 'WhatsApp Automation is a revolutionary feature for businesses, allowing them to automate customer engagement with ease. By leveraging the WhatsApp API, businesses can send automated messages, provide real-time customer support, and integrate with other business tools for a cohesive customer experience. Whether you’re confirming appointments, sending shipping updates, or nurturing leads, WhatsApp Automation with API simplifies these processes, making your business more efficient and customer-friendly. Explore how to integrate WhatsApp API into your business workflow and start automating your customer communications today.'],
                ],
                'metadata_ar' => [
                    ['key' => 'excerpt', 'value' => 'API هو أداة قوية تمكن الشركات من التواصل مع العملاء بطريقة سلسة وآلية. تعرف على كيفية استخدامه لعملك.'],
                    ['key' => 'preview', 'value' => '/uploads/features/icons/WhatsApp Automation with API-ar.svg'],
                    ['key' => 'banner', 'value' => '/uploads/features/banners/WhatsApp Automation with API-ar.svg'],
                    ['key' => 'main_description', 'value' => 'الأتمتة في WhatsApp هي ميزة ثورية للشركات، حيث تتيح لهم أتمتة التفاعل مع العملاء بسهولة. من خلال الاستفادة من API لـ WhatsApp، يمكن للشركات إرسال رسائل آلية، وتوفير دعم العملاء في الوقت الفعلي، والتكامل مع أدوات الأعمال الأخرى لتوفير تجربة عملاء متماسكة. سواء كنت تؤكد المواعيد، أو ترسل تحديثات الشحن، أو ترعى العملاء المحتملين، فإن الأتمتة عبر WhatsApp API تبسط هذه العمليات، مما يجعل عملك أكثر كفاءة وملائمة للعملاء. استكشف كيفية دمج API WhatsApp في سير عمل عملك وابدأ في أتمتة اتصالاتك مع العملاء اليوم.'],
                ],
            ],
        ];

        foreach ($features as $feature) {
            // Create the English version
            $feat_en = Post::create([
                'title' => $feature['title_en'],
                'slug' => $this->slugValue($feature['title_en']),
                'type' => 'feature',
                'lang' => 'en',
                'status' => 1,
                'featured' => 1,
            ]);

            foreach ($feature['metadata_en'] as $meta) {
                $feat_en->metadata()->create([
                    'key' => $meta['key'],
                    'value' => $meta['value'],
                ]);
            }

            // Create the Arabic version using the same slug as English
            $feat_ar = Post::create([
                'title' => $feature['title_ar'],
                'slug' => $this->slugValue($feature['title_en']), // Use the English title for the slug
                'type' => 'feature',
                'lang' => 'ar',
                'status' => 1,
                'featured' => 1,
            ]);

            foreach ($feature['metadata_ar'] as $meta) {
                $feat_ar->metadata()->create([
                    'key' => $meta['key'],
                    'value' => $meta['value'],
                ]);
            }
        }
    }
}

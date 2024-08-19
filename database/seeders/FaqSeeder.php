<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\Slug;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    use Slug;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            ['title' => 'Is the site intended for computers or mobile devices ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'The sending service works on any device equipped with an Internet browser'],
            ['title' => 'How long does it take to activate the service ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'The service will be activated immediately after payment.'],
            ['title' => 'Is it possible to send thousands of messages at once ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'It is possible, but you must be careful because sending to numbers with no prior contact or who are not interested in what you send will expose your number to being blocked by WhatsApp, the service for communicating with your customers and you can send them news of your business and offers even if the numbers are large.'],
            ['title' => 'Is it possible to send from more than one WhatsApp number with one subscription ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, you can send from any WhatsApp number you want to send from ,But the sending is done from one number in each sending process...that is, the site is not opened and sent from two different numbers at the same time.'],
            ['title' => 'How can I get services on WhatsApp ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Register on the site via the link '],
            ['title' => 'What are the services in Avsender ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'It is a group of services: Message sending service through the website Autoresponder service (chat bot) API Service'],
            ['title' => 'Is there an explanation of services for developers ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, there is an explanation in many well-known programming languages ​​for the programming process'],
            ['title' => 'How to connect to the API ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'When you subscribe to the service, you will find a complete guide. Through the settings, you can connect the system through your website programmer.'],
            ['title' => 'Is the service verified on Facebook platform ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, the number verification service is through the Facebook platform, and we are considered an intermediary service provider that helps in the linking process.'],
            ['title' => 'Is it required to verify the account on Facebook to use Avsender services ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'No, you can benefit from all avsender services without the need to verify the account on Facebook.'],
            ['title' => 'What languages ​​are supported on the Avsender platform ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'The Avsender platform supports Arabic and English'],
            ['title' => 'Do API messages appear in WhatsApp ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, API messages appear in WhatsApp.'],
            ['title' => 'When subscribing to the comprehensive package, can I send more than 5,000 messages per day ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'The number of messages for all packages is 5000 thousand per day.'],

            ['title' => 'Can the Avsender service be used on WhatsApp ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, you can use the service on WhatsApp and Avsender.'],
            ['title' => "Can the number be saved under the customer's name within the Avsender platform ?", 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, it is possible through the avsender platform.'],

            ['title' => 'What is a sync group ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'These are the numbers found on WhatsApp chats.'],

            ['title' => 'Is it possible to send group messages to the sync group ?', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'key' => 'excerpt', 'value' => 'Yes, you can send group messages after exporting the sync group to an Excel file and then uploading the file to the Avsender platform.'],



        ];

        foreach ($faqs as $faq) {

            DB::beginTransaction();
            try {
                $post = Post::create([
                    'title' => $faq['title'],
                    'type' => $faq['type'],
                    'status' => $faq['status'],
                    'featured' => $faq['featured'],
                    'lang' => $faq['lang'],
                    'slug' => $this->slugValue($faq['title']),
                ]);

                $post->excerpt()->create([

                    'key' => $faq['key'],
                    'value' => $faq['value'],
                ]);

                DB::commit();

            } catch (Exception $exception) {
                DB::rollback();

            }
        }
    }
}

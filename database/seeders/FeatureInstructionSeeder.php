<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\Slug;
use Illuminate\Database\Seeder;
use App\Models\FeatureInstruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureInstructionSeeder extends Seeder
{  
    use Slug;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      

        $FeatureInstructions = [

       [  
        
        "Bulk message" => [   
                 "photo"=>"uploads/bulk-message/Bulk-message-screen1.svg",
                 "instruction"=>"1- Click on “ Send bulk message “ on side bar , and click on button “ send bulk message “.",
                 
            ],
          [
                 "photo"=>"uploads/bulk-message/Bulk-message-screen2.svg",
                 "instruction"=>"2-You can add record , contact list , message log or import contact from CSV.",
            ],
           [
                 "photo"=>"uploads/bulk-message/Bulk-message-screen3.svg",
                 "instruction"=>"3- You can also click on button “ send bulk message with templet  “.",
            ],
            [
                 "photo"=>"uploads/bulk-message/Bulk-message-screen4.svg",
                 "instruction"=>"4-Here you can select from yor templets , and select device number and the group you want to send the messages to them .",
            ]
            ]
    
         
        ];


        foreach ($FeatureInstructions as $featureTitle => $instructions) {
            $post_id = Post::where("title", $featureTitle)->first()->id;
            foreach ($instructions as $instruction) {

                FeatureInstruction::create([
                    "photo" => $instruction["photo"],
                    "instruction" => $instruction["instruction"],
                    "post_id" => $post_id,
                    "slug"=>$this->slugValue($instruction["instruction"]),
                ]);
            }
        }


    }
}

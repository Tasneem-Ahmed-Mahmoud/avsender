<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\FeatureInstruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureInstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $FeatureInstructions = [

       [ "Bulk message" =>     [
                 "photo"=>"",
                 "instruction"=>"1- Click on “ Send bulk message “ on side bar , and click on button “ send bulk message “.",
            ],
          [
                 "photo"=>"",
                 "instruction"=>"2-You can add record , contact list , message log or import contact from CSV.",
            ],
           [
                 "photo"=>"",
                 "instruction"=>"3- You can also click on button “ send bulk message with templet  “.",
            ],
            [
                 "photo"=>"",
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
                ]);
            }
        }


    }
}

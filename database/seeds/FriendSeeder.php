<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_1 = User::findOrFail(1);
        $user_2 = User::findOrFail(2);
        $user_3 = User::findOrFail(3);
        $user_4 = User::findOrFail(4);
        $user_5 = User::findOrFail(5);
        $user_6 = User::findOrFail(6);
        $user_7 = User::findOrFail(7);
        $user_8 = User::findOrFail(8);

        // conditions donnée
        $user_1->friends()->attach([$user_2->id,$user_3->id,$user_4->id,$user_5->id]);
        $user_2->friends()->attach([$user_5->id,$user_6->id,$user_7->id,$user_8->id]);
        $user_7->friends()->attach($user_2->id);
        $user_8->friends()->attach([$user_6->id,$user_7->id]);

        // retour ami
        $user_2->friends()->attach($user_1->id);
        $user_3->friends()->attach($user_1->id);
        $user_4->friends()->attach($user_1->id);
        $user_5->friends()->attach($user_1->id);
        $user_5->friends()->attach($user_2->id);
        $user_6->friends()->attach($user_2->id);
        $user_6->friends()->attach($user_8->id);
        $user_7->friends()->attach($user_8->id);
        $user_8->friends()->attach($user_2->id);
    }
}
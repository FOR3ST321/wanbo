<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Account;
use App\Models\Package;
use App\Models\Beverage;
use App\Models\StoreBranch;
use App\Models\FoodOrder;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* Account and User Section */
        Account::create([
            'is_admin' => true,
            'username' => 'wanbo_admin',
            'password' => bcrypt('password')
        ]);

        Account::create([
            'is_admin' => false,
            'username' => 'wanbo_user',
            'password' => bcrypt('password')
        ]);

        Account::create([
            'is_admin' => false,
            'username' => 'faturrahman',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Guest',
            'email' => 'guest@gmail.com',
            'membership_type' => 'platinum',
            'account_id' => null
        ]);

        User::create([
            'name' => 'Faisal Darmadi',
            'email' => 'faisaldarmadi@gmail.com',
            'membership_type' => 'platinum',
            'account_id' => 2
        ]);

        User::create([
            'name' => 'Syamsul faturrahman',
            'email' => 'faturrahman@gmail.com',
            'membership_type' => 'platinum',
            'account_id' => 3
        ]);

        // User::factory(48)->create();


        /* PACKAGE SECTION */
        Package::create([
            'package_name' => 'Hemat',
            'price_per_hour' => 5000,
            'computer_spec' => 'Intel Core i5-12400f Processor<br>
            8GB DDR4 2666MHz RAM<br>
            Nvidia GTX 1050 GPU<br>
            M.2 NVMe Solid State Drive Storage<br>
            24" 75Hz Display<br>
            Windows 10 Operating System',
            'description' => 'This is the cheapest package we got!<br>
            But being the cheapest package doesn\'t mean that the experience will also be cheap.<br>
            You can do basic task in this package smoothly.',
            'photo_url' => 'http://localhost:8000/frontend/img/package-img/hemat.jpg'
        ]);

        Package::create([
            'package_name' => 'Learning',
            'price_per_hour' => 8000,
            'computer_spec' => 'Intel Core i5-12400f Processor<br>
            8GB DDR4 2666MHz RAM<br>
            Nvidia GTX 1050 GPU<br>
            M.2 NVMe Solid State Drive Storage<br>
            24" 75Hz Display<br>
            Windows 10 Operating System',
            'description' => 'This package is for you student out there!<br>
            This package is enough for your basic learning.<br>
            Webcam and Mic is included for online meeting.',
            'photo_url' => 'http://localhost:8000/frontend/img/package-img/learning.jpg'
        ]);

        Package::create([
            'package_name' => 'Regular',
            'price_per_hour' => 10000,
            'computer_spec' => 'Intel Core i5-12400f Processor<br>
            16GB DDR4 2666MHz RAM<br>
            Nvidia RTX 2060 GPU<br>
            M.2 NVMe Solid State Drive Storage<br>
            24" 144Hz Display<br>
            Windows 10 Operating System',
            'description' => 'This package is for you who wants to do basic computing stuff and light gaming.<br>
            It\'s worth the price for the performance that you can get from this package!',
            'photo_url' => 'http://localhost:8000/frontend/img/package-img/regular.jpg'
        ]);
        Package::create([
            'package_name' => 'Gaming',
            'price_per_hour' => 15000,
            'computer_spec' => 'AMD Ryzen 7 5800x Processor<br>
            16GB DDR4 3200MHz RAM<br>
            Nvidia RTX 3060 GPU<br>
            M.2 NVMe Solid State Drive Storage<br>
            27" 144Hz Display<br>
            Windows 10 Operating System',
            'description' => 'This package is for you gamers out there!<br>
            Play demanding games with ease in this package!
            Included with mic for better voice chat in online games!',
            'photo_url' => 'http://localhost:8000/frontend/img/package-img/gaming.jpg'
        ]);
        Package::create([
            'package_name' => 'Gaming Pro',
            'price_per_hour' => 25000,
            'computer_spec' => 'AMD Ryzen 7 5800x Processor<br>
            32GB DDR4 3600MHz RAM<br>
            Nvidia RTX 3080 GPU<br>
            M.2 NVMe Solid State Drive Storage<br>
            27" 144Hz Display<br>
            Windows 10 Operating System',
            'description' => 'This package is for you hardcore gamers out there!<br>
            Play AAA games with ease in this package!
            Included with mic for better voice chat in online games!',
            'photo_url' => 'http://localhost:8000/frontend/img/package-img/gaming-pro.jpg'
        ]);
        Package::create([
            'package_name' => 'Sultan',
            'price_per_hour' => 50000,
            'computer_spec' => 'AMD Ryzen 9 5950x Processor<br>
            64GB DDR4 3200MHz RAM<br>
            Nvidia RTX 3090 GPU<br>
            M.2 NVMe Solid State Drive Storage<br>
            49" 240Hz Curved Gaming Monitor Display<br>
            Windows 10 Operating System',
            'description' => 'This package is for you who want the best hardware out there!<br>
            Capable to do heavy task with ease!<br>
            Included with camera and mic for streaming or other things!',
            'photo_url' => 'http://localhost:8000/frontend/img/package-img/sultan.jpg'
        ]);
        
        StoreBranch::create([
            'store_name' => 'Wanbo Sentul',
            'address' => 'Ikan Kakap Street, Number 9',
            'account_id' => 1
        ]);

        /* ROOM DATA */

        //package 1 - hemat
        for($i=1;$i<=5;$i++){
            Room::create([
                'room_name' => 'HM'.$i,
                'description' => 'Room no '.$i.' for Hemat Package',
                'package_id' => 1,
                'store_branch_id' => 1
            ]);
        }

        //package 2 - learning
        for($i=1;$i<=5;$i++){
            Room::create([
                'room_name' => 'LN'.$i,
                'description' => 'Room no '.$i.' for Leraning Package',
                'package_id' => 2,
                'store_branch_id' => 1
            ]);
        }

        //package 3 - regular
        for($i=1;$i<=5;$i++){
            Room::create([
                'room_name' => 'RG'.$i,
                'description' => 'Room no '.$i.' for Regular Package',
                'package_id' => 3,
                'store_branch_id' => 1
            ]);
        }

        //package 4 - gaming
        for($i=1;$i<=10;$i++){
            Room::create([
                'room_name' => 'G'.$i,
                'description' => 'Room no '.$i.' for Gaming Package',
                'package_id' => 4,
                'store_branch_id' => 1
            ]);
        }

        //package 5 - gaming pro
        for($i=1;$i<=5;$i++){
            Room::create([
                'room_name' => 'GP'.$i,
                'description' => 'Room no '.$i.' for Gaming Pro Package',
                'package_id' => 5,
                'store_branch_id' => 1
            ]);
        }

        //package 6 - sultan
        for($i=1;$i<=3;$i++){
            Room::create([
                'room_name' => 'SUL'.$i,
                'description' => 'Room no '.$i.' for Sultan Package',
                'package_id' => 6,
                'store_branch_id' => 1
            ]);
        }

        /* Beverage Data */
        Beverage::create([
            'beverage_name' => 'Tubruk Hard Coffee',
            'type' => 'drink',
            'price' => 21000,
            'description' => 'Traditional Tubruk coffee from Indonesia'
        ]);
        
        Beverage::create([
            'beverage_name' => 'Dark Choco Hot',
            'type' => 'drink',
            'price' => 18000,
            'description' => 'Hot chocolate plus milk, perfect for your gaming session.'
        ]);

        Beverage::create([
            'beverage_name' => 'Thai Tea',
            'type' => 'drink',
            'price' => 18000,
            'description' => 'Original thai tea wih pearl.'
        ]);

        Beverage::create([
            'beverage_name' => 'Bandrek',
            'type' => 'drink',
            'price' => 8500,
            'description' => 'Hot Bandrek with extra ginger.'
        ]);

        Beverage::create([
            'beverage_name' => 'Fried Rice',
            'type' => 'food',
            'price' => 25000,
            'description' => 'Fried rice with lot of topping, include chicken, sausage, beef and pete.'
        ]);

        Beverage::create([
            'beverage_name' => 'Grilled Rice',
            'type' => 'food',
            'price' => 28000,
            'description' => 'Fish fillet coated with rice and banana leaf, and grilled.'
        ]);

        Beverage::create([
            'beverage_name' => 'Indomie All Variants',
            'type' => 'food',
            'price' => 5000,
            'description' => 'Having warnet session without indomie?? Impossible!'
        ]);

        Beverage::create([
            'beverage_name' => 'Toast',
            'type' => 'snack',
            'price' => 12000,
            'description' => 'Toast with a lot of topping will make you satisfied.<br>*You can order toast with pineapple plus mayo here'
        ]);

        Beverage::create([
            'beverage_name' => 'Crispy Mushroom',
            'type' => 'snack',
            'price' => 5000,
            'description' => 'Crispy Mushrooms Topped With cheese, nori, and garlic powder.'
        ]);

        Beverage::create([
            'beverage_name' => 'Cola 1.5L + Potato Chips',
            'type' => 'other',
            'price' => 25000,
            'description' => 'You can be umaru-chan if you buy this package.'
        ]);

        Beverage::create([
            'beverage_name' => 'Bat soup',
            'type' => 'other',
            'price' => 75000,
            'description' => 'Special menu from [REDACTED] kitchen market!'
        ]);

        Order::create([
            'room_id'=>1,
            'user_id'=>1,
            'status'=>'canceled',
            'unique_id' => null,
            'total_price'=>10000,
            'total_time'=>120,
            'schedule'=>'2022-01-06 11:15:00',
            'checkin'=>null,
            'checkout'=>null
        ]);

        Order::create([
            'room_id'=>2,
            'user_id'=>2,
            'status'=>'done',
            'unique_id' => null,
            'total_price'=>15000,
            'total_time'=>180,
            'schedule'=>'2022-01-06 12:00:00',
            'checkin'=>'2022-01-06 12:01:00',
            'checkout'=>'2022-01-06 15:00:00'
        ]);

        Order::create([
            'room_id'=>7,
            'user_id'=>1,
            'status'=>'done',
            'unique_id' => null,
            'total_price'=>24000,
            'total_time'=>180,
            'schedule'=>'2022-01-06 17:00:00',
            'checkin'=>'2022-01-06 17:00:35',
            'checkout'=>'2022-01-06 20:00:00'
        ]);

        Order::create([
            'room_id'=>13,
            'user_id'=>2,
            'status'=>'done',
            'unique_id' => null,
            'total_price'=>10000,
            'total_time'=>60,
            'schedule'=>'2022-01-14 10:00:00',
            'checkin'=>'2022-01-14 10:00:01',
            'checkout'=>'2022-01-14 10:59:00'
        ]);

        Order::create([
            'room_id'=>24,
            'user_id'=>1,
            'status'=>'done',
            'unique_id' => null,
            'total_price'=>75000,
            'total_time'=>300,
            'schedule'=>'2022-01-16 10:00:00',
            'checkin'=>'2022-01-16 10:00:01',
            'checkout'=>'2022-01-16 14:59:00'
        ]);

        Order::create([
            'room_id'=>31,
            'user_id'=>1,
            'status'=>'done',
            'unique_id' => null,
            'total_price'=>100000,
            'total_time'=>120,
            'schedule'=>'2022-01-16 20:00:00',
            'checkin'=>'2022-01-16 20:00:00',
            'checkout'=>'2022-01-16 21:59:45'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>2,
            'quantity'=>3,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>3,
            'beverage_id'=>4,
            'quantity'=>1,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>3,
            'beverage_id'=>5,
            'quantity'=>2,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>3,
            'beverage_id'=>7,
            'quantity'=>3,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>4,
            'beverage_id'=>1,
            'quantity'=>20,
            'food_status'=>'canceled'
        ]);

        FoodOrder::create([
            'order_id'=>4,
            'beverage_id'=>8,
            'quantity'=>2,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>5,
            'beverage_id'=>3,
            'quantity'=>1,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>2,
            'quantity'=>1,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>6,
            'beverage_id'=>11,
            'quantity'=>1,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>3,
            'beverage_id'=>10,
            'quantity'=>1,
            'food_status'=>'success'
        ]);

        FoodOrder::create([
            'order_id'=>2,
            'beverage_id'=>9,
            'quantity'=>4,
            'food_status'=>'canceled'
        ]);
    }
}

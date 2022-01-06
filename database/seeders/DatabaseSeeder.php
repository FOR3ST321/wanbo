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

        User::create([
            'name' => 'Wanbo',
            'email' => 'wanbo@gmail.com',
            'membership_type' => 'platinum',
            'account_id' => 2
        ]);

        // User::factory(50)->create();

        Package::create([
            'package_name' => 'Package1',
            'price_per_hour' => 5000,
            'computer_spec' => 'Intel Core i5-1135G7 Processor - 8GB DDR4 2666 RAM - 250 GB M.2 NVMe Solid State Drive - 15.6″ Wide Screen Display - Microsoft Windows 10',
            'description' => 'this is the package1',
            'photo_url' => 'https://media.gettyimages.com/photos/streaming-live-esport-event-on-computer-at-home-picture-id1190641416?k=20&m=1190641416&s=612x612&w=0&h=GDhOS17zD0Liylkf7j3Xhf7gl96J58id-LV3o5ah4ag='
        ]);

        Package::create([
            'package_name' => 'Package2',
            'price_per_hour' => 10000,
            'computer_spec' => 'Intel Core i5-1135G7 Processor - 8GB DDR4 2666 RAM - 250 GB M.2 NVMe Solid State Drive - 15.6″ Wide Screen Display - Microsoft Windows 10',
            'description' => 'this is the package2',
            'photo_url' => 'https://media.gettyimages.com/photos/classic-computer-classroom-picture-id1145371232?k=20&m=1145371232&s=612x612&w=0&h=pfcK32cfHzfuZNCokUdhiLbpijjQr4OwvXlpegEKV7g='
        ]);

        Package::create([
            'package_name' => 'Package3',
            'price_per_hour' => 12000,
            'computer_spec' => 'Intel Core i5-1135G7 Processor - 8GB DDR4 2666 RAM - 250 GB M.2 NVMe Solid State Drive - 15.6″ Wide Screen Display - Microsoft Windows 10',
            'description' => 'this is the package3',
            'photo_url' => 'https://media.gettyimages.com/photos/gamer-room-picture-id1311350206?k=20&m=1311350206&s=612x612&w=0&h=RJM19owwEk8BcaemUSNB8pjjV4uNDuccjQ67sAaVLKs='
        ]);
        
        StoreBranch::create([
            'store_name' => 'Wanbo Branch',
            'address' => 'Ikan Kakap Street, Number 9',
            'account_id' => 1
        ]);

        Room::create([
            'room_name' => 'Rose',
            'description' => 'go straight, turn right, the farthest room on the left side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);
        
        Room::create([
            'room_name' => 'Orchid',
            'description' => 'go straight, turn right, the second room from the far end on the left side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);
        
        Room::create([
            'room_name' => 'Daisy',
            'description' => 'go straight, turn right, the third room from the far end on the left side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Lily',
            'description' => 'go straight, turn right, second room on the left',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Iris',
            'description' => 'go straight, turn right, first room on the left',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Tulip',
            'description' => 'go straight, turn left, the farthest room on the right side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Sunflower',
            'description' => 'go straight, turn left, the second room from the far end on the right side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Camellia',
            'description' => 'go straight, turn left, the third room from the far end on the right side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Lavender',
            'description' => 'go straight, turn left, second room on the right',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Jasmine',
            'description' => 'go straight, turn left, first room on the right',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Beverage::create([
            'beverage_name' => 'Tubruk Hard Coffee',
            'type' => 'drink',
            'price' => 21000,
            'description' => 'this is a tubruk hard coffee'
        ]);
        
        Beverage::create([
            'beverage_name' => 'Dark Choco Hot',
            'type' => 'drink',
            'price' => 18000,
            'description' => 'this is a dark choco hot'
        ]);

        Beverage::create([
            'beverage_name' => 'Thai Tea',
            'type' => 'drink',
            'price' => 18000,
            'description' => 'this is a thai tea'
        ]);

        Beverage::create([
            'beverage_name' => 'Bandrek',
            'type' => 'drink',
            'price' => 8500,
            'description' => 'this is a bandrek'
        ]);

        Beverage::create([
            'beverage_name' => 'Fried Rice',
            'type' => 'food',
            'price' => 25000,
            'description' => 'this is a fried rice'
        ]);

        Beverage::create([
            'beverage_name' => 'Grilled Rice',
            'type' => 'food',
            'price' => 28000,
            'description' => 'this is a grilled rice'
        ]);

        Beverage::create([
            'beverage_name' => 'Indomie All Variants',
            'type' => 'food',
            'price' => 5000,
            'description' => 'these are indomie all variants'
        ]);

        Beverage::create([
            'beverage_name' => 'Toast',
            'type' => 'snack',
            'price' => 12000,
            'description' => 'this is a toast'
        ]);

        Beverage::create([
            'beverage_name' => 'Crispy Mushroom',
            'type' => 'snack',
            'price' => 4000,
            'description' => 'this is a crispy mushroom'
        ]);

        Beverage::create([
            'beverage_name' => 'Extra Cheese',
            'type' => 'other',
            'price' => 5000,
            'description' => 'this is an extra cheese'
        ]);

        Order::create([
            'room_id'=>1,
            'user_id'=>1,
            'status'=>'pending',
            'total_price'=>50000,
            'schedule'=>'2022-01-04 21:24:33',
            'checkin'=>'2022-01-04 21:24:33',
            'checkout'=>'2022-01-04 21:24:33'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>2,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>5,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>3,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>1,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>9,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>8,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);
    }
}

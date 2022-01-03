<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}

<?php

namespace Database\Seeders;

use App\Models\PaymentMethodDetails;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethodDetails::insert([
            [
                'payment_methods_id' => 1,
                'name' => 'Alfamart',
                'img' => 'Alfamart.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 1,
                'name' => 'Pegadaian',
                'img' => 'Pegadaian.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 1,
                'name' => 'Kantor Pos',
                'img' => 'Kantor Pos.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 1,
                'name' => 'Ramayana, Robinson Mart',
                'img' => 'Ramayana.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 2,
                'name' => 'BNI Internet Banking',
                'img' => 'bni_e-banking.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 2,
                'name' => 'BNI Mobile Banking',
                'img' => 'bni mbanking.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 2,
                'name' => 'BNI ATM',
                'img' => 'bni atm.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 3,
                'name' => 'BRI Internet Banking (Web Version)',
                'img' => 'BRI ebanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 3,
                'name' => 'BRI Internet Banking (Mobile Version)',
                'img' => 'BRI ebanking(mobile).jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 3,
                'name' => 'BRI Mobile Banking',
                'img' => 'BRI mbanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 3,
                'name' => 'BRI ATM',
                'img' => 'ATM BRI.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 3,
                'name' => 'BRI ATM Mini',
                'img' => 'Mini ATM BRI.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 4,
                'name' => 'BCA ATM',
                'img' => 'ATM BCA.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 4,
                'name' => 'Klik BCA',
                'img' => 'Klik BCA.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 4,
                'name' => 'm-BCA (BCA Mobile)',
                'img' => 'm-BCA.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 4,
                'name' => 'm-BCA (STM - SIM Toolkit)',
                'img' => 'm-BCA SIM.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 5,
                'name' => "Livin' by Mandiri (Mobile Version)",
                'img' => 'Mandiri mbanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 5,
                'name' => "Livin' by Mandiri (Web Version)",
                'img' => 'Mandiri ebanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 5,
                'name' => 'Mandiri ATM',
                'img' => 'ATM Mandiri.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 5,
                'name' => 'Mandiri Agen',
                'img' => 'Mandiri Agen.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 5,
                'name' => 'Interbank Transfer (ATM Bersama)',
                'img' => 'ATM Bersama.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 6,
                'name' => 'CIMB Niaga ATM',
                'img' => 'ATM CIMB Niaga.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 6,
                'name' => 'CIMB Clicks',
                'img' => 'CIMB Clicks.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 6,
                'name' => 'Interbank Transfer (ATM Bersama)',
                'img' => 'CIMB ATM Bersama.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 7,
                'name' => 'Sinarmar ATM',
                'img' => 'ATM Sinarmas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 7,
                'name' => 'SimobiPlus Mobile Banking',
                'img' => 'SimobiPlus Mobile Banking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 7,
                'name' => 'i-Bank Sinarmas',
                'img' => 'i-Bank Sinarmas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 8,
                'name' => 'BTN ATM',
                'img' => 'ATM BTN.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 8,
                'name' => 'BTN Internet Banking (Web Version)',
                'img' => 'BTN ebanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 8,
                'name' => 'BTN Internet Banking (Mobile Version)',
                'img' => 'BTN mbanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 8,
                'name' => 'BTN Mobile',
                'img' => 'BTN Mobile.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 9,
                'name' => 'BTPN ATM',
                'img' => 'ATM BTPN.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 9,
                'name' => 'USSD Wow! (User)',
                'img' => 'USSD Wow! (User).jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 9,
                'name' => 'USSD Wow! (Agen)',
                'img' => 'USSD Wow! (Agen).jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 9,
                'name' => 'Jenius',
                'img' => 'Jenius.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 10,
                'name' => 'Dmobile',
                'img' => 'Dmobile.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 10,
                'name' => 'Internet Banking',
                'img' => 'Danamon ebanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 11,
                'name' => 'Permata ATM',
                'img' => 'ATM Permata.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 11,
                'name' => 'Permata Internet Banking',
                'img' => 'Permata ebanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 12,
                'name' => 'Panin ATM',
                'img' => 'ATM Panin.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 12,
                'name' => 'Panin Internet Banking',
                'img' => 'Panin ebanking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 12,
                'name' => 'Mobile Panin',
                'img' => 'Mobile Panin.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 13,
                'name' => 'Maybank2u',
                'img' => 'Maybank2u.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 13,
                'name' => 'Maybank sms+Banking',
                'img' => 'Maybank sms+Banking.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 14,
                'name' => 'Digibank',
                'img' => 'Digibank.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'payment_methods_id' => 15,
                'name' => 'Bank Lain',
                'img' => 'ATM.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}

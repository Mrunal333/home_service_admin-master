<?php
/*
 * File name: MediaTableSeeder.php
 * Last modified: 2021.08.10 at 18:03:35
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('media')->delete();

        DB::table('media')->insert(array(
            array(
                'id' => 3,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 2,
                'collection_name' => 'logo',
                'name' => 'razorpay',
                'file_name' => 'razorpay.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 13026,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"13e62475-6b5f-4812-b484-2b94cc52b715","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 3,
                'created_at' => '2021-05-07 18:03:38',
                'updated_at' => '2021-05-07 18:03:38',
            ),
            array(
                'id' => 5,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 5,
                'collection_name' => 'logo',
                'name' => 'paypal',
                'file_name' => 'paypal.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 15819,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"2b8bd9b8-5c37-4464-a5c7-623496d7655f","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 5,
                'created_at' => '2021-05-07 18:03:49',
                'updated_at' => '2021-05-07 18:03:49',
            ),
            array(
                'id' => 7,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 6,
                'collection_name' => 'logo',
                'name' => 'pay_pickup',
                'file_name' => 'pay_pickup.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 11712,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"5e06e7ca-ac33-413c-9ab0-6fd4e3083cc1","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 7,
                'created_at' => '2021-05-07 18:03:58',
                'updated_at' => '2021-05-07 18:03:58',
            ),
            array(
                'id' => 9,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 7,
                'collection_name' => 'logo',
                'name' => 'stripe-logo',
                'file_name' => 'stripe-logo.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 5436,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"bd448a36-8a5e-4c85-8d6e-c356843429c8","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 9,
                'created_at' => '2021-05-07 18:04:23',
                'updated_at' => '2021-05-07 18:04:23',
            ),
            array(
                'id' => 11,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 8,
                'collection_name' => 'logo',
                'name' => 'paystack',
                'file_name' => 'paystack.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 5436,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"bd448a96-8a5e-4c85-8d6e-c356648429c8","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 11,
                'created_at' => '2021-05-07 18:04:23',
                'updated_at' => '2021-05-07 18:04:23',
            ),
            array(
                'id' => 10,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 9,
                'collection_name' => 'logo',
                'name' => 'flutterwave',
                'file_name' => 'flutterwave.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 5436,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"bd558a96-8a5e-4a85-8d6e-c456648429c8","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 10,
                'created_at' => '2021-05-07 18:04:23',
                'updated_at' => '2021-05-07 18:04:23',
            ),
            array(
                'id' => 12,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 10,
                'collection_name' => 'logo',
                'name' => 'fpx',
                'file_name' => 'fpx.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 5436,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"bd558a84-8a5e-4b85-8d6f-c456648429c8","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 12,
                'created_at' => '2021-05-07 18:04:23',
                'updated_at' => '2021-05-07 18:04:23',
            ),
            array(
                'id' => 13,
                'model_type' => 'App\\Models\\PaymentMethod',
                'model_id' => 11,
                'collection_name' => 'logo',
                'name' => 'wallet',
                'file_name' => 'wallet.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'size' => 5436,
                'manipulations' => '[]',
                'custom_properties' => '{"uuid":"bd558a84-8a5e-4b85-8d6f-c456648429c8","user_id":1,"generated_conversions":{"thumb":true,"icon":true}}',
                'responsive_images' => '[]',
                'order_column' => 12,
                'created_at' => '2021-08-07 18:04:23',
                'updated_at' => '2021-08-07 18:04:23',
            ),

        ));


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AymanElmalah\MyFatoorah\Facades\MyFatoorah;
class MyFatoorahController extends Controller
{
    

public function index() {
     $data = [
       'CustomerName' => 'New user',
       'NotificationOption' => 'all',
       'MobileCountryCode' => '+966',
       'CustomerMobile' => '0000000000',
       'DisplayCurrencyIso' => 'SAR',
       'CustomerEmail' => 'test@test.test',
       'InvoiceValue' => '100',
       'Language' => 'en',
       'CallBackUrl' => 'https://google.com',
       'ErrorUrl' => 'https://youtube.com',
   ];

// If you want to set the credentials and the mode manually.
//    $myfatoorah = MyFatoorah::setAccessToken($token)->setMode('test')->createInvoice($data);

// And this one if you need to access token from config
   $myfatoorah = MyFatoorah::createInvoice($data);

 // when you got a response from myFatoorah API, you can redirect the user to the myfatoorah portal 
 return response()->json($myfatoorah);
}
}

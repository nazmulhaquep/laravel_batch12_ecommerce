<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
class WelcomeController extends Controller
{
   public function index(){
   	return view('home.home_content');
   }

   public function category($id){
      $category_product = DB::table('product')
                  ->where('category_id',$id)
                  ->where('publicationStatus',1)
                  ->get();
   	return view('pages.category_content')
               ->with('category_product', $category_product);
   }

   public function productDetails($id){
      $single_product = DB::table('product')
                  ->where('product_id',$id)
                  ->where('publicationStatus',1)
                  ->first();
   	return view('product.product_details')
               ->with('single_product',$single_product);
   }

   public function contact(){
      return view('pages.contact');
   }
   
   public function send_mail(){
       $data=array(
           'name'=>'Mazhar',
           'email'=>'mazhar@gmail.com'       
       );
        Mail::send('pages.email', $data, function($message)   {
        $message->to('mazharulbubt@gmail.com');
        $message->subject('This is a subject');
    });

   }
   
}

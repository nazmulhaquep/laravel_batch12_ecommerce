<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function registerCustomer(Request $request)
    {
        $data=array();
        $data['customer_name']= $request->customer_name;
        $data['email_address']= $request->email_address;
        $data['password']= md5($request->password);
        
       $customer_id= DB::table('customer')
                ->insertGetId($data);
       
       Session::put('customer_id',$customer_id);
       Session::put('customer_name',$request->customer_name);
       
       return Redirect::to('/billing');
       
    }
    public function CustomerLoginCheck(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = DB::table('customer')
                     ->select('*')
                     ->where('email_address',$email)
                     ->where('password',md5($password))
                     ->first();
        if($user){
             Session::put('customer_id',$user->customer_id);
            Session::put('customer_name',$user->customer_name);
            return Redirect::to('/billing');
        }else{
            Session::put('exception','Your User Name or Password is Invalid');
            return Redirect::to('/checkout');
        }
    }
    public function billingInfo()
    {
        $customer_id=Session::get('customer_id');
        $customerInfo=DB::table('customer')
                                        ->where('customer_id',$customer_id)
                                        ->first();
        
        return view('pages.billing')
                            ->with('customer_info',$customerInfo);
    }
    public function updateBilling(Request $request)
    {
        $data=array();
        $customer_id=$request->customer_id;
        $data['customer_name']=$request->customer_name;
        $data['email_address']=$request->email_address;
        $data['mobile_number']=$request->mobile_number;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['country']=$request->country;
        $data['zip_code']=$request->zip_code;
        
        DB::table('customer')
                ->where('customer_id',$customer_id)
                ->update($data);
        return Redirect::to('/shipping');
        }

        public function shipping()
        {
            return view('pages.shipping');
        }
        public function saveShipping(Request $request)
        {
            $data=array();
        
        $data['shipping_name']=$request->shipping_name;
        $data['email_address']=$request->email_address;
        $data['mobile_number']=$request->mobile_number;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['country']=$request->country;
        $data['zip_code']=$request->zip_code;
        
        $shipping_id=DB::table('shipping')
                ->insertGetId($data);
        
        Session::put('shipping_id',$shipping_id);
       
        return Redirect::to('/payment');
        }
        public function payment()
        {
            return view('pages.payment');
        }

        public function customerLogout()
    {
        Session::put('customer_id','');
        Session::put('customer_name','');
        return Redirect::to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

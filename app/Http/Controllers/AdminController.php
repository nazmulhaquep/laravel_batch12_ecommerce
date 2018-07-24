<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Put;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Get = Session::get('admin_id');
        if($Get){
            return Redirect::to('/dashboard')->send();
        }else{
        return view('admin.pages.login');
        }
    }
    
    public function AdminLoginCheck(Request $request){
        $email = $request->email_address;
        $password = $request->password;
        $user = DB::table('admin')
                     ->select('*')
                     ->where('admin_email',$email)
                     ->where('admin_password',md5($password))
                     ->first();
        if($user){
             Session::put('admin_id',$user->admin_name);
            Session::put('admin_name',$user->admin_name);
            Session::put('access_label',$user->access_label);
            return Redirect::to('/dashboard');
        }else{
            Session::put('exception','Your User Name or Password is Invalid');
            return Redirect::to('/admin');
        }
    }
    public function authCheck(){
        $Get = Session::get('admin_id');
        if($Get){
            return Redirect::to('/dashboard')->send();
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function logout(){
        Session::put('admin_id','');
        Session::put('admin_name','');
        Session::put('message','You are Successfully Logout');
        return Redirect::to('/admin');
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

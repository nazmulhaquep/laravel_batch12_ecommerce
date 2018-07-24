<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createManufacturer(){
        return view('admin.manufacturers.create_manufacturer');
    }

    public function storeManufacturer(Request $request){
        $data['manufacturersName'] = $request->manufacturersName;
        $data['manufacturersDescription'] = $request->manufacturersDescription;
        $data['publicationStatus'] = $request->publicationStatus;
        DB::table('manufacturers')->insert($data);
        Session::put('storeCategory','Manufacturer Save Successfully');
        return Redirect::to('/add-manufacturer');
    }

    public function controlManufacturer(){
        $all_manufacturer = DB::table('manufacturers')
                ->get();
        return view('admin.manufacturers.manage_manufacturer')
            ->with('all_manufacturer',$all_manufacturer);
    }
    public function showManufacturer($cat_id){
        $single_manufacturer = DB::table('manufacturers')
        ->where('manufacturers_id',$cat_id)
        ->first();
        return view ('admin.manufacturers.single_manufacturer')
            ->with('single_manufacturer',$single_manufacturer);
    } 
    public function editTheManufacturer($cat_id){
        $manufacturer_info = DB::table('manufacturers')
        ->where('manufacturers_id',$cat_id)
        ->first();
        return view ('admin.manufacturers.edit_manufacturer')
            ->with('manufacturer_info',$manufacturer_info);
    }

    public function deleteTheManufacturer($cat_id){
        $category_info = DB::table('manufacturers')
        ->where('manufacturers_id',$cat_id)
        ->delete();

        Session::put('deleteCategory','Manufacturer deleted Successfully');
        return Redirect::to('/manage-manufacturer');
    }

    public function updateTheManufacturer(Request $request){
        $manufacturers_id = $request->manufacturers_id;
        $data['categoryName'] = $request->categoryName;
        $data['categoryDescription'] = $request->categoryDescription;
        $data['publicationStatus'] = $request->publicationStatus;
        DB::table('manufacturers')
                ->where('manufacturers_id',$manufacturers_id )
                ->update($data);
        Session::put('updateCategory','Manufacturer update Successfully');

    return Redirect::to('/manage-category/');
    }

    public function index()
    {
        //
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

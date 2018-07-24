<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createSlider()
    {
        return view('admin.slider.create_slider');
    }

    public function storeSlider(Request $request)
    {
        $data['slider_description'] = $request->image_description;
        $data['publication_status'] = $request->publication_status;
        /*Image upload*/

        $productImage = $request->file('sliderImage');
        $imageName = $productImage->getClientOriginalName();
        $uploadPath = 'public/sliderImage/';
        $productImage->move($uploadPath,$imageName);
        $imageUrl = $uploadPath.$imageName;
        $data['slider_image'] = $imageUrl;

        DB::table('homeslider')
                ->insert($data);
        Session::put('storeCategory','Slider Save Successfully');

        return view('admin.slider.create_slider');
    }




    public function showSlider()
    {
      $slider_info = DB::table('homeslider')
                        ->where('publication_status',1)
                        ->get();
      return view('home.home_content')
                ->with('slider_info',$slider_info);
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

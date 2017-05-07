<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        

        $header = view('pages.header');
        $slider =view('pages.slider');
        $main_content = view("pages.main_content");
        $fashion_category=view("pages.fashion");
        $sports_category = view("pages.sports");
        $electronics_category = view('pages.electronics');
        $jewelery_category = view('pages.jewelery');
        $furniture_category = view('pages.furniture');
        $brand_showcase = view('pages.brand_showcase');

        $hot_categories = view("pages.hot_categories");

        $footer = view('pages.footer');
        return view('master')
            ->with('header',$header)
            ->with('footer',$footer)
            ->with('slider',$slider)
            ->with('showcase',$brand_showcase)
            ->with('content',$main_content)
            ->with('fashion',$fashion_category)
            ->with('electronics',$electronics_category)
            ->with('sports',$sports_category)
            ->with('jewelery',$jewelery_category)
            ->with('furniture',$furniture_category)
            ->with('hot-categories',$hot_categories);
    }

    public function category_page($category_id){

        $header = view('pages.header');
        $footer = view('pages.footer');

$cat_info = DB::table('tbl_product')
        ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
        ->join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
        ->where('tbl_product.is_featured',0)
        ->where('tbl_product_image.image_label',1)
        ->where('tbl_product.category_id',$category_id)
        ->select('tbl_product.*','tbl_product_image.image_option','tbl_category.category_name')
        ->get();

      
            $category_page = view('pages.category_page')->with('cat_info',$cat_info);

            return view('master')->with('content',$category_page)->with('header',$header)
            ->with('footer',$footer);


    }


    public function single_product_page($product_id){

$header = view('pages.header');
$footer = view('pages.footer');

$product_info = DB::table('tbl_product')
        ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
        /*->where('tbl_product.is_featured',0)*/
        ->where('tbl_product_image.image_label',1)
        ->where('tbl_product.product_id',$product_id)
        ->select('tbl_product.*','tbl_product_image.image_option')
        ->first();

      
    $product_page = view('pages.product_single_page')->with('product_info',$product_info);


return view('master')
->with('content',$product_page)
->with('header',$header)
->with('footer',$footer);

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

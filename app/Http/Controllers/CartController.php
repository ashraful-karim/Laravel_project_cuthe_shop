<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Cart;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_to_cart($product_id,Request $request=null)
    {

        if($request->qty == NULL){
            $qty = 1;
        }else{
            $qty = $request->qty;
        }
        

       /* $product_id = $request->product_id;*/

        $product_info = DB::table('tbl_product')
                        ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                        ->where('tbl_product_image.image_label',1)
                        ->where('tbl_product.product_id',$product_id)
                        ->select('tbl_product.*','tbl_product_image.image_option')
                        ->first();

Cart::add([

    'id' => $product_info->product_id, 
    'name' => $product_info->product_name, 
    'qty' => $qty,
    'price' => $product_info->product_new_price, 
    'options' => ['image' => $product_info->image_option]]);

return Redirect::to("show_cart");


    }


    public function show_cart(){

            $header = view('pages.header');
            $footer = view('pages.footer');
            $show_cart = view('pages.cart_content');

            return view('master')
            ->with('content',$show_cart)
            ->with('header',$header)
            ->with('footer',$footer);

    }


    public function update_cart(Request $request){

           $rowId =$request->row_id;

           $qty = $request->qty;

           Cart::update($rowId,$qty);

           return Redirect::to('show_cart');


    }

    public function delete_to_cart($rowId){


                Cart::remove($rowId);

           return Redirect::to('show_cart');

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

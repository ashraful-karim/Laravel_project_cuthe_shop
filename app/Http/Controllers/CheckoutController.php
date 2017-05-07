<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use DB;
use Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function checkout(){

    $header = view('pages.header');
    $footer = view('pages.footer');
    $checkout_page = view('pages.checkout_content');

    return view('master')->with('content',$checkout_page)->with('header',$header)
            ->with('footer',$footer);
}

public function shipping_address(){

    $header = view('pages.header');
    $footer = view('pages.footer');
    $shipping_page = view('pages.shipping');

    return view('master')->with('content',$shipping_page)->with('header',$header)
            ->with('footer',$footer);
}
public function ajax_email_check($email_address=null){

  $customer_info = DB::table('tbl_customer')->where('email_address',$email_address)->first();
 
    if($customer_info){
        echo "Email Is already exist";
    }else{
        echo "email Is available";
    }
}


public function save_customer(Request $request){

    $data = array();
    $data['first_name'] = $request->first_name;
    $data['last_name'] = $request->last_name;
    $data['email_address'] = $request->email_address;
    $data['mobile'] = $request->mobile;
    $data['address'] = $request->address;
    $data['password'] = $request->password;
    $data['confirm_password'] = $request->confirm_password;
    $data['city'] = $request->city;
    $data['division'] = $request->division;
    $data['country'] = $request->country;
    $data['zip'] = $request->zip;


    $customer_id = DB::table('tbl_customer')->insertGetId($data);

    Session::put('customer_id',$customer_id);

    return Redirect::to('/shipping-address');


}

public function user_login(Request $request){



    $email_address = $request->user_email;
    $user_password = $request->user_password;

    $query = DB::table('tbl_customer')->where('email_address',$email_address)->where('password',$user_password)->first();

    if($query) {

        Session::put('customer_id',$query->customer_id);
        Session::put('email_address',$query->email_address);

        return Redirect::to('/');
    }else{
        Session::put('msg',"!! Email And Password Is Incorrect !!");
        return Redirect::to('checkout_content');
    }

}

public function save_shipping(Request $request){

        $data = array();
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email_address']=$request->email_address;
        $data['mobile']=$request->mobile;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['division']=$request->division;
        $data['country']=$request->country;
        $data['zip'] = $request->zip;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);
        return Redirect::to('payment');



}

public function get_payment_page(){

    $header = view('pages.header');
    $footer = view('pages.footer');
    $payment_page = view('pages.payment');

    return view('master')
    ->with('content',$payment_page)
    ->with('header',$header)
    ->with('footer',$footer);
}


public function place_order(Request $request){

    $payment_type = $request->payment_type;
    $data =array();
    $data['payment_type'] = $payment_type;
    $payment_id = DB::table('tbl_payment')->insertGetId($data);

    /*Order save function*/

    $order_data = array();
    $order_data['customer_id'] = Session::get('customer_id');
    $order_data['shipping_id'] = Session::get('shipping_id');
    $order_data['payment_id'] = $payment_id;
    $order_total = str_replace(',','',Cart::total());
    $order_data['order_total'] = $order_total;
    $order_id = DB::table('tbl_order')->insertGetId($order_data);

    $od_data = array();

    $contents = Cart::content();

foreach ($contents as $row) {
    $od_data['order_id']=$order_id;
    $od_data['product_id']=$row->id;
    $od_data['product_name']=$row->name;
    $od_data['product_price']=$row->price;
    $od_data['product_quantity'] = $row->qty;
    DB::table('tbl_order_details')->insert($od_data);
}
    

    if($payment_type == 'paypal'){

            return view('pages.paypal');
    }

    if($payment_type == 'cash_on_delivery'){
        
    }


}
 public function user_logout(){

        Session::put('customer_id',null);
        Session::put('email_address',null);
        Session::put('message','You Successfully Logout ');
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

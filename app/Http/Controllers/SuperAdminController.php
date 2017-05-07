<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_id = Session::get('admin_id');

        if($admin_id == NULL){
            return Redirect::to('admin')->send();
        }

        $home_content = view('admin.pages.admin_home');

        return view('admin.admin_master')->with('admin_content',$home_content);
    }

    public function logout(){

        Session::put('admin_id',null);
        Session::put('admin_name',null);
        Session::put('message','You Successfully Logout ');
        return Redirect::to('admin');
    }
    public function add_category(){

        $category_info = DB::table('tbl_category')->get();
        $add_category = view('admin.pages.category_content')->with('category_info',$category_info);

        return view('admin.admin_master')->with('admin_content',$add_category);
    }

    public function save_category(Request $request) {
        $data= array();
        $data['category_name'] =$request->category_name;
        $data['category_description'] =$request->category_description;
        $data['publication_status'] = $request->publication_status;

        DB::table('tbl_category')->insert($data);

        Session::put('message','Category Inserted Successfully');



        return Redirect::to('add_category');
    }

    public function manage_category(){

        $category_info = DB::table('tbl_category')->get();

        $manage_category = view('admin.pages.manage_category')->with('category_info',$category_info);

        return view('admin.admin_master')->with('admin_content',$manage_category);
    }


    public function publish_category($category_id){

        DB::table('tbl_category')->where('category_id',$category_id)
        ->update(['publication_status' => 1]);

        return Redirect::to('/manage_category');

    }

    public function unpublish_category($category_id){

        DB::table('tbl_category')->where('category_id',$category_id)
        ->update(['publication_status' => 0]);

        return Redirect::to('/manage_category');

    }

    public function delete_category($category_id){

        DB::table('tbl_category')->where('category_id',$category_id)
        ->delete();

        return Redirect::to('/manage_category');
    }

    public function edit_category($category_id){

        $show_category = DB::table('tbl_category')
        ->where('category_id',$category_id)
        ->get();


        $edit_page = view('admin.pages.edit_category')->with('show_category',$show_category);

        return view('admin.admin_master')->with('admin_content',$edit_page);

    }

    public function update_category(Request $request){

        $data= array();
        $category_id = $request->category_id;
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

        DB::table('tbl_category')->where('category_id',$category_id)->update($data);

        Session::put('message',"category Updated Successfully");

        return Redirect::to('edit_category/'.$category_id);


    }

    /*Adding brand function */

    public function add_brand(){

        $brand_info = DB::table('tbl_brand')->get();

        $add_brand = view('admin.pages.add_brand')->with('brand_info',$brand_info);

        return view('admin.admin_master')->with('admin_content',$add_brand);

    }

    public function save_brand(Request $request){
        $data=array();
        $data['brand_name']=$request->brand_name;
        $data['brand_description']=$request->brand_description;
        $data['publication_status']=$request->publication_status;

        $save_brand_data = DB::table('tbl_brand')->insert($data);

        Session::put('message',"Brand Info Inserted Successfully");

        return Redirect::to('/add_brand');


    }

    /*End of Adding brand function */

    public function manage_brand(){

        $brand_info = DB::table('tbl_brand')->get();
        $manage_brand = view('admin.pages.manage_brand')->with('brand_info',$brand_info);

        return view('admin.admin_master')->with('admin_content',$manage_brand);

    }

    public function unpublished_brand($brand_id){

        DB::table('tbl_brand')->where('brand_id',$brand_id)
        ->update(['publication_status' => 0]);
        Session::put('message','Published Successfully ');

        return Redirect::to('manage_brand');

    }

    public function published_brand($brand_id){

        DB::table('tbl_brand')->where('brand_id',$brand_id)
        ->update(['publication_status' => 1]);

        Session::put('message','Published Successfully ');

        return Redirect::to('manage_brand');

    }
    public function edit_brand($brand_id){

        $brand_info = DB::table('tbl_brand')
        ->where('brand_id',$brand_id)
        ->get();

        $edit_brand = view('admin.pages.edit_brand')->with('show_brand',$brand_info);

        return view('admin.admin_master')->with('admin_content',$edit_brand);
    }

    public function update_brand(Request $request){

        $data=array();
        $brand_id = $request->brand_id;
        $data['brand_name']=$request->brand_name;
        $data['brand_description']=$request->brand_description;
        $data['publication_status']=$request->publication_status;

        $update_brand_query = DB::table('tbl_brand')
        ->where('brand_id',$brand_id)
        ->update($data);

        Session::put('message','Brand Updated Successfully');

        return Redirect::to('edit_brand/'.$brand_id);


    }
    public function delete_brand($brand_id){

        DB::table('tbl_brand')->where('brand_id',$brand_id)->delete();

        Session::put('message','Deleted Successfully ');

        return Redirect::to('manage_brand');

    }


    /*Add product function */

    public function add_product(){

        $cat_info = DB::table('tbl_category')->get();
        $brand_info = DB::table('tbl_brand')->get();
        $add_product = view('admin.pages.add_product')
        ->with('cat_info',$cat_info)
        ->with('brand_info',$brand_info);

        return view('admin.admin_master')->with('admin_content',$add_product);

    }

    /*save product function */

    public function save_product(Request $request){

        $data=array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['brand_id']=$request->brand_id;
        $data['product_short_description']=$request->product_short_description;
        $data['product_long_description']=$request->product_long_description;
        $data['product_old_price'] =$request->product_old_price;
        $data['product_new_price']= $request->product_new_price;
        $data['product_stock']=$request->product_stock;
        $data['product_image'] = '';
        if($request->is_featured =='on'){
            $data['is_featured'] =1;
        }

        $data['publication_status']=$request->publication_status;

        $product_id = DB::table('tbl_product')->insertGetId($data);

        

        $this->do_upload($request,$product_id);

        Session::put('message',"Product Added successfully");

        return Redirect::to('add_product');

    }

    /* start Image Upload Function */
public function do_upload($request,$product_id){
        $picture ='';

        $i=1;

        if($request->hasFile('product_image')){
            
            $files = $request->file('product_image');
            foreach ($files as $file) {
                $filename= $file->getClientOriginalName();
                $picture = date('His').$filename;
                $image_url = 'product_image/'.$picture;
                $destinationPath = base_path().'\product_image';
                $success = $file->move($destinationPath,$picture);

                      if($success){

                $idata =array();
                $idata['product_id'] =$product_id;
                $idata['image_option'] = $image_url;

                if($i ===1){
                    $idata['image_label'] =1;
                }else{
                    $idata['image_label'] =0;
                }

                DB::table('tbl_product_image')->insert($idata);


            }else{
                echo "Image Upload Error";
            }

            $i++;

           
            }
        }

return;

          
        }

  /* End of Image Upload Function */

  public function manage_product(){

    $product_info = DB::table('tbl_product')->get();

    $manage_product = view('admin.pages.manage_product')->with('product_info',$product_info);

    return view('admin.admin_master')->with('admin_content',$manage_product);

  }

 public function unpublish_product($product_id){
    DB::table('tbl_product')
    ->where('product_id',$product_id)
    ->update(['publication_status'=>0]);

    Session::put('message','Product published Successfully');
    return Redirect::to('manage_product');
 }

public function publish_product($product_id){

    DB::table('tbl_product')
    ->where('product_id',$product_id)
    ->update(['publication_status'=>1]);

    Session::put('message','Product Unpublished Successfully');
    return Redirect::to('manage_product');

}

public function delete_product($product_id){

    DB::table('tbl_product')
    ->where('product_id',$product_id)
    ->delete();

    Session::put('message','Product Deleted Successfully');
    return Redirect::to('manage_product');

}

public function edit_product($product_id){


    $product_info = DB::table('tbl_product')
                    ->where('product_id',$product_id)
                    ->get();

    $product_view = view('admin.pages.edit_product')
                    ->with('product_info',$product_info);

    return view('admin.admin_master')->with('admin_content',$product_view);
}

public function update_product(Request $request){

    $data = array();
    $product_id = $request->product_id;
    $data['product_name'] = $request->product_name;
    $data['product_short_description']=$request->product_short_description;
    $data['product_long_description']=$request->product_long_description;
    $data['product_old_price']=$request->product_old_price;
    $data['product_new_price']=$request->product_new_price;
    $data['product_stock']=$request->product_stock;
    $data['publication_status'] =$request->publication_status;


    $update_product_query = DB::table('tbl_product')
                            ->where('product_id',$product_id)
                            ->update($data);

    Session::put('message','product updated successfully');
    return Redirect::to('edit_product/'.$product_id);




}


public function manage_order(){


$order_info = DB::table('tbl_order')
			->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
			->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
			->select('tbl_order.*','tbl_order_details.product_name','tbl_order_details.product_price','tbl_order_details.product_quantity','tbl_customer.first_name','tbl_customer.last_name')
			->get();


 $order_page = view('admin.pages.manage_order')->with('order_info',$order_info);

 return view('admin.admin_master')->with('admin_content', $order_page);


}


public function edit_order($order_id){

	$order_info = DB::table('tbl_order')
			->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
			->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
			->where('tbl_order.order_id',$order_id)
			->select('tbl_order.*','tbl_order_details.product_name','tbl_order_details.product_price','tbl_order_details.product_quantity','tbl_customer.first_name','tbl_customer.last_name')
			->get();



 $order_page = view('admin.pages.edit_order')->with('order_info',$order_info);

 return view('admin.admin_master')->with('admin_content', $order_page);

}


public function delete_order($order_id){


	$order_info = DB::table('tbl_order')
			->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
			
			->where('tbl_order.order_id',$order_id)
			->delete();


			return Redirect::to('manage_order');
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

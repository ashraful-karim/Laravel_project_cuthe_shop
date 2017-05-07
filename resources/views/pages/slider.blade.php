@extends('master')

@section('slider')

<?php 

$featured_product = DB::table('tbl_product')
    ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
    ->where('tbl_product.is_featured',1)
    ->where('tbl_product_image.image_label',1)
    ->select('tbl_product.*','tbl_product_image.image_option')
    ->get();

 ?>
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <div class="content-slide">
                        <ul id="contenhomeslider">
            @foreach($featured_product as $row)
                <li><a href="{{URL::to('product/'.$row->product_id)}}"><img style="height:450px;width: 666px" alt="Funky roots" src="{{URL::to($row->image_option)}}" title="Funky roots"/></a></li>
                
            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="header-banner banner-opacity">
                    <a href="#"><img alt="Funky roots" style="width: 234px;height: 450px" src="{{URL::to('public/assets/data/pant-1.jpg')}}" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
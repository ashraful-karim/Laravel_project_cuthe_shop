@extends('master')
@section('content')
<div class="columns-container">
    <div class="container" id="columns">
 <h1 class="checkout-sep" style="color:#FF3366;margin:50px 0px; font-weight: bold;text-align: center"> SHIPPING INFORMATIONS</h1>
            <div class="box-border">
                <ul>
              {!! Form::open(['url' => 'save_shipping','method' => 'post']) !!}
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="first_name" id="first_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            <input type="text" name="last_name" class="input form-control" id="last_name">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        
                        <div class="col-sm-6">
                            <label for="telephone" class="required">Mobile</label>
                            <input class="input form-control" type="text" name="mobile" id="telephone">
                        </div>
                        
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" onblur="ajax_email_check(this.value,'res')" name="email_address" id="email_address">
                            <span style="color:orangered" id="res"></span>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                      
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Address</label>
                            <input type="text" class="input form-control" name="address" id="address">

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city" class="required">City</label>
                            <input class="input form-control" type="text" name="city" id="city">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label class="required">Division</label>
                                <select class="input form-control" name="division">
                                    <option value="Alabama">Dhaka</option>
                                    <option value="Illinois">Khulna</option>
                                    <option value="Kansas">Barishal</option>
                                    <option value="Illinois">Rangpur</option>
                                    <option value="Kansas">Comilla</option>
                                    <option value="Illinois">Chittagong</option>
                                    <option value="Kansas">Rajhshahi</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="postal_code" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="zip" id="postal_code">
                        </div><!--/ [col] -->

                        <div  class="col-sm-6">
                            <label class="required">Country</label>
                            <select class="input form-control" name="country">
                                <option value="USA">Bangladesh</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <!--/ [col] -->

                        

                    </li><!--/ .row -->

                  
                    <li style="margin-top:20px">
                       <button type="submit" id="dis_button" class="button">Continue</button>
                    </li>

                    {!! Form::close() !!} 
                </ul>
            </div>
            </div>
            </div>

@endsection
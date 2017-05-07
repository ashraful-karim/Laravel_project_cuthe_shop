@extends('master')

@section('content')

 <script type="text/javascript">
 	
 	var xmlHttp = new XMLHttpRequest();
 	function ajax_email_check(given_email,objID){

 	var server_page = 'ajax_email_check/'+given_email;
 	xmlHttp.open('GET',server_page);
 	xmlHttp.onreadystatechange = function (){

 			if(xmlHttp.readyState ==4 && xmlHttp.status ==200 ){

 				document.getElementById(objID).innerHTML=xmlHttp.responseText;

 				if(xmlHttp.responseText == 'Email Is already exist'){
 					document.getElementById('dis_button').disabled=true;
 				}
 				if(xmlHttp.responseText == 'email Is available'){
 					document.getElementById('dis_button').disabled=false;
 				}
 			}
 		}

 		xmlHttp.send(null);
 	}
 </script>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{URL::to('/')}}" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Checkout</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Checkout</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content checkout-page">
            <h3 class="checkout-sep">1. Checkout Method</h3>
            <div class="box-border">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <h4 style="color:#FF3366;margin:20px 0px; font-weight: bold;text-align: center">Login</h4>
    <h3 style="color:red">
        <?php 
            $msg= Session::get('msg');
            if($msg){
                echo $msg;
                Session::put('msg',null);
            }
            
        ?>
            
    </h3>
                        <p>Already registered? Please log in below:</p>

{!! Form::open(['url' => 'login','method' => 'post']) !!}
                        <label>Email address</label>
                        <input type="email" name="user_email" class="form-control input">
                        <label>Password</label>
                        <input type="password" name="user_password" class="form-control input">
                        <p><a href="#">Forgot your password?</a></p>
                        
                        <button class="button" type="submit">Login</button>
 {!! Form::close() !!} 


                    </div>

                </div>
            </div>
            <h3 class="checkout-sep">2. Billing Infomations</h3>
            <div class="box-border">
                <ul>
              {!! Form::open(['url' => 'save_customer','method' => 'post']) !!}
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
                        <div class="col-sm-6">
                            <label for="password" class="required">Password</label>
                            <input class="input form-control" type="password" name="password" id="password">
                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label for="confirm" class="required">Confirm Password</label>
                            <input class="input form-control" type="password" name="confirm_password" id="confirm">
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
          </div>

@endsection
@extends('master');
@section('content')

<div class="columns-container">
    <div class="container" id="columns">
<h2  style="margin:50px 0px;color:#FF3366;text-align: center;font-weight: bold" class="checkout-sep">5. Payment Information</h2>
<div class="box-border">
    <ul class="col-md-9 col-sm-12 col-md-offset-3">

    {!! Form::open(['url' => 'place-order','method' => 'post']) !!}
        <li>
            <label for="radio_button_5"><input type="radio" name="payment_type" value="cash_on_delivery" id="radio_button_5"> Cash On Delivery</label>
        </li>

        <li>

            <label for="radio_button_6"><input type="radio" name="payment_type" value="paypal" id="radio_button_6"> Paypal</label>
        </li>

    </ul>
    <button style="margin-top:20px;"  type="submit" class="button col-md-offset-3">Continue</button>

    {!! Form::close() !!}
</div>




<h2 style="margin:50px 0px;color:#FF3366;text-align: center;font-weight: bold" class="checkout-sep">6. Order Review</h2>
<div class="box-border">
    <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 

                    $content = Cart::content();

                  


                     ?>

                     @foreach($content as $cart_info)
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{$cart_info->options->image}}" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">{{$cart_info->name}}</a></p>
                                <!-- <small class="cart_ref">SKU : #123654999</small><br>
                                <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small> -->
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span>BDT {{$cart_info->price}}</span></td>
                            <td class="qty">

            {!! Form::open(['url' => 'update_cart','method' => 'post']) !!}
                <input class="form-control input-sm" type="text" name="qty" value="{{$cart_info->qty}}">
				<input class="form-control input-sm" type="hidden" name="row_id" value="{{$cart_info->rowId}}">

                                <br>
							<button type="submit">
								<div class="button-group">
							<span class="btn btn-success btn-sm">Update</span>
								</div>
							</button>

                {!! Form::close() !!}                
                            </td>


                            <td class="price">
                                <span>BDT {{ $cart_info->price * $cart_info->qty }}</span>
                            </td>
                            <td class="action">
                                <a href="{{URL::to('delete_to_cart/'.$cart_info->rowId)}}">Delete item</a>
                            </td>
                        </tr>


                        @endforeach
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total products (tax incl.)</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>{{Cart::total()}}</strong></td>
                        </tr>
                    </tfoot>    
                </table>
    <button class="button pull-right">Place Order</button>
</div>
</div>
</div>
@endsection
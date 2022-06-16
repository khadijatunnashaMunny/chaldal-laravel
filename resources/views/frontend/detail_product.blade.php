@extends('frontend.master')
@section('content')

<div>
    <div class="container">
        <div class="pages-title section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pages-title-text text-center">
                            <h2>PRODUCT DETAIL</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img href="" height="300px" width="270px" src="{{ asset('uploads/images/'.$product->product_image) }}" alt="">

                </div>
                <div class="col-sm-6">
                    <a href="/">Go Back</a>
                    <h5>{{$product['product_id']}}</h5>
                    <h5>{{$product['product_name']}}</h5>
                    <h5>{{$product['product_price']}}</h5>
                    <h5>{{$product['product_description']}}</h5>

                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{$product['id']}}>
                        <button class="btn btn-primary">Add to Cart</button>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
</div>

@endsection()

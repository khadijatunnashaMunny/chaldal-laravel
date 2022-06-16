@extends('frontend.master')
@section('content')

<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Cart</h2>
                    <ul class="text-left">
                        <li><a href="/">Home </a></li>
                        <li><span> // </span>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart content section start -->
<section class="pages cart-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive padding60">
                    <table class="wishlist-table text-center">

                        <thead>
                            <tr>
                                <th>Product Image</th>
                                <th>product Id</th>
                                <th>product Name</th>
                                <th>product Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        @foreach($products as $item)
                        <tbody>
                            <tr>

                                <td class="">
                                    <div>
                                        <img src="{{ asset('uploads/images/'.$item->product_image) }}" width="150px" height="150px" alt="Image">
                                    </div>

                                    <div class="items-dsc">
                                        <p>{{$item->product_description}}</p>
                                    </div>
                                </td>
                                <td>{{$item->product_id}}</td>
                                <td>{{$item->product_name}}</td>
                                <td>
                                    <strong>{{$item->product_price}}</strong>
                                </td>
                                <td>
                                    <a href="/removecart/{{$item->cart_id}}">
                                        <p class="mdi mdi-close" title="Remove this product">remove</p>
                                    </a>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="float-right">
                    <a class="btn btn-success" href="/orderPage">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()

@extends('frontend.master')
@section('content')

<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Orders</h2>
                    <ul class="text-left">
                        <li><a href="/">Home </a></li>
                        <li><span> // </span>Orders</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- order-complete content section start -->
<section class="pages checkout order-complete section-padding">
  <div class="container">
  
    <!-- service section start -->
   
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="padding60">
          <div class="log-title">
            <h3><strong>your order</strong></h3>
          </div>
          <div class="cart-form-text pay-details">
            <table>
              <thead>
                <tr>
                  <th>Product</th>
                  <td> {{$total}}</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Amount</td>
                  <td> {{$total}}</td>
                </tr>
                <tr>
                  <td>Tax</td>
                  <td> 0</td>
                </tr>
                <tr>
                  <td>Delivery </td>
                  <td>50</td>
                </tr>

              </tbody>
              <tfoot>
                <tr>
                  <th>Order total</th>
                  <td>{{$total+50}}</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">

        <div class="order-details padding60">
          <div class="log-title">
            <h3><strong>customer details</strong></h3>
          </div>
          <div class="por-dse clearfix">
            <form action="orderplace" method="POST">
              @csrf
              <div class="form-group">
                <textarea name="address" placeholder="enter your address" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-danger">Order Now</button>
            </form>
          </div>
        </div>
      </div>
      <div>
      </div>
    </div>
  </div>
</section>

@endsection()

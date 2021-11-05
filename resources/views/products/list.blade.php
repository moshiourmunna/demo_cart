@extends('layouts.master')

@section('content')

<?php
use App\Cart;
// use App\Http\Controllers\ProductController;
// $total = ProductController::cartItem();

?>
<p>dadfaf</p>
  <div class="main-content p-4">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="navbar-bg"></div>
              <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                          collapse-btn"> <i data-feather="align-justify"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                        <i data-feather="maximize"></i>
                      </a></li>
                    <li>
                      <form class="form-inline mr-auto">
                        <div class="search-element">
                          <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                          <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
                @php
                  $total = App\Cart::all()->where('user_ip',request()->ip())->sum
                  (function($t){
                    return $t->quantity;
                  });
                @endphp
                <ul class="navbar-nav navbar-right">
                  <li><a href="#"
                      class="nav-link nav-link-lg mt-1"><span style="color:#131314">Product Quantity: {{$total}}</span>

                    </a>
                  </li>
                  <li><a href="{{ route('products.cart') }}"
                      class="nav-link nav-link-lg"><span style="color:#131314">Cart</span><i class="fas fa-cart-arrow-down" style="color:#aeb0e8"></i>

                    </a>
                  </li>
                  <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                      class="nav-link notification-toggle nav-link-lg"><span style="color:#131314">Total : {{$total}}</span><i class="fas fa-cart-arrow-down" style="color:#aeb0e8"></i>

                    </a>
                  </li> -->
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Advanced Table</h4>
                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                      <th class="text-center">ID</th>
                      <th>Name</th>
                      <th>Catagory</th>
                      <th>Price</th>
                      <!-- <th>Product</th> -->
                      <th>Product Image</th>
                      <!-- <th>Status</th> -->
                      <th>Action</th>
                    </tr>
{{--                      @dd($products)--}}
                    @foreach ($products as $key=>$product)
                    <tr>
                      <td class="p-0 text-center">{{$product->id}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->catagories->title}}</td>
                      <td>{{$product->price}}</td>

                      <td>
                        <img alt="image" src="{{ asset('assets/img/'. $product->product_img) }}" class="rounded-circle" width="35"
                          data-toggle="tooltip" title="Product Image">
                      </td>
                      <td>
                        <a href="{{ route('products.show', [$product->id]) }}" class="btn btn-primary" title="" data-original-title="show">Detail</a>
                      </td>
                      <td>
                        <form action="{{ route('products.addToCart',$product->id) }}" method="POST">
                          @csrf
                          <input type="hidden" name="product_id" value="{{$product->id}}">
                          <input type="hidden" name="catagory_id" value="{{$product->catagory_id}}">
                          <button type="submit" href="#" class="btn btn-success">Add To Cart</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach

                  </table>
                  {{$products->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row float-right">
          <div class="col-12 col-md-6 col-lg-6">
              <div class="card-body">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="{{ route('products.list')}}">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="{{ route('products.list')}}">1</a></li>
                    <li class="page-item"><a class="page-link" href="{{ route('products.list')}}">2</a></li>
                    <li class="page-item"><a class="page-link" href="{{ route('products.list')}}">3</a></li>
                    <li class="page-item"><a class="page-link" href="{{ route('products.list')}}">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>
  </div>
@endsection

@section('page_script')
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <!-- <script src="assets/js/page/advance-table.js"></script> -->

  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/page/advance-table.js') }}"></script>


@endsection

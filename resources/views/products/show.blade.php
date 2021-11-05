@extends('layouts.master')

@section('content')

  <div class="main-content p-4">
    <section class="section">
      <!-- <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
          <h4 class="page-title m-b-0">Advance Table</h4>
        </li>
        <li class="breadcrumb-item">
          <a href="index.html">
            <i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active">Table</li>
        <li class="breadcrumb-item active">Advance</li>
      </ul>
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
          <div class="col-12 col-sm-12 col-lg-9">
            <div class="card author-box card-primary">
              <div class="card-body">
                <div class="author-box-left" style="float:left;text-align:center;padding-left:5px">
                  <img alt="image" src="{{ asset('assets/img/users/user-1.png') }}" class="author-box-picture" style="width:150px;box-shadow:0 4px 25px 0 rgba(0,0,0,0.1)">
                  <div class="clearfix"></div>
                  <!-- <a href="#" style="padding:5px 15px;font-size:12px;border-radius:30px" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');"
                    data-unfollow-action="alert('unfollow clicked');">Add To Cart</a> -->
                </div>
                <div class="author-box-details" style="margin-left:185px" >
                  <div class="author-box-name" style="font-size:18px">
                    <a href="#" style="font-weight:600">Product Name : {{$product->name}}</a>
                  </div>
                  <div class="author-box-job" style="color:#96a2b4">Description</div>
                  <div class="author-box-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat.</p>
                  </div>
                  <div>
                    <ul>
                      <li>Brand</li>
                      <li>Catagory : {{$catagory->title}}</li>
                      <li>Price : {{$product->price}}</li>
                      <!-- <li>Quantity : </li> -->
                    </ul>
                  </div>
                  <div class="mt-sm-0 mt-3">
                    <table>
                      <tr>
                        <td>
                          <a href="#" style="font-size:12px;border-radius:30px" class="btn btn-primary mr-3"  >Buy Now</a>
                        </td>
                        <td>
                          <form action="{{ route('products.addToCart',$product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="catagory_id" value="{{$product->catagory_id}}">
                            <button type="submit" href="#" style="font-size:12px;border-radius:30px" class="btn btn-success">Add To Cart</button>
                          </form>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('page_script')

  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  <script src="{{ asset('assets/bundles/chartjs/chart.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/js/page/widget-data.js') }}"></script>


@endsection


@section('content')
@extends('fronted.master')
<div class="container">
  <div class="container">
    <div>

      <div class="row" style="margin: 50px 0 35px 0; ">
        <div class="col-md-6">
          <div class="card">
            <img class="" src="{{  url('upload/product_img/',$Product->image) }}" style="width: 100%; height: 550px;">
          </div>
        </div>
        <div class="col-md-6">
          <h1>{{ $Product->name }}</h1>
          <h4 style="display:inline-block;">{{ $Product->brand->name }}</h4>
          <div>
            <h2 style="display:inline-block;">{{ $Product->price }} TK</h2>
            <div>
                <span style="display:inline-block;">Save 10%</span>
                <p >Inclusive of all taxes</p>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Buy on whatsaap
            </button>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="mb-4">Description</h3>
        <h5>{{ $Product->long_desc }}</h5>
      </div>
    </div>

  </div>

  <div class="row mt-5">
    <div class="col-md-12">
        <h3>You May Also Like</h3>
        <div class="row py-3">
          @foreach ($brands as $brand )
          <div class="col-md-3">
            <div class="card p-2 h-100">
              <a href="{{ route('product-details',$brand->id) }}">
                <img src="{{  url('upload/product_img/',$brand->image) }}" style="width: 100%; height: 150px;">
              </a>
                <div class="card-body">
                  <a style="text-decoration: none; height:10%;font-size: 14px;"  href="" class="card-text text-center"><b>{{ $brand->name }}</b></a>
                  <p style="" class="card-text text-center"><b>{{ $brand->price }} tk</b></p>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Buy on whatsaap
                  </button>

                </div>
            </div>
          </div> 
          @endforeach                                              
        </div> 

          {{-- <div class="row py-3">
            <div class="col-md-3">
                <div class="card p-2">
                    <img src="https://images.pexels.com/photos/3589903/pexels-photo-3589903.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" style="width: 100%; height: 150px;">

                    <div class="card-body">
                      <p class="card-text">the card's content.</p>
                      <a href="#" class="btn btn-success b-block">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <img src="https://images.pexels.com/photos/3589903/pexels-photo-3589903.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" style="width: 100%; height: 150px;">

                    <div class="card-body">
                      <p class="card-text">the card's content.</p>
                      <a href="#" class="btn btn-success b-block">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <img src="https://images.pexels.com/photos/3589903/pexels-photo-3589903.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" style="width: 100%; height: 150px;">

                    <div class="card-body">
                      <p class="card-text">the card's content.</p>
                      <a href="#" class="btn btn-success b-block">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <img src="https://images.pexels.com/photos/3589903/pexels-photo-3589903.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" style="width: 100%; height: 150px;">

                    <div class="card-body">
                      <p class="card-text">the card's content.</p>
                      <a href="#" class="btn btn-success b-block">Order now</a>
                    </div>
                </div>
            </div>
            
          </div> --}}


          
    </div>
  </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div style="padding: 30px;" class="modal-content">
      <div class="modal-body">
      <h3 class="text-center mb-5">Buy now on WhatsApp</h3>
      <form action="{{ route('inser-user-info') }}" method="POST">
        @csrf
        <input class="form-control mb-3 bg-light p-3" type="text" name="name" id="name" placeholder="Enter your name">
        <input class="form-control mb-3 bg-light p-3" type="email" name="email" id="email" placeholder="Enter your email">
        <input class="form-control mb-3 bg-light p-3" type="text" name="number" id="number" placeholder="Enter your mobile number">
        <div class="col-12">
        <input type="submit" class="btn btn-primary" name="submit" value="Send">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection


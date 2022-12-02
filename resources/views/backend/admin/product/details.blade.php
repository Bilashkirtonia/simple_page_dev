@extends('backend.admin.master')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Details</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Details</li>
      </ol>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Product details 
                  {{-- @if ($logo == 1)
                    
                  @else
                  <a href="{{ route('add_Details') }}" style="float: right;"  class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add
                  </a>
                  @endif --}}
                  <a href="{{ route('view_product') }}" style="float: right;"  class="btn btn-primary">
                    <i class="fas fa-plus"></i> View
                  </a>
                 
                  
                </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10 m-auto">
                    <table class="table table-striped table-hover" border="2">
                      <thead>
                        <tr>
                          <td style="width: 50%">Category</td>
                          <td style="width: 50%">{{ $details->category->name }}</td>
                        </tr>
                        <tr>
                          <td style="width: 50%">Brand</td>
                          <td style="width: 50%">{{ $details->brand->name }}</td>
                        </tr>
                        <tr>
                          <td style="width: 50%">Product name</td>
                          <td style="width: 50%">{{ $details->name }}</td>
                        </tr>
                        <tr>
                          <td style="width: 50%">Short text</td>
                          <td style="width: 50%">{{ $details->short_desc }}</td>
                        </tr>
                        <tr>
                          <td style="width: 50%">Long text</td>
                          <td style="width: 50%">{{ $details->long_desc }}</td>
                        </tr>
                        <tr>
                          <td style="width: 50%">Image</td>
                          <td style="width: 50%">
                            <div class="text-center">
                              <img class="profile-user-img img-fluid" style="width: 80px;height:50px;"
                                  src="{{url('upload/product_img',$details->image)}}"
                                  
                                  alt="User profile picture">
                              </div>
                          </td>
                        </tr>

                      </thead>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
    </div>



</div>

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
@endsection
            @section('content')
            @extends('fronted.master')
            <div class="container">
                <div class="row mt-3">
                  <div class="col-md-4">
                      <div class="row bg-white p-4">
                          <div class="col-12">
                              <h4 style="font-size:22px; font-weight:bold">{{ $about->short_title }}</h4>
                              <P>{{ $about->long_title }}</P>
                          </div>
                          <hr>
  
                          <div class="col-12">
                            <div class="row">
                              <div class="col-1">
                                <i style="font-size: 22px;" class="fa-solid fa-location-dot"></i>
                              </div>
                              <div class="col-11">
                                <p style="font-size: 18px;">{{ $contact->address }}</p>
                              </div> 
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <i style="font-size: 22px;" class="fa-solid fa-phone"></i>
                              </div>
                              <div class="col-11">
                                <p style="font-size: 18px;">{{ $contact->email }}</p>
                              </div> 
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <i style="font-size: 22px;" class="fa-solid fa-envelope"></i>
                              </div>
                              <div class="col-11">
                                <p style="font-size: 18px;">{{ $contact->mobile }}</p>
                              </div> 
                            </div>
                            <hr>
                        </div>
                      </div>                                     
                  </div>
                  <div class="col-md-8">
                      <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link h5 active" aria-current="page" href="{{ url('/') }}">Home</a>
                                </li>
                                @foreach ($categories as $category)
                                  <li class="nav-item">
                                    <a class="nav-link h5 " href="{{ route('product-details-list',$category->id )}}">{{ $category->name }}</a>
                                  </li>
                                @endforeach
                                
                                
                                <li class="nav-item dropdown">
                                  <a class="nav-link h5 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    See all
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">All products</a></li>                   
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </nav>
  
                        <div class="row py-3">
                          @foreach ($Products as $Product )
                          <div class="col-md-3">
                            <div class="card p-2 h-100">
                              <a href="{{ route('product-details',$Product->id) }}">
                                <img src="{{  url('upload/product_img/',$Product->image) }}" style="width: 100%; height: 150px;">
                              </a>
                                <div class="card-body">
                                  <a href="{{ route('product-details',$Product->id) }}" style="text-decoration: none; height:10%;font-size: 14px;"class="card-text text-center"><b>{{ $Product->name }}</b></a>
                                  <p style="" class="card-text text-center"><b>{{ $Product->price }} tk</b></p>
                                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Buy on whatsaap
                                  </button>

                                </div>
                            </div>
                          </div> 
                          @endforeach                                              
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

   
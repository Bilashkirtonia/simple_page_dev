@extends('backend.admin.master')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0"> {{ (@$editSlide)?"Edit Vision":"Add Vision " }}</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"> {{ (@$editSlide)?"Edit Service":"Add service " }}</li>
      </ol>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>

                  {{ (@$editSlide)?"Edit Service":"Add service " }}
                  
                  <a href="{{ route('view_service') }}" style="float: right;"  class="btn btn-primary">
                    <i class="fas fa-list"></i> View
                  </a>
                  
                </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10 m-auto">
                    <div class="card p-4">
                      <form action="{{ (@$editSlide)?route('update_service',$editSlide->id):route('store_service') }}" method="post" enctype="multipart/form-data" id="quickForm">
                        @csrf              
                        <div class="row">                                                 
                           <div class="col">
                           
                            <div class="row">
                              
                              <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Short title</label>
                                    <input id="text" type="text" value="{{ @$editSlide->short_title}}" name="short_title" class="form-control" id="exampleFormControlInput1">                                            
                                 </div>
                              </div>

                              <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Long Title</label>
                                    <textarea name="long_title"  id="exampleFormControlInput1" cols="30" rows="10" class="form-control">{{ @$editSlide->long_title }}</textarea>                                        
                                 </div>
                              </div>
                             
                            </div>
                           </div>
                        </div>
                          <div class="col-2">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success" value="Update" >
                             </div>
                          </div>
                      
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
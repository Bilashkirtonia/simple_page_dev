@extends('backend.admin.master')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0"> {{ (@$editSlide)?"Edit About":"Add About " }}</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"> {{ (@$editSlide)?"Edit About":"Add About " }}</li>
      </ol>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>

                  {{ (@$editSlide)?"Edit About":"Add About " }}
                  
                  <a href="{{ route('view_about') }}" style="float: right;"  class="btn btn-primary">
                    <i class="fas fa-list"></i> View
                  </a>
                  
                </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10 m-auto">
                    <div class="card p-4">
                      <form action="{{ (@$editSlide)?route('update_about',$editSlide->id):route('store_about') }}" method="post" enctype="multipart/form-data" id="quickForm">
                        @csrf              
                        <div class="row">                                                 
                           <div class="col">
                            <div class="row">
                              <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Short title</label>
                                    <input id="short_title" type="text" value="{{ @$editSlide->short_title}}" name="short_title" class="form-control" id="exampleFormControlInput1">                                            
                                 </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Long title</label>
                                    <textarea class="form-control" name="long_title" id="long_title" cols="30" rows="10">{{ @$editSlide->long_title}}</textarea>
                                    {{-- <input id="long_title" type="text" value="{{ @$editSlide->long_title}}" name="long_title" class="form-control" id="exampleFormControlInput1">                                             --}}
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



@extends('backend.admin.master')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Manage logo</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Logo</li>
      </ol>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Logo list 
                  @if ($logo<=1)
                  
                  @else
                  <a href="{{ route('add_slide') }}" style="float: right;"  class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add
                  </a>
                  @endif
                </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10 m-auto">
                    <table class="table table-striped table-hover" border="2">
                      <thead>
                          <tr>
                              <th>Si</th>
                              <th>Slide image</th>
                              <th>Short desc</th>
                              <th>Long desc</th>                                
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $key=> $user)
                          <tr>
                              <td>{{ $key+1 }}</td>
                              <td> <div class="text-center">
                                <img class="profile-user-img img-fluid" style="width: 250px;height:150px;"
                                    src="{{url('upload/slider',$user->image)}}"
                                    
                                    alt="User profile picture">
                                </div>
                              </td>
                              <td>{{ $user->short_title }}</td>
                              <td>{{ $user->long_title }}</td>
                              <td>
                                <a href="{{ route('edit_slide',$user->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('delete_slide',$user->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                          </tr>  
                          @endforeach
                          
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
    </div>



</div>


@endsection
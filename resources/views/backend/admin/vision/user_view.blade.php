@extends('backend.admin.master')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Vision</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Vision</li>
      </ol>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Vision list 
                  @if ($logo == 1)
                    
                  @else
                  <a href="{{ route('add_vision') }}" style="float: right;"  class="btn btn-primary">
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
                              <th>Vision image</th>
                              <th style="width: 65%">Title</th>
                                                           
                              <th style="width: 12%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $key=> $user)
                          <tr>
                              <td>{{ $key+1 }}</td>
                              <td> <div class="text-center">
                                <img class="profile-user-img img-fluid" style="width: 250px;height:150px;"
                                    src="{{url('upload/vision',$user->image)}}"
                                    
                                    alt="User profile picture">
                                </div>
                              </td>
                              <td>{{ $user->title }}</td>
                              
                              <td>
                                <a href="{{ route('edit_vision',$user->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('delete_vision',$user->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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

<!-- Button trigger modal -->


{{-- <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add form</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
@endsection
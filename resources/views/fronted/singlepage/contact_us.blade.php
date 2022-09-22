@extends('fronted.master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1 class="my-4 text-white">Contact us</h1>
    <div class="row">
      <div class="col-md-7">
        <form class="card p-5 shadow" method="post" action="{{ route('store_message') }}" enctype="multipart/form-data">
          @csrf
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input name="name" type="text" id="form6Example1" class="form-control" />
                <label  class="form-label" for="form6Example1">Name</label>
              </div>
            </div>
          </div>
        
        
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input name="address" type="text" id="form6Example4" class="form-control" />
            <label class="form-label" for="form6Example4">Address</label>
          </div>
        
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="email" type="email" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Email</label>
          </div>
        
          <!-- Number input -->
          <div class="form-outline mb-4">
            <input name="mobile" type="number" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6">Phone</label>
          </div>

          <div class="form-outline mb-4">
            <textarea name="message" id="form6Example6" class="form-control"  cols="30" rows="10"></textarea>
            <label class="form-label" for="form6Example6">Phone</label>
          </div>
      
        
         
        
          <!-- Submit button -->
          <button type="submit" name="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
      </div>
      <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <p>Info box</p>

              <div class="card-body" style="">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea"/>
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection


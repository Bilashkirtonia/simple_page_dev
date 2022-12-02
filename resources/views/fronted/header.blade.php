<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <title>{{ $logo->logo_title }}</title>
    <style>
        *,*::after,*::before{
          padding: 0;
          margin: 0;
          
        }
    </style>
</head>
<body>
    <div class=" bg-light">
     
        <img src="{{ url('upload/slider/',$slider->image) }}" class="img-fluid w-100" style="height: 400px; object-fit: cover;" alt="Image">

            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" style="padding:0 100px;">
                <div class="container-fluid">
                    
                  <a class="navbar-brand" href="{{ url('/') }}" style="width: 150px; height:150px; border-radius: 50%; margin-top: -70px; object-fit: cover;">
                    <img src="{{ url('upload/logo/',$logo->image) }}" alt="" style="width: 100%; height:100%; border-radius: 50%; border: 1px solid #000;">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active h3" aria-current="page" href="{{ url('/') }}">{{ $logo->logo_title }}</a>
                      </li>
                      
                     
                    </ul>
                    {{-- <div class="d-flex">
                      <li class="nav-item">
                        <a class="nav-link text-dark h5 active" aria-current="page" href="#"><br>
                        </a>
                        
                      </li>
                    </div> --}}
                  </div>
                </div>
            </nav>
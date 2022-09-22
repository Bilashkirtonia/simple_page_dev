<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dev apps </title>
            <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
        />
</head>
<body>
    <div class="container-fluid bg-success">
      <div class="container">
         {{-- nav-bar --}}
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
              <!-- Toggle button -->
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarLeftAlignExample"
                aria-controls="navbarLeftAlignExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
          
              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item pr-5">
                    <a class="nav-link" aria-current="page" href="#">
                      <img style="width: 100px;height:50px; margin-right:50px;" src="{{ url('upload/logo/'.$logo->image) }}" alt="">
                    </a>
                  </li>
                  
                  <!-- Navbar dropdown -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      About us
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="{{ route('about_us') }}">About us</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Mission</a>
                      </li>
                      {{-- <li><hr class="dropdown-divider" /></li> --}}
                      <li>
                        <a class="dropdown-item" href="#">Vision</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">News and viwes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}">Contact us</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                  @if (Auth::id()) 
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">signin</a>
                  </li>
                  @endif
                  
                </ul>

                <form class="d-flex input-group w-auto">
                    <input
                      type="search"
                      class="form-control rounded"
                      placeholder="Search"
                      aria-label="Search"
                      aria-describedby="search-addon"
                    />
                    <span class="input-group-text text-white border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                  </form>
                <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
          </nav>
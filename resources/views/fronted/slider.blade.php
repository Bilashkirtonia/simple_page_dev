         <!-- Carousel wrapper -->
                @php
                    $count = 0;
                @endphp

         <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                @foreach ($slider as $key => $slide )
                <button
                type="button"
                data-mdb-target="#carouselBasicExample"
                data-mdb-slide-to="{{ $key }}"
                class="@if($count == 0){ active } @endif"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
                @endforeach
            
           
            </div>
        
            <!-- Inner -->
            <div class="carousel-inner">
            <!-- Single item -->
                
            @foreach ($slider as $slide )
            <div class="carousel-item @if($count == 0){ active } @endif" style="height:80vh;">
                <img src="{{ url('upload/slider/'.$slide->image) }}" class="d-block w-100" alt="Sunset Over the City"/>
                <div class="carousel-caption d-none d-md-block">
                <h5>F{{ $slide->short_title }}</h5>
                <p>{{ $slide->long_title }}</p>
                </div>
            </div> 
            @php
              $count++;
            @endphp
            @endforeach

            </div>
            <!-- Inner -->
        
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
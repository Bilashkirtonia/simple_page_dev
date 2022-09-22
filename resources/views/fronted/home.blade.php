            @extends('fronted.master')
            @section('content')
            @include('fronted.slider')
            <div class="row">
                <div class="row">
                    <div class="col-md-6 offset-md-5 h3 text-light my-3">Mission and Vission</div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="">
                        <img src="{{ url('upload/mission/'.$mission->image) }}" class="card-img-top" alt="Sunset Over the Sea"/>
                        <div class="card-body">
                        <p class="card-text">{{ $mission->title }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ url('upload/vision/'.$vision->image) }}" class="card-img-top" alt="Sunset Over the Sea"/>
                        <div class="card-body">
                        <p class="card-text">{{ $vision->title }}</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row mt-4">
                <div class="col-md-12 m-auto">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>News image</th>
                            <th>News</th>
                            <th>Date</th>                           
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $news as $key => $new)
                        <tr>
                            <td style="width: 45%">
                            <div class="d-flex align-items-center">
                                <img
                                    src="{{ url('upload/news/'.$new->image) }}"
                                    alt=""
                                    style="width: 100%; height: 100%;object-fit:cover"
                                    class=""
                                    />
                                
                            </div>
                            </td>
                            <td>{{ $new->title }}</td>
                            <td>{{ date('d-m-Y',strtotime($new->date)) }}</td>
                            <td><a href="" class="btn btn-success">Deatils</a></td>
                           
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    {{-- pills --}}
                    @php
                        $count = 0;
                    @endphp
                <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                   @foreach ($service as $key=> $serve)
                   <li class="nav-item" role="presentation">
                    <button
                        class="nav-link @if($count == 0){ active }@endif"
                        id="{{ $serve->id }}"
                        data-mdb-toggle="pill"
                        data-mdb-target="#service"
                        type="submit"
                        role="tab"
                        aria-controls="pills-home"
                        aria-selected="true"
                    >
                        {{ $serve->short_title }}
                    </button>
                    </li> 
                   @endforeach
                    
                    
                    
                </ul>
                <div class="tab-content" id="pills-tabContent2">
                    @foreach ($service as $key=> $serve)
                    <div
                    class="tab-pane fade show @if($count == 0){ active }@endif"
                    id="{{ $serve->id }}"
                    role="tabpanel"
                    aria-labelledby="pill"
                    >
                    {{ $serve->long_title }}
                    </div> 
                    @php
                        $count++;
                    @endphp 
                    @endforeach
                </div>


                
                </div>
            </div>
            @endsection

   
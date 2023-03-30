<x-app-layout>
    <x-slot name="header">

        <style>
            .checked {
              color: orange;
            }
            #page{
                height: 85vh
            }
            </style>

    <link rel="stylesheet" href="{{ URL::asset('css/worker.css') }}" />

        <div class="row ">
            <div class="row p-2" style="height:100%;">
                <div class="col-sm-3">
                <!--filter form-->
                <div class="bg-light text-dark p-5  rounded " style="height:100%;">
                    <p><a href="{{url('/workers')}}">All Workers</a></p>
                    <div class="d-flex align-items-center ">
                        <h3 class="">
                            Search
                        </h3>
                    </div>

                    <form action="{{url('/search')}}" method="GET">
                        @csrf
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control shadow-sm" id="search" placeholder="Search..." name="search">
                        </div>
                        <button type="submit" class="btn btn-dark">Search</button>
                    </form>
                    <br>
                    <div class="d-flex align-items-center ">
                        <h3 class="">
                            Filter
                        </h3>
                    </div>
                    <form method="GET" action="{{url('/filter')}}">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="location" class="form-label">Location:</label>
                            <select class="form-select shadow-sm" name="location">
                                <option></option>
                                <option>dehiwala</option>
                                <option>Kahathuduwa</option>
                                <option>Piliyandala </option>
                                <option>Kesbawa</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                        <label for="sub_category" class="form-label ">Category:</label>
                            <select class="form-select shadow-sm" name="category">
                                <option></option>
                                <option>plumber</option>
                                <option>Teacher</option>
                                <option>Tutor</option>
                                <option>Designer</option>
                                <option>Architecture</option>
                                <option>Video Editor</option>
                                <option>Electrition</option>
                                <option>Driver</option>
                                <option>Painter</option>
                                <option>Doctor</option>
                                <option>Helper</option>
                                <option>Trainer</option>
                                <option>Accountent</option>
                                <option>Tree cutter</option>
                                <option>Lowyer</option>
                                <option>Brocker</option>
                                <option>Cook</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Filter</button>
                    </form>
                    <br>

                </div>
            </div>
            <div class="col-sm-9" id="page">
                <div class="col-sm-12 bg-light  text-dark  rounded overflow-auto" id="cardslot" style="height:100vh; overflow-y:auto;">
                    <!--card-->
                    <div class="row">
                    @foreach($data as $data)
                        <div class="col-3 ">

                                <div class="card my-2 mx-auto" style="width:200px">
                                    <div class="row">
                                        <div class="col">
                                        <img class="card-img-top" src="images/pro-photo.jpeg" alt="Card image" style="width:100%">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$data->name}}</h5>
                                        <h6><small>{{$data->category}} ({{$data->sub_category}})</small></h6>
                                        <h6><small>{{$data->location}} </small></h6>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="container">
                                            

                                                                                        
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                                                Call me
                                            </button>
                                            
                                            <!-- The Modal -->
                                            <div class="modal" id="myModal">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                            
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">I'm {{$data->name}} </h4>
                                                    
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                            
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <h5>Contat me</h5> 
                                                    <h4>{{$data->mobile}}</h4>
                                                    </div>
                                            
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                            
                                                </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                        </div>
                    @endforeach
                    </div>

                </div >
            </div>
        </div>
    </div>
</x-slot>
  <!--    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
             </div>
        </div>
    </div>
-->

</x-app-layout>

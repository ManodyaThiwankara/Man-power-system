<x-app-layout>
 <x-slot name="header">
 <div class="row p-2">

  <div class="col-sm-4">
    <!--post add form-->
    <div class="bg-light text-dark p-5  rounded">
        <div class="d-flex align-items-center ">
            <h3 class="">
                Post your Job
            </h3>
        </div>
        <form method="POST" action="{{route('post.postjob')}}">
            @csrf

           

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Upload Image</label>
                <input type="file" class="form-control shadow-sm" id="image" placeholder="upload your image" name="image">
            </div>
            
            
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control shadow-sm" id="name" placeholder="Enter Name" name="name">
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
            <div class="mb-3 mt-3">
                <label for="sub_category" class="form-label">Sub category:</label>
                <input type="text" class="form-control shadow-sm" id="sub_category" placeholder="Enter sub_category" name="sub_category">
            </div>
            <div class="mb-3 mt-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" class="form-control shadow-sm" id="location" placeholder="Enter location" name="location">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control shadow-sm" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile Number:</label>
              <input type="text" class="form-control shadow-sm" id="mobile" placeholder="Enter mobile number" name="mobile">
            </div>
            <div class="mb-3">
                <label for="comment">Discription:</label>
                <textarea class="form-control shadow-sm" rows="5" id="comment" name="discription"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Post</button>
        </form>
    </div>
</div>
<div class="col-sm-8 ">
    <div class="col-sm-12 bg-light text-dark p-2 rounded overflow-auto" id="cardslot" style="height:150vh; overflow-y:auto;"">

       @foreach($data as $data)
        <div class="col-sm-12 bg-white p-3 mb-1">
            <div class="row">
                <div class="col-3 d-flex justify-content-center">
                <div class="row">
                    <div class="col">
                        <img class="card-img-top" src="images/labour1.jpg" alt="Card image" style="width:100%">
                    </div>
                </div>
                </div>
                <div class="p-2 col">
                    <h5>{{$data->name}}</h5>
                    <p>Looking for <strong>{{$data->category}}</strong>({{$data->sub_category}})</p>
                    <span class="badge bg-light text-dark">{{$data->created_at}}</span>

                    <p>
                    {{$data->discription}}
                    </p>
                    <a href="{{route('job.request', $data->user_id)}}"><button type="button"  class="btn btn-sm btn-dark">Request</button></a>
                    

                    <!-- comment -->
                    <a href="{{route('display.full', $data->id)}}"><button type="submit" class="btn btn-sm btn-warning " href="/jobs/comment" >Show Comment</button></a>
                    

                </div>
            </div>
        </div>
     @endforeach
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

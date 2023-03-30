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
           <form form method="POST" action="{{ url('store-update/'.$post->id) }}">
               @csrf
               @method('PUT')
               <div class="mb-3 mt-3">
                   <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control shadow-sm" id="name" placeholder="Enter Name" name="name" value="{{$post->name}}">
               </div>
               <div class="mb-3 mt-3">
               <label for="sub_category" class="form-label ">Category:</label>
                   <select class="form-select shadow-sm" name="category" value="$post->name">
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
                   <input type="text" class="form-control shadow-sm" id="sub_category" placeholder="Enter sub_category" name="sub_category" value="{{$post->sub_category}}">
               </div>
               <div class="mb-3 mt-3">
                   <label for="location" class="form-label">Location:</label>
                   <input type="text" class="form-control shadow-sm" id="location" placeholder="Enter location" name="location" value="{{$post->location}}">
               </div>
               <div class="mb-3 mt-3">
                   <label for="email" class="form-label">Email:</label>
                   <input type="email" class="form-control shadow-sm" id="email" placeholder="Enter email" name="email"value="{{$post->email}}">
               </div>
               <div class="mb-3">
                 <label for="mobile" class="form-label">Mobile Number:</label>
                 <input type="text" class="form-control shadow-sm" id="mobile" placeholder="Enter mobile number" name="mobile" value="{{$post->mobile}}">
               </div>
               <div class="mb-3">
                   <label for="comment">Discription:</label>
                   <textarea class="form-control shadow-sm" rows="5" id="comment" name="discription" value="">{{$post->discription}}</textarea>
               </div>
               <input type="hidden" value="{{$post->id}}" name="postid">
               <button type="submit" class="btn btn-dark">Update Post</button>
           </form>
       </div>
   </div>
   <div class="col-sm-8 ">
       <div class="col-sm-12 bg-light text-dark p-2 rounded overflow-auto" id="cardslot" style="height:100vh; overflow-y:auto;"">
   
       </div>
   </div>
   
   </div>
   
   </x-slot>

   
   </x-app-layout>
   
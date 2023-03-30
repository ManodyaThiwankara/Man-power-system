<section>

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('My Activities') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your Activities.") }}
        </p>
    </header>

    <div class="container">
        <div class="row mb-2">
            <div class="col-2 bg-light"><strong>Date & Time</strong></div>
            <div class="col-2 bg-light"><strong>Looking for</strong></div>
            <div class="col-5 bg-light"><strong>Discription</strong></div>
            <div class="col-2 bg-light"><strong>Update</strong></div>
        </div>
        @foreach($posts as $post)
        <div class="row">
            <div class="col-2 mx-1" id="date-time">{{$post->created_at}}</div>
            <div class="col-2 mb-1" id="looking-for">{{$post->category}}</div>
            <div class="col-5 mb-1" id="discription">{{$post->discription}}<p class="text-break"></p></div>
            <div class="col-2 mb-1" id="update">
                <div class="btn-group btn-group-sm">
                    <a href="{{route('update.myjob' , $post->id)}}"> <button type="button" class="btn btn-dark" >Update</button></a>
                   
                        <!-- Update Modal -->
                    <a href="{{route('delete.post' , $post->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>    
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>

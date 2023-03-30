<x-app-layout>
    <x-slot name="header">
   
    <div class="bg-light" style="height:83vh;">
    
        <div class="container mt-5">
            <div class="row p-3 m-3">
                <div class="col-sm-2 mb-4">
                <img src="images/pro-photo.jpeg" alt="Profile Picture" class="rounded ">

                <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimgv3.fotor.com%2Fimages%2Fblog-cover-image%2F11-YouTube-Thumbnail-Design-Ideas-to-Catch-More-Attention.jpg&imgrefurl=https%3A%2F%2Fwww.fotor.com%2Fblog%2F11-youtube-thumbnail-design-ideas%2F&tbnid=p0kdQAYA9c9IxM&vet=12ahUKEwiDltal_6H9AhW7N7cAHb2pBm4QMyg5egQIARBz..i&docid=0O1MEEEUNnDqmM&w=732&h=548&q=thumbnail%20image&ved=2ahUKEwiDltal_6H9AhW7N7cAHb2pBm4QMyg5egQIARBz" class="img-thumbnail" alt="job">
                </div>
                <div class="col-sm-8">
                    <h2>{{ $post->name}}</h2>
                    <br>
                    <h5>{{ $post->updated_at}}</h5>
                    <h5>I'm Lokking For <strong> {{ $post->category}} </strong>( {{ $post->Subcategory}} )</h5>
                    <br><br>
                    <p>
                        Hi there..
                    </p>
                    <p class="">{{ $post->discription}}</p>

                    <a href=""><button type="button" class="btn btn-dark btn-sm">Send request</button></a>
        
                </div>
            </div> 
            
            
            <div class="row p-3 m-3">
                <div class="col-sm-2">
                    <h5>Comments</h5>
                </div>
                <div class="col-sm-8">
                    <form action="{{route('comment.post')}}" method="POST">
                        @csrf
                        <div class="row">
                            
                            <div class="col-sm-5">
                                
                                <input type="text" class="form-control form-control-sm" id="comment" placeholder="type something" name="comment">
                                <input type="hidden" value="{{$post->id}}" name="postid">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-dark btn-sm">comment</button>
                            </div>
                            
                        </div> 
                    </form>  
                    <br>
                    <div class="overflow-auto">
                     @foreach ($comment as $comments)
                        <div class="col-sm-9 p-2 m-1 bg-white rounded border border-1">
                           <h6><strong>{{$comments->user_name}}</strong></h6>
                           <h6>{{$comments->comment}}</h6>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>                                  
        </div>

    </div>
   
    </x-slot>
</x-app-layout>

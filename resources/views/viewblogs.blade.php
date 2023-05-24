@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
                       
     <br>
     <br>            

    <div class="col-xl-6 col-md-9">
                                
        <h3 style="margin-left:25px;"> All Blogs </h3>
        <br>
        <br>
        
        @foreach($posts as $post)
            <div style="background-color:antiquewhite;padding:10px;margin:20px;">
            <h3>{{$post['title']}}</h3>
               {{$post['body']}}
               
               <p> <a href="/edit-post/{{$post->id}}">Edit</a></p>



               <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger"> Delete</button>
               </form>
        </div>
        @endforeach

    
    
    
        
                
              

                                
     </div>
            
</div>
                    
@endsection

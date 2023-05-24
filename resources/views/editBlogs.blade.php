@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
                       
     <br>
     <br>            

    <div class="col-xl-6 col-md-9">
                                
        <h3 style="margin-left:25px;"> Edit Blogs </h3>
        <br>
        <br>
        <form acction="/edit-post/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}">
            <textarea name="body">{{$post->body}}</textarea>
            <button class="btn btn-primary">Edit</button>


        </form>
    

                                
     </div>
            
</div>
                    
@endsection

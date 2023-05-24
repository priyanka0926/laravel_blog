@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
                       
     <br>
     <br>            

    <div class="col-xl-6 col-md-9">
                                
        <h3 style="margin-left:25px;"> Create a new post </h3>
        <br>
        <br>
        
        <div class="col-md-6">
        <form action="{{route('create-post')}}" method="POST">
       /* @if(Session::has('success'))
          <!---- <div class="alert alert-success">{{Session::get('success')}}</div> ---->
        @endif

        @if(Session::has('fail'))
       <!----    <div class="alert alert-danger">{{Session::get('fail')}}</div> --->
        @endif*/


            @csrf
            <div class="mb-6">
              <label for="email" class="form-label">Enter Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"  value="title">
 
    
            </div>

             <div class="mb-6">
              
              <textarea name="body" value="content....."></textarea>
             </div>
           <button type="submit" class="btn btn-primary" name="create_post">create post</button>
             <br>
           
        </form>
    </div>
                
              

                                
     </div>
            
</div>
                    
@endsection

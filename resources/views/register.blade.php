<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Blog Application</title>
  </head>
  <body>
    
    <div class="container">

     
       <div class="row">
		<div class="col-md-6 mt-4">
			<h1 class="text-center">Register</h1>
      <hr>
       </div>	
    </div>	
    <div class="col-md-6">
    <form action ="{{route('register-user')}}" method="POST">
        @if(Session::has('success'))
           <div class="alert alert-success">{{Session::get('success')}}</div> 
        @endif

        @if(Session::has('fail'))
           <div class="alert alert-danger">{{Session::get('fail')}}</div> 
        @endif


        @csrf
       <div class="mb-3">
          <label for="name" class="form-label">Enter Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" >
           <span class="text-danger"> @error('name'){{$message}} @enderror </span>
     </div>
     
      <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
           <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
           <span class="text-danger"> @error('email'){{$message}} @enderror </span>
    
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Password</label>
           <input type="password" class="form-control" id="password" name="password">
           <span class="text-danger"> @error('password'){{$message}} @enderror </span>
      </div>

      
	      
       <button type="submit" class="btn btn-primary">Register</button>
       <br>
       <a href="/login">Login</a>
        
   </form>
       </div>
   </div>


  </body>
</html
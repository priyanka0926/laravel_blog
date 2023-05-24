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
			<h1 class="text-center">login</h1>
      <hr>
       </div>	
    </div>
    <div class="col-md-6">
        <form action="{{route('login-user')}}" method="POST">
        @if(Session::has('success'))
           <div class="alert alert-success">{{Session::get('success')}}</div> 
        @endif

        @if(Session::has('fail'))
           <div class="alert alert-danger">{{Session::get('fail')}}</div> 
        @endif


            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Enter Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{old('loginemail')}}">
              <span class="text-danger"> @error('email'){{$message}} @enderror </span>
    
           </div>

            <div class="mb-3">
              <label for="password" class="form-label">Enter Password</label>
              <input type="password" class="form-control" id="Password" name="password">
              <span class="text-danger"> @error('password'){{$message}} @enderror </span>
           </div>
           <button type="submit" class="btn btn-primary" name="login">Login</button>
             <br>
             <a href="/register">New user Register </a>
        </form>
    </div>
</body>
</html>
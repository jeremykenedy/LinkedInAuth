<html lang="en">
<head>
    <title>Laravel Linkedin Authentication</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
<div class="container">
      <h2>Laravel Linkedin Authentication</h2><br/>
      <form method="post" action="{{ url('/login') }}">
        @csrf
        <div class="row">
        <div class="col-md-4"></div>        
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
        <div class="col-md-4"></div>        
            <div class="form-group col-md-4">
              <label for="Password">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>          
            <div class="form-group col-md-4">
            <input type="checkbox" name="remember"> Remember Me
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4">
                    <a href="{{ url('/redirect') }}" class="btn btn-primary btn-block">Login With Linkedin</a>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4">
                     <button type="submit" class="btn btn-success btn-block">Login</button>
                </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>          
            <div class="form-group col-md-4">
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
          </div>
      </form>
    </div>
</body>
</html>
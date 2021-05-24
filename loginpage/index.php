<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Admin Login Page</title>
</head>
 
<body>
    <div class="wrapper">
     <div class="container">
          <div class="login-left">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <h2>TOP Malaysian University Ranking</h2>
                    <p>Here the login page for an authenticate admin account</p>
            </div>
      <form action="validate.php" method="post">
        <form class="login-form">
         <span class="form-title">Log in</span>
         <h5>Fill in with your authenticate login details<h5/>
             <div class="form-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="text" class="form-control" placeholder="Username"
                         name="username" value="">
              </div>
             <div class="form-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" class="form-control" placeholder="Password"
                         name="password" value="">
              </div>
             <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary btn-lg btn-block" value="Login">
               </div>
         </form>
         </div>
       </div>
    <div id="background"></div>
</body>
</html>
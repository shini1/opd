
<!DOCTYPE html>
<html>
<head>
<title> REGISTRATION FORM</title>
<link rel="stylesheet" type="text/css" href=".../css/bootstrap.css"
<link rel="stylesheet" type="text/css" href=".../css/styl1.css"

      
</head>
<body>
    <br>
    <div class="form-group col-md-6">
    <div class="panel panel-primary">
         
        <div class="panel-heading"></div>
        <h1 class="myheading"> Registration form </h1>
        <div class="panel-body">
            
    <form action="process.php" method="post">
        <div class="form-group" >
        First name :
        <input type="text" class="form-control" name="first_name" />
        </div>
        <br>
        <div class="form-group" >
        Last name : <input type="text" class="form-control" name="last_name" />
        </div>
        <br>
        <div class="form-group" >
        User ID     : <input type="text" class="form-control" name="user_id" />
        </div>
        <br>
        <div class="form-group" >
        Password  : <input type="password" class="form-control" name="password" />
        </div>
         <br><br>
         <button class="btn btn-primary" type="submit">Submit 
         </button>
     </form>
    </div>
    </div>
    </div>
</body>
</html>


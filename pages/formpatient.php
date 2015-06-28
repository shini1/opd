<!DOCTYPE html>
<html>
<head>
<title> REGISTRATION FORM</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"
<link rel="stylesheet" type="text/css" href="../css/style.css"

      
</head>
<body>
    <br>
    <div class="form-group col-md-6">
    <div class="panel panel-primary">
         <div class="panel-heading"><h1 class="myheading"> Registration form </h1> </div>
         
        
        <div class="panel-body">
            
            <form action="patientprocess.php" method="post">
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
        <br>
         <div class="form-group" >
        Place     : <textarea rows="1" class="form-control" cols="10" name="place">
        </textarea>
        </div>
        <br>
        <div class="form-group" >
        Email     : <textarea rows="1" class="form-control" cols="20" name="email">
        </textarea>
        </div>
        <br>
         <div class="form-group" >
            Address    : <textarea rows="3" class="form-control" cols="30" name="address">
             </textarea>
        </div>
        <br>
         <div class="form-group" >
            Phone No  : <textarea rows="1" class="form-control" cols="30" name="phn">
             </textarea>
        </div>
         <br>
        <div class="form-group" >
         Age  : <textarea rows="1" class="form-control" cols="5" name="age">
        </textarea>
        </div>
        
         <br>
         Sex :
         <input type="radio" name="sex" value="Male">Male 
         <input type="radio" name="sex" value="Female">Female
         <br><br>
         <button class="btn btn-primary" type="submit">Submit 
         </button>
        
        
    
      
            </form></div></div></div>
</body>
</html>


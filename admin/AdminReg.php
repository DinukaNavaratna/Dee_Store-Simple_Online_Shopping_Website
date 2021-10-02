<!DOCTYPE html>
<html xmlns="">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #fec2b0;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="img/bblogo31.jpg" />
            </div>
        </div>
         <div class="row ">
         	<style>
         		input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

.button {
  background-color: #B2BEB5; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


</style>
         	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" action="php/adminReg.php" method="POST">
                                	<hr><h4> Enter register details</h4>

                                	<label for="name">First Name</label>
    								<input type="text" id="name" name="name" placeholder="Your name..">

   									 <label for="username">User Name</label>
    							<input type="text" id="username" name="username" placeholder="Your User name..">

    							<label for="psw">Password</label>
   							<input type="text" id="psw" name="psw" placeholder="Your  Password..">



    							<input class="button" type="submit" name="submit" value="submit">

 

                                </form>

<?php

$connection = oci_connect('NISH69', 'NISH69', 'localhost/XE');
ob_start();

session_start();


if(isset($_POST['u']) && isset($_POST['p']) && isset($_POST['r']))
{

    $u=$_POST['u'];
    $p=($_POST['p']);

 $r=($_POST['r']);

    if(!empty($u) && !empty($p)&& !empty($r))
    {
       
       $q="SELECT username,password ,role FROM log_in WHERE username='$u' AND password ='$p'  AND role='$r'  ";
 echo "$q\n";
       $qe=oci_parse($connection,$q);

       oci_execute($qe);

      echo  $num=oci_fetch_all($qe, $out);

       if($num==1)
       {
       	  $_SESSION['user_name']=$u;
       	  $_SESSION['password']=$p;
		    $_SESSION['role']=$r;

       	  header('Location:index.php');
       }
       else
       {
       	  echo  "<div class='alert alert-warning alert-dismissible' role='alert'>

  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>

  <strong><center>Warning!User Not Registered.</center></strong>

</div>";
       }


    }
    else
    {

    	 echo  "<div class='alert alert-warning alert-dismissible' role='alert'>

  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>

  <strong><center>Warning!Plzz Give Correct Username & Password Combination.</center></strong>

</div>";

    }

}





?>

<style type="text/css">


.b{
  
  background-image: url('image/b.jpg');
  background-repeat: repeat;

}
	










</style>


<html>

<head>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css" >


<link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Tangerine">



<script src="jquery.min.js"></script>

<!-- bootstrap -->
<script src="bootstrap.min.js"></script>




</head>

<body class="b">

<div class="n">
	
<div class="col-xs-30" style="height:30px;background-color: "></div>
<div class="container">
  
  <img class="img-responsive" src="RobiBanner.png" alt="Chania" width="100%" height="15%"> 
</div>

<div class="col-xs-12" style="height:10px;background-color: "></div>






<h1 style=" text-align: center;     margin-top: 62px;
    margin-bottom: 43px; ">LOG IN</h1>

</div>

<div class="col-lg-4 col-lg-offset-4 ">
  
<form class="log-in.php" method="POST">
  
<div class="form-group">

<label for="" style=" font-size: 22px;">Username:</label> 
 <input type="text" class="form-control" id="u" name="u" placeholder="Enter Username">
</div>

<div class="form-group">

<label for="" style=" font-size: 22px;">Password:</label> 
 <input type="password" class="form-control" id="p" name="p" placeholder="Enter Password">
</div>

<div class="checkbox">
    <label>
      <input type="checkbox"> Remember
    </label>
  </div>

	
	
	
	
	
		
    <div class="control-group">
      <!-- Username -->
    <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-weight: bold;
		font-family:  Arial, Helvetica, sans-serif;
		width: 10%;">ROLE:
	</label>
      
	<div class="controls">

		<select class="form-control" id="r" name="r" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-family:  Arial, Helvetica, sans-serif;
		font-size: 18px;
		width: 100%;">
		<option>Assigner</option>
		<option>Executer</option>
	
		</select>
	</div>
	</div>
	
	
	

	
	

 <input type="submit" class="btn btn-primary " style="     margin-left: 56px;
    margin-top: 28px; margin-bottom: 25px;" value='LOG IN' >



</form>


</div>


</div>





</body>

</html>


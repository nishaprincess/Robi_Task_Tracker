

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
		<img src="robibanner.png" alt="robi" width="100%" height="15%">
		
<form method="post" action="Log-In.php">
	
	
		<a href="log_out.php">Logout</a>


		
		
		
	<div class="header">
		<h2>HOME PAGE</h2>
	</div>
	
<form method="post" action="register.php">
	<div class="row">
		<button type="submit" class="app-button" name="user1" formaction="create_task.php">REQUEST NEW TASK</button>
		<button type="submit" class="app-button" name="user2"formaction="ongoing.php">VIEW ONGOING TASKS</button>
	</div>
	
	<div class="col-xs-12" style="height:25px;"></div>
	
	<div class="row">
	<?php
	session_start();
 $r=$_SESSION['role'];
 $i=$_SESSION['user_name'];
 
 $_SESSION['uid']=$i;
 if($r=='Assigner')
	 echo '<button type="submit" class="app-button" name="user3"  formaction="task_view.php"  >VIEW NEW REQUESTS</button>';
 else
	echo'<button type="submit" class="app-button" name="user3"  formaction="executer_view.php"  >VIEW NEW REQUESTS</button>'; 


?>
		
		<button type="submit" class="app-button" name="user4" formaction="all.php">VIEW ALL TASKS </button>
	</div>
		
</form>
</body>
</html>

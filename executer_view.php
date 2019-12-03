<?php

session_start();
$uid=$_SESSION['uid'];


echo'<!DOCTYPE html>

<html lang="en">

<div class="container">
  
  <img class="img-responsive" src="RobiBanner.png" alt="Chania" width="100%" height="15%"> 
</div>

<div class="col-xs-12" style="height:10px;background-color: "></div>



<form class="form-horizontal" action="assign_executer_view.php" method="post" 
	style="margin-left: 25%;
	margin-right:25%;
	width: 50%;">
 
	<fieldset>
	<div class="form-group">
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:Arial,Helvetica,sans-serif;">*UID:
	</label> 
	
		<input type="text" class="form-control" id="uid" name="uid" 
		placeholder="" 
		value='.$uid.'
		style="margin-right:20px"
		readonly>
		<button type="submit" id= "btn" name="btn" style="background-color: #ff0000;
	
    display: inline-block;
	border-radius: 4px;
	font-weight: bold;
	border: none;
	color: black;
	text-align: center;
	font-size: 22px;
	padding: 20px;
	width: 200px;
	margin: 5px;
	margin-left:auto;
	margin-right:auto;
	display:block;
	margin-top:2%;
	margin-bottom:0% width:20%; height:20%">SHOW TASKS</button> 
	  </fieldset>
  
 
</form>';
?>

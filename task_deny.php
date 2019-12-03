<?php
$subjectId  = $_GET['id'];


echo'<!DOCTYPE html>
<html lang="en">

<div class="container">
  
  <img class="img-responsive" src="RobiBanner.png" alt="Chania" width="100%" height="15%"> 
  <div class="col-xs-12" style="height:30px;background-color: ">
</div>

   <form class="form-horizontal" action="deny_insert.php" method="post" 
	style="margin-left: 25%;
	margin-right:25%;
	width: 50%;">
    <fieldset>  
   <div class="form-group">
	
	<label for="" style=" 
	font-size: 22px;
	margin-right:22px;
	font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;">TASK_ID:
	
	</label> 
	<div class="col-xs-12" style="height:30px;background-color: ">
		</div>
	
		<input type="text"  id="taskid" name="taskid" 
		placeholder="" 
		style="border-width: 0; width: 100%;font-size: 22px;border-color: transparent;"
		value= "'.$subjectId.'"  readonly>
		<div class="col-xs-12" style="height:30px;background-color: ">
		</div>
		<div class="form-group">
	
	<label for="" style=" 
	font-size: 22px;
	margin-right:22px;
	font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;">JUSTIFICATION:
	</label> 
	<div class="col-xs-12" style="height:30px;background-color: ">
	</div>
		<textarea 
			class="input" rows="10" cols="10"  style="width:100%; height:100px; font-size: 22px;" 
			name="just"   
			id="just">
		</textarea>
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
	margin-bottom:0% width:30%; height:30%">SUBMIT</button> 
		</fieldset>
		</form>
		
		'

?>
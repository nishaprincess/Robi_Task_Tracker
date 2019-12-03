<!DOCTYPE html>

<html lang="en">

<div class="container">
  
  <img class="img-responsive" src="RobiBanner.png" alt="Chania" width="100%" height="15%"> 
</div>

<div class="col-xs-12" style="height:10px;background-color: "></div>

<style>
table,th,td{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    
}
table{
    
    width: 100%;
}

td,th {
    border: 1px solid black;
    padding: 15px;
	
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;
cursor:pointer;
}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #ff0000;
    color: white;
}
</style>

</body>
</html>

<?php
session_start();

$subjectId  = $_SESSION['var'];

$Id  = $_GET['id'];


$conn = oci_connect("NISH69", "NISH69", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sti = oci_parse($conn, "SELECT  *FROM NISH69.NEWTASK WHERE TASKID='$Id' ");
oci_execute($sti); // Use OCI_DESCRIBE_ONLY if not fetching rows
$ncols = oci_num_fields($sti);
while(($row = oci_fetch_array($sti,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
	
	
	echo '
	
	<form class="form-horizontal" action="" method="post" 
	style="margin-left: 25%;
	margin-right:25%;
	width: 50%;">
 
	<fieldset>
  
    <label for="" style=" font-size: 32px;background-color:#ff0000;		display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-weight: bold;
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		width: 100%;">DETAILS OF REQUEST
	</label> 
	<div class="col-xs-12" style="height:30px;"></div>
 <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-weight: bold;
		font-family:  Arial, Helvetica, sans-serif;
		width: 10%;">Task ID:
	</label>
	
    <div class="controls">
	
		<input type="text" class="form-control" id="name" name="name" 
		style="
		border-width:0;
		border-color:transparent
		white-space: nowrap;
		text-overflow: ellipsis;
		font-size: 18px;
		width:100%;"
		font-size: 18px;
		value="'.$row['TASKID'].'" class="field left" readonly>
        
    </div>	
	
    <div class="col-xs-12" style="height:30px;"></div>
	
	<label for="" style=" font-size: 22px;background-color: #ff0000;   display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
    width: 100%;">REQUESTED BY</label>  
	
	<div class="col-xs-12" style="height:30px;"></div>
	
	<div class="form-group">
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:Arial,Helvetica,sans-serif;">Name:
	</label> 
	
		<input type="text" class="form-control" id="name" name="name" 
		style="margin-right:20px;border-width:0;font-size: 18px;border-color:transparent"
		
		value="'.$row['NAME'].'" class="field left" readonly>
		
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:Arial,Helvetica,sans-serif;">Dept:
	</label> 
	
		<input type="text" class="form-control" id="name" name="name" 
		style="margin-right:20px;border-width:0;font-size: 12px;border-color:transparent"
		
		value="'.$row['DEPT'].'" class="field left" readonly>
		
	</div>

	<div class="form-group">
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:Arial,Helvetica,sans-serif;">Email:
	</label> 
	
		<input type="text" class="form-control" id="name" name="name" 
		style="margin-right:20px;font-size: 18px;border-width:0;border-color:transparent"
		
		value="'.$row['EMAIL'].'" class="field left" readonly>

	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:Arial,Helvetica,sans-serif;">Contact No:
	</label> 
	
		<input type="text" class="form-control" id="name" name="name" 
		style="margin-right:20px;border-width:0;font-size:12px;border-color:transparent"
		
		value="'.$row['PHN'].'" class="field left" readonly>
	</div>
	
	
		
	 
	<label for="" style=" font-size: 22px;background-color: #ff0000;   display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
		font-weight: bold;
		font-family: "Times New Roman", Times, serif;
		width: 100%;">Task Description
	</label>  
	
	<div class="col-xs-12" style="height:10px;background-color: "></div>
  
    <div class="control-group">
      
	<!-- Username -->
    <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-weight: bold;
		font-family:  Arial, Helvetica, sans-serif;
		width: 10%;">Task Name:
	</label>
	
    <div class="controls">
	
		<input type="text" class="form-control" id="name" name="name" 
		style="
		border-width:0;
		border-color:transparent
		white-space: nowrap;
		text-overflow: ellipsis;
		font-size: 18px;
		width:100%;"
		font-size: 18px;
		value="'.$row['TASKNAME'].'" class="field left" readonly>
        
    </div>
    </div>
	
	
	<div class="col-xs-12" style="height:10px;background-color: "></div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
	font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;
    width: 10%;">Description:
	</label>
		
		<input type="text"  id="desc" name="desc" 
		style="
		border-width:0;
		border-color:transparent
		white-space: nowrap;
		text-overflow: ellipsis;
		font-size: 18px;
		width:100%;"
		font-size: 18px;
		value="'.$row['DESCRIPTION'].'" class="field left" readonly>
	   
        
	<div class="col-xs-12" style="height:10px;background-color: "></div>
	<label for="" style=" font-size: 22px;background-color: #ff0000;   display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
	font-weight: bold;
    font-family: "Times New Roman", Times, serif;	
    width: 100%;">TASK ASSIGNMENT</label>
	<div class="col-xs-12" style="height:10px;background-color: "></div>
    </div>
    </div>
	
	<div class="col-xs-12" style="height:10px;background-color: "></div>
	
    <div class="control-group">
      <!-- Username -->
    <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-weight: bold;
		font-family:  Arial, Helvetica, sans-serif;
		width: 10%;">Assigned sector:
	</label>
      
	<div class="controls">

		<input type="text" class="input-xlarge" id="sector" name="sector" 
		style="
		border-width:0;
		border-color:transparent
		white-space: nowrap;
		text-overflow: ellipsis;
		font-size: 18px;
		width:100%;
		font-size: 18px;"
		value="'.$row['SECTOR'].'" class="field left" readonly>
	</div>
	</div>
	</div>
	
	<div class="col-xs-12" style="height:10px;background-color: "></div>
	
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;
    width: 10%;">Assigned to:</label>
	
     <div class="controls">
     <input type="text" id="nameAssigned" name="nameAssigned" placeholder="" class="input-xlarge" style=" 
    border-width:0;
	border-color:transparent
	white-space: nowrap;
    text-overflow: ellipsis;
	font-size: 18px;
    width: 100%;"
	value="'.$row['NAMEASSIGNED'].'" class="field left" readonly>
     </div>
    </div>
	
	
	<a class="button"  style="background-color: #ff0000;
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
	margin-bottom:0% width:20%; height:20%"href="http://localhost/ROBI%20TRACKER/executer_view.php">BACK</a> 
	
	
	
	
 
  </fieldset>
  
 
</form>

	';
	
}

?>











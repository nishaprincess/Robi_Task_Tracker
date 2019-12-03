<!DOCTYPE html>
<html lang="en">

<div class="container">
  
  <img class="img-responsive" src="RobiBanner.png" alt="Chania" width="100%" height="15%"> 
</div>

<div class="col-xs-12" style="height:10px;background-color: "></div>

</body>
</html>

	<form class="form-horizontal" action="task_insert.php" method="get" 
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
		width: 100%;">CREATE TASK
	</label>  
	
    <div class="col-xs-12" style="height:30px;"></div>
	
	<label for="" style=" font-size: 22px;background-color: #ff0000;   display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
    width: 100%;">SELF DESCRIPTION</label>  
	
	<div class="col-xs-12" style="height:30px;"></div>
	
	<div class="form-group">
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:Arial,Helvetica,sans-serif;">*Name:
	</label> 
	
		<input type="text" class="form-control" id="name" name="name" 
		placeholder="" 
		style="margin-right:20px"
		required>
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;">Dept:
	</label> 
		<input type="text" class="form-control" id="dept" name="dept" placeholder="">
		
		<div class="col-xs-12" style="height:30px;"></div>
		
	</div>

	<div class="form-group">
	
	<label for="" style=" 
	font-size: 18px;
	font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;">*Email:
	</label> 
		<input type="text" class="form-control" id="email" name="email" 
		placeholder="" 
		style="margin-right:20px"
		required>

	<label for="" style=" 
	font-size: 18px; 
	font-weight: bold;
	font-family:  Arial, Helvetica, sans-serif;">Contact No:
	</label> 
		<input type="text" class="form-control" id="phn" name="phn" placeholder="">
		<div class="col-xs-12" style="height:30px;"></div>
	</div>
	 
	<label for="" style=" font-size: 22px;background-color: #ff0000;   display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
		font-weight: bold;
		font-family: "Times New Roman", Times, serif;
		width: 100%;">TASK DESCRIPTION
	</label>  
	
	<div class="col-xs-12" style="height:10px;background-color: "></div>
  
    <div class="control-group">
      
	<!-- Username -->
    <label class="control-label"  for="username" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-weight: bold;
		font-family:  Arial, Helvetica, sans-serif;
		width: 10%;">*Task Name:
	</label>
	
    <div class="controls">
	
		<input type="text"  id="taskName" name="taskName" placeholder="" class="input-xlarge" style=" 
		white-space: nowrap;
		text-overflow: ellipsis;
		font-size: 18px;
		width:100%;"
		required>
        
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
		<div class="controls">
		<textarea 
			class="input" rows="10" cols="10"  style="width:100%; height:100px; font-size: 18px;" 
			name="desc"   
			id="desc">
		</textarea>
	   
        
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

		<select class="form-control" id="sector" name="sector" style=" font-size: 18px;  display: block;
		white-space: nowrap;
		text-overflow: ellipsis;
		font-family:  Arial, Helvetica, sans-serif;
		font-size: 18px;
		width: 100%;">
		<option>Planning</option>
		<option>Implementation</option>
		<option>Optimization</option>
		<option>Network Assurance</option>
		</select>
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
    white-space: nowrap;
    text-overflow: ellipsis;
	font-size: 18px;
    width: 100%;">
     </div>
    </div>
	
	
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








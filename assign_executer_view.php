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
$UID  = $_POST['uid'];
$_SESSION['var']=$UID;



$conn = oci_connect("NISH69", "NISH69", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}


$sti = oci_parse($conn, "SELECT  *FROM NISH69.ASSIGN_FORMIN WHERE ASSIGNEDPERSON='$UID'" );
oci_execute($sti); // Use OCI_DESCRIBE_ONLY if not fetching rows
$ncols = oci_num_fields($sti);
echo "<table border=\"1\">\n";

echo "<tr>";
  
    echo "<th>TASKID</th>";
    echo "<th>ASSIGNEDSECTION</th>";  
	echo "<th>ASSIGNEDPERSON</th>"; 
    echo "<th>GIVEN_BY</th>";	
	echo "<th>REMARKS</th>";  
	echo "<th>DATE</th>";
    echo "<th>STATUS</th>";	
	echo "<th>button</th>";
    //echo "<td>$column_type</td>";
echo "</tr>\n";



while(($row = oci_fetch_array($sti,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
	
   echo '<tr>
        <td><a href="executer_task_details.php?id='.$row["TASKID"].'">'.$row['TASKID'].'</a></td>
        <td>'.$row['ASSIGNEDSECTION'].'</a></td>
        <td>'.$row['ASSIGNEDPERSON'].'</td>
        <td>'.$row['GIVENBY'].'</td>
		<td>'.$row['REMARKS'].'</td>
		<td>'.$row['DATE_BY'].'</td>
		<td>'.$row['STATUS'].'</td>
		<td><a class="button" href="http://localhost/ROBI%20TRACKER/assign_delete.php?id='.$row["TASKID"].'">DONE</a> </td>
   </tr>';
}

echo "</table>\n";



oci_free_statement($sti);


oci_close($conn);

echo '<a class="button"  style="background-color: #ff0000;
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
	margin-bottom:0% width:15px; height:15px"href="http://localhost/ROBI%20TRACKER/index.php">HOME</a> ';


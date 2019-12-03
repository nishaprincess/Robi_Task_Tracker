


<?php



$conn = oci_connect('NISH69', 'NISH69', 'localhost/XE');
ob_start();

session_start();

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$q = "SELECT TASKID, TASKNAME,DEPT,
NAME,DATE_BY, STATUS from NEWTASK  natural join ASSIGN_FORMIN2";
		
$stid = oci_parse($conn,$q );

oci_execute($stid);


?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	
}
th, td {
    padding: 15px;
	
	
}
th {
   
	background-color: #ff0000;
	
}
</style>



</head>
<body>
	
	<img src="robibanner.png" alt="robi" width="100%" height="25%">
	
	
	<div class="header">
		<h2>All Tasks </h2>
	</div>	
	
	<table class="data-table" WIDTH="100%">
		<caption class="title">All Tasks </caption>
		<thead>
			<tr>
			    <th>Task ID</th>
				<th>Task Name</th>
				<th>Requested By</th>
				<th>Requesting Dept</th>
				<th>Completation date</th>
				<th>status</th>
				
			</tr>
		</thead>
		<tbody>
		<?php

		$no 	= 1;
		$total 	= 0;
		$lop1="hello";
		
        

		
		while ($row = oci_fetch_array($stid, OCI_ASSOC ))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					
					<td>'.$row['TASKID'].'</td>
					<td>'.$row['TASKNAME'].'</td>
					
					
					
					<td>'.$row['NAME'].'</td>
					<td>'.$row['DEPT'].'</td>
					<td>'.$row['DATE_BY'].'</td>
					<td>'.$row['STATUS'].'</td>


					
				</tr>';

				
				

	
				
				
			$lop1=$row['TASKNAME'];
			
			//$total += $row['amount'];
			$no++;
			//$lop=$row['TASKNAME'];
		}
		

			

		
		



		
		?>
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
	
	<div class="col-xs-12" style="height:20px;background-color: "></div>
	<a href="index.php">Homepage</a>	

	
</body>
</html>
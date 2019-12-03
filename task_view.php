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


//$subjectId  = $_GET['id'];
//echo $subjectId;
$conn = oci_connect("NISH69", "NISH69", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}


$sti = oci_parse($conn, "SELECT  *FROM NISH69.NEWTASK where done='undone'");
oci_execute($sti); // Use OCI_DESCRIBE_ONLY if not fetching rows
$ncols = oci_num_fields($sti);
echo "<table border=\"1\">\n";

echo "<tr>";

    echo "<th>Taskname</th>";  
	echo "<th>Requested By</th>";  
	echo "<th>Department</th>";  
    //echo "<td>$column_type</td>";
echo "</tr>\n";



while(($row = oci_fetch_array($sti,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
	
   echo '<tr>
        <td><a href="task_details.php?id='.$row["TASKNAME"].'">'.$row['TASKNAME'].'</a></td>
        <td>'.$row['NAME'].'</td>
        <td>'.$row['DEPT'].'</td>
   </tr>';
}

echo "</table>\n";



oci_free_statement($sti);


oci_close($conn);

echo '<!DOCTYPE html>
</!DOCTYPE html>
<html>


<body>

<div class="col-xs-12" style="height:10px;background-color: "></div>

<a href="index.php">Homepage</a>

</body>
</html>';


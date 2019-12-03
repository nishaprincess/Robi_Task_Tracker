<?php

echo 'inserted';




 $c1 = oci_connect("NISH69", "NISH69", 'localhost/XE');
 $TASKID = $_POST['taskid'];
 $JUSTIFICATION = $_POST['just'];
 
 
$stmt= "INSERT INTO DENY(TASKID,JUSTIFICATION)VALUES('$TASKID','$JUSTIFICATION')";
$stid=oci_parse($c1, $stmt);

oci_execute($stid); 


header('Refresh:0; URL=http://localhost/ROBI%20TRACKER/index.php?id= ');
EXIT;

?>







































<?php

echo 'inserted';




 $c1 = oci_connect("NISH69", "NISH69", 'localhost/XE');
 $SERIAL = $_POST['task_id'];
 $ASSIGNEDSECTION = $_POST['section'];
 $ASSIGNEDPERSON= $_POST['assignedperson'];
 $GIVEN_BY= $_POST['givenby'];
 $REMARKS= $_POST['remarks'];
 $DATE_BY= $_POST['edob'];
 
$stmt= "INSERT INTO ASSIGN_FORMIN(TASKID,ASSIGNEDSECTION ,ASSIGNEDPERSON,GIVENBY,REMARKS,DATE_BY,STATUS)VALUES('$SERIAL','$ASSIGNEDSECTION','$ASSIGNEDPERSON','$GIVEN_BY','$REMARKS',TO_DATE('$DATE_BY','YYYY-MM-DD'),'ongoing')";
$stid=oci_parse($c1, $stmt);

oci_execute($stid); 
$stmt2= $stmt= "INSERT INTO ASSIGN_FORMIN2(TASKID,ASSIGNEDSECTION ,ASSIGNEDPERSON,GIVENBY,REMARKS,DATE_BY,STATUS)VALUES('$SERIAL','$ASSIGNEDSECTION','$ASSIGNEDPERSON','$GIVEN_BY','$REMARKS',TO_DATE('$DATE_BY','YYYY-MM-DD'),'ongoing')";
$stid2=oci_parse($c1, $stmt2);

oci_execute($stid2); 

header('Refresh:0; URL=http://localhost/ROBI%20TRACKER/assign_taskk.php?id= ');
EXIT;

?>







































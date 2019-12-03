<?php

echo 'inserted';

$c1 = oci_connect("NISH69", "NISH69", 'localhost/XE');
$NAME=$_POST['name'];
$DEPT=$_POST['dept'];
$EMAIL=$_POST['email'];
$PHN=$_POST['phn'];
$TASKNAME=$_POST['taskName'];
$DESC=$_POST['desc'];
$SECTOR=$_POST['sector'];
$NAMEASSIGNED=$_POST['nameAssigned'];
$DONE='undone';

$stmt= "INSERT INTO NISH69.NEWTASK(NAME,DEPT,EMAIL,PHN,TASKNAME,DESCRIPTION,SECTOR,NAMEASSIGNED,DONE) VALUES (:NAME_bv,:DEPT_bv,:EMAIL_bv,:PHN_bv,:TASKNAME_bv,:DESC_bv,:SECTOR_bv,:NAMEASSIGNED_bv,:DONE_bv)";
$s=oci_parse($c1, $stmt);
oci_bind_by_name($s, "NAME_bv", $NAME);
oci_bind_by_name ($s, "DEPT_bv", $DEPT);
oci_bind_by_name($s, "EMAIL_bv", $EMAIL);
oci_bind_by_name($s, "PHN_bv", $PHN);
oci_bind_by_name($s, "TASKNAME_bv", $TASKNAME);
oci_bind_by_name($s, "DESC_bv", $DESC);
oci_bind_by_name($s, "SECTOR_bv", $SECTOR);
oci_bind_by_name($s, "NAMEASSIGNED_bv", $NAMEASSIGNED);
oci_bind_by_name($s, "DONE_bv", $DONE);
oci_execute($s); 
header('Refresh: 2; URL=http://localhost/ROBI%20TRACKER/index.php');	
EXIT;

?>
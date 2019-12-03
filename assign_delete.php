<?Php



require 'testoracle.php';


$id=$_GET['id'];

$q="DELETE ASSIGN_FORMIN where TASKID='$id'";

 if($qp=oci_parse($connection,$q))
 {
  
  oci_execute($qp);
 
  

header('Refresh:0; URL=http://localhost/ROBI%20TRACKER/executer_view.php?id= ');
 }

?>
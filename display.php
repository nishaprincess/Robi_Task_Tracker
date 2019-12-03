<?php
// etc.
$conn = oci_connect("NISH69", "NISH69", 'localhost/XE');



$lobs = cubrid_lob_get($conn, "SELECT
          *
        FROM
          mylobs
        WHERE ID=1");
echo "Doc size: ".cubrid_lob_size($lobs[0])." bytes";
cubrid_lob_export($conn, $lobs[0], "C:\xampp\htdocs\ROBI TRACKER\mu");
cubrid_lob_close($lobs);
cubrid_disconnect($conn);
// etc.
?>


       <?php
// connect to DB etc...
$conn = oci_connect("NISH69", "NISH69", 'localhost/XE');
$sql = "INSERT INTO
        mylobs
          (
            id,
            mylob
          )
       VALUES
          (
            mylobs_id_seq.NEXTVAL,
            --Initialize as an empty CLOB
            EMPTY_CLOB()
          )
       RETURNING
          --Return the LOB locator
          mylob INTO :mylob_loc";

$stmt = oci_parse($conn, $sql);

// Creates an "empty" OCI-Lob object to bind to the locator
$myLOB = oci_new_descriptor($conn, OCI_D_LOB);

// Bind the returned Oracle LOB locator to the PHP LOB object
oci_bind_by_name($stmt, ":mylob_loc", $myLOB, -1, OCI_B_CLOB);

// Execute the statement using , OCI_DEFAULT - as a transaction
oci_execute($stmt, OCI_DEFAULT)
    or die ("Unable to execute query\n");
    
// Now save a value to the LOB
if ( !$myLOB->save('INSERT: '.date('H:i:s',time())) ) {
    
    // On error, rollback the transaction
    oci_rollback($conn);
    
} else {
 
    // On success, commit the transaction
    oci_commit($conn);
    
}

// Free resources
oci_free_statement($stmt);
$myLOB->free();


// disconnect from DB etc.
?>

    
 

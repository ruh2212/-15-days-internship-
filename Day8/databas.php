<?php
extract($_POST);
if (isset($submit)) {
    //database connection
    $connect =mysqli_connect('localhost','root','','db_intrenship') or die("Connection Error".mysqli_connect_error());
    //insertion query
    $query=mysqli_query($conn,"Insert into demo(name,phone,dept) values('{$fname}','{$phone}','{$dept}')");
    if ($query) {
        echo "Record Inserted Successfully!!";
    }
    else {
        echo  "Nothing Inserted";
    }
mysqli_close($conn);
}

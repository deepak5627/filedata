
<?php

  if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
	    $fileName = $_FILES['file']['name'];
	       
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
       
    	$conn = mysqli_connect("sql3.freemysqlhosting.net","sql3334623", "xniRV9R8VN", "sql3334623");
        $query = "INSERT INTO project(image) VALUES('$fileName')";
        $data = mysqli_query($conn, $query);
        }



?>

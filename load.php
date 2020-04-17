
<?php


    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
	    $fileName = $_FILES['file']['name'];
	   
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
       
    	$conn = mysqli_connect("localhost","root", "", "fileupload");
    $query = "INSERT INTO filedata(fileName) VALUES('$fileName')";
    $data = mysqli_query($conn, $query);
    }


?>
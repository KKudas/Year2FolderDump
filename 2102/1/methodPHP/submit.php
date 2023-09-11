<?php 
if (isset($_POST['submit'])){
    $lname = $_POST['lastName'];
    $fname = $_POST['firstName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO contact (first_name, last_name, email, contact_num)
            VALUES ('$fname', '$lname', '$email', '$contact')";
    
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header("Location: index.php");
    }else{
        echo "Error:". $sql . "<br>". $conn->error;
    }
    
} else {
    // echo 'not work';
}
?>
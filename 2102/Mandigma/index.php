<?php 
include "connectDB.php";

if (isset($_POST['submit'])){
    $lname = $_POST['lastName'];
    $fname = $_POST['firstName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO contact (first_name, last_name, email, contact_num)
            VALUES ('$fname', '$lname', '$email', '$contact')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        // echo "New record created successfully.";
    }else{
        echo "Error:". $sql . "<br>". $conn->error;
    }
    
} else {
    echo 'not work';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact List</title>
</head>
<body>
<h2><center>CONTACT LIST</center></h2>

<?php 
    $sqlquery = "SELECT * FROM contact";
    $retval = mysqli_query($conn, $sqlquery);

    if(!$retval){
        die('Could not get data: ' . mysql_error());
    }

    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
        echo "<p>{$row['first_name']}</p>";
    }
?>

<form action ="index.php" method="POST">
    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name ="lastName"><br>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName"><br>
    <label for="email" >Email:</label>
    <input type="text" id="email" name="email" required><br>
    <label for="contact">Contact Number:</label>
    <input type="number" id="contact" name="contact"><br>

    <input type="submit" name="submit" id="sub">
</form>

</body>
</html>


<?php 
$id = $_COOKIE['updateID?'];
if (isset($_POST['submit'])){
    $lname = $_POST['lastName'];
    $fname = $_POST['firstName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE contact SET first_name = $fname, last_name = $lname, email = $email, contact_num = $contact WHERE id' = $id";
    
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header("Location: index.php");
    }else{
        echo "Error:". $sql . "<br>". $conn->error;
    }
    
} else {
    // echo 'not work';
}

$sqlquery = "SELECT * FROM contact WHERE id = $id";
$retval = mysqli_query($conn, $sqlquery);

$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
?>

<div id="simpleUpdateModal" class="updateModal">
    <div class="modal-content">
        <form action ="index.php" method="POST">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name ="lastName" value="<?php echo $row['last_name'];?>"><br>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $row['first_name'];?>"><br>
            <label for="email" >Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['email'];?>" required><br>
            <label for="contact">Contact Number:</label>
            <input type="text" id="contact" name="contact" value="<?php echo $row['contact_num'];?>"><br>

            <input type="submit" name="updatesubmit" id="sub">
        </form>
    </div>
</div>

<?php
include 'methodPHP/connectDB.php';

$sqlquery = "SELECT * FROM contact ORDER BY last_name ASC";
$retval = mysqli_query($conn, $sqlquery);

if(!$retval){
    die('Could not get data: ' . mysql_error());
}

while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
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

<?php
}
if (isset($_POST['updatesubmit'])){
    $lname = $_POST['lastName'];
    $fname = $_POST['firstName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE `contact` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`contact_num`='$contact' WHERE id=$id";
    
    $result = $conn->query($sql);

    
} else {
    // echo 'not work';
}
?>
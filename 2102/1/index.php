<?php 
include "methodPHP/connectDB.php";
include "methodPHP/submit.php";
include "methodPHP/update.php";
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
    <h1><center>CONTACT LIST</center></h1>

    <table>
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include "methodPHP/printTableRow.php";
        ?>
        </tbody>
    </table>

    <!-- MODAL -->
    <br /><center><button id="modalBtn" class="button">Add</button></center>

    <div id="simpleModal" class="modal">
        <div class="modal-content">
            <form action ="index.php" method="POST">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name ="lastName"><br>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName"><br>
                <label for="email" >Email:</label>
                <input type="text" id="email" name="email" required><br>
                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" name="contact"><br>

                <input type="submit" name="submit" id="sub">
            </form>
        </div>
    </div>


    
    
    <script src="script.js"></script>
</body>
</html>
<?php

$sqlquery = "SELECT * FROM contact ORDER BY last_name ASC";
$retval = mysqli_query($conn, $sqlquery);

if(!$retval){
    die('Could not get data: ' . mysql_error());
}

while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
?>
    <tr>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['contact_num']; ?></td>
        <td>
            <button id="updateBtn" class="button" updateID="<?php echo $row['id'];?>">Update</button>
            <button id="deleteBtn" class="button" deleteID="<?php echo $row['id'];?>">Delete</button>
        </td>
    </tr>

<?php
}
?>
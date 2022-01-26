<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set Stu_id='" . $_POST['Stu_id'] . "', Name='" . $_POST['Name'] . "', Department='" . $_POST['Department'] . "', Session='" . $_POST['Session'] . "' ,Room_Number='" . $_POST['Room_Number'] . "' ,Floor_Number='" . $_POST['Floor_Number'] . "' WHERE Stu_id='" . $_POST['Stu_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Student WHERE Stu_id='" . $_GET['Stu_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Student Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Student ID: <br>
<input type="hidden" name="Stu_id" class="txtField" value="<?php echo $row['Stu_id']; ?>">
<input type="text" name="Name"  value="<?php echo $row['Stu_id']; ?>">
<br>
Name: <br>
<input type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Department:<br>
<input type="text" name="Department" class="txtField" value="<?php echo $row['Department']; ?>">
<br>
Session:<br>
<input type="text" name="Session" class="txtField" value="<?php echo $row['Session']; ?>">
<br>
Room_Number:<br>
<input type="number" name="Room_Number" class="txtField" value="<?php echo $row['Room_Number']; ?>">
<br>
Floor_Number:<br>
<input type="text" name="Floor_Number" class="txtField" value="<?php echo $row['Floor_Number']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
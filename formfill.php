<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table>
        <tr>
            <td>Officer Name</td>
            <td><input name="officerName" id="officerName" placeholder="Enter Officer Name"></td>
</tr>
<tr>
            <td>ERPID</td>
            <td><input name="erpID" id="erpID" placeholder="Enter ERP ID Number"></td>
</tr>
<tr>
            <td>Gender</td>
            <td>
                <select name="gender" id="gender">
                    <option>Male</option>
                    <option>Female</option>
</select>
            </td>
</tr>
<tr>
    <td></td>
    <td><input name="submitButton" type="submit" value="Confirm"></td>
</tr>
</table>
<?php
echo '<pre>';
print_r($_POST);
$officerName=$_POST['officerName'];
$erpID=$_POST['erpID'];
$gender=$_POST['gender'];
?>

<table>
    <tr>
        <td>Officer Name</td>
        <td><?php echo $officerName?></td>
    </tr>
     <tr>
        <td>ERPID</td>
        <td><?php echo $erpID?></td>
    </tr>
     <tr>
        <td>Gender</td>
        <td><?php echo $gender?></td>
    </tr>
</table>
</form>
    
</body>
</html>
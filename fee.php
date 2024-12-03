<html><head><style>
    <link rel="stylesheet" type="text/css" href="style.css">
    div{
    height: 50px;
    width:50px;
    border: 3px solid red;
    background-color:white;
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    margin: 0%;
}
th{
    color:red;
}
</style></head>
    <body>
        <img src="th.jpg" class="hello"><br>
   <div>
    <button class="b"><a href="logout.php">Logout</a></button></div><center>
<?php
session_start();
$con=mysqli_connect("localhost","root","","studentlogin");
$uuname=$_SESSION['user_name'];
$sql = "SELECT * FROM userfees where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?>
        <table border="100" style="font:red">
        <tr><th rowspan="1" >NAME : <?php echo $row['name'];?></th></tr>
    <tr><td><?php echo "TUTION FEE"?> </td><td><?php echo $row['f1']; ?></td></tr>
    <tr><td><?php echo "EXAM FEE"?> </td><td><?php echo $row['f2']; ?></td></tr>
    <tr><td><?php echo "BOOK FEE "?> </td><td><?php echo $row['f3']; ?></td></tr>
    <tr><td><?php echo "OTHER FEES"?> </td><td><?php echo $row['f4']; ?></td></tr>
    <tr><th><?php echo "GROSS TOTAL "?> </th><th><?php echo $row['f5']; ?></th></tr>
    </table>
  <?php }
}
else{
    echo "record not found";
}
?></center>
 <div>
    <button class="b"><a href="home2.php">BACK</a></button></div></head></html>
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
</style></head>
    <body>
        <img src="th.jpg" class="hello"><br>
   <div>
    <button class="b"><a href="logout.php">Logout</a></button></div><center>
<?php
session_start();
$con=mysqli_connect("localhost","root","","studentlogin");
$uuname=$_SESSION['user_name'];
$sql = "SELECT * FROM user where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?>
        <table border="100" style="font:red">
    <tr><td><?php echo "STUDENT NAME "?> </td><td><?php echo $row['name']; ?></td></tr>
    <tr><td><?php echo "STUDENT USN "?> </td><td><?php echo $row['usn']; ?></td></tr>
    <tr><td><?php echo "STUDENT FATHER NAME "?> </td><td><?php echo $row['fathername']; ?></td></tr>
    <tr><td><?php echo "STUDENT SEM "?> </td><td><?php echo $row['sem']; ?></td></tr>
    <tr><td><?php echo "STUDENT CGPA "?> </td><td><?php echo $row['cgpa']; ?></td></tr>
    <tr><td><?php echo "STUDENT BACKLOG "?> </td><td><?php echo $row['back']; ?></td></tr>
    <tr><td><?php echo "STUDENT MOBILE "?> </td><td><?php echo $row['mobile']; ?></td></tr>
    </table>
  <?php }
}
else{
    echo "record not found";
}
?></center><center>
<table ><tr><td><a href="res.php"><img src="OIP.jpg" class="hello"></a><br></td><br><br><br><br><br><td><a href="fee.php"><img src="pic2.jpg" class="hello"></a><br></td><td><a href="att.php"><img src="pic3.jpg" class="hello"></a><br></td><br><br><br><br><br><td><a href="ass.html"><img src="pic4.jpg" class="hello"></a><br></td></tr></table></center></body></head>
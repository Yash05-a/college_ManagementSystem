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
$sql = "SELECT * FROM useratt where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?>
        <table border="100" style="font:red">
        <tr><th rowspan="1" >NAME : <?php echo $row['name'];?></th></tr>
        <tr><th>SUBJECTS</th><th>PERCENTAGE</th></tr>
    <tr><td><?php echo "SOFTWARE ENINEERING"?> </td><td><?php echo $row['s1']; ?></td></tr>
    <tr><td><?php echo "THEORY OF COMPUTATION"?> </td><td><?php echo $row['s2']; ?></td></tr>
    <tr><td><?php echo " DATABASE MANAGEMENT SYSTEM "?> </td><td><?php echo $row['s3']; ?></td></tr>
    <tr><td><?php echo " WEB PROGRAMMING"?> </td><td><?php echo $row['s4']; ?></td></tr>
    <tr><td><?php echo "AI "?> </td><td><?php echo $row['s5']; ?></td></tr>
    <tr><td><?php echo "ENVIRONMENTAL SCIENCE "?> </td><td><?php echo $row['s6']; ?></td></tr>
    <tr><td><?php echo "UNIVERSAL HUMAN VALUES "?> </td><td><?php echo $row['s7']; ?></td></tr>
    <tr><td><?php echo "RESEARCH METHODOLOGY"?> </td><td><?php echo $row['s8']; ?></td></tr>
    </table>
  <?php }
}
else{
    echo "record not found";
}
?></center>
 <div>
    <button class="b"><a href="home2.php">BACK</a></button></div></head></html>
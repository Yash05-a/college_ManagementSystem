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
$sql = "SELECT * FROM userresult where name='$uuname' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) === 1){
    foreach($result as $row){?>
        <table border="100" style="font:red">
        <tr><th rowspan="1" >NAME : <?php echo $row['name'];?></th></tr>
    <tr><th> SUBJECT </th><th> GRADE </td></th>
    <tr><td><?php echo "MATHEMATICS"?> </td><td><?php echo $row['SUB1']; ?></td></tr>
    <tr><td><?php echo "MICRO CONTROLLER "?> </td><td><?php echo $row['SUB2']; ?></td></tr>
    <tr><td><?php echo "COMPUTER ORGANISATION AND ARCHITECTURE "?> </td><td><?php echo $row['SUB3']; ?></td></tr>
    <tr><td><?php echo "PYTHON PROGRAMMING"?> </td><td><?php echo $row['SUB4']; ?></td></tr>
    <tr><td><?php echo "DESIGN ANALYSIS AND ALGORITHM "?> </td><td><?php echo $row['SUB5']; ?></td></tr>
    <tr><td><?php echo "INDIAN CONSTITUTIONS "?> </td><td><?php echo $row['SUB6']; ?></td></tr>
    <tr><td><?php echo "C# "?> </td><td><?php echo $row['SUB7']; ?></td></tr>
    </table>
  <?php }
}
else{
    echo "record not found";
}
?></center>
 <div>
    <button class="b"><a href="home2.php">BACK</a></button></div></head></html>
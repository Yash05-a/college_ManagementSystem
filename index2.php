<!DOCTYPE html>
<html><style>
/* body {
    font-family: Arial, sans-serif;
    background-color: #427ab6;
    

    position: fixed;
    top: 0;
    left: 0;
    
    background-image:url(bg1.jpg) ;
    background-position: center;
    background-repeat: repeat;
    background-size: cover;
    animation: change 10s  infinite ease-in-out;
} */
body{
    display:flex;
    justify-content:center;
    align-items:center;
    width: 100%;
    height: 100%;
    overflow:hidden;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  z-index:-1;
}
.content {
  /* position: fixed; */
  /* bottom: 0; */
  /* background: rgba(0, 0, 0, 0.5); */
  /* color: #f1f1f1;
  width: 100%;
  padding: 20px; */
  z-index:10;

}

/* Style the button used to pause/play the video */
/* #myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
} */
h2{
    color:red;
}
	</style>
<head>
	<title> STUDENT LOGIN</title>
	<link rel="stylesheet" href="style.css">
</head>
<a href="index.php" ><img src="student.jpeg"></a>
<body>
<video autoplay muted loop id="myVideo">
  <source src="webvid.mp4" type="video/mp4">
</video>
<div class="content">
     <form action="login2.php" method="post">
     	<h2> ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
     	<button type="submit" >Login</button>
     </form>
</div>

</body>
</html>
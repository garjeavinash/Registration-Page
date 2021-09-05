<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="headbar">
  <ul>
    <li><a  class="nav-menu" href="index.html">Home</a></li>
    <li><a  class="nav-menu" href="about.html">About</a></li>
    <li><a  class="nav-menu" href="contact.html">Contact</a></li>
    <li><a  class="nav-menu" href="index.php">Sign Up</a></li>
</ul>
</nav>
<header>
            <section class="header-buttons__brand">
                
                <div class="buttons">
                    <div class="ham-button"></div>
                    <div class="ham-button"></div>
                    <div class="ham-button"></div>
                </div>

               <a href=""><i class="fab fa-accusoft fa-3x"></i> </a>

               

               
            </section>

     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
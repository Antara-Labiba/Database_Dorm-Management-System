<!DOCTYPE html>
  <head>
    <title>Student Dashboard</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="style.css">
      <style type="text/css">
         
         #header{
              height:16.5%;
              width:100%;
              background-color: whitesmoke;
              position: fixed;
              color: #000;
              
          }
          #left_side{
              height:78%;
              width:15%;
              top: 27%;
              position: fixed;

          }
          #right_side{
              height: 72%;
              width:82.5%;
              background-color:transparent;
              position: fixed;
              left:17%;
              top:27%;
              color:black;
			  border-top:solid 1px black;
              border-bottom:solid 1px black;

          }
         

      
      </style>
      <?php
          session_start();
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"udms");

      ?>


</head>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php"><img class="logo" src ="images/logo.PNG" alt="logo..."></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
        <a class="nav-link" href="about.html">About Us</a>
        <a class="nav-link" href="contact.php">Contact Us</a>
        <!-- <a class="nav-link" href="#">Link</a> -->
      </li>
    </ul>
    
  </div>
</nav>

  <body>
      <div id="header">
          <center><h1>North South University Dormitory Management System</h1>
          Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br><a href="logout.php">Logout</a>
        </center>
      </div>
      

      <div id="left_side"><center>
		
		<form action="" method="post">
		
			<table>
        <tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail">
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
				</tr>
				
			</table>
		</form></center>
	</div>
	<div id="right_side"><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from student where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
					<tr>
						<td>
							<b>ID:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['id']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Room Number:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['room_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Mobile Number:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					
				</table>
				<?php
				}	
			}
			?>

      <!-- edit  -->

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from student where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_student.php" method="post">
						<table>
            <tr>
						<td>
							<b>ID:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['id']?>" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Room Number:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['room_no']?>" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" >
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Mobile Number:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" >
						</td>
					</tr>
						<tr>
							<td></td>
							<td>
              <br><input type="submit" value="Update">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
			?>
		</div>
	</div>
  </body>
</html>
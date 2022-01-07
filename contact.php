<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="style.css">



</head>
<!-- navbar -->
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 30%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 6px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<center><h1>Contact Form</h1></center>

<div class="container">
  <form action="#">
    <center>
    <label for="name"> Name &emsp;</label>
    <input type="text" id="name" name="name" placeholder="Your name.."><br>

    <label for="email">Email &emsp;&ensp;</label>
    <input type="text" id="email" name="email" placeholder="Your email.."><br>

    <label for="Your Concern">Your Concern</label>
    <select id="Your Concern" name="Your Concern">
      <option value="Password Problem">Password Problem</option>
      <option value="Issues with Room">Issues with Room</option>
      <option value="Harrasment">Harrasment</option>
    </select><br>

    <label for="Any Comments?">Any Comments? </label>
    <input type="text" id="Any Comments?" name="Any Comments?" placeholder="Write something.."><br>

   

    <input type="submit" value="Submit">
  </center>
  </form>
</div>



</body>
</html>
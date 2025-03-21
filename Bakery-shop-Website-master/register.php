<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>Register | Artisan's Bakery</title>
</head>

<body>

  <!-- Navigation Bar -->
  <?php include 'menu.php' ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Artisan's Bakery</h1>
      <p>Your one stop solution to daily bread and coffee.</p>
    </div>

    <!-- Register Section -->
    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Register</h2>
      </div>
      <div class='w-50 m-auto'>
        <form action="registeruser.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
          </div>

          <div class="form-group">
            <label for="email">Email Id</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>

          <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number" required>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
          </div>

          <button type="submit" class="btn btn-success">Register</button>
        </form>
      </div>
    </section>

    <footer>
      <p class="p-3 bg-dark text-white text-right">@AfrozChakureCorp</p>
    </footer>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

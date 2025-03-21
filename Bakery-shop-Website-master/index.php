  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Paurati</title>


  </head>

  <body>
    <?php include 'menu.php'; ?>
    <!-- Carousel -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/BUN.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p> Best bread in the world.</p>
          </div>
        </div>
        
        <div class="carousel-item">
          <img src="images/bg2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Please drink our coffee.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/Dora.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/croissant.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Our Popular Products</h2>
      </div>
      <div class="container-fluid items-align: center">
        <div class="row">
          <div class="col-lg-3 col-md-2 col-12">
            <img src="images/BUN.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
          <div class="col-lg-3 col-md-2 col-12">
            <img src="images/croissant.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
          <div class="col-lg-3 col-md-2 col-12">
            <img src="images/Dora.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
          <div class="col-lg-3 col-md-2 col-12">
            <img src="images/fruitcake.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Our Popular Products</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/BUN.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/croissant.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Dora.jpg" class="img-fluid pb-4 serviceimg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Comments</h2>
      </div>

      <div class='w-50 m-auto'>
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="User" id="" class="form-control" placeholder="">
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
          </div>
          <div class="form-group">
            <label for="">Email Id</label>
            <input type="text" name="Email" id="" class="form-control" placeholder="">
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
          </div>
          <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" name="Mobile" id="" class="form-control" placeholder="">
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
          </div>
          <div class="form-group">
            <label for="">Comments</label>
            <textarea name="Comments" id="" class="form-control"></textarea>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
          </div>
          <button type="submit" class="btn btn-success" action='userinfo.php'>Submit</button>
        </form>
      </div>
    </section>

    <footer>
      <p class="p-3 bg-dark text-white text-right" style="background-color: brown">@Paurati</p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>

  </html>
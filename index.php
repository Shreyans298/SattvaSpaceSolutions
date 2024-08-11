<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sriracha&display=swap" rel="stylesheet">

  </head>
  <body>
  <?php include 'navbar.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="intro-1.jpeg" alt="Transforming Houses into Homes">
    </div>
    <div class="carousel-item">
      <img src="intro-2.jpeg" alt="Designing homes that reflect your unique style">
    </div>
    <div class="carousel-item">
      <img src="intro-3.jpeg" alt="Crafting Harmony: The Art of Interior Design">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div>
    <h3 class="text-center">About Us</h3>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="row-lg-6 col-md-6 col-12">
      <img src="" class="img-fluid">
    </div>
    <div class="row-lg-6 col-md-6 col-12">
     <h2 class="display-4">Sattva Space Solutions</h2>
     <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, quis! Ipsa, beatae! Vero commodi perferendis molestiae quidem, reiciendis maiores! Tenetur harum et cumque hic dolorem eveniet officiis explicabo eaque? Incidunt!</p>
     <a href="about.php" class="btn btn-success">Read more</a>
    </div> 
  </div>
</div>
</section>

<section class="my-5">
  <div>
    <h3 class="text-center">Our Services</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12" <div class="card">
        <img class="card-img-top" src="img-1.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Basement</h4>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim sit laboriosam nulla.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12" <div class="card">
        <img class="card-img-top" src="img-2.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Home Theatre</h4>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore quos eos.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12" <div class="card">
        <img class="card-img-top" src="img-1.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section class="my-5">
  <div>
    <h3 class="text-center">Our Services</h3>
    <div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="user" id="name" aria-describedby="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email ID</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
  </div>
  <div class="form-group">
    <label>Comments</label>
    <textarea class="form-control" name="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</section>

<?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

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
</body>
</html>
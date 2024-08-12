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
    <link rel="stylesheet" href="styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sriracha&display=swap" rel="stylesheet">

  </head>

<body>
<div id="page1">
     <nav>
        <img src="logo.png" alt="pic">
        <h1 class="company">SATTYA SPACE SOLUTIONS</h1>
        <div id="nav-part2">
            <h4><a href="index.php">Home</a></h4>
            <h4><a href="about.php">About</a></h4>
            <h4><a href="blog.php">Blog</a></h4>
            <h4><a href="contact.php">Contact Us</a></h4>
        </div>
    </nav>
</div>
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
<footer>
      <div class="footer-container">
        <div class="footer-item">&copy; 2024 Sattva Space Solutions</div>
        <div class="footer-item">
          <a href="mailto:Sattvaspacesolutions@gmail.com"
            >Sattvaspacesolutions@gmail.com</a
          >
        </div>
        <div class="footer-item">
          <a
            href="https://www.instagram.com/sattva_space_solutions"
            target="_blank"
            >@sattva_space_solutions</a
          >
        </div>
      </div>
    </footer>
</body>
</html>


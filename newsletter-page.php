<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brand - Newsletter Page</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <nav class="container">
      <div class="nav-content">
      <span
            ><a href="./index.html"><div class="logo"></div></a
          ></span>        <ul>
          <li>about</li>
          <li>services</li>
          <li>contact</li>
        </ul>
      </div>
      <div class="hamburger">
        <span></span>
        <span></span>
      </div>
    </nav>
    <div class="thanks container">
      <div class="img-placeholder-background">
        <div class="thanks-content">
          <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
          <h3>Thank you for subscribing.</h3>
          <p>
          We're excited to have you on board. You will now receive the latest updates, news, and exclusive offers directly in your inbox.          </p>
          <a href="./index.html"><button class="btn-white">Back to homepage</button></a>
      </div>
      </div>
    </div>
    <footer>
      <div class="footer container">
        <div class="brand-data">
          <h2>Logo</h2>
          <p>
            Lorem Ipsum is simply dummy.
          </p>
        </div>
        <ul class="list">
          <li>link</li>
          <li>link</li>
          <li>link</li>
          <li>link</li>
        </ul>
        <ul class="list">
          <li>link</li>
          <li>link</li>
          <li>link</li>
          <li>link</li>
        </ul>
        <ul class="list">
          <li>link</li>
          <li>link</li>
          <li>link</li>
          <li>link</li>
        </ul>
      </div>
    </footer>
    <script src="./script.js"></script>
  </body>
</html>

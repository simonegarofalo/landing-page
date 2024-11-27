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
  </head>
  <style>
    body {
      margin: 0;
  background-color: #e8e4da;
  color: #2f2f2f;
}

    ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
    }
    nav {
  padding: 10px 0;

  background-color: #50311d;
  color: #fff;

  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
}

.nav-content {
  grid-column: 2/12;

  display: flex;
  align-items: center;
  justify-content: space-between;
}

a {
  text-decoration: none;
  color: white;
}

.nav-content span,
li:hover {
  cursor: pointer;
}

nav ul {
  display: flex;
}

nav li {
  margin-left: 50px;
  padding: 10px 0;
}

.hamburger {
  display: none;
}

    .thanks {
      height: 100vh;
      background-color: #e8e4da;
      color: #2f2f2f;    
    }

    .thanks-content p{
      margin-bottom: 50px;
    }

    .img-placeholder {
      grid-column: 4/10;

      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    .btn-white {
      width: 200px;
      border: 1px solid #2f2f2f;
      background-color: transparent;
      padding: 14px;
      color: #2f2f2f;
      text-decoration: none;
      cursor: pointer;
    }

    .btn-white:hover {
      background-color: #2f2f2f;
      color: #fff;
      cursor: pointer;
      transition: 0.3s;
    }

    .footer {
      height: 500px;
      color: #fff;
      background-color: #2f2f2f;
    }

    .brand-data {
      grid-column: span 6;

      display: flex;
      flex-direction: column;
      align-items: start;

      margin: 50px 20px;
    }

    .list {
      grid-column: span 2;

      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .list li {
      padding: 10px 0;
    }

    @media (max-width: 768px) {
      nav {
        height: 30px;
      }

      nav li {
        margin: 20px;
      }

      nav ul {
        position: absolute;
        display: block;
        width: 50%;
        height: calc(100vh - 50px);
        top: 50px;
        right: -100%;

        background-color: white;
        color: #2f2f2f;
        text-align: center;
      }

      .open nav ul {
        right: 0;
      }

      .hamburger {
        display: block;
        position: absolute;
        top: 11px;
        right: 20px;

        height: 25px;
        width: 30px;
      }

      .hamburger span {
        display: block;
        position: absolute;
        top: 8px;

        height: 3px;
        width: 30px;
        background-color: white;
      }

      .hamburger span:nth-child(1) {
        margin-top: 7px;
      }

      .hamburger span:nth-child(2) {
        margin-top: -2px;
      }

      .hamburger:hover {
        cursor: pointer;
      }
    }
  </style>
  <body>
    <nav class="container">
      <div class="nav-content">
        <span><a href="./index.html">Logo</a></span>
        <ul>
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
      <div class="img-placeholder">
        <div class="thanks-content">
          <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
          <h3>Thank You for subscribing.</h3>
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
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="time.css" />
  </head>
  <body>
    <div class="conteiner">
      <!-- navbar -->
      <div class="navbar">
        <img src="logo.png" class="logo" />
        <h1 class="logo-name">GovernmentEchanneling</h1>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">About</a></li>
          </ul>
        </nav>
      </div>
      <!-- body -->
      <div class="time">
        <div class="date">
          <label for="date">Date:</label>
          <input type="date" id="date" name="date">
          <div ></div>
        </div>
        <div class="slider">
          <a href="message.php">
            <div class="box" onclick="increment()">
              <img src="available.png" alt="" />
              <h5>08.00-10.00am</h5>
            </div>
          </a>
          <a href="message.php">
            <div class="box" onclick="increment()">
              
              <img src="available.png" alt="" />
              <h5>10.00-12.00am</h5>
            </div>
          </a>
          <a href="message.php">
            <div class="box" onclick="increment()">
              <img src="notavailable.png" alt="" />
              <h5>12.00-01.00pm</h5>
            </div>
          </a>
          <a href="message.php">
            <div class="box" onclick="increment()">
              <img src="available.png" alt="" />
              <h5>01.00-03.00pm</h5>
            </div>
          </a>
          <a href="message.php">
            <div class="box" onclick="increment()">
              <img src="available.png" alt="" />
              <h5>03.00-05.00pm</h5>
            </div>
          </a>
        </div>
      </div>

      <!-- footer -->
      <footer class="footer">
        <div class="footer-conteiner">
          <div class="fcol1">
            <ul>
              <div class="logo-container">
                <img src="logo.png" class="logo2" />
                <h1 class="logo-name">GovernmentEchanneling</h1>
              </div>
              <br />
              <li>Email: info@govchannel.lk</li>
              <li>Phone: +94 11 123 4567</li>
            </ul>
          </div>
          <div class="fcol2">
            <h1>Other</h1>
            <p>Privacy Policy</p>
            <p>Terms Of Service</p>
          </div>
        </div>
        <div class="fcol3">
          <nav>
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">About</a></li>
            </ul>
          </nav>
        </div>
        <hr class="hr" />
        <div class="end">
          <h5>© 2024 Government e-Channeling System. All rights reserved.</h5>
        </div>
      </footer>
    </div>
    <script src="time.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="r_form.css">
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
    <div class="all">
      <div class="content">
        <h3>Registration Form</h3>
      </div>
      <form method="post" action="RegistrationDataStore.php">
        <div class="form-group">
          <label for="name">Name with Initials:</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
          <label for="nic">NIC Number:</label>
          <input type="text" id="nic" name="nic" required />
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="contNum">Contact Number:</label>
          <input type="text" id="contNum" name="contNum" required />
        </div>
        <a href="barcode.php"><button type="submit">Submit</button></a>
      </form>
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
</body>
</html>



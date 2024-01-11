<!DOCTYPE html>
<html>

<head>
  <title>Student Admission Management System</title>
  <style>
    /* Main styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Header styles */
    header {
      background-image: url(img/pic\ \(2\).jpeg);
      color: #fff;
      padding: 20px;
    }

    h1 {
      margin: 0;
      font-size: 36px;
      font-weight: normal;
    }

    .logo {
      float: left;
      margin-right: 20px;

    }

    .slogan {
      font-size: 24px;
      margin-top: 10px;
    }

    /* Navigation styles */
    nav {
      background-color: #fff;
      padding: 20px;
      box-sizing: border-box;
      overflow: hidden;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
      float: left;
    }

    li {
      display: inline-block;
      margin-right: 20px;
    }

    a {
      color: #333;
      text-decoration: none;
      display: block;
      padding: 10px;
      border-radius: 5px;
    }

    a:hover {
      background-color: #333;
      color: #fff;
    }

    .login {
      float: right;
      margin-top: 5px;
      margin-right: 5px;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
      

    }

    .top {
      float: right;
      margin-top: 5px;
      margin-right: 20px;
      background: #2E3094;
      border: 1px solid #2E3094;
      color: #fff;

    }

    /* Banner styles */
    .banner {
      background-image: url(img/img\ \(1\).png);
      width: 100%;
      height: 200%;
      background-size: cover;
      background-position: center;
      position: relative;
      object-fit: cover;
      background-attachment: fixed;
      animation:animate 30s ease-in-out infinite ;
    }
    @keyframes animate{
      0%,100%{
        background-image: url(img/images.jpg);
      }
      25%{
        background-image: url(img/img\ \(1\).png);
      }
      50%{
        background-image: url(img/img\ \(2\).jpg);
      }
      75%{
        background-image: url(img/fb.jpg);
      }
      100%{
        background-image: url(img/download\ \(1\).jpeg);
      }
    }

   .banner_down_text{
      height: 5%;
      width: 80%;
    
     
      border-radius: 10px;
      padding: 10px 20px;
      margin-top: 10px;
      font-size: 10px;
    }


    .banner_overlay {
      width: 100%;
      height: 100%;
      
    }

    .banner-text h2 {
      margin: 0;
      font-size: 48px;
    }

    /* Content styles */
    section {
      background-color: #fff;
      padding: 20px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    h2 {
      margin-top: 0;
      font-size: 36px;
      color: #fff;
    }

    p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 20px;
      color: #f9f9f9;
    }

    .highlight {
      background-color: #ffe6e6;
      padding: 10px;
      border-radius: 5px;
    }

    .cta {
      text-align: left;
      margin-top: 40px;



    }

    .cta a {
      background-color: darkorange;
      color: #fff;
      padding: 20px 40px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
      font-size: 24px;
    }

    .cta a:hover {
      border-color: yellow;
      color: yellow;
    }

    /* Footer styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      clear: both;
      text-align: center;
    }

    small {
      font-size: 12px;
    }

    /* Forms styles */
    form {
      margin-top: 40px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      overflow: hidden;
    }

    h3 {
      margin-top: 0;
      font-size: 24px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 18px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }

    button:hover {
      background-color: #555;
    }

    .form-link {
      margin-top: 20px;
      font-size: 16px;
    }

    /* Table styles */
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }

    th,
    td {
      text-align: left;
      padding: 10px;
      border: 1px solid #ccc;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    tr:hover {
      background-color: #f0f0f0;
    }

    footer {
				background-color: #2c3e50;
				color: white;
				padding: 20px;
				text-align: center;
			}

			footer p {
				margin: 0;
				font-size: 14px;
			}
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <div class="logo">
        <img src="img/Versity Logo.png" alt="Logo">
      </div>
      <h1>Student Admission Management System</h1>
      <div class="slogan">Empowering the leaders of tomorrow</div>
    </div>
  </header>

  <!-- Navigation -->
  <nav>
    <div class="container">
      <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a href="form.php"target="_blank">Admissions</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="login">
        <a href="login.php"target="_blank">SingUp</a>
      </div>
      <div>
        <a class="top" href="form.php"target="_blank">Online Apply</a>
      </div>
    </div>
  </nav>

  <!-- Banner -->
  <div class="banner">
    <div class="banner_overlay">
      <div class="container">
        <div class="banner-text">

          <div class="cta">
            <a href="form.php"target="_blank">Apply</a>
          </div>

          <div class="banner_down_text">
            <h2>Welcome to Student Admission Management System</h2>
            <p>Our student admission management system is designed to help educational institutions manage their
              admission
              process in a more efficient way. With our easy-to-use platform, you can</p>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Content -->
  <footer>
    <p>&copy; 2023 Admission Management System. All rights reserved.</p>
  </footer>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Student Admission Management System</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        background-image: url(img/admin.jpg);
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
      }
      .container {
        width: 400px;
        background-color: rgba(255, 255, 255, 0.8);
        margin: 0 auto;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px #ccc;
      }
      h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #444;
      }
      input[type="text"], input[type="password"], input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
      .error {
        color: red;
        margin-bottom: 20px;
        text-align: center;
      }
      .form-link {
        text-align: center;
        margin-top: 20px;
      }
      .form-link a {
        color: #444;
        text-decoration: none;
      }
      .form-link a:hover {
        text-decoration: underline;
      }
      .form-type {
        margin-bottom: 20px;
      }
      .form-type input[type="radio"] {
        margin-right: 10px;
      }
      .form-type label {
        font-weight: bold;
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
    <div class="container">
      <h1>Student Admission Management System</h1>
      <div id="login-form">
        
        <form action="login_insert.php" method="post">
          <label for="User_name">email:</label>
          <input type="email" id="User_name" name="email" required>
          <label for="Password">Password:</label>
          <input type="Password" id="Password" name="password" required>
          <!-- <input type="submit" value="Login"> -->
          <button type="submit" name="login">Login</button>
        </form>

        <div class="form-link">
          <a href="registration_details.php"target="_blank"><span>Don't have an Account? </span>Register Now!</a>
        </div>
        <div class="error">
          <!-- display error message here if login fails -->
        </div>
      
        <div>
          
        <footer>
          <p>&copy; 2023 Admission Management System. All rights reserved.</p>
        </footer>
        </div>
        <?php
          if (isset($_POST['login']))
          {
            $query="SELECT * FROM `registration_details` WHERE  'User_name'='$_POST[User_name]' AND 'Password'='$_POST[Password]'";
          
          
          }
        ?>


</body>  
  
</html>
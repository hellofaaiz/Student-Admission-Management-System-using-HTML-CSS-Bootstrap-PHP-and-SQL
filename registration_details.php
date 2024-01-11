
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registration_Form</title>
</head>
<body>
</div>
<div id="registration-form">
  <h1>Registration</h1>
  <body>
    <form action="registration_insert.php" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="Full_name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" required>
        <label for="username">Username:</label>
        <input type="text" id="username" name="User_name" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="Password" required>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="C_Password" required>
        <div class="form-type">
          <label>Account Type:</label>
          <input type="radio" id="student" name="Acc_Type" value="student" checked>
          <label for="student">Student</label>
          <input type="radio" id="admin" name="Acc_Type" value="admin">
          <label for="admin">Admin</label>
        </div>
        <input type="submit" value="Register">
      </form>
      <div class="form-link">
       
        <a href="login.php"target="_blank"><span>already have account?</span>Login Now!</a>
      </div>
      <div class="error">
        <!-- display error message here if registration fails -->
    </div>
    
  </body>
  
</div>
</div>

<style>
    h1{
        text-align: center;
    }
    body{
        margin:5% 35% ;
        font-family: Arial, sans-serif;
        background-image: url(img/pic\ \(3\).jpeg);
        background-size: cover;
        background-position: center;
     
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

<footer>
  <p>&copy; 2023 Admission Management System. All rights reserved.</p>
</footer>
</body>
</html>
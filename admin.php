<?php
session_start();

// Check if the login form is submitted
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the entered credentials match the hardcoded values
  if ($username === 'admin@gmail.com' && $password === 'a') {
    // Set session variables to indicate successful login
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Redirect to the protected page
    header("Location: protected.php");
    exit;
  } else {
    // Invalid username or password
    echo "Invalid username or password.";
  }
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

<style>

body {
      margin: 0px;
      font-family: 'Raleway', sans-serif;
    }

    header {
      background: linear-gradient(to right, #D49817, #261100);
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      height: 50px;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin-left: 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: #FEF5BC;
      font-family: 'Raleway', sans-serif;
    }

    /* CSS FOR MENU */


form {
      max-width: 300px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    input[type="submit"] {
      background-color: #D49817;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    input[type="submit"]:hover {
      background-color: #261100;
    }
  </style>

<!DOCTYPE html>
<html>
<head>
  <title>Connactez-vous</title>
</head>
<body>


<header>
    <div class="logo">
      <img src="./logo.png" alt="Restaurant Logo">
    </div>
    <nav>
      <ul>
      <li><a href="index.php">Accueil</a></li>
        <li><a href="menu.php">Menu de saison</a></li>
        <li><a href="index.php/#info">À propos</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <h1>Connectez-vous</h1>
  <form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>

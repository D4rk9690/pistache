<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
  // If not logged in, redirect to the login page
  header("Location: admin.php");
  exit;
}

require_once 'db_connect.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get the submitted form data
  $menuItemID = $_POST['menu_item_id'];
  $name = $_POST['name'];
  $category = $_POST['category'];
  $price = $_POST['price'];

  // Update the menu item in the database
  $stmt = $conn->prepare("UPDATE menu SET name = :name, category = :category, price = :price WHERE id = :id");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':category', $category);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':id', $menuItemID);
  $stmt->execute();

  // Redirect to the menu page after successful update
  header("Location: menu.php");
  exit;
}



// Check if a category is being added
if (isset($_POST['add_category'])) {
  $categoryName = $_POST['category_name'];

  // Insert the new category into the database
  $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (:name)");
  $stmt->bindParam(':name', $categoryName);
  $stmt->execute();
}

// Check if a category is being edited
if (isset($_POST['edit_category'])) {
  $categoryID = $_POST['category_id'];
  $categoryName = $_POST['category_name'];

  // Update the category in the database
  $stmt = $conn->prepare("UPDATE categories SET name = :name WHERE id = :id");
  $stmt->bindParam(':name', $categoryName);
  $stmt->bindParam(':id', $categoryID);
  $stmt->execute();
}

// Check if a category is being deleted
if (isset($_POST['delete_category'])) {
  $categoryID = $_POST['category_id'];

  // Delete the category from the database
  $stmt = $conn->prepare("DELETE FROM categories WHERE id = :id");
  $stmt->bindParam(':id', $categoryID);
  $stmt->execute();
}



// Retrieve all menu items from the database
$stmt = $conn->prepare("SELECT * FROM menu");
$stmt->execute();
$menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Menu Item</title>
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

    h1 {
      text-align: center;
      color: #333;
      font-size: 36px;
      margin-top: 100px;
    }

    p {
      text-align: center;
      color: #666;
      font-size: 18px;
      margin-top: 20px;
    }

    a {
      display: block;
      width: 150px;
      margin: 30px auto;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      padding: 10px;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
    }

    a:hover {
      background-color: #45a049;
    }

    form {
      margin-top: 20px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
      width: 300px;
      padding: 5px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="./logo.png" alt="Restaurant Logo">
    </div>
    <nav>
      <ul>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>

  <h1>Bienvenue, <?php echo $_SESSION['username']; ?>!</h1>
  <p>Cette page est seulement visible par les admin.</p>
</br>
  <h2 style="text-align: center">Edité le Menu </h2>
  <form method="POST" action="">
    <label for="menu_item_id">Élément du menu:</label>
    <select id="menu_item_id" name="menu_item_id">
      <?php foreach ($menuItems as $menuItem) { ?>
        <option value="<?php echo $menuItem['id']; ?>"><?php echo $menuItem['name']; ?></option>
      <?php } ?>
    </select>
    <br>
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="category">Categorie:</label>
    <input type="text" id="category" name="category" required><br>

    <label for="price">Prix:</label>
    <input type="number" id="price" name="price" required><br>

    <input type="submit" name="submit" value="Update">
  </form>

</body>
</html>

<?php
require_once 'db_connect.php';

try {
  $stmt = $conn->query("SELECT * FROM menu");
  $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
  echo 'Error retrieving menu items: ' . $e->getMessage();
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

    body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
  color: #333;
  margin-top: 30px;
}

table {
  margin: 20px auto;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th,
td {
  padding: 10px 15px;
  text-align: left;
}

th {
  background-color: #333;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

.category-filter {
  text-align: center;
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

select {
  padding: 8px 12px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.menu-item {
  transition: background-color 0.3s;
}

.menu-item:hover {
  background-color: #f9f9f9;
}

@media screen and (max-width: 600px) {
  table {
    width: 100%;
  }
}


/* CONTACT */
.contact {
  margin-top: 50px;
  text-align: center;
  background-color: #F5F5F5;
  padding: 50px;
}

.contact h3 {
  font-size: 28px;
  color: #333;
}

.contact p {
  font-size: 16px;
  color: #666;
  margin-bottom: 10px;
}

.contact p:last-child {
  margin-bottom: 0;
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
      <li><a href="index.php">Accueil</a></li>
        <li><a href="menu.php">Menu de saison</a></li>
        <li><a href="index.php/#info">À propos</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php 
if (!isset($_SESSION['loggedin'])) {
?>
<li><a style="color: red;" href="protected.php">Admin</a></li>
<?php
}
        ?>
      </ul>
    </nav>
  </header>
  <h1>Menu</h1>
  <div class="category-filter">
    <label for="category">Filtre par catégorie:</label>
    <select id="category">
      <option value="all">Toutes</option>
      <option value="Enfant">Enfant</option>
      <option value="Adulte">Adulte</option>
      <option value="Adolescent">Adolescent</option>
    </select>
  </div>
  <table>
    <tr>
      <th>Nom du plat</th>
      <th>Catégorie</th>
      <th>Prix</th>
    </tr>
    <?php foreach ($menuItems as $item): ?>
      <tr class="menu-item" data-category="<?php echo $item['category']; ?>">
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['category']; ?></td>
        <td><?php echo $item['price'] ." €"; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>


  <section class="contact">
    <h3>Contact</h3>
    <p>Phone: 123-456-789</p>
    <p>Email: info@restaurant.com</p>
  </section>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const categoryDropdown = document.getElementById('category');
      const menuItems = document.querySelectorAll('.menu-item');

      categoryDropdown.addEventListener('change', function() {
        const selectedCategory = categoryDropdown.value;
        menuItems.forEach(function(item) {
          const itemCategory = item.dataset.category;
          if (selectedCategory === 'all' || selectedCategory === itemCategory) {
            item.style.display = 'table-row';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  </script>
</body>
</html>

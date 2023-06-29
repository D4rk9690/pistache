<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Website - Accueil</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>


/* FONT */
@font-face {
  font-family: 'Raleway';
  src: url('Raleway-VariableFont_wght.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

/* RESTE */
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

    .banner {
      text-align: center;
    }

    .banner img {
      max-width: 100%;
      height: auto;
    }

    .title {
      font-size: 24px;
      margin-top: 20px;
      color: #333;
    }
    .about {
  margin-top: 50px;
  text-align: center;
  background-color: #F5F5F5;
  padding: 50px;
}

.about h3 {
  font-size: 28px;
  color: #333;
}

.about p {
  font-size: 16px;
  color: #666;
  margin-bottom: 20px;
}

.inspirations {
  margin-top: 50px;
  display: flex;
  justify-content: center;
}

.inspiration-image {
  margin: 10px;
  max-width: 300px;
  height: auto;
}

.inspiration-image img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

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

  <section class="banner">
    <img src="hero-image.jpg" width="100%" alt="Hero Image">
    <h2 class="title">Bienvenue sur notre site !</h2>
  </section>

  <section class="about">
    <h3>À propos</h3>
    <p>Au restaurant Pistache, vous pourrez déguster des plats raffinés issus de la cuisine
franco-méditerranéenne. </p> <p> Passion et dévouement sont nos leitmotivs. Venir chez nous c’est
l’assurance de découvrir une expérience culinaire hors du commun.</p>
  </section>

  <h3 style="text-align: center; margin-top: 80px">Notre Inspirations </h3> 
  <p style="text-align: center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra porta libero eget congue. Quisque sed dui diam. </p> <p  style="text-align: center"> Pellentesque tincidunt nulla sem, varius posuere mi fringilla non. Ut imperdiet quam diam, dapibus gravida turpis lobortis nec. </p> <p  style="text-align: center"> Integer in commodo libero, eget tristique ante.  </p>
  <section class="inspirations">
    
    <div class="inspiration-image">
      <img src="inspiration3.jpg" alt="Inspiration Image 1">
    </div>
    <div class="inspiration-image">
      <img src="inspiration-1.jpg" alt="Inspiration Image 2">
    </div>
    <div class="inspiration-image">
      <img src="inspiration2.jpg" alt="Inspiration Image 3">
    </div>
  </section>

  <section class="contact">
    <h3>Contact</h3>
    <p>Phone: 123-456-789</p>
    <p>Email: info@restaurant.com</p>
  </section>

  <script>
    // Optional: Add a class to the active link
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('nav ul li a');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
      if (menuItem[i].href === currentLocation) {
        menuItem[i].className = 'active';
      }
    }
  </script>
</body>
</html>

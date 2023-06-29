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
  </section>

  <section class="about">
    <h3>Contactez-nous</h3>
    <p>Besoin de renseignement ou de nous contactez? Voici comment nous trouvez.</p>
  
    <p>Phone: 123-456-789</p>
    <p>Email: info@restaurant.com</p>

  </section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.99301347565!2d4.872232776897272!3d50.459854786686186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c19991a4d686df%3A0xcca63c3dbfb474ac!2sBrasserie%20Pistache!5e0!3m2!1sfr!2sbe!4v1687863402601!5m2!1sfr!2sbe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



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

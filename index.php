<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Penjualan Makanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="uploads/logo-identitas.png">
            <h1 class="logo"><span>Mart</span></h1>

            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="hero-content">
            <h2>Fresh and Delicious Food Delivered to You</h2>
            <p>Order now and enjoy the best taste in town.</p>
            <a href="#menu" class="btn">Explore Menu</a>
        </div>
    </section>

    <section id="menu" class="container">
        <h2>Our Menu</h2>
        <div class="menu-grid">
            <?php include 'menu.php'; ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 FoodMart. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

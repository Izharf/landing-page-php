<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>My Landing Page</h1>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <img src="asset/hero.jpg" alt="Hero Image">
        </div>
        <div class="hero-right">
            <form id="contactForm" action="submit_form.php" method="POST">
                <h2>Contact Us</h2>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Landing Page. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

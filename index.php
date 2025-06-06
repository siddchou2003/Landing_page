<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Landing Page</title>
        <link rel="stylesheet" href="css/index.css"/>
    </head>
    <body>
        <header>
            <div class="logo">Logo here</div>
            <div class="nav-container">
                <div class="dropdown">
                    <button class="dropbtn">Button 1</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Services 1</a></li>
                        <li><a href="#">Services 2</a></li>
                        <li><a href="#">Services 3</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Button 2</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Services 1</a></li>
                        <li><a href="#">Services 2</a></li>
                        <li><a href="#">Services 3</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Button 3</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Services 1</a></li>
                        <li><a href="#">Services 2</a></li>
                        <li><a href="#">Services 3</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Button 4</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Services 1</a></li>
                        <li><a href="#">Services 2</a></li>
                        <li><a href="#">Services 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="auth-buttons">
                <?php if (isset($_SESSION["username"])): ?>
                    <div class="dropdown" style="color:white; font-weight: bold;">
                        <button class="dropbtn">Welcome, <?= htmlspecialchars($_SESSION["username"]) ?></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Services 1</a></li>
                            <li><a href="#">Services 2</a></li>
                            <li><a href="#">Services 3</a></li>
                        </ul>
                    </div>
                    <a href="includes/logout.php" class="cta-btn-2">Logout</a>
                <?php else: ?>
                    <a href="includes/login.php" class="cta-btn-1">Log in</a>
                    <a href="includes/signup.php" class="cta-btn-2">Sign up</a>
                <?php endif; ?>
            </div>
        </header>
        <section class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>My Website</h1>
                    <p>Your solution for modern web experiences.</p>
                    <a href="#" class="cta-btn-1">Get started</a>
                </div>
                <img src="images/1722507758677.gif" class="hero-img">
            </div>
        </section>
        <section class="features">
            <div class="feature">
                <h2>Fast Performance</h2>
                <p>Optimized for speed and efficiency.</p>
            </div>
            <div class="feature">
                <h2>Responsive Design</h2>
                <p>Looks great on any device or screen size.</p>
            </div>
            <div class="feature">
                <h2>Easy Customization</h2>
                <p>Tailor the layout and content to your needs.</p>
            </div>
        </section>
        <footer>
            <p>&copy; 2025 MyWebsite. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a>
            </div>
        </footer>
    </body>
</html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header style="background-color: #222; color: #fff; padding: 20px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; max-width: 98%; margin: 0 auto; padding: 0 20px;">

        <!-- Logo and Title -->
        <div style="display: flex; align-items: center;">
            <!-- Far left aligned logo -->
            <img src="images/gym1.png" alt="Gym Logo" style="height: 60px; margin-right: 15px; display: block;">

            <!-- Site title -->
            <h1 style="margin: 0; font-size: 24px;">FitZone Fitness Center</h1>
        </div>

        <!-- Navigation links -->
        <nav style="margin-top: 10px;">
            <a href="index.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Home</a>
            <a href="about.php" style="color: #fff; margin-right: 15px; text-decoration: none;">About</a>
            <a href="contact.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Contact</a>

            <?php if (isset($_SESSION['user_data'])): ?>
                <a href="admin/index.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Dashboard</a>
                <a href="logout.php" style="color: #ff6666; text-decoration: none;">Logout</a>
            <?php else: ?>
                <a href="login.php" style="color: #66ccff; text-decoration: none;">Login</a>
            <?php endif; ?>
        </nav>

    </div>
</header>

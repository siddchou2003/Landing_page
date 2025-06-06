<?php
session_start();
require __DIR__ . '/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $username, $hashed);
        $stmt->fetch();
        if (password_verify($password, $hashed)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            header("Location: ../index.php");
            exit();
        } else {
            $error = "Incorrect username/email or password";
        }
    } else {
        $error = "User does not exist";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Login</h2>
        <?php if (!empty($error)) echo "<p>" . htmlspecialchars($error) . "</p>"; ?>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log In</button>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
</body>
</html>
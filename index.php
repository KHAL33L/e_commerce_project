<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Walket - Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: white;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .menu-container {
      text-align: center;
      border: 2px solid #660a38;
      border-radius: 8px;
      padding: 40px;
      background: #fff;
      width: 300px;
    }
    h1 {
      color: #660a38;
      margin-bottom: 20px;
    }
    .menu-container a {
      display: block;
      text-decoration: none;
      background: #660a38;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border-radius: 6px;
      transition: opacity 0.3s ease;
    }
    .menu-container a:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>
  <div class="menu-container">
    <h1>Welcome to Walket</h1>
    <a href="login/login.php">Login</a>
    <a href="login/register.php">Register</a>
  </div>
</body>
</html>

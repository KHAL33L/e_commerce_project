<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Walket - Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: white;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: #fff;
      border: 2px solid #660a38;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      text-align: center;
    }
    .form-container h2 {
      color: #660a38;
    }
    .form-container input, .form-container button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .form-container button {
      background: #660a38;
      color: white;
      border: none;
      cursor: pointer;
    }
    .form-container button:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>
    <form id="registerForm">
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="text" name="country" id="countryInput" placeholder="Country" required>
      <input type="text" name="city" placeholder="City" required>
      <input type="text" name="contact" placeholder="Contact Number" required>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
  <script src="../js/register.js"></script>
</body>
</html>

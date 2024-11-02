<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <style>
      /* Reset default padding and margin */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #000;
        color: #fff;
      }

      /* Navbar Styling */
      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 40px;
        background-color: #000;
        border-bottom: 2px solid #333;
      }

      .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
      }

      .navbar .nav-links {
        display: flex;
        gap: 20px;
      }

      .navbar .nav-links a {
        color: #ccc;
        text-decoration: none;
        font-size: 16px;
      }

      .navbar .nav-links a:hover {
        color: #fff;
      }

      .navbar .login-btn {
        padding: 8px 16px;
        border: 1px solid #3333ff;
        border-radius: 5px;
        color: #3333ff;
        background-color: transparent;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s;
      }

      .navbar .login-btn:hover {
        background-color: #3333ff;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">TYPE2CAREER</div>
      <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Career Insight</a>
        <a href="#">Test</a>
        <a href="#">About Us</a>
      </div>
      <a href="#" class="login-btn">Login</a>
    </nav>
  </body>
</html>

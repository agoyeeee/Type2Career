<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background-color: #000;
        color: #fff;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        border-radius: 10px;
        background-color: #060606;
        max-width: 500px;
        width: 100%;
      }

      .container form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
      }

      .container form label {
        align-self: flex-start;
        font-size: 18px;
        margin-bottom: 5px;
      }

      .container form input {
        background-color: #000;
        border: none;
        border-bottom: 1px solid #fff;
        color: #fff;
        padding: 15px;
        margin-bottom: 25px;
        font-size: 18px;
        width: 100%;
      }

      .container form button {
        padding: 15px;
        border: none;
        font-size: 18px;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
      }

      .login-btn {
        background-color: #333;
        color: #fff;
        border-radius: 16px;
      }

      .signup-btn {
        background-color: #007bff;
        color: #fff;
        border-radius: 16px;
      }

      .left-image {
        position: absolute;
        top: 60px;
        left: 20px;
        width: 150px;
        height: auto;
      }

      .brand-title {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        color: #fff;
      }

      .contact-link {
        position: absolute;
        top: 20px;
        right: 20px;
        color: #fff;
        text-decoration: none;
        font-size: 14px;
      }

      .right-section {
        position: absolute;
        bottom: 20px;
        right: 20px;
        text-align: right;
      }

      .right-section img {
        width: 300px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <span class="brand-title">TYPE2CAREER</span>
    <img
      alt="A futuristic smartphone with a sleek design and vibrant colors"
      class="left-image"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/0852c74df5204e60a0becedf83a1447da7e95e2de168b8e92f5f94e5dd6a746f?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
    />
    <a href="#" class="contact-link">Hubungi Kami</a>
    <div class="container">
      <form>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />

        <button class="login-btn" type="button">Login</button>
        <button class="signup-btn" type="button">Sign Up</button>
      </form>
    </div>
    <div class="right-section">
      <img
        alt="A futuristic smartphone with a sleek design and vibrant colors"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/b0b8ac2bd764eda356e14ac0185ec4d6d1336b9f4ef645a165b1c133a6863e88?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
      />
    </div>
  </body>
</html>

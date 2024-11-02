<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Page</title>
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

      .sign-up-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        border-radius: 10px;
        background-color: #060606;
        max-width: 500px;
        width: 100%;
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

      .sign-up-form {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 400px;
        gap: 20px;
      }

      .sign-up-form label {
        font-size: 18px;
        color: #a6a6a6;
      }

      .sign-up-form input {
        background-color: #000;
        border: none;
        border-bottom: 2px solid #fff;
        color: #fff;
        padding: 10px;
        font-size: 16px;
        outline: none;
      }

      .signup-button {
        background-color: #4585e5;
        color: #fff;
        padding: 15px;
        border: none;
        border-radius: 16px;
        font-size: 18px;
        cursor: pointer;
        text-align: center;
        max-width: 100%;
      }

      .side-image {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 300px;
        height: auto;
      }

      .left-image {
        position: absolute;
        top: 60px;
        left: 20px;
        width: 150px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <span class="brand-title">TYPE2CAREER</span>
    <a href="#" class="contact-link">Hubungi Kami</a>
    <img
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/0852c74df5204e60a0becedf83a1447da7e95e2de168b8e92f5f94e5dd6a746f?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
      alt="Decorative left side image"
      class="left-image"
    />
    <div class="sign-up-container">
      <form class="sign-up-form">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />

        <label for="username">Username</label>
        <input type="text" id="username" name="username" />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />

        <button type="submit" class="signup-button">Sign Up</button>
      </form>
    </div>
    <img
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/b0b8ac2bd764eda356e14ac0185ec4d6d1336b9f4ef645a165b1c133a6863e88?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
      alt="Decorative right side image"
      class="side-image"
    />
  </body>
</html>

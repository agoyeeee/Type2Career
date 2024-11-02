<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>T2C Section</title>
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
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .container {
        text-align: center;
        position: relative;
        max-width: 800px;
        padding: 40px;
        color: #ddd;
      }

      /* Background Gradient */
      .background-gradient {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(0, 0, 0, 0) 30%, #000 80%);
        z-index: -1;
      }

      /* Left and Right Images */
      .left-image,
      .right-image {
        position: absolute;
        top: 30%;
        width: 150px;
        height: auto;
        transform: translateY(-50%);
      }

      .left-image {
        left: -50px; /* Menempatkan lebih ke kiri */
      }

      .right-image {
        right: -50px; /* Menempatkan lebih ke kanan */
      }

      /* T2C Title */
      .t2c-title {
        font-size: 60px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        gap: 20px;
        color: #fff;
        margin-top: 50px;
      }

      /* Description Text */
      .description {
        margin-top: 20px;
        font-size: 18px;
        line-height: 1.5;
        color: #aaa;
      }

      /* Take Test Button */
      .take-test-btn {
        display: inline-block;
        margin-top: 30px;
        padding: 15px 30px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background-color: #333;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s;
      }

      .take-test-btn:hover {
        background-color: #555;
        transform: scale(1.05);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Background Gradient -->
      <div class="background-gradient"></div>

      <!-- Left and Right Images -->
      <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9366770e4b5b8f091602e5efaa656fc0b7a6ca178b34acba47a9daadfb59c93?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
        alt="Left Decorative Image"
        class="left-image"
      />
      <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/db1056f2ab8b64a0cebc4876e6717257305df1e42b0a92253cd0aff6f673863a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
        alt="Right Decorative Image"
        class="right-image"
      />

      <!-- T2C Title -->
      <div class="t2c-title">
        <span>T</span>
        <span>2</span>
        <span>C</span>
      </div>

      <!-- Description -->
      <p class="description">
        Connect your MBTI personality type with a suitable career. Take the test,
        discover your strengths, and get the right job recommendations. Start a
        career journey that matches your potential today!
      </p>

      <!-- Take Test Button -->
      <a href="#" class="take-test-btn">Take Test</a>
    </div>
  </body>
</html>

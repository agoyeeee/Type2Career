<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz Page</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* Allow body to scroll */
      body {
        font-family: Arial, sans-serif;
        background-color: #000;
        color: #fff;
        display: flex;
        justify-content: center;
        padding: 20px;
        min-height: 100vh;
        overflow-y: auto;
      }

      .quiz-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 50px;
        padding: 20px;
        width: 100%;
        max-width: 800px;
      }

      .quiz-box {
        background-color: #111;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
        text-align: center;
        width: 100%;
      }

      .quiz-question {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
      }

      .quiz-options {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
      }

      .option-card {
        background-color: #222;
        border: 1px solid #505050;
        width: 120px;
        height: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        cursor: pointer;
      }

      .option-card:hover {
        background-color: #333;
      }

      .option-title {
        margin-top: 10px;
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
      }

      .submit-button {
        border-radius: 8px;
        background-color: #4585e5;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        margin-top: 20px;
      }

      .side-image-left,
      .side-image-right {
        position: absolute;
        top: 50px;
        width: 150px;
        height: auto;
      }

      .side-image-left {
        left: 30px;
      }

      .side-image-right {
        right: 30px;
      }

      @media (max-width: 768px) {
        .quiz-box {
          width: 100%;
          padding: 20px;
        }

        .quiz-options {
          flex-direction: column;
          align-items: center;
        }

        .option-card {
          width: 100%;
          max-width: 250px;
        }

        .side-image-left,
        .side-image-right {
          width: 100px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Decorative Side Images -->
    <img
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9366770e4b5b8f091602e5efaa656fc0b7a6ca178b34acba47a9daadfb59c93?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
      class="side-image-left"
      alt="Decorative Left Image"
    />
    <img
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/db1056f2ab8b64a0cebc4876e6717257305df1e42b0a92253cd0aff6f673863a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
      class="side-image-right"
      alt="Decorative Right Image"
    />

    <!-- Main Quiz Container with Two Questions -->
    <div class="quiz-container">
      <!-- Question 1 -->
      <div class="quiz-box">
        <h2 class="quiz-question">
          Anda biasanya berinteraksi dengan banyak orang, bahkan yang belum Anda
          kenal?
        </h2>
        <div class="quiz-options">
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/ced6354624a864f4910125135fed82d81192038df879c13dca5bcf52e21249f8?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Sangat Setuju"
              width="50"
            />
            <span class="option-title">Sangat Setuju</span>
          </div>
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/02676b2ab24d619e67025c85c7cb46cca5134d19750e6e73ca56ba151db79007?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Setuju"
              width="50"
            />
            <span class="option-title">Setuju</span>
          </div>
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/0daedcd421a6719d8f0f845e2d64b0cf5c8b9bf9b55ce3794e1725c481ca2d5a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Tidak Setuju"
              width="50"
            />
            <span class="option-title">Tidak Setuju</span>
          </div>
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/fc67f6141a42ca2463a686f83f74cd49390e12763c19f224e14a4dffeb104208?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Sangat Tidak Setuju"
              width="50"
            />
            <span class="option-title">Sangat Tidak Setuju</span>
          </div>
        </div>
      </div>

      <!-- Question 2 -->
      <div class="quiz-box">
        <h2 class="quiz-question">
          Apakah Anda merasa nyaman berada di lingkungan yang ramai?
        </h2>
        <div class="quiz-options">
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/ced6354624a864f4910125135fed82d81192038df879c13dca5bcf52e21249f8?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Sangat Setuju"
              width="50"
            />
            <span class="option-title">Sangat Setuju</span>
          </div>
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/02676b2ab24d619e67025c85c7cb46cca5134d19750e6e73ca56ba151db79007?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Setuju"
              width="50"
            />
            <span class="option-title">Setuju</span>
          </div>
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/0daedcd421a6719d8f0f845e2d64b0cf5c8b9bf9b55ce3794e1725c481ca2d5a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Tidak Setuju"
              width="50"
            />
            <span class="option-title">Tidak Setuju</span>
          </div>
          <div class="option-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/fc67f6141a42ca2463a686f83f74cd49390e12763c19f224e14a4dffeb104208?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Sangat Tidak Setuju"
              width="50"
            />
            <span class="option-title">Sangat Tidak Setuju</span>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <button class="submit-button">Submit</button>
    </div>
  </body>
</html>

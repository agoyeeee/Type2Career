<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personality and Job Recommendations</title>
    <style>
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
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      .personality-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px 0;
        width: 100%;
        max-width: 1200px;
      }

      .personality-info {
        text-align: center;
        margin-bottom: 50px;
      }

      .personality-title {
        font-size: 48px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
      }

      .personality-description {
        color: #bcca;
        font-size: 18px;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
      }

      /* Traits Box */
      .traits-box {
        background-color: #111;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
        padding: 40px;
        max-width: 800px;
        width: 100%;
        margin-bottom: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .traits-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        width: 100%;
      }

      .trait-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 20px;
        border-radius: 8px;
        background-color: #222;
      }

      .trait-item img {
        width: 60px;
        height: auto;
        margin-bottom: 10px;
      }

      .trait-title {
        font-size: 20px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 5px;
      }

      .trait-description {
        color: #bcca;
        font-size: 14px;
        line-height: 1.5;
      }

      /* Job Recommendations */
      .job-recommendations {
        text-align: center;
        margin-top: 50px;
        width: 100%;
      }

      .recommendations-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 30px;
      }

      .recommendations-grid {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
      }

      .recommendation-card {
        background-color: #111;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        width: 250px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      }

      .recommendation-card img {
        width: 80px;
        height: auto;
        border-radius: 50%;
        margin-bottom: 15px;
      }

      .job-title {
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 10px;
      }

      .job-description {
        color: #bcca;
        font-size: 14px;
        line-height: 1.4;
      }

      /* Decorative Images */
      .side-image-left,
      .side-image-right {
        position: fixed;
        top: 10%;
        width: 120px;
        height: auto;
      }

      .side-image-left {
        left: 20px;
      }

      .side-image-right {
        right: 20px;
      }

      @media (max-width: 991px) {
        .personality-title {
          font-size: 36px;
        }

        .recommendations-title {
          font-size: 28px;
        }

        .recommendations-grid {
          flex-direction: column;
        }

        .side-image-left,
        .side-image-right {
          display: none;
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

    <!-- Personality Section -->
    <section class="personality-section">
      <div class="personality-info">
        <h2 class="personality-title">INFJ</h2>
        <p class="personality-description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>

      <!-- Traits Box -->
      <div class="traits-box">
        <div class="traits-grid">
          <div class="trait-item">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/c1872bc628bb9e266ecf3dc17ff20a23860862ba76d10cbcaeac2c820db4a870?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Extraversion vs Introversion"
            />
            <h3 class="trait-title">Extraversion (E) vs. Introversion (I)</h3>
            <p class="trait-description">
              Where you focus your attention and get your energy.
            </p>
          </div>
          <div class="trait-item">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/59ed0700c630abf648e66271db2a1fb33a348e7148cf5abfcd5e54de8bca390b?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Sensing vs Intuition"
            />
            <h3 class="trait-title">Sensing (S) vs. Intuition (N)</h3>
            <p class="trait-description">How you take in information.</p>
          </div>
          <div class="trait-item">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/6225816af9e62f1e8498643ec891e42d6d6b492ed1177421378ec2e11eff4d67?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Thinking vs Feeling"
            />
            <h3 class="trait-title">Thinking (T) vs. Feeling (F)</h3>
            <p class="trait-description">How you make decisions.</p>
          </div>
          <div class="trait-item">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/6225816af9e62f1e8498643ec891e42d6d6b492ed1177421378ec2e11eff4d67?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Judging vs Perceiving"
            />
            <h3 class="trait-title">Judging (J) vs. Perceiving (P)</h3>
            <p class="trait-description">
              How you deal with the outside world.
            </p>
          </div>
        </div>
      </div>

      <!-- Job Recommendations -->
      <section class="job-recommendations">
        <h2 class="recommendations-title">Job Recommendations</h2>
        <div class="recommendations-grid">
          <div class="recommendation-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/c3c1d55c275f915c105869ce7e0861c23222878a5f80dcbaf47aee18bed3033d?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Job 1"
            />
            <h4 class="job-title">Job 1</h4>
            <p class="job-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
          <div class="recommendation-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/22891d8dd4d9d071f30e4cb7123fe0af001dd07e3dbfb2ec5fb25f96b1417b04?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Job 2"
            />
            <h4 class="job-title">Job 2</h4>
            <p class="job-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
          <div class="recommendation-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/a43463c1711c30a65a234678672ae3f4050a44bd773a2c72136bcc0027014323?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Job 3"
            />
            <h4 class="job-title">Job 3</h4>
            <p class="job-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>
      </section>
    </section>
  </body>
</html>
  
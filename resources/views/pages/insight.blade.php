<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career Insights</title>
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
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      /* Container */
      .career-insights-container {
        text-align: center;
        max-width: 1200px;
      }

      /* Header */
      .career-insights-title {
        font-size: 48px;
        font-weight: 700;
        text-transform: uppercase;
        color: #ffa5ff;
        margin-bottom: 20px;
      }

      .career-insights-description {
        font-size: 18px;
        color: #bcbcca;
        line-height: 1.6;
        margin-bottom: 50px;
      }

      /* Main Box with Shadow */
      .career-insights-box {
        background-color: #111;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);
        max-width: 100%;
        width: 100%;
      }

      /* Career Insights Content Layout */
      .career-insights-content {
        display: flex;
        flex-direction: column;
        gap: 40px;
        align-items: center;
      }

      .career-insights-step {
        display: flex;
        align-items: center;
        gap: 20px;
        max-width: 100%;
        width: 100%;
      }

      .career-insights-step:nth-child(even) {
        flex-direction: row-reverse;
      }

      /* Frame and Content */
      .career-insights-frame {
        display: flex;
        flex-direction: column;
        max-width: 600px;
      }

      .career-insights-subtitle {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 10px;
      }

      .career-insights-text {
        color: #bcbcca;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
      }

      /* Button */
      .career-insights-button {
        background-color: #4585e5;
        color: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 16px;
        text-align: center;
        width: 100px;
        text-decoration: none;
      }

      /* Images */
      .career-insights-image {
        width: 120px;
        height: auto;
        aspect-ratio: 1;
        object-fit: contain;
      }

      /* Decorative Images */
      .left-image,
      .right-image {
        position: absolute;
        top: 50px;
        width: 120px;
        height: auto;
      }

      .left-image {
        left: 20px;
      }

      .right-image {
        right: 20px;
      }

      /* Media Queries */
      @media (max-width: 991px) {
        .career-insights-title {
          font-size: 40px;
        }

        .career-insights-step {
          flex-direction: column;
          text-align: center;
        }

        .career-insights-image {
          width: 100px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Decorative Images Outside the Box -->
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

    <!-- Main Content -->
    <div class="career-insights-container">
      <h1 class="career-insights-title">Career Insight</h1>
      <p class="career-insights-description">
        Selamat datang di Career Insights, tempat di mana Anda dapat menemukan
        panduan karier yang tepat berdasarkan tipe kepribadian MBTI Anda. Di
        sini, kami menyediakan berbagai artikel, tips, dan sumber daya yang
        dirancang untuk membantu Anda memahami dunia kerja dengan lebih baik,
        sesuai dengan kekuatan dan preferensi kepribadian Anda.
      </p>

      <!-- Career Insights Single Box -->
      <div class="career-insights-box">
        <div class="career-insights-content">
          <!-- Step 1 -->
          <div class="career-insights-step">
            <div class="career-insights-frame">
              <h2 class="career-insights-subtitle">
                Temukan Karier yang Sesuai dengan Tipe Kepribadian Anda
              </h2>
              <p class="career-insights-text">
                Setiap tipe kepribadian memiliki kekuatan unik yang dapat
                bersinar dalam pekerjaan tertentu. Dalam bagian ini, Anda akan
                menemukan panduan khusus untuk setiap tipe MBTI, membantu Anda
                memahami karier apa yang paling cocok dan bagaimana cara
                mengembangkannya lebih lanjut.
              </p>
              <a href="#" class="career-insights-button">More</a>
            </div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/6225816af9e62f1e8498643ec891e42d6d6b492ed1177421378ec2e11eff4d67?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Ilustrasi menemukan karier sesuai kepribadian"
              class="career-insights-image"
            />
          </div>

          <!-- Step 2 -->
          <div class="career-insights-step">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/c1872bc628bb9e266ecf3dc17ff20a23860862ba76d10cbcaeac2c820db4a870?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Ilustrasi pengembangan diri dan keterampilan"
              class="career-insights-image"
            />
            <div class="career-insights-frame">
              <h2 class="career-insights-subtitle">
                Tips Pengembangan Diri & Keterampilan
              </h2>
              <p class="career-insights-text">
                Tidak hanya berhenti pada rekomendasi pekerjaan, kami juga
                memberikan tips untuk mengasah keterampilan penting yang
                dibutuhkan dalam karier pilihan Anda. Mulai dari soft skills
                seperti kepemimpinan dan komunikasi hingga hard skills yang
                spesifik untuk setiap bidang pekerjaan.
              </p>
              <a href="#" class="career-insights-button">More</a>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="career-insights-step">
            <div class="career-insights-frame">
              <h2 class="career-insights-subtitle">Wawasan dari Profesional</h2>
              <p class="career-insights-text">
                Dapatkan wawasan dan tips langsung dari profesional
                berpengalaman di berbagai bidang. Pelajari bagaimana mereka
                menggunakan kekuatan kepribadian mereka untuk mencapai puncak
                karier dan mendapatkan kepuasan dari pekerjaan mereka.
              </p>
              <a href="#" class="career-insights-button">More</a>
            </div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/59ed0700c630abf648e66271db2a1fb33a348e7148cf5abfcd5e54de8bca390b?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
              alt="Ilustrasi wawasan dari profesional"
              class="career-insights-image"
            />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

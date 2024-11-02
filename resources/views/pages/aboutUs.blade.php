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
      .about-section {
        background-color: #000;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        max-width: 1200px;
      }

      .main-content {
        margin-top: 40px;
        width: 100%;
      }

      .content-wrapper {
        display: flex;
        flex-direction: row;
        gap: 20px;
        align-items: center;
      }

      .left-column,
      .right-column {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      /* About Section */
      .section-title {
        color: #fff;
        text-transform: uppercase;
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 20px;
      }

      .section-description {
        color: #bcbcca;
        font-size: 18px;
        line-height: 1.6;
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px;
      }

      /* Team Title */
      .team-title {
        color: #ffa5ff;
        text-transform: uppercase;
        font-size: 28px;
        font-weight: 700;
        margin: 60px 0 20px;
      }

      /* Team Grid */
      .team-section {
        width: 100%;
        max-width: 800px;
      }

      .team-grid {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
      }

      /* Team Member Card */
      .team-member {
        width: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .member-card {
        background-color: #111;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 8px;
        text-align: center;
      }

      .member-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 15px;
        object-fit: cover;
      }

      .member-name {
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
      }

      .member-role {
        color: #bcbcca;
        font-size: 14px;
      }

      @media (max-width: 991px) {
        .section-title {
          font-size: 32px;
        }

        .team-title {
          font-size: 24px;
        }

        .team-grid {
          flex-direction: column;
          align-items: center;
        }

        .team-member {
          width: 100%;
          max-width: 300px;
        }
      }
    </style>
  </head>
  <body>
    <section class="about-section">
      <h2 class="section-title">About Us</h2>
      <p class="section-description">
        MBCR (Myers-Briggs Career Recommendation) hadir untuk membantu Anda
        menemukan karir yang sesuai dengan kepribadian Anda melalui tes
        kepribadian MBTI (Myers-Briggs Type Indicator). Dengan rekomendasi karir
        yang dipersonalisasi berdasarkan gaya berpikir, kekuatan, dan preferensi
        unik Anda, kami percaya bahwa pemahaman diri adalah kunci menuju karir
        yang memuaskan. Platform ini menyediakan tes MBTI interaktif,
        rekomendasi karir yang relevan, serta fitur pelacakan hasil yang
        memudahkan pengguna untuk menavigasi pilihan karir mereka. Temukan karir
        impian Anda bersama MBCR dan raih masa depan yang lebih cerah dan penuh
        potensi!
      </p>

      <!-- Team Section -->
      <h3 class="team-title">Our Team</h3>
      <div class="team-section">
        <div class="team-grid">
          <div class="team-member">
            <div class="member-card">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f31570eee62bd982be626d2b2c34a9dd4701c059a42386deed93cbace17d348?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                alt="M. Prayoga Putra S"
                class="member-image"
              />
              <h4 class="member-name">M. Prayoga Putra S</h4>
              <p class="member-role">BackEnd Developer</p>
            </div>
          </div>
          <div class="team-member">
            <div class="member-card">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/06083c8ec8c11ea56a1cef773e6db3ec4006cb34c6a5d9ff15e9b662350b17fe?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                alt="Isnaini Nur Fadhilah"
                class="member-image"
              />
              <h4 class="member-name">Isnaini Nur Fadhilah</h4>
              <p class="member-role">FrontEnd Developer</p>
            </div>
          </div>
          <div class="team-member">
            <div class="member-card">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/06083c8ec8c11ea56a1cef773e6db3ec4006cb34c6a5d9ff15e9b662350b17fe?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                alt="Erwan Rahmansyah"
                class="member-image"
              />
              <h4 class="member-name">Erwan Rahmansyah</h4>
              <p class="member-role">Designer</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

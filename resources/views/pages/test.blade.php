<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MBTI Test Page</title>
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
    .container {
      text-align: center;
      max-width: 800px;
      margin-top: 30px;
    }

    /* Header */
    .header-title {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .header-title span {
      color: #007bff; /* Biru untuk teks MBTI */
    }

    /* Description */
    .description {
      font-size: 18px;
      line-height: 1.6;
      color: #aaa;
      margin-bottom: 40px;
    }

    /* Info Box */
    .info-box {
      background-color: #111;
      border: 1px solid #333;
      border-radius: 8px;
      padding: 20px;
      text-align: left;
      max-width: 700px;
      color: #ddd;
      margin-bottom: 20px;
    }

    .info-content {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .info-title {
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #fff;
    }

    .info-text {
      font-size: 16px;
      line-height: 1.6;
      color: #aaa;
    }

    .info-text strong {
      color: #fff;
    }

    /* Button */
    .start-button {
      display: inline-block;
      padding: 15px 30px;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      background-color: #a000ff;
      border: none;
      border-radius: 8px;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .start-button:hover {
      background-color: #d000ff;
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
  </style>
</head>
<body>

  <!-- Decorative Images Outside the Box -->
  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9366770e4b5b8f091602e5efaa656fc0b7a6ca178b34acba47a9daadfb59c93?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38" alt="Left Decorative Image" class="left-image">
  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/db1056f2ab8b64a0cebc4876e6717257305df1e42b0a92253cd0aff6f673863a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38" alt="Right Decorative Image" class="right-image">

  <!-- Main Content -->
  <div class="container">
    <h1 class="header-title">Take the <span>MBTI</span> Test</h1>
    <p class="description">
      Selamat datang di tes MBTI (Myers-Briggs Type Indicator) kami! Tes ini dirancang untuk membantu Anda memahami tipe kepribadian Anda dengan lebih baik, sehingga Anda dapat menemukan jalur karier yang paling sesuai dengan kekuatan dan preferensi pribadi Anda.
    </p>

    <!-- Info Box (without inner asset image) -->
    <div class="info-box">
      <div class="info-content">
        <div class="info-title">How does this test work?</div>
        <p class="info-text">
          Tes MBTI terdiri dari serangkaian pertanyaan yang mengeksplorasi cara Anda berpikir, membuat keputusan, dan berinteraksi dengan dunia di sekitar Anda. Berdasarkan jawaban Anda, kami akan mengidentifikasi tipe kepribadian MBTI Anda dari 16 tipe yang tersedia, seperti INTJ, ESFJ, dan lainnya.
        </p>
        <p class="info-text">
          <strong>Langkah-langkah Mengikuti Tes:</strong><br>
          1. Jawab Pertanyaan – Tes ini terdiri dari sekitar 60-100 pertanyaan singkat. Cukup pilih jawaban yang paling menggambarkan diri Anda.<br>
          2. Dapatkan Hasil – Setelah menyelesaikan tes, Anda akan langsung mendapatkan tipe kepribadian MBTI Anda.<br>
          3. Terima Rekomendasi Karier – Berdasarkan hasil MBTI Anda, kami akan merekomendasikan jalur karier yang sesuai dengan kepribadian dan preferensi Anda.
        </p>
        <p class="info-text">
          <strong>Why is this test important?</strong><br>
          Memahami kepribadian Anda adalah langkah pertama dalam merencanakan masa depan karier yang sukses. Tes MBTI ini memungkinkan Anda untuk:
          <ul>
            <li>Mengetahui kekuatan dan area perkembangan Anda.</li>
            <li>Menemukan pekerjaan yang benar-benar sesuai dengan diri Anda.</li>
            <li>Mengambil langkah yang tepat untuk mencapai kesuksesan karier yang memuaskan.</li>
          </ul>
        </p>
      </div>
    </div>

    <!-- Start Button Outside the Info Box -->
    <a href="#" class="start-button">Mulai</a>
  </div>

</body>
</html>

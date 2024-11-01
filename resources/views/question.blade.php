<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Inputan Bootstrap</title>
    <!-- Link CSS Bootstrap -->

</head>
<body>

<div class="container mt-5">
    <h2>Form Inputan</h2>
    <form>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
        </div>
        <div class="form-group">
            <label for="telepon">Nomor Telepon</label>
            <input type="tel" class="form-control" id="telepon" placeholder="Masukkan nomor telepon" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<!-- Link JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

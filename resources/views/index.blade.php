<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Pet Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="Pet Clinic Logo" class="navbar-logo"> Pet Clinic
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#statistics">Statistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#registration">Registrasi</a>
                    </li>
                </ul>

                @if(session('user'))
                    <span class="badge bg-light text-dark me-3">
                        <i class="bi bi-person-circle"></i> {{ htmlspecialchars(session('user')) }}
                    </span>
                @else
                    <div class="d-flex gap-2 align-items-center">
                @endif
                <button class="btn btn-outline-warning btn-sm me-2"
                    data-bs-toggle="modal"
                    data-bs-target="#wishlistModal"
                    onclick="tampilkanwishlist()">
                    ⭐ Wishlist (<span id="wishlist-count">0</span>)
                </button>
                @if(session('user'))
                    <a href="{{ route('logout') }}" class="btn btn-danger btn-sm me-2">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning btn-sm me-2">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </a>
                    </div>
                @endif
                <button id="btn-theme" class="btn btn-outline-light btn-sm">
                    Mode Gelap
                </button>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-primary">Selamat datang pencinta hewan!</h1>
                    <p class="lead text-muted mb-4">
                        Platform digital terpadu untuk mengelola data pasien hewan peliharaan, jadwal konsultasi, 
                        rekam medis, layanan klinik secara efisien dan terorganisir, menyediakan makanan dan kebutuhan anabul.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#registration" class="btn btn-primary btn-lg">Daftar Sekarang </a>
                        <a href="#statistics" class="btn btn-outline-primary btn-lg"> Lihat Statistik</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="{{ asset('assets/dashboard.png') }}" alt="Pet Clinic Illustration" class="hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="statistics" class="statistics-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Statistik Klinik</h2>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card stat-card shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="icon-box bg-primary bg-opacity-10 mb-3">
                                <i class="bi bi-people-fill text-primary"></i>
                            </div>
                            <h3 class="counter fw-bold text-primary">1,247</h3>
                            <p class="text-muted mb-0">Total Pasien Terdaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card stat-card shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="icon-box bg-success bg-opacity-10 mb-3">
                                <i class="bi bi-calendar-check-fill text-success"></i>
                            </div>
                            <h3 class="counter fw-bold text-success">342</h3>
                            <p class="text-muted mb-0">Konsultasi Bulan Ini</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card stat-card shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="icon-box bg-warning bg-opacity-10 mb-3">
                                <i class="bi bi-award-fill text-warning"></i>
                            </div>
                            <h3 class="counter fw-bold text-warning">98%</h3>
                            <p class="text-muted mb-0">Tingkat Kepuasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="produk" class="py-5">
        <div class="container">
            <h3 class="mb-4">Daftar Kebutuhan Hewan</h3>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/royalCanin.jpeg') }}" class="card-img-top" alt="Royal canin">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Royal Canin Kitten</h5>
                            <p class="card-text harga-text">Harga: Rp. 65.000</p>
                            <p class="card-text stok-text">Stok: 10</p>

                            <div class="d-flex justify-content-between mt-auto">
                                <button class="btn btn-primary btn-detail w-50 me-2">
                                    Beli
                                </button>

                                <button class="btn btn-outline-danger btn-wishlist w-50">
                                    ❤️ Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/rabbitFood.jpeg') }}" class="card-img-top" alt="Rabbit Food">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Rabbit Food</h5>
                            <p class="card-text harga-text">Harga: Rp. 85.000</p>
                            <p class="card-text stok-text">Stok: 12</p>

                            <div class="d-flex justify-content-between mt-auto">
                                <button class="btn btn-primary btn-detail w-50 me-2">
                                    Beli
                                </button>

                                <button class="btn btn-outline-danger btn-wishlist w-50">
                                    ❤️ Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/mainan.jpeg') }}" class="card-img-top" alt="Mainan">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Mainan Kucing</h5>
                            <p class="card-text harga-text">Harga: Rp. 100.000</p>
                            <p class="card-text stok-text">Stok: 20</p>

                            <div class="d-flex justify-content-between mt-auto">
                                <button class="btn btn-primary btn-detail w-50 me-2">
                                    Beli
                                </button>

                                <button class="btn btn-outline-danger btn-wishlist w-50">
                                    ❤️ Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="wishlistModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Daftar Wishlist Saya</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <ul class="list-group" id="daftar-wishlist">
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Tutup
                </button>

                <button type="button"
                    class="btn btn-danger"
                    onclick="hapusWishlist()">
                    Kosongkan
                </button>
            </div>

        </div>
    </div>
</div>

    <section id="registration" class="registration-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h2 class="card-title text-center mb-4 text-primary fw-bold">Formulir Registrasi Pasien </h2>
                            <form id="petRegistrationForm">
                                <div class="mb-3">
                                    <label for="ownerName" class="form-label">
                                        <i class="bi bi-person"></i> Nama Pemilik <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="ownerName" 
                                        placeholder="Masukkan nama lengkap pemilik" required>
                                </div>

                                <div class="mb-3">
                                    <label for="petName" class="form-label">
                                        <i class="bi bi-tag"></i> Nama Hewan Peliharaan <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="petName" 
                                        placeholder="Masukkan nama hewan peliharaan" required>
                                </div>

                                <div class="mb-3">
                                    <label for="petType" class="form-label">
                                        <i class="bi bi-list"></i> Jenis Hewan <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" id="petType" required>
                                        <option value="" selected disabled>Pilih jenis hewan</option>
                                        <option value="kucing">Kucing</option>
                                        <option value="anjing">Anjing</option>
                                        <option value="kelinci">Kelinci</option>
                                        <option value="burung">Burung</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label">
                                        <i class="bi bi-telephone"></i> Nomor Telepon <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control" id="phoneNumber" 
                                        placeholder="Contoh: 081234567890" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        <i class="bi bi-envelope"></i> Email
                                    </label>
                                    <input type="email" class="form-control" id="email" 
                                        placeholder="email@example.com">
                                </div>

                                <div class="mb-4">
                                    <label for="notes" class="form-label">
                                        <i class="bi bi-chat-left-text"></i> Keluhan
                                    </label>
                                    <textarea class="form-control" id="notes" rows="3" 
                                        placeholder="Deskripsikan keluhan atau kondisi hewan peliharaan"></textarea>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Kirim Registrasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h6 class="fw-bold mb-3">Jam Operasional</h6>
                    <p class="small mb-2">Senin - Jumat: 08.00 - 20.00</p>
                    <p class="small mb-2">Sabtu: 08.00 - 17.00</p>
                    <p class="small mb-2">Minggu: 09.00 - 15.00</p>
                </div>
            </div>
            
            <hr class="bg-light">
            
            <div class="row">
                <div class="col-12 text-center">
                    <p class="small mb-0">
                        &copy; 2026 Sistem Manajemen Pet Clinic. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('petRegistrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const ownerName = document.getElementById('ownerName').value;
            const petName = document.getElementById('petName').value;
            const petType = document.getElementById('petType').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            alert(`Registrasi Berhasil!\n\nNama Pemilik: ${ownerName}\nNama Hewan: ${petName}\nJenis: ${petType}\nTelepon: ${phoneNumber}\n\nData telah tersimpan dalam sistem.`);
            this.reset();
        });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <script>
    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

    // mengupdate angka wishlist
    function updateWishlistCount() {
        document.getElementById("wishlist-count").innerText = wishlist.length;
    }

    // menambahkan wishlist
    function tambahKeWishlist(namaProduk) {
        if (!wishlist.includes(namaProduk)) {
            wishlist.push(namaProduk);
            localStorage.setItem("wishlist", JSON.stringify(wishlist));
            updateWishlistCount();
            alert(namaProduk + " ditambahkan ke Wishlist");
        } else {
            alert("Produk sudah ada di Wishlist!");
        }
    }

    // Menampilkan wishlist yang ada
    function tampilkanwishlist() {
        const daftar = document.getElementById("daftar-wishlist");
        daftar.innerHTML = "";

        if (wishlist.length === 0) {
            daftar.innerHTML = '<li class="list-group-item">Wishlist kosong</li>';
            return;
        }

        wishlist.forEach((item, index) => {
            daftar.innerHTML += `
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    ${item}
                    <button class="btn btn-sm btn-danger" onclick="hapusItem(${index})">
                        <i class="bi bi-trash"></i>
                    </button>
                </li>
            `;
        });
    }

    // Hapus satu item
    function hapusItem(index) {
        wishlist.splice(index, 1);
        localStorage.setItem("wishlist", JSON.stringify(wishlist));
        tampilkanwishlist();
        updateWishlistCount();
    }

    // Kosongkan wishlist
    function hapusWishlist() {
        wishlist = [];
        localStorage.removeItem("wishlist");
        tampilkanwishlist();
        updateWishlistCount();
    }

    // Event tombol wishlist di setiap produk
    document.querySelectorAll(".btn-wishlist").forEach(button => {
        button.addEventListener("click", function() {
            const card = this.closest(".card-body");
            const namaProduk = card.querySelector(".card-title").innerText;
            tambahKeWishlist(namaProduk);
        });
    });

    // Jalankan saat pertama load
    updateWishlistCount();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
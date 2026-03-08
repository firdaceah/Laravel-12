<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

        :root {
            --primary-color: #4361ee;
            --secondary-color: #4cc9f0;
            --dark-bg: #0f172a;
        }

        body {
            background-color: #f1f5f9;
            background-image: radial-gradient(#cbd5e1 0.5px, transparent 0.5px);
            background-size: 24px 24px;
            font-family: 'Poppins', sans-serif;
            color: #334155;
        }

        .navbar {
            z-index: 1050;
            background: linear-gradient(90deg, #4361ee, #4cc9f0) !important;
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-bottom: none !important;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.3s;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #fff !important;
            transform: translateY(-2px);
            opacity: 0.8;
        }

        .hero-section {
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #4361ee 0%, #4cc9f0 100%);
            color: white;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            margin-bottom: -50px;
        }

        .custom-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4361ee, #4cc9f0);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.4);
        }

        .btn-gradient:hover {
            color: white;
            opacity: 0.9;
        }

        .animate-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .active {
            border-bottom: 2px solid white;
        }

        .text-primary {
            color: #4cc9f0 !important;
        }

        /* Memperhalus jarak footer */
        footer a:hover {
            color: #4cc9f0 !important;
            transition: 0.3s;
        }

        @media (max-width: 991.98px) {
            .navbar-nav {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .nav-link {
                padding: 10px 0;
                /* Memberi ruang sentuh yang lebih lega di HP */
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                /* Garis pemisah tipis */
            }

            .nav-link:last-child {
                border-bottom: none;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">MyTask</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto text-center">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about.page') }}">About</a>
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                        href="{{ route('contact.page') }}">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Firda Rahayu</h5>
                    <p>Mahasiswa Teknik Informatika yang berfokus pada pengembangan aplikasi web menggunakan Laravel dan
                        teknologi modern lainnya.</p>
                </div>
                <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Links</h5>
                    <p><a href="{{ route('home') }}" class="text-white" style="text-decoration: none;">Home</a></p>
                    <p><a href="{{ route('about.page') }}" class="text-white" style="text-decoration: none;">About</a>
                    </p>
                    <p><a href="{{ route('contact.page') }}" class="text-white"
                            style="text-decoration: none;">Contact</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contact</h5>
                    <p><i class="fas fa-home me-3"></i> Sidoarjo, Indonesia</p>
                    <p><i class="fas fa-envelope me-3"></i> firdarahayu105@gmail.com</p>
                    <p><i class="fas fa-phone me-3"></i> +62 897 591 0060</p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p> &copy; 2026 Copyright: <strong class="text-primary">Firda Rahayu</strong></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

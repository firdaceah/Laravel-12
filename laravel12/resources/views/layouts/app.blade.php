<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">MyTask</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about.page') }}">About</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="text-center mt-5 py-3 text-muted">
        &copy; 2026 Tugas Laravel
    </footer>

</body>

</html>

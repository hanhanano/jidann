<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Keren')</title>
    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg,rgb(64, 216, 125),rgb(20, 212, 237));
            min-height: 100vh;
            color: #333;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg,rgb(162, 223, 48),rgb(34, 206, 171));
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Navigation */
        nav {
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        nav a {
            text-decoration: none;
            font-weight: 600;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg,rgb(64, 216, 125),rgb(20, 212, 237));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        /* Card Styles */
        .card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            margin: 5px;
        }

        .btn-primary {
            background: linear-gradient(45deg,rgb(71, 255, 61),rgb(20, 212, 237));
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg,rgb(20, 212, 237),rgb(71, 255, 61));
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-third {
            background: linear-gradient(45deg,rgb(100, 170, 176),rgb(140, 149, 151));
            color: white;
        }

        .btn-third:hover {
            background: linear-gradient(45deg,rgb(140, 149, 151),rgb(100, 170, 176));
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-warning {
            background: linear-gradient(45deg,rgb(241, 202, 86),rgb(255, 247, 0));
            color: #333;
        }

        .btn-warning:hover {
            background: linear-gradient(45deg,rgb(255, 247, 0), rgb(241, 202, 86));
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(254, 202, 87, 0.3);
        }

        .btn-danger {
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg,rgb(255, 88, 88),rgb(167, 62, 56));
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
        }

        .btn-secondary {
            background: linear-gradient(45deg,rgb(82, 223, 239),rgb(111, 222, 133));
            color: white;
        }

        .btn-secondary:hover {
            background: linear-gradient(45deg, rgb(101, 201, 212), rgb(129, 190, 168));
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(160, 174, 192, 0.3);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #4a5568;
            font-size: 16px;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Table Styles */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background: linear-gradient(135deg,rgb(37, 190, 98),rgb(31, 156, 172));
            color: white;
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .table th {
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, #f8fafc, #edf2f7);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Index Page Styles */
        .index-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .index-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Post Detail Styles */
        .post-detail {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .post-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 20px;
            line-height: 1.2;
            background: linear-gradient(135deg,rgb(64, 216, 125),rgb(20, 212, 237));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .post-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 30px;
            text-align: justify;
        }

        /* Form Container */
        .form-container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        /* Footer */
        footer {
            margin-top: 4rem;
            background: white;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }

        footer .container {
            text-align: center;
            padding: 2rem;
        }

        footer p {
            color: #718096;
        }

        footer .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1rem;
        }

        footer .footer-links a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer .footer-links a:hover {
            color: #718096;
        }

        /* Utility Classes */
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .mb-4 { margin-bottom: 1rem; }
        .mt-4 { margin-top: 1rem; }
        .space-y-4 > * + * { margin-top: 1rem; }
        .inline { display: inline; }
        .inline-block { display: inline-block; }
        .flex { display: flex; }
        .justify-between { justify-content: space-between; }
        .items-center { align-items: center; }
        .border-t { border-top: 1px solid #e2e8f0; }
        .pt-6 { padding-top: 1.5rem; }
        .py-8 { padding: 2rem 0; }
        .font-medium { font-weight: 500; }
        .font-bold { font-weight: 700; }
        .text-sm { font-size: 0.875rem; }
        .text-gray-600 { color: #718096; }
        .text-gray-500 { color: #a0aec0; }
        .text-2xl { font-size: 1.5rem; }
        .text-6xl { font-size: 4rem; }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .card {
                padding: 20px;
            }
            
            .post-title {
                font-size: 2rem;
            }
            
            .index-header {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .table {
                font-size: 14px;
            }
            
            .table th,
            .table td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div>
                <a href="{{ route('posts.index') }}" class="nav-brand">
                    Post cihuyy
                </a>
            </div>
            <div class="nav-links">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">📚 Semua Post</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© Zidan Septian 2025, Dibuat dengan menggunakan Laravel</p>
        </div>
    </footer>
</body>
</html>
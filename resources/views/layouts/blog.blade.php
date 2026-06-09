<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Kami')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .navbar-blog {
            background: #23364d;
        }

        .footer-blog {
            background: #23364d;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 40px;
        }

        .card-blog {
            border: none;
            border-radius: 12px;
        }

        .breadcrumb-blog {
            font-size: 13px;
            color: #6c757d;
        }

        .author-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .related-thumb {
            width: 70px;
            height: 55px;
            object-fit: cover;
            border-radius: 6px;
        }

        .author-photo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e9ecef;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-blog">
        <div class="container">

            <div>
                <a class="navbar-brand fw-bold"
                    href="{{ route('blog.index') }}">
                    Blog Kami
                </a>

                <div style="font-size:11px;color:#cfd8dc;">
                    Artikel Terbaru Kami
                </div>
            </div>

            <div class="ms-auto">
                <a href="{{ route('blog.index') }}"
                    class="text-white text-decoration-none me-4">
                    Beranda
                </a>

                <a href="{{ route('blog.index') }}"
                    class="text-white text-decoration-none me-4">
                    Artikel
                </a>

                <a href="{{ route('blog.index') }}"
                    class="text-white text-decoration-none me-4">
                    Kategori
                </a>

                <a href="#"
                    class="text-white text-decoration-none">
                    Tentang
                </a>
            </div>

        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <div class="footer-blog">
        © 2026 Blog Kami. Seluruh hak cipta dilindungi.
    </div>

</body>

</html>
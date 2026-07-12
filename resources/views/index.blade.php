<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
        }

        .navbar{
            background:#d60000;
        }

        .navbar-brand{
            color:#fff;
            font-weight:bold;
            font-size:28px;
        }

        .navbar-brand:hover{
            color:#fff;
        }

        .hero{
            background:#fff;
            padding:40px;
            margin:30px 0;
            border-radius:10px;
        }

        .card{
            border:none;
            box-shadow:0 3px 10px rgba(0,0,0,.15);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card-title{
            font-weight:bold;
        }

        footer{
            margin-top:40px;
            background:#222;
            color:white;
            padding:20px;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">Portal Berita Indonesia</a>
    </div>
</nav>

<div class="container">

    <div class="hero">
        <h2>Berita Terbaru</h2>
        <p>Portal berita sederhana menggunakan Laravel.</p>
    </div>

    <div class="row">

        @forelse($posts as $post)

        <div class="col-md-4 mb-4">
            <div class="card h-100">

                <div class="card-body">

                    <h4 class="card-title">
                        {{ $post->title }}
                    </h4>

                    <hr>

                    <p class="card-text">
                        {{ $post->content }}
                    </p>

                </div>

            </div>
        </div>

        @empty

        <div class="alert alert-warning">
            Belum ada berita.
        </div>

        @endforelse

    </div>

</div>

<footer class="text-center">
    © {{ date('Y') }} Portal Berita Laravel
</footer>

</body>
</html>
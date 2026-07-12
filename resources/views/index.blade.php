```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seputar Berita Terkini</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar{
            background:#dc3545;
        }

        .navbar-brand{
            color:white !important;
            font-size:28px;
            font-weight:bold;
        }

        .nav-link{
            color:white !important;
        }

        .hero{
            background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
            url('https://images.unsplash.com/photo-1504711434969-e33886168f5c');
            background-size:cover;
            background-position:center;
            height:350px;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
        }

        .hero h1{
            font-size:50px;
            font-weight:bold;
        }

        .card{
            border:none;
            box-shadow:0 2px 8px rgba(0,0,0,.15);
            transition:.3s;
            height:100%;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            height:220px;
            object-fit:cover;
        }

        footer{
            background:#212529;
            color:white;
            padding:20px;
            margin-top:50px;
        }

        .badge-news{
            background:#dc3545;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="#">Seputar Berita</a>

        <button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#menu">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Nasional</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Teknologi</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Olahraga</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Tentang</a></li>
            </ul>
        </div>

    </div>
</nav>

<section class="hero">
    <div>
        <h1>Seputar Berita terkini</h1>
        <p>Informasi Terbaru, Terpercaya, dan Terupdate</p>
    </div>
</section>

<div class="container my-5">

    <h2 class="mb-4">Berita Terbaru</h2>

    <div class="row">

        @forelse($posts as $post)

        <div class="col-md-4 mb-4">

            <div class="card">

                @if($post->image)
                    <img src="{{ asset('images/'.$post->image) }}" class="card-img-top">
                @else
                    <img src="https://picsum.photos/600/400" class="card-img-top">
                @endif

                <div class="card-body d-flex flex-column">

                    <span class="badge badge-news mb-2">
                        Berita
                    </span>

                    <h4>{{ $post->title }}</h4>

                    <small class="text-muted mb-2">
                        Publisher :
                        <b>{{ $post->publisher }}</b>

                        <br>

                        {{ \Carbon\Carbon::parse($post->published_at)->format('d F Y') }}
                    </small>

                    <p class="flex-grow-1">
                        {{ Str::limit($post->content,150) }}
                    </p>

                    <a href="#" class="btn btn-danger w-100">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="alert alert-warning">
                Belum ada berita.
            </div>

        </div>

        @endforelse

    </div>

</div>

<footer class="text-center">
    <h5>Seputar Berita</h5>
    <p class="mb-0">
        © 2026
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```

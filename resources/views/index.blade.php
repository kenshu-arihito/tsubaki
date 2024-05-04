<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Album example · Bootstrap</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">ReskillPHP研修</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">研修科目</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Linux/Git</a></li>
                            <li><a href="#" class="text-white">HTML/CSS/JS</a></li>
                            <li><a href="#" class="text-white">PHP/MySQL/Laravel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <i class="fa fa-pie-chart" aria-hidden="true"></i><strong class="ml-2">Products</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="font-weight-light">Products Sample</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                        creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                        entirely.</p>
                    <form action="" method="post" novalidate class="row g-1">
                            <label class="col-3"><a href="#" class="btn btn-secondary">絞り込み検索</a></label>
                            <label class="col-9"><input type="text" class="form-control"></label>
                    </form>
                </div>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="https://picsum.photos/id/{{ $product->category_id }}/600/320" width="100%"
                                    height="225" alt="dammyImg">
                                <div class="card-body">
                                    <h4 class="h-4 text-black-50">{{ $product->name }}</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-secondary" target="_blank" href="https://www.google.com/search?q={{ $product->name }}"><i class="fa fa-search"></i> 詳細検索</a>
                                            <a class="btn btn-sm btn-outline-secondary" target="_blank" href="https://www.amazon.co.jp/{{ $product->name }}/s?k={{ $product->name }}"><i class="fa fa-amazon"></i> Amazon購入</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-right mb-1"><a href="#" class="text-white-50">Back to top</a></p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/" class="text-white-50">Visit the homepage</a> or
                read
                our <a href="/docs/5.0/getting-started/introduction/" class="text-white-50">getting started guide</a>.
            </p>
        </div>
    </footer>
</body>

</html>

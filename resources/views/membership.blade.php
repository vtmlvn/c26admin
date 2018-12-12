<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>C26 Laundry</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>

<!-- Navigation -->

<body id=page-top>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <img style="padding 2px" src="../img/131106.jpg">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"> C26 Laundry</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('index')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('layanan')}}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('membership')}}">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('tentangkami')}}">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section id="about" class="headerbg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="text-uppercase  text-center"><strong>Membership</strong></h1>
                <h6 class="text-uppercase  text-center"><strong><a href="#tentang">Tentang Membership</a>  /  <a href="#paket">Paket</a>  /  <a href="#ceksaldo">Cek Saldo</a></strong></h6>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" style="width:100%" class="img-responsive" alt=""> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text text-white">
                    <h2 class="text-center">About Us</h2>
                    <hr class="light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h3>Keuntungan</h3>
                    <div class="list-style">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <ul>
                                <li>Lorem ipsum dolor</li>
                                <li>Tempor incididunt</li>
                                <li>Lorem ipsum dolor</li>
                                <li>Incididunt ut labore</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- pricing section -->
<section id="paket">
    <div class="container">
        <div class="row">
            <div class="mx-auto text-center">
                <h2 class="section-heading">Paket Membership</h2>
                <hr class="my-4">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header">Paket A</h4>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header">Paket B</h4>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header">Paket C</h4>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" bg-dark" id="#ceksaldo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Cek Saldo</h2>
                <hr class="light my-4">
                <div class="search">
                    <input type="text" style="box-shadow:none;" class="searchTerm" placeholder=" Masukkan id member">
                    <button style="padding: 0px; background-color:#aaaaaa;" type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-center bg-secondary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Lokasi</h4>
                <p class="lead mb-0">Jl. Raya Dramaga, Ciherang
                    <br> Dramaga, Bogor, 16680</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">HUBUNGI KAMI</h4>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center" style="display: contents;" href="#">
                            <i class="fab fa-fw fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center" style="font-weight: 10;display: contents;" href="#">
                            <i class="fab fa-fw fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center" style="display: contents;" href="https://twitter.com/c26_laundry">
                            <i class="fab fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center" style="font-weight: 10;display: contents;" href="#">
                            <i class="fab fa-fw fa-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>
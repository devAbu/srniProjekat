<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/aboutMe.ico" type="image/x-icon">

    <meta name="author" content="Omar Hassan">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-primary bg-dark fixed-top">
            <a class="navbar-brand" href="index.php">
                <img src="images/aboutMe.jpg" alt="logo" height=50 width=50>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="experience.php">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="more.php">More</a>
                    </li>
                </ul>
            </div>
        </nav>

        <section id="jumbotron" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
            <div class="container text-center">
                <h1 class="display-1 text-primary text-uppercase">Omar Hassan</h1>
                <p class="display-4 d-none d-sm-block mb-5">IUS student</p>
                <p class="text-primary h5 mb-3 ml-4">Visit us me:</p>
                <a href="https://www.instagram.com/bosniant/" class="btn btn-lg btn-primary mb-1 ml-5">
                    <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
                <a href="https://www.facebook.com" class="btn btn-lg btn-primary mb-1 ml-3">
                    <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>

            </div>
        </section>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5" id="imageTitle">
                    <h2>Gallery</h2>
                </div>
                <div class="col-4">
                    <figure>
                        <img src="images/download.jpg" alt="slika1" style="width:100%">
                        <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <img src="images/download.jpg" alt="slika1" style="width:100%">
                        <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <img src="images/download.jpg" alt="slika1" style="width:100%">
                        <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <img src="images/download.jpg" alt="slika1" style="width:100%">
                        <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <img src="images/download.jpg" alt="slika1" style="width:100%">
                        <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <img src="images/download.jpg" alt="slika1" style="width:100%">
                        <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <footer style="background-color:#9aa6af">
        <!--class="bg-secondary"-->
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12 col-12 mt-5">
                <img src="images/aboutMe.jpg" alt="logo" class="img-fluid ml-2 logo" width="170" height="170" />
                <label class="text-uppercase text-center text-warning h1" style="opacity:0.7;">Omar Hassan</label>
                <div class="col-10 mt-3">
                    <p class="text-dark  textFooter">You can read more about me by visiting
                        <a href="about.php" class="text-warning" style="text-decoration:none;">LINK.</a>
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 mt-5 offset-md-1">
                <h1 class="text-warning mb-5 text-uppercase" style="margin-top:13px !important; opacity:0.7;">Contact
                    info</h1>
                <ul class="list-group list-group-flush" style=" border:none;">
                    <li class="list-group-item text-warning  mt-4" style="background-color: #9aa6af">Address:
                        <span class="ml-lg-5 ml-md-0 ml-sm-5" id="footerAddress">
                            <a href="#" id="map" data-toggle="modal" class="text-warning" data-target="#map7" style="text-decoration:none;">
                                <i class="fas fa-map-marker mr-2"></i>Oteska 26, Sarajevo, B&H</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning " style="background-color: #9aa6af">Phone:
                        <span style="margin-left:60px;">
                            <a href="tel:+38761085814" class="text-warning" style="text-decoration:none;">
                                <i class="fas fa-phone mr-2"></i>(+387)61 085 814</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning " style="background-color: #9aa6af">E-mail:
                        <span id="footerEmail">
                            <a href="mailto:omar1537@gmail.com" style="text-decoration:none;" class="text-warning">
                                <i class="far fa-envelope mr-2"></i>omar1537@gmail.com</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning " style="background-color: #9aa6af">
                        Visit us on:
                        <a href="https://www.instagram.com/bosniant/" target="_blank" class="text-warning " style="margin-left:32px !important; text-decoration:none;">
                            <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
                        <a href="https://www.facebook.com" target="_blank" class="text-warning ml-4" style="text-decoration:none;">
                            <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                    </li>
                    <li class="list-group-item" style="background-color: #9aa6af"></li>
                </ul>
            </div>
            <div class="col-12 text-center text-dark mt-3">
                <p style="font-size:20px;">Copyright &copy; 2018 BTT</p>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="map7" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:right;">
                    <span aria-hidden="true" style="float:right;margin-right:15px;margin-top:5px;">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.699074188242!2d18.30975901556573!3d43.84133717911527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758ca492ff3ecc7%3A0x3c0868ec0bd88b0b!2zT3RlxaFrYQ!5e0!3m2!1sen!2sba!4v1547142791310"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
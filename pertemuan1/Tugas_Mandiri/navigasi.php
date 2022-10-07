<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layouting_navigasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
</head>

<div class="container">
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">SEPATU ANDALAN</h1>
                    <p class="lead fw-normal text-50 mb-0"> </p>
                </div>
            </div>
        </header>
        <div class="container" style="background-color:rgb(0, 0, 0)">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/ortus jogosala vanquish.jpg" height="1000px" class="d-block w-100" alt="....">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <div class="text-center text-black">
                                    <h1>JOGOSALA VANQUISH</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/ortus jogosala venom red white.jfif" height="1000px" class="d-block w-100" alt="....">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="text-center text-black">
                                    <h1>JOGOSALA VENOM</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/specs metasala rivall 3.webp" height="1000px" class="d-block w-100" alt="....">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <div class="text-center text-black">
                                    <h1>METASALA RIVAL 3</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
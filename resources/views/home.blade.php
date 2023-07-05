@extends('layouts.app')

@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Delivery App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .navbar {
      background-color: #ffffff;
    }
    body {
      padding-top: 70px;
    }
    .carousel-inner img {
      width: 100%;
      height: 400px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Pizza Delivery App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/pizza1.jpg" class="d-block" alt="Pizza 1">
      </div>
      <div class="carousel-item">
        <img src="img/pizza2.jpg" class="d-block" alt="Pizza 2">
      </div>
      <div class="carousel-item">
        <img src="img/pizza3.jpg" class="d-block" alt="Pizza 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container-fluid mt-5">
    <h2 class="mb-4">Our Best Pizza</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/pizza4.jpg" class="card-img-top" alt="Pizza 4">
          <div class="card-body">
            <h5 class="card-title">Margherita Pizza</h5>
            <p class="card-text">Classic margherita pizza with fresh mozzarella and basil.</p>
          </div>
        </div>
      </div>
      <!-- Add more pizza cards here -->

      <!-- Example card -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/pizza12.jpg" class="card-img-top" alt="Pizza 12">
          <div class="card-body">
            <h5 class="card-title">Pepperoni Pizza</h5>
            <p class="card-text">Delicious pepperoni pizza with melted cheese and zesty tomato sauce.</p>
          </div>
        </div>
      </div>
    </div>

    <hr class="my-4">

    <h2 class="mb-4">Latest</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/pizza13.jpg" class="card-img-top" alt="Pizza 13">
          <div class="card-body">
            <h5 class="card-title">Hawaiian Pizza</h5>
            <p class="card-text">Sweet and savory Hawaiian pizza with ham and pineapple.</p>
          </div>
        </div>
      </div>
      <!-- Add more latest pizza cards here -->

      <!-- Example card -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/pizza18.jpg" class="card-img-top" alt="Pizza 18">
          <div class="card-body">
            <h5 class="card-title">BBQ Chicken Pizza</h5>
            <p class="card-text">Tasty BBQ chicken pizza with tangy barbecue sauce and grilled chicken.</p>
          </div>
        </div>
      </div>
    </div>

    <hr class="my-4">

    <h2 class="mb-4">Sale</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/pizza19.jpg" class="card-img-top" alt="Pizza 19">
          <div class="card-body">
            <h5 class="card-title">Veggie Supreme Pizza</h5>
            <p class="card-text">Loaded with fresh vegetables, this veggie supreme pizza is a healthy choice.</p>
          </div>
        </div>
      </div>
      <!-- Add more sale pizza cards here -->

      <!-- Example card -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/pizza25.jpg" class="card-img-top" alt="Pizza 25">
          <div class="card-body">
            <h5 class="card-title">Mediterranean Pizza</h5>
            <p class="card-text">A delightful combination of Mediterranean flavors on a pizza.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2023 Pizza Delivery App. All rights reserved.</p>
  </footer></body>
@endsection

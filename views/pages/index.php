<?php require APPROOT . '/views/inc/header.php'; ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner h-50">
      <div class="carousel-item active" data-bs-interval="2500">
        <img src="<?= URLROOT; ?>/img/the-shawshank-redemption.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-none d-md-block text-white">
          <h2 class="nom-serie text-primary font-weight-bold">
            cohesive society
          </h2>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="<?= URLROOT; ?>/img/game-of-thrones.jpg" class="d-block w-100 h-100" alt="" />
        <div class="carousel-caption d-none d-md-block">
          <h2 class="nom-serie text-primary font-weight-bold">
            All opinions are welcome
          </h2>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="<?= URLROOT; ?>/img/breaking-bad.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-none d-md-block text-white">
          <h2 class="nom-serie text-primary font-weight-bold">
            Strong Community
          </h2>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="<?= URLROOT; ?>/img/the-wolf-of-wall-street.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-none d-md-block text-white">
          <h2 class="nom-serie text-primary font-weight-bold">
            We are movie lovers
          </h2>
        </div>
      </div>
    </div>
  </div>

  <section class="bg-light text-dark text-center text-sm-start py-5">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-center">
        <div class="py-3">
          <h1>
            If you want a community interested in
            <span class="text-danger">movies</span> and
            <span class="text-danger">Series</span>,<small class="text-muted">you are in the right place</small>.
          </h1>
          <button class="btn btn-outline-danger w-50 mt-md-4">Join us</button>
        </div>
        <img class="d-none d-md-block img-fluid w-50" src="<?= URLROOT; ?>/img/poster.png" alt="" />
      </div>
    </div>
  </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>

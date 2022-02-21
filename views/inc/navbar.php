<nav class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <a class="navbar-brand" href="<?= URLROOT; ?>"><span>Cine</span><span>Master</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="<?= URLROOT; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URLROOT; ?>/pages/about">about</a>
        </li>
      </ul>
      <ul class="navbar-nav right-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
        <?php if (isset($_SESSION['user_id'])) : ?>
          <li class="nav-item mb-2 mb-md-0 mb-lg-0 w-100">
            <a class="nav-link ps-4 pe-4 text-center" href="<?= URLROOT; ?>/users/logout">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item mb-2 mb-md-0 mb-lg-0 w-100">
            <a class="nav-link ps-4 pe-4 text-center " href="<?= URLROOT; ?>/users/register">register</a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link ps-4 pe-4 text-center" href="<?= URLROOT; ?>/users/login">login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
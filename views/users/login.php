<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="content py-5">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-md-8 col-lg-6 mx-auto">
        <?php flash('register_success'); ?>
        <h2 class="form-title ">Login</h2>
        <p class="form-desc">Please fill in your credentials to log in</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post" class="p-5">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" id="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" id="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="row d-flex flex-column flex-md-column flex-lg-column flex-xl-row">
            <div class="col">
              <input type="submit" value="Login" class="btn btn-login btn-block my-2 my-md-0 my-lg-0 w-100">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-block w-100">No account? Register</a>
            </div>
          </div>
        </form>
  </div>
  </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
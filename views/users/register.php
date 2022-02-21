<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-6 mx-auto">
        <h2 class="form-title ">Register</h2>
        <p class="form-desc">Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="post" class="p-5">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6 d-flex flex-column">
                <label for="fname">First Name: <sup>*</sup></label>
                <input type="text" name="fname" id="fname" class="form-control form-control-lg <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['fname']; ?>">
                <span class="invalid-feedback"><?php echo $data['fname_err']; ?></span>
              </div>
              <div class="col-md-6 d-flex flex-column">
                <label for="lname">Last Name: <sup>*</sup></label>
                <input type="text" name="lname" id="lname" class="form-control form-control-lg <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['lname']; ?>">
                <span class="invalid-feedback"><?php echo $data['lname_err']; ?></span>
              </div>
            </div>
          </div>
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
          <div class="form-group">
            <label for="confirm_password" class="form-label">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="pp">
              <input type="checkbox" name="pp" id="pp">
              I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy & Policy</a>
            </label>
            <span class="invalid-feedback"></span>
          </div>
          <div class="row d-flex flex-column flex-md-column flex-lg-column flex-xl-row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-login btn-block my-2 my-md-0 my-lg-0 w-100">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-block w-100">Have an account? Login</a>
            </div>
          </div>
        </form>
  </div>
  </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
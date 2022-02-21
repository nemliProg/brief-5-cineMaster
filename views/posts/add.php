<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="content">
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light text-danger"><i class="fa fa-backward"></i> Back</a>
  <div class="container addPostContainer p-5">
    <div class="row formTitles">
      <h3 class="mb-0"><span>Add Post</span><span id="point">.</span></h3>
      <p class="mb-3">contribute in our community</p>
    </div>
    <form action="<?php echo URLROOT; ?>/posts/add" enctype="multipart/form-data" method="post" class="form mt-8">
      <div class="row d-flex flex-column">
        <input type="text" name="title" placeholder="Title" class="form-control form-control-lg form_elem col-md col-sm-12 col-lg <?= (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['title']; ?>">
        <span class=" invalid-feedback" style="display: block;margin-top: -7px;"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="row d-flex flex-column">
        <input type="file" enctype="multipart/form-data" name="image" class="form-control form-control-lg bg-white custom-file-input form_elem col-md col-sm-12 col-lg<?= (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" value="<?//= $data['image']; ?>">
        <span class=" invalid-feedback" style="display: block;margin-top: -7px;"><?php echo $data['image_err']; ?></span>
      </div>
      <div class="row d-flex flex-column">
        <textarea name="body" placeholder="description" class="form-control form-control-lg form_elem col-md col-sm-12 col-lg <?= (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" rows="4" cols="50"><?= $data['body']; ?></textarea>
        <span class=" invalid-feedback" style="display: block;margin-top: -7px;"><?php echo $data['body_err']; ?></span>
      </div>
      <div class="row">
        <button class="btn form_elem col-lg col-md-12 col-sm-12 mt-3" type="submit">Post</button>
      </div>
    </form>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
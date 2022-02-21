<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container postContainer">
  <div class="container sticky-top pt-1 bg-light">
    <?php flash('post_message'); ?>
    <div class="row mb-3">
      <div class="col-6">
        <h1>Posts</h1>
      </div>
      <div class="col-6">
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-end">
          <i class="fa fa-pencil"></i> Add Post
        </a>
      </div>
    </div>
  </div>
  <div class="card card-body mb-3">
    <h4 class="card-title">breaking Bad : walter white is a great teacher</h4>
    <div class="bg-light p-2 mb-3">
      <span class=" text-muted">Written by</span> Younes NEMLI <span class="text-muted">on</span> 2022-02-15 23:11:50
    </div>
    <p class="card-text">breaking bad : bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla bla bla blablablabla bla blabla bla bla bla bla</p>
    <img class="postImage" src="<?= URLROOT; ?>/img/postImage.jpg" alt="post Image">
    <div class="container impression">
      <div class="row">
        <div class="col-6 col-md-2 p-1 like d-flex gap-1"><i class="fa-solid fa-thumbs-up"></i>Like <span>12</span></div>
        <div class="col-6 col-md-2 p-1 comment d-flex gap-1"><i class="fa-solid fa-comment"></i>Comment <span>4</span></div>
      </div>
    </div>
  </div>

  <?php //foreach ($data['posts'] as $post) : 
  ?>
  <!-- <div class="card card-body mb-3">
      <h4 class="card-title"><?php //echo $post->title; 
                              ?></h4>
      <div class="bg-light p-2 mb-3">
        Written by <?php //echo $post->first_name . ' ' . $post->last_name; 
                    ?> on <?php //echo $post->published_at; 
                                                                                  ?>
      </div>
      <p class="card-text"><?php //echo $post->post_body; 
                            ?></p>
    </div>
  <?php //endforeach; 
  ?> -->
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
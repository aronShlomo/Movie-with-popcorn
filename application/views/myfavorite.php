<?php require_once(APPPATH . 'includes/header.php'); ?>

<br>

<?php $this->load->view('mycontent'); ?>

<?php $image_url = 'https://image.tmdb.org/t/p/original/'; ?>


<?php if ($this->session->userdata("Favorite_Empty")) : ?>
    <p class="mylist_empty">My Favorite Is Empty</p>
<?php else : ?>


    <ul class="row favorite_container">
        <?php foreach ($favorite_movie as $value) : ?>
            <div class="card card-favorite">
                <img src="<?php echo $image_url . $value->poster_path  ?>" class="card-img " name="img">
                <!-- <p name="title" class="title-movie"></?php echo $value->original_title ?></p> -->
                <div class="card-body">
                    <!-- <p class="overview">Description</p> -->

                    <!-- <p name="overview" class="overview-movie"></?php echo $value->overview ?></p> -->
                </div>
                <a href="delete_favorite?delete_card_favorite=<?php echo $value->id ?>" class="tab">Delete</a>
            </div>
        <?php endforeach; ?>
    </ul>


<?php endif; ?>




















<?php require_once(APPPATH . 'includes/footer.php'); ?>
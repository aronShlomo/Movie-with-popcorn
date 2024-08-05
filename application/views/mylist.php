<?php require_once(APPPATH . 'includes/header.php'); ?>

<br>

<?php $image_url = 'https://image.tmdb.org/t/p/original/'; ?>


<?php $this->load->view("mycontent"); ?>



<?php if ($this->session->userdata("Empty")) : ?>
    <p class="mylist_empty">My List Is Empty</p>
<?php else : ?>


    <ul class="row list_container">
        <?php foreach ($results_list as $result) : ?>
            <div class="card ">
                <img src="<?php echo $image_url . $result->poster_path  ?>" class="card-img image-movie" name="img">
                <!-- <p name="title" class="title-movie"></?php echo $result->original_title ?></p> -->
                <div class="card-body">
                    <!-- <p class="overview">Description</p> -->
                    <!-- <p name="overview" class="overview-movie"></?php echo $result->overview ?></p> -->
                </div>

                <a href="delete?delete_card=<?php echo $result->movie_id ?>" class="tab">Delete</a>
            </div>
        <?php endforeach; ?>
    </ul>


<?php endif; ?>
















<?php require_once(APPPATH . 'includes/footer.php'); ?>
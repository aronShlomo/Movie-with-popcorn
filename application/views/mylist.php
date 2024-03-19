<?php require_once(APPPATH . 'includes/header.php'); ?>

<hr>
<br>

<?php $image_url = 'https://image.tmdb.org/t/p/original/'; ?>



<?php if ($movie_id = $this->session->userdata('add_movie')) :  ?>
    <div class="card container_addtolist row ">
        <img name="poster_path" class="img_addtolist" src="<?php echo $image_url . $movie_id['poster_path'] ?>" alt="">
        <p name="original_title" class="title_addtolist"><?php echo $movie_id['original_title'] ?></p>
        <p name="overview" class="title_addtolist"><?php echo $movie_id['overview'] ?></p>
    </div>
<?php endif; ?>


<?php if ($movie_id = $this->session->userdata('get_movie')) :  ?>
    <div class="card container_addtolist row ">
        <img name="poster_path" class="img_addtolist" src="<?php echo $image_url . $movie_id['poster_path'] ?>" alt="">
        <p name="original_title" class="title_addtolist"><?php echo $movie_id['original_title'] ?></p>
        <p name="overview" class="title_addtolist"><?php echo $movie_id['overview'] ?></p>
    </div>
<?php endif; ?>











<?php require_once(APPPATH . 'includes/footer.php'); ?>
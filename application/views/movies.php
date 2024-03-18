<?php require_once(APPPATH . 'includes/header.php'); ?>


<?php

$image_url = 'https://image.tmdb.org/t/p/original/';

?>


<div class="row-container">
    <ul class="row ul-movies ">
        <?php foreach ($results as $movie) : ?>
            <div class="card" style="width: 18rem;">
                <a class="movie-card" href="index?movieId=<?php echo $movie['id']  ?>">
                    <li>
                        <img src="<?php echo $image_url . $movie['poster_path']  ?>" class="card-img-top image-movie">
                        <p class="title-movie"><?php echo $movie['original_title'] ?></p>
                        <div class="card-body">
                            <p class="overview-movie"><?php echo $movie['overview'] ?></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </li>
                </a>
            </div>
        <?php endforeach; ?>
    </ul>



</div>

















<?php require_once(APPPATH . 'includes/footer.php'); ?>
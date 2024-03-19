<?php require_once(APPPATH . 'includes/header.php'); ?>


<?php

$image_url = 'https://image.tmdb.org/t/p/original/';

?>

<hr>
<br>

<div class="row-container">
    <ul class="row ul-movies ">
        <?php foreach ($results as $movie) : ?>
            <div class="card" style="width: 18rem;">
                <a class="movie-card" href="index?movieId=<?php echo $movie['id']  ?>">
                    <li>
                        <img  src="<?php echo $image_url . $movie['poster_path']  ?>" class="card-img-top image-movie" name="img" >
                        <p  name="title" class="title-movie"><?php echo $movie['original_title'] ?></p>
                        <div class="card-body">
                            <p  name="overview" class="overview-movie"><?php echo $movie['overview'] ?></p>
                        </div>
                    </li>
                </a>
                <a href="mylist?addmovietolist=<?php echo $movie['id']?> " class="tab">Add to MyList</a> 

            </div>
        <?php endforeach; ?>
    </ul>



</div>

















<?php require_once(APPPATH . 'includes/footer.php'); ?>
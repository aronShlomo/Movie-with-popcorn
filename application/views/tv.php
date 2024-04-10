<?php require_once(APPPATH . 'includes/header.php'); ?>


<?php

$image_url = 'https://image.tmdb.org/t/p/original/';

?>

<hr>
<br>


<form action="tv" method="get">
    <input type="text" name="search" placeholder="Find TV" class="search">
    <input type="submit" class="search-icon" value="Search">
</form>







<div class="row-container">
    <ul class="row ul-movies ">

        <?php if ($this->input->get('search')) : ?>
            <?php foreach ($results['results'] as $tv) : ?>
                <div class="card" style="width: 18rem;">
                    <a class="movie-card" href="index?movieId=<?php echo $tv['id']  ?>">
                        <li>
                            <img src="<?php echo $image_url . $tv['poster_path']  ?>" class="card-img-top image-movie" name="img">
                            <p name="title" class="title-movie"><?php echo $tv['name'] ?></p>
                            <div class="card-body">
                                <p name="overview" class="overview-movie"><?php echo $tv['overview'] ?></p>
                            </div>
                        </li>
                    </a>
                </div>
            <?php endforeach; ?>

        <?php else : ?>

            <?php foreach ($result_tv as $tv) : ?>
                <div class="card" style="width: 18rem;">
                    <a class="movie-card" href="index?tvId=<?php echo $tv['id']  ?>">
                        <li>
                            <img class="card-img-top image-movie" src="<?php echo $image_url . $tv['poster_path']  ?>">
                            <p class="title-movie"><?php echo $tv['name'] ?></p>
                            <div class="card-body">
                                <p class="overview-movie"><?php echo $tv['overview'] ?></p>
                                <a href="mylist?addtvtolist=<?php echo $tv['id'] ?> " class="tab">Add to MyList</a>
                            </div>
                        </li>
                    </a>
                </div>
            <?php endforeach; ?>
    </ul>
</div>



<?php endif; ?>








<?php require_once(APPPATH . 'includes/footer.php'); ?>
<?php require_once(APPPATH . 'includes/header.php'); ?>


<?php

$image_url = 'https://image.tmdb.org/t/p/original/';

?>

<hr>
<br>

<!-- <div class="search-home">
    </?php echo form_open('home/movies', ['method' => 'get']); ?>
    <input type="text" name="search" class="search">
    <button type="submit" class="search-icon">Search</button>
    </?php form_close(); ?>
</div> -->

<!-- SEARCH -->
<form action="movies" method="get">
    <input type="text" name="search" placeholder="Find Movies" class="search">
    <input type="submit" class="search-icon" value="Search">
</form>





<div class="row-container">
    <ul class="row ul-movies ">

        <?php if ($this->input->get('search')) : ?>
            <?php foreach($results['results'] as $movie) : ?>
                <div class="card" style="width: 18rem;">
                    <a class="movie-card" href="index?movieId=<?php echo $movie['id']  ?>">
                        <li>
                            <img src="<?php echo $image_url . $movie['poster_path']  ?>" class="card-img-top image-movie" name="img">
                            <p name="title" class="title-movie"><?php echo $movie['original_title'] ?></p>
                            <div class="card-body">
                                <p name="overview" class="overview-movie"><?php echo $movie['overview'] ?></p>
                            </div>
                        </li>
                    </a>
            </div>

                <?php endforeach; ?>
           

            


        <?php else : ?>

            <?php foreach ($results as $movie) : ?>
                <div class="card" style="width: 18rem;">
                    <a class="movie-card" href="index?movieId=<?php echo $movie['id']  ?>">
                        <li>
                            <img src="<?php echo $image_url . $movie['poster_path']  ?>" class="card-img-top image-movie" name="img">
                            <p name="title" class="title-movie"><?php echo $movie['original_title'] ?></p>
                            <div class="card-body">
                                <p name="overview" class="overview-movie"><?php echo $movie['overview'] ?></p>
                            </div>
                        </li>
                    </a>
                    <?php if ($this->session->userdata('movieId_exist') == $movie['id']) : ?>
                        <p class="tab">Movie Already exist in mylist</p>
                    <?php else : ?>
                        <a href="mylist?addmovietolist=<?php echo $movie['id'] ?> " class="tab">Add to MyList</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>


        <?php endif; ?>







    </ul>
</div>




















<?php require_once(APPPATH . 'includes/footer.php'); ?>
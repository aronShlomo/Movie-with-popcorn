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





<div class="row movies-container">
    <!-- SEARCH  -->
    <?php if ($this->input->get('search')) : ?>
        <?php foreach ($results['results'] as $movie) : ?>
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
        <!-- MOVIES -->
        <?php foreach ($results as $movie) : ?>
            <ul class="card">
                <a class="movie_select" href="index?movieId=<?php echo $movie['id']  ?>">
                    <img src="<?php echo $image_url . $movie['poster_path']  ?>" class="card-img " name="img">
                    <!-- </?php if ($this->session->userdata('movieFavoriteId_exist') == $movie['id']) : ?>   
                                    </?php endif; ?> -->
                    <!-- <p name="title" class="title-movie"></?php echo $movie['original_title'] ?></p> -->
                    <div class="card-body">

                        <p name="overview" style="display: none" class="overview-movie"><?php echo $movie['overview'] ?></p>

                        <!-- <p name="overview" class="overview-movie"></?php echo $movie['overview'] ?></p> -->
                    </div>
                </a>






                <div class="dropdown dropdown-movies">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select</button>
                    <ul class="dropdown-menu">
                        <li>
                            <?php if ($this->session->userdata('user')) : ?>
                                <?php if ($this->session->userdata('movieId_exist') == $movie['id']) : ?>
                                    <p class="tab_exist"><a class="tab_exist" href="mylist">Movie Already exist in mylist</a></p>
                                <?php else : ?>
                                    <a href="mylist?addmovietolist=<?php echo $movie['id'] ?> " class="dropdown-item">Add To MyList</a>
                                <?php endif; ?>
                                <a href="#" class="dropdown-item">Buy The Movie</a>
                                <?php if ($this->session->userdata('movieFavoriteId_exist') == $movie['id']) : ?>
                                    <p class="tab_exist"><a class="tab_exist" href="myfavorite">Movie Already exist in myfavorite</a></p>
                                <?php else : ?>
                                    <a href="myfavorite?addmovietofavorite=<?php echo $movie['id'] ?> " class="dropdown-item">Add To MyFavorite </a>
                                    <!-- <a href="" id="favorite" class="dropdown-item">Favorite</a>  -->
                                <?php endif; ?>
                            <?php else : ?>
                                <a href="login" class="dropdown-item" style="padding: 5px;">Login To See My Contant </a>
                            <?php endif; ?>






                        </li>

                    </ul>
                </div>



            </ul>
        <?php endforeach; ?>
    <?php endif; ?>
</div>




















<?php require_once(APPPATH . 'includes/footer.php'); ?>
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




<div class="row tv-container">
    <!-- SEARCH   -->
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



        <!-- TV -->
    <?php else : ?>

        <?php foreach ($result_tv as $tv) : ?>
            <ul class="card">
                <a class="movie-card" href="index?tvId=<?php echo $tv['id']  ?>">
                    <img class="card-img-top image-movie" src="<?php echo $image_url . $tv['poster_path']  ?>">
                    <!-- <p class="title-movie"></?php echo $tv['name'] ?></p> -->
                    <div class="card-body">
                        <!-- <p class="overview-movie"></?php echo $tv['overview'] ?></p> -->
                        <!-- <a href="mylist?addtvtolist=</?php echo $tv['id'] ?> " class="tab">Add to MyList</a> -->
                    </div>
                </a>


                <div class="dropdown dropdown-movies">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select</button>
                    <ul class="dropdown-menu">
                        <li>
                            <?php if ($this->session->userdata('TVId_exist') == $tv['id']) : ?>
                                <p class="tab_exist"><a class="tab_exist" href="mylist">TV Already exist in mylist</a></p>
                            <?php else : ?>
                                <a href="mylist?addtvtolist=<?php echo $tv['id'] ?> " class="dropdown-item">Add To MyList</a>
                            <?php endif; ?>


                            <a href="#" class="dropdown-item">Buy The TV</a>



                            <?php if ($this->session->userdata('tvFavoriteId_exist') == $tv['id']) : ?>
                                <p class="tab_exist"><a class="tab_exist" href="myfavorite">TV Already exist in myfavorite</a></p>
                            <?php else : ?>
                                <a href="myfavorite?addtvtomyfavorite=<?php echo $tv['id'] ?> " class="dropdown-item">Add To MyFavorite </a>
                                <!-- <a href="" id="favorite" class="dropdown-item">Favorite</a>  -->
                            <?php endif; ?>
                        </li>

                    </ul>
                </div>
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>
</div>







<?php require_once(APPPATH . 'includes/footer.php'); ?>
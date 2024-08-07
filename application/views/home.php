<?php require_once(APPPATH . 'includes/header.php');


$image_url = 'https://image.tmdb.org/t/p/original/'; ?>




<form action="index" method="get">
    <input type="text" name="search" placeholder="Find People" class="search">
    <input type="submit" class="search-icon" value="Search">
</form>







<?php if ($movie_id = $this->session->userdata('movieId')) :  ?>
    <div class="body-section" id="movie-body">
        <img class="img-body" src="<?php echo $image_url . $movie_id['backdrop_path'] ?>" alt="">
        <div class="  body-text-overlay">
            <p class="name-overlay"><?php echo $movie_id['title'] ?></p>
            <p class="rating-overlay"><?php echo $movie_id['vote_average'] ?></p>
            <p class="overview"><?php echo $movie_id['overview'] ?></p>
            <img class="rating-img" src="https://cdn0.iconfinder.com/data/icons/stars-pointed/250/Red_5-point_star-512.png" alt="">
            <a class="watchOnline_btn" href="online?getMovieProvider=<?php echo $movie_id['id'] ?>">Watch online</a>
            <a class="watchTrailer_btn" href="trailer?trailer_movie_id=<?php echo $movie_id['id'] ?>">Watch trailer</a>


            <a class="addToList_btn" href="mylist?addHomeMovieToList=<?php echo $movie_id['id'] ?>">+ add to list</a>


        </div>
    </div>
<?php endif; ?>


<?php if ($tvId = $this->session->userdata('tvId')) : ?>
    <div class="body-section" id="tv-body">
        <img class="img-body" src="<?php echo $image_url . $tvId['backdrop_path'] ?>" alt="">
        <div class="  body-text-overlay">
            <p class="name-overlay"><?php echo $tvId['name'] ?></p>
            <p class="rating-overlay"><?php echo $tvId['vote_average'] ?></p>
            <p class="overview"><?php echo $tvId['overview'] ?></p>

            <img class="rating-img" src="https://cdn0.iconfinder.com/data/icons/stars-pointed/250/Red_5-point_star-512.png" alt="">
            <a class="watchOnline_btn" href="online?getTvProvider=<?php echo $tvId['id'] ?>">Watch online</a>
            <a class="watchTrailer_btn" href="trailer?trailer_tv_id=<?php echo $tvId['id'] ?>">Watch trailer</a>

            <a class="addToList_btn" href="mylist?addHomeTVToList=<?php echo $tvId['id'] ?>">+ add to list</a>

        </div>
    </div>
<?php endif; ?>




<?php if (
    !$this->session->userdata('movieId')
    && !$this->session->userdata('tvId')
) : ?>
    <img id="img-home-default" class="img-body" src="https://static0.srcdn.com/wordpress/wp-content/uploads/2023/11/greatest-movies-of-all-time.jpg" alt="">
<?php endif; ?>


<footer>
    <div class="footer-container">

        <a id="favorite" href="getFavoriteHome" class="faverite_btn">Favorite</a>
        <a href="#" class="recent_btn">Recent</a>
        <a href="#" class="history_btn">List</a>
        <a href="#" class="purchased_btn">Purchased</a>
    </div>










</footer>































<?php require_once(APPPATH . 'includes/footer.php'); ?>
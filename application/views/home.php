<?php require_once(APPPATH . 'includes/header.php');


$image_url = 'https://image.tmdb.org/t/p/original/'; ?>




<div class="search-home">
    <?php echo form_input([
        'class' => 'search', 'type' => 'text', 'name' => 'search',
        'placeholder' => 'Search',
        'id' => 'search',
    ]); ?>
    <img class="search-icon" src="https://www.clker.com/cliparts/R/6/l/K/8/R/search-icon-red-hi.png" alt="">

</div>



<body>



    <?php if ($movie_id = $this->session->userdata('movieId')) :  ?>
        <div class="body-section" id="movie-body">
            <img class="img-body" src="<?php echo $image_url . $movie_id['backdrop_path'] ?>" alt="">
            <div class="  body-text-overlay">
                <p class="name-overlay"><?php echo $movie_id['title'] ?></p>
                <p class="rating-overlay"><?php echo $movie_id['vote_average'] ?></p>
                <img class="rating-img" src="https://cdn0.iconfinder.com/data/icons/stars-pointed/250/Red_5-point_star-512.png" alt="">
                <a class="watchOnline_btn" href="online?getMovieProvider=<?php echo $movie_id['id'] ?>">Watch online</a>
                <a class="watchTrailer_btn" href="trailer?trailer_movie_id=<?php echo $movie_id['id'] ?>">Watch trailer</a>
                <a class="addToList_btn" href="movieList">+ add to list</a>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if($tvId = $this->session->userdata('tvId')) : ?>
        <div class="body-section" id="tv-body">
            <img class="img-body" src="<?php echo $image_url . $tvId['backdrop_path'] ?>" alt="">
            <div class="  body-text-overlay">
                <p class="name-overlay"><?php echo $tvId['name'] ?></p>
                <p class="rating-overlay"><?php echo $tvId['vote_average'] ?></p>
                <img class="rating-img" src="https://cdn0.iconfinder.com/data/icons/stars-pointed/250/Red_5-point_star-512.png" alt="">
                <a class="watchOnline_btn" href="online?getTvProvider=<?php echo $tvId['id'] ?>">Watch online</a>
                <a class="watchTrailer_btn" href="trailer?trailer_tv_id=<?php echo $tvId['id'] ?>">Watch trailer</a>
                <a class="addToList_btn" href="movieList">+ add to list</a>
            </div>
        </div>
    <?php endif; ?>




    <?php if (!$this->session->userdata('movieId')
     && !$this->session->userdata('tvId')) : ?>
        <img id="img-home-default" class="img-body" src="https://static0.srcdn.com/wordpress/wp-content/uploads/2023/11/greatest-movies-of-all-time.jpg" alt="">
    <?php endif; ?>
</body>






 <footer>
    <div class="footer-container">
        <?php echo anchor('home/recent', 'Recent', ['class' => 'recent_btn ']); ?>
        <?php echo anchor('home/faverite', 'Faverite', ['class' => ' faverite_btn ']); ?>
        <?php echo anchor('home/history', 'History', ['class' => 'history_btn ']); ?>
        <?php echo anchor('home/purchased', 'Purchased', ['class' => 'purchased_btn ']); ?>
    </div>


    <div class="movies_footer_by_selection">



    </div>

    </footer>























    <?php require_once(APPPATH . 'includes/footer.php'); ?>
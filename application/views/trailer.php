<?php require_once(APPPATH . 'includes/header.php'); ?>

<?php

$youtube_url = 'https://www.youtube.com/embed/';

?>


<?php if ($this->session->userdata('movieId')) : ?>
    <?php foreach ($trailer as $movie) : ?>
        <ul>
            <li class="row ul-movies ">
                <div class="card-trailer" style="width: 50rem; height: 35rem;">
                    <p class="trailer_name"><?php echo $movie['name'] ?></p>
                    <iframe width="770" height="450" src="<?php echo $youtube_url
                                                                . $movie['key'] ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>


<?php if ($this->session->userdata('tvId')) : ?>

    <?php if ($trailer = $this->session->userdata('trailer_tv')) : ?>

        <?php foreach ($trailer as $tr) : ?>

            <div class="trailer_container" >
                <h4><?php echo $tr['name'] ?></h4>
                <iframe class="trailer_video"  width="770" height="450" src="<?php echo $youtube_url
                . $tr['key'] ?>" frameborder="0" allowfullscreen></iframe>
            </div>


        <?php endforeach; ?>

    <?php endif; ?>


<?php endif; ?>












<?php require_once(APPPATH . 'includes/footer.php'); ?>
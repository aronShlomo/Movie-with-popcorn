<?php require_once(APPPATH . 'includes/header.php'); ?>

<?php

$youtube_url = 'https://www.youtube.com/embed/';

?>


<hr>
<br>


<h2 class="title-trailer">Trailer</h2>


<ul class="ul-movies ">
    <?php if ($this->session->userdata('movieId')) : ?>
        <?php foreach ($trailer as $movie) : ?>
            <div class="">
                <li class="ul-movies row">
                    <iframe class="trailer" src="<?php echo $youtube_url . $movie['key'] ?>
                                    " frameborder="0" allowfullscreen></iframe>
                </li>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>




<ul class="ul-movies ">
    <?php if ($this->session->userdata('tvId')) : ?>
        <?php if ($trailer = $this->session->userdata('trailer_tv')) : ?>

            <?php foreach ($trailer as $tr) : ?>
                <div class="">
                    <li class="ul-movies row">
                        <iframe class="trailer" src="<?php echo $youtube_url . $tr['key'] ?>
                                    " frameborder="0" allowfullscreen></iframe>
                    </li>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    <?php endif; ?>
</ul>














<?php require_once(APPPATH . 'includes/footer.php'); ?>
<?php require_once(APPPATH . 'includes/header.php'); ?>

<hr>
<br>

<?php $image_url = 'https://image.tmdb.org/t/p/original/'; ?>

    <div class="header-mylist row">

<ul class="row ul-movies ">
    <?php foreach ($results_list as $result) : ?>
        <div class="card" style="width: 18rem;">
            <li>
                <img src="<?php echo $image_url . $result->poster_path  ?>" class="card-img-top image-movie" name="img">
                <p name="title" class="title-movie"><?php echo $result->original_title ?></p>
                <div class="card-body">
                    <p name="overview" class="overview-movie"><?php echo $result->overview ?></p>
                </div>
            </li>
            <a href="delete?delete_card=<?php echo $result->movie_id ?>" class="tab">Delete</a>
        </div>
    <?php endforeach; ?>
</ul>


















<?php require_once(APPPATH . 'includes/footer.php'); ?>
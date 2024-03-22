<?php require_once(APPPATH . 'includes/header.php');?>


<?php

$image_url = 'https://image.tmdb.org/t/p/original/';

?>

<hr>
<br>


<div class="row-container">
    <ul class="row ul-movies ">

    <h2 class="title-tv" >TV Show</h2>

        <?php foreach ($result_tv as $tv) : ?>
            <div class="card" style="width: 18rem;">
                <a class="movie-card" href="index?tvId=<?php echo $tv['id']  ?>">
                    <li>
                        <img class="card-img-top image-movie" src="<?php echo $image_url . $tv['poster_path']  ?>"  >
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










<?php require_once(APPPATH . 'includes/footer.php'); ?>
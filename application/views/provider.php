<?php require_once(APPPATH . 'includes/header.php'); ?>



<?php if ($watch_id = $this->input->get('getMovieProvider')) : ?>
    <?php foreach ($providersMovie as $provider) : ?>
        <ul>
            <li>
                <a href="<?php echo $provider['link'] ?>">Watch Online</a>
            </li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>


<?php if ($watch_id = $this->input->get('getTvProvider')) : ?>

    <?php foreach ($providersTV as $provider) : ?>
        <ul>
            <li>
                <a href="<?php echo $provider['link'] ?>">Watch Online</a>
            </li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>
















<?php require_once(APPPATH . 'includes/footer.php'); ?>
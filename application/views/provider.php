<?php require_once(APPPATH . 'includes/header.php'); ?>





<?php foreach ($results as $provider) : ?>

    
    <ul>
        <li>
        <a href="<?php echo $provider['link'] ?>">Watch Online</a>     
        </li>
    </ul>



<?php endforeach; ?>















<?php require_once(APPPATH . 'includes/footer.php'); ?>
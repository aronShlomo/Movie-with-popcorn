<?php require_once(APPPATH . 'includes/header.php') ?>



<div class="signup-container row">

<a href="index"><img class="signup-exit" src="https://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Actions-edit-delete-icon.png" alt=""></a>


<?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="row">
            <div class="alert alert-dismissible alert-danger error">
                <?php echo $error; ?>
            </div>
        </div>
<?php endif; ?>

<?php if ($error = $this->session->flashdata('success')) : ?>
        <div class="row">
            <div class="alert alert-dismissible alert-danger error">
                <?php echo $error; ?>
            </div>
        </div>
<?php endif; ?>



    <form action="register" method="post">
        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
        <input type="password" name="password" placeholder="Password" class="form-control">
        <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
        <input type="submit" placeholder="Submit" class="btn btn-primary submit_login">
    </form>

    <div class="login_account">
        <span class="toRegister" >Have an account?<a class="signup-link"  href="login">Sign In!!</a></span>
    </div>
</div>





<section class="body">
    <?php if (!$this->session->userdata('movieId') && !$this->session->userdata('tvId')) : ?>
        <img id="img-home-default" class="img-body" src="https://static0.srcdn.com/wordpress/wp-content/uploads/2023/11/greatest-movies-of-all-time.jpg" alt="">
    <?php endif; ?>
    </body>
</section>























<?php require_once(APPPATH . 'includes/footer.php'); ?>
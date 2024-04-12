<?php require_once(APPPATH . 'includes/header.php') ?>




<div class="login-container">


    <a href="index"><img class="login-exit" src="https://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Actions-edit-delete-icon.png" alt=""></a>


    <?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="row">
            <div class="alert alert-dismissible alert-danger error">
                <?php echo $error; ?>
            </div>
        </div>
    <?php endif; ?>


    <form action="user" method="post">
        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
        <input type="password" name="password" placeholder="Password" class="form-control">
        <!-- <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" > -->
        <input type="submit" name="login" placeholder="Submit" class="btn btn-primary submit_login">
    </form>
    <div class="signup_account">
        <span class="toRegister">Dont have an account?<a class="signup-link" href="signup">Sign Up!!</a></span>
    </div>
</div>




<section class="body">

    <?php if (
        !$this->session->userdata('movieId')
        && !$this->session->userdata('tvId')
    ) : ?>
        <img id="img-home-default" class="img-body" src="https://static0.srcdn.com/wordpress/wp-content/uploads/2023/11/greatest-movies-of-all-time.jpg" alt="">
    <?php endif; ?>
    </body>
</section>























<?php require_once(APPPATH . 'includes/footer.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie-with-popcorn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<style>
  .container {
    /* text-align: center;
    justify-content: center; */
  }

  body {
    background-color: black;
    color: white;
    border-radius: 60px;
  }

  span {
    color: white;
    padding: 40px;
  }

  h2 {
    color: red;
    font-style: italic;
  }

  .tab {
    text-decoration: none;
    color: red;
    text-align: center;
    margin: 30px;
    font-size: 20px;
    font-style: italic;
  }
  


  .tab_header {
    text-decoration: none;
    color: red;
    text-align: center;
    margin: 30px;
    font-size: 20px;
    font-style: italic;
  }

  .tab_header:hover {
    color: white;
  }



  .tab-profile-name {
    text-decoration: none;
    color: red;
    font-style: italic;

  }

  .login {
    text-decoration: none;
    color: red;
    font-size: 20px;
    font-style: italic;

  }


  .tab-group {
    margin-top: 5px;

  }

  header {
    margin: 20px;
    text-align: center;

  }

  .image-profile {
    background-repeat: no-repeat;
    width: 60px;
    height: 60px;
    /* margin-left: 250px; */
    margin: 20px;
    /* margin-left: 150px; */
  }




  .img-body {
    border: 1px solid #ccc;
    background-repeat: no-repeat;
    width: 100%;
    height: 650px;
  }

  .name-overlay {
    position: absolute;
    top: 65%;
    left: 12%;
    transform: translate(-50%, -50%);
    padding: 10px 10px;
    font-size: 30px;
    color: red;
    text-align: center;
    width: 250px;
    font-weight: bold;
    /* text-align: center; */
  }

  .logout {
    position: absolute;
    top: 14%;
    left: 50%;
    text-decoration: none;
    transform: translate(-50%, -50%);
    padding: 10px 10px;
    font-size: 20px;
    color: red;
    text-align: center;
    width: 250px;
    font-weight: bold;
    font-style: italic;
    /* text-align: center; */
  }

  .rating-overlay {
    position: absolute;
    top: 72%;
    left: 14%;
    transform: translate(-50%, -50%);
    padding: 10px 10px;
    font-size: 25px;
    text-align: center;
    font-weight: bolder;
    color: red;

    /* text-align: center; */
  }

  .rating-img {
    position: absolute;
    top: 72%;
    left: 10%;
    transform: translate(-50%, -50%);
    color: red;
    padding: 10px 10px;
    font-size: 20px;
    width: 40px;
  }

  .subscription-overlay {
    position: absolute;
    top: 43%;
    left: 14%;
    transform: translate(-50%, -50%);
    padding: 10px 10px;
    font-size: 17px;
    color: red;
    text-align: center;
    justify-content: center;
    width: 500px;
    /* text-align: center; */
  }

  .watchOnline_btn {
    background-color: red;
    border: none;
    font-size: 17px;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 30px;
    padding: 2px 20px 2px 20px;
    position: absolute;
    top: 66%;
    left: 35%;
    transform: translate(-50%, -50%);
  }

  .watchTrailer_btn {
    background-color: red;
    border: none;
    font-size: 17px;
    font-weight: bold;
    border-radius: 30px;
    padding: 2px 20px 2px 20px;
    position: absolute;
    top: 66%;
    color: white;
    text-decoration: none;
    left: 48%;
    transform: translate(-50%, -50%);

  }

  .addToList_btn {
    background-color: red;
    border: none;
    font-size: 17px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    border-radius: 30px;
    padding: 2px 20px 2px 20px;
    position: absolute;
    top: 66%;
    left: 61%;
    transform: translate(-50%, -50%);

  }




  .recent_btn {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .purchased_btn {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .faverite_btn {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .history_btn {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;
  }

  .login-container {
    position: absolute;
    top: 45%;
    font-weight: bold;
    color: red;
    left: 45%;
    transform: translate(-50%, -50%);
    background-color: red;
    padding: 20px;
    border: 5px solid white;
    border-radius: 40px;
    width: 340px;
  }

  .signup-container {
    position: absolute;
    top: 45%;
    font-weight: bold;
    color: red;
    left: 45%;
    transform: translate(-50%, -50%);
    background-color: red;
    padding: 20px;
    border: 5px solid white;
    border-radius: 40px;
    width: 340px;

  }

  .toRegister {
    font-size: 13px;
  }


  .form-control {
    margin: 5px;
    padding: 10px;
  }

  .submit_login {
    margin-left: 40%;
    margin-top: 5px;
  }

  .signup_account {
    margin: 0px;
    padding: 0px;
    margin-top: 10px;
  }

  .login_account {
    margin: 0px;
    padding: 0px;
    margin-top: 10px;
    margin-left: 20px;
  }

  .signup-link {
    text-decoration: none;
    font-size: 14px;
    margin-left: 10px;
  }



  .search-icon {
    border-radius: none;
    position: absolute;
    top: 19%;
    border: none;
    background-color: red;
    font-weight: bold;
    color: #fff;
    left: 45%;
    transform: translate(-50%, -50%);
    margin-left: 170px;

  }



  .search {
    background-color: red;
    width: 490px;
    border: none;
    border-radius: 30px;
    padding: 20px;
    height: 45px;
    font-size: 15;
    font-weight: bold;
    position: absolute;
    top: 19%;
    font-style: italic;
    left: 45%;
    transform: translate(-50%, -50%);
    color: #fff
  }

  input::placeholder {
    color: #fff
  }

  .recent_btn:hover {
    background-color: black;
    border: 1px solid red;
    font-size: 15px;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }

  .history_btn:hover {
    background-color: black;
    border: none;
    border: 1px solid red;
    font-size: 17px;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }

  .purchased_btn:hover {
    background-color: black;
    border: none;
    font-size: 15px;
    border: 1px solid red;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }

  .faverite_btn:hover {
    background-color: black;
    text-decoration: none;
    border: none;
    font-size: 15px;
    border: 1px solid red;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }


  .footer-container {
    padding-top: 40px;
    padding-left: 50px;
  }

  body {
    font-weight: bold;
  }

  .ul-movies {
    justify-content: center;
    margin: 20px;

  }

  .card {
    margin: 10px;

  }

  .title-movie {
    text-align: center;
    font-weight: bold;
    margin-top: 5px;
  }

  .overview-movie {
    text-align: center;
    color: black;
  }

  .movie-card {
    text-decoration: none;
    color: black;
    padding: 5px;
  }

  .ul-movies {
    display: flex;
    align-items: center;
  }


  .trailer_name {
    text-align: center;
  }

  hr {
    color: red;
  }

  .img_addtolist {
    width: 360px;
    height: 300px;
    justify-content: center;
    align-items: center;
    padding: 10px;

  }

  .title_addtolist {
    text-align: center;
  }

  .container_addtolist {
    width: 360px;
    margin: 50px;

  }

  .title-mylist {
    text-align: center;
    margin-bottom: 40px;
  }

  .title-movies {
    text-align: center;
    margin-bottom: 40px;
  }

  .title-tv {
    text-align: center;
    margin-bottom: 40px;
  }

  .title-trailer {
    text-align: center;
    margin-bottom: 40px;
  }

  .select_mylist {
    width: 130px;
    height: 40px;
    color: red;
    font-weight: bold;
    font-size: 20px;
    font-style: italic;
    margin-bottom: 10px;

  }

  .header-mylist {
    justify-content: center;
  }

  .mylist_header {
    text-align: center;
    color: red;
    margin-top: 220px;
  }
  .login-exit{
    width: 30px;
    height: 30px;
    margin-bottom: 10px;
    margin-left: 10px;
    padding: 0px;
  }
  .signup-exit{
    width: 30px;
    height: 30px;
    margin-bottom: 10px;
    margin-left: 10px;
    padding: 0px;
  }
  .pupup_login{
    text-decoration: none;
    color: white;
    font-size: 22px;
    font-style: italic;
    font-family: bolder;
    margin-left: 50px;

}
</Style>




<header>
  <div class="container">
    <div class="row">
      <div class=" col-sm-1 title">
        <h2> Movie & Popcorn</h2>
      </div>
      <div class="col-sm-9 tab-group ">
        <a class="tab_header " href="index">Home</a>
        <a class="tab_header " href="movies">Movies</a>
        <a class="tab_header " href="tv">TV Show</a>
        <a class="tab_header " href="mylist">My List</a>

        <?php if ($user = $this->session->userdata('user')) : ?>
          <a class="tab_header" href="logout">Log Out</a>
        <?php endif; ?>
      </div>


      <div class="col-sm-2">
        <?php if ($user = $this->session->userdata('user')) : ?>
          <a class="login"><?php echo 'Hello: ' . $user['lastname'] ?></a>
        <?php else : ?>
          <a class="login" href="login">Log In</a>

        <?php endif; ?>


      </div>


    </div>
  </div>
</header>

<body>
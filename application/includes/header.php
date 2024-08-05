<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title class="title">Movie-with-popcorn</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<style>
  .mylist_btn_container {
    width: 140px;
    justify-content: center;
    align-items: center;
    float: right;
    margin-right: 50%;
  }



  .mycontent-btn {
    background-color: black;
  }

  .dropdown-movies {
    position: absolute;
    top: 20px;
    font-style: italic;
    left: 48px;
    padding: 2px;

    transform: translate(-50%, -50%);
  }

  .mylist_btn_container {
    position: absolute;
    top: 25%;
    font-style: italic;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .dropdown-toggle {
    border: none;
    background-color: red;
    color: white;
    padding: 1px;
    border-radius: 10px;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-right: 50%;
    width: 80px;
    font-style: normal;
    font-weight: bold;
  }

  /* .dropdown-toggle:hover{
     background-color: red;
     color: white;
  } */
  .dropdown-item {
    color: white;
    font-size: 18px;
    text-align: center;
    margin-bottom: 15px;
  }

  .mylist_empty {
    position: absolute;
    top: 70%;
    font-style: italic;
    left: 50%;
    font-size: 30px;
    color: red;
    transform: translate(-50%, -50%);
  }

  .mycontentitem {
    color: black;
    font-size: 22px;
    background-color: red;
    padding: 10px;
    font-weight: bold;
    border-radius: 20px;
    margin: 10px;
    text-decoration: none;
  }

  .mycontetnt_container {
    position: absolute;
    top: 35%;
    font-style: italic;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  /* .dropdown-item:hover{
    background-color: red;
    color: white;
  } */
  .dropdown-menu {
    height: 200px;
    width: 200px;
    border-radius: 10px;
    border-radius: 10px;
    background-color: red;
    color: white;

  }

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
    background-color: white;
    border: none;
    text-align: center;
    font-size: 20px;
    position: absolute;
    border-radius: 10px;
    padding: 5px;
    width: 85px;
    top: 20px;
    font-style: italic;
    left: 44px;
    transform: translate(-50%, -50%);

  }

  .tab_exist {
    text-decoration: none;
    color: white;
    text-align: center;
    font-size: 18px;
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

  .title {
    margin: 20px
  }

  .title_header {
    text-decoration: none;
    color: red;
    font-size: 30px;
    font-style: italic;
    position: absolute;
    top: 4%;
    left: 10%;
    transform: translate(-50%, -50%);
  }

  .login {
    text-decoration: none;
    color: red;
    font-size: 20px;
    font-style: italic;
    position: absolute;
    top: 7%;
    left: 95%;
    transform: translate(-50%, -50%);
  }

  .profile_logout {
    text-decoration: none;
    color: red;
    margin: 10px;
    font-size: 20px;
    font-style: italic;
  }

  .profile_setting {
    text-decoration: none;
    color: red;
    margin: 10px;
    font-size: 20px;
    font-style: italic;
  }

  .profile_profile {
    text-decoration: none;
    color: red;
    margin: 10px;
    font-size: 20px;
    font-style: italic;
  }

  .items {
    text-decoration: none;
    color: red;
    display: none;
    font-size: 20px;
    font-style: italic;
    position: absolute;
    top: 12%;
    left: 92%;
    transform: translate(-50%, -50%);
  }



  .username_login {
    text-decoration: none;
    color: red;
    font-size: 20px;
    font-style: italic;
    position: absolute;
    top: 4%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .logout {
    text-decoration: none;
    color: red;
    font-size: 20px;
    font-style: italic;
    position: absolute;
    top: 4%;
    left: 93%;
    transform: translate(-50%, -50%);
    /* text-align: center; */
  }

  .signup {
    text-decoration: none;
    color: red;
    margin: 10px;

    font-size: 20px;
    font-style: italic;

  }


  .tab-group {
    margin-top: 80px;

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

  .mylist_title {
    margin-left: 100px;
    margin-top: 20px;
    margin-bottom: 50px;
  }




  .recent_btn {
    text-decoration: none;
    color: red;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }



  .purchased_btn {
    text-decoration: none;
    color: red;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .faverite_btn {
    text-decoration: none;
    color: red;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .history_btn {
    text-decoration: none;
    color: red;
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
    width: 360px;
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
    padding: 0px;
    margin-left: 35px;
    justify-content: center;
    align-items: center;
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
    margin-top: 10px;
    margin-left: 20px;
  }

  .signup-link {
    text-decoration: none;
    font-size: 20px;
    margin-left: 10px;
    justify-content: center;
    align-content: center;

  }



  .search-icon {
    border-radius: none;
    position: absolute;
    top: 25%;
    border: none;
    background-color: red;
    font-weight: bold;
    color: black;
    left: 45%;
    transform: translate(-50%, -50%);
    margin-left: 170px;

    font-weight: bold;
    font-size: 18px;
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
    top: 25%;
    font-style: italic;
    left: 45%;
    transform: translate(-50%, -50%);
    color: #fff
  }

  input::placeholder {
    color: black;
    font-weight: bold;
    font-size: 18px;
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

  #hoverview_container {
    display: none;
    width: 400px;
    height: 400px;
  }

  .image-movie {
    margin: 0px;
  }

  .movies-container {
    justify-content: center;
    margin-top: 10%;
  }

  .tv-container {
    justify-content: center;
    margin-top: 10%;
  }

  .favorite_container {
    justify-content: center;
    margin-top: 10%;
  }



  .description {
    border: none !important;
    font-size: 30px;
    font-weight: bolder;
    color: white;
    background-color: transparent;
    text-align: center;
    margin-left: 27%;
    transition: transform 0.3s ease;
    cursor: pointer;
    position: absolute;
    top: 50%;
    font-style: italic;
    left: 27%;
    transform: translate(-50%, -50%);

  }

  .description:hover {
    color: red;
  }

  .list_container {
    justify-content: center;
    margin-top: 10%;
  }

  .card {
    margin: 15px;
    width: 20%;
    padding: 0px;
    background-color: black;
    border: none;
    color: white;
    border-radius: 25px;


  }

  .movie_select {
    text-decoration: none;
    color: black;
  }

  .favorite_movie {
    background-color: white;
  }

  .title-movie {
    text-align: center;
    margin-top: 5px;
    font-weight: lighter;
    font-size: 20px;
    color: red;

  }

  .overview {
    font-size: 22px;
    width: 50%;
    color: red;
    font-weight: lighter;
    text-align: center;
    font-style: italic;
    position: absolute;
    top: 40%;
    font-style: italic;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .overview-movie {
    text-align: center;
    color: red;

    font-weight: lighter;
    font-size: 20px;
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

  .login-exit {
    width: 30px;
    height: 30px;
    margin-bottom: 10px;
    margin-left: 10px;
    padding: 0px;
  }



  .signup-exit {
    width: 30px;
    height: 30px;
    margin-bottom: 10px;
    margin-left: 10px;
    padding: 0px;
  }

  .pupup_login {
    text-decoration: none;
    color: white;
    font-size: 22px;
    font-style: italic;
    font-family: bolder;
    margin-left: 50px;

  }

  header {
    display: grid;
    place-items: center;
  }

  .user_login {
    margin-top: 30px;
    margin-bottom: 10px;
  }

  header {
    width: 100%;
  }

  /* #favorite_container {
    display: none;
  } */
  .profile {
    width: 60px;
    border: none;
    border-radius: 50%;
  }

  .profile-log_out {
    margin-top: 1%;
  }

  .profile-set-ting {
    margin-top: 2%;
    margin-bottom: 2%;
  }

  .profile-pro-file {
    margin-top: 4%;
  }

  .item_container {
    background-color: #fff;
    width: 15%;
    padding: 10px;
    margin-right: 20px;
    position: absolute;
    top: 50%;
    margin-top: 20px;
    font-style: italic;
    text-align: center;
    justify-content: center;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%, -50%);

  }
</Style>




<header>
  <div class="row">

    <div class="title">
      <h2 class="title_header"> Movie & Popcorn</h2>
    </div>

    <div class="tab-group ">
      <a class="tab_header " href="index">Home</a>
      <a class="tab_header " href="movies">Movies</a>
      <a class="tab_header " href="tv">TV Show</a>
      <a class="tab_header " href="mycontent">My Content</a>
    </div>


    <div id="login" class="user_login">
      <a class="login" href="login">Log In</a>
    </div>



    <div class="items" id="items">
      <!-- <button class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select</button> -->

      <!-- <script>
        $(document).ready(function() {
          $('#items').delay(10000).fadeOut('slow');
        });
      </script> -->

      <div class="item_container">
        <ul style="list-style-type: none;">
          <li class="profile-pro-file">
            <a class="profile_profile" href="#">Profile</a>
          </li>
          <li class="profile-log_out">
            <a class="profile_logout" href="logout">Log Out</a>
          </li>
          <li class="profile-set-ting">
            <a class="profile_setting" href="#">Setting</a>
          </li>

        </ul>
      </div>
    </div>






    <div id="logout" class="user_logout">
      <?php if ($user = $this->session->userdata('user')) : ?>
        <a class="logout" id="logout" onclick="profile()" href="#"><img class="profile" src="https://tse2.mm.bing.net/th?id=OIP.GQ7EXoWnNnFKgaeWvUiorQHaHa&pid=Api&P=0&h=180" alt=""></a>
        <script>
          let login = document.getElementById('login');
          login.style.display = "none";



          // function profile() {
          //   let items = document.getElementById('items');
          //   items.style.display = "block";


          // }

          $(document).ready(function() {
            $("#logout").mousedown(function() {
              let items = document.getElementById('items');
              items.style.display = "block";
            });
            $("#logout").mouseenter(function() {
              let items = document.getElementById('items');
              items.style.display = "none";
            });

          });
        </script>




      <?php endif; ?>


    </div>





  </div>
</header>

<body>
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
    display: flex;
    text-align: center;
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

  .img-container {
    display: flex;
    text-align: center;
    margin-left: 20px;
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
  .rating-img{
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




  .recent_btn{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }
  .purchased_btn{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .faverite_btn{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;

  }

  .history_btn{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 17px;
    margin: 20px;
  }

 
 
  
  .search-icon{
    position: absolute;
    top: 19%;
    left: 45%;
    transform: translate(-50%, -50%);
    width: 30px;
    margin-left: 200px;
    
  }
 

 
  .search{
    background-color: red;
    width: 490px;
    border: none;
    border-radius: 30px;
    padding: 20px;
    height: 45px;
    font-size: 25px;
    font-weight: bold;
    position: absolute;
    top: 19%;
    left: 45%;
    transform: translate(-50%, -50%);
    color :#fff
  }

  input::placeholder{
    color :#fff
  }

  .recent_btn:hover{
    background-color: black;
    border: 1px solid red;
    font-size: 15px;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }
  .history_btn:hover{
    background-color: black;
    border: none;
    border: 1px solid red;
    font-size: 17px;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }
  .purchased_btn:hover{
    background-color: black;
    border: none;
    font-size: 15px;
    border: 1px solid red;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }
  .faverite_btn:hover{
    background-color: black;
    text-decoration: none;
    border: none;
    font-size: 15px;
    border: 1px solid red;
    font-weight: bold;
    border-radius: 30px;
    padding: 3px 20px 3px 20px;
  }


  .footer-container{
       padding-top: 40px;
       padding-left: 50px;
  }

  body{
    font-weight: bold;
  }
  .ul-movies{
   justify-content: center;
   margin: 20px;
   
  }
  .card{
    margin: 10px;
  }

  .title-movie{
       text-align: center;
       font-weight: bold;
       margin-top: 5px;
  }

.overview-movie{
  text-align: center;
  color: black;
}
.movie-card{
  text-decoration: none;
  color: black;
}
.trailer_name{
  text-align: center;
  font-weight: bold;
  font-size: 20px;
  margin: 10px;
  font-style: italic;
}

.trailer_container{
  text-align: center;
  justify-content: center;
  margin: 20px;
  
}

.trailer_container h4{
  padding: 10px;
  margin: 5px;
  margin-bottom: 30px;
}
.trailer_video{
  border: 50px;
  border-radius: 30px;
}

</Style>




<body>
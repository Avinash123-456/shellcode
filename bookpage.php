<?php
session_start();
require("util/master.php");
dbconnect();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/uikit.min.css" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="js/uikit.min.js"></script>
  <script src="https://kit.fontawesome.com/04851b3d87.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="js/uikit-icons.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <title>Book page!</title>

  <style>
    /* Body */
    body {
      background-color: #222222;
      font-family: 'Poppins', sans-serif;
    }

    /* Main Design */
    .main {
      background-color: #F2EFF2;
      height: 85vh;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
      box-shadow: 0px 13px 26px #000000;
    }

    /*Navbar Design*/
    .nav-bar {
      max-width: 225px;
      position: absolute;
      left: 0px;
      background-color: #E3E3E3;
      min-height: 85vh;
      border-bottom-left-radius: 50px;
    }

    /* About Heading */
    .aboutUs-heading {
      position: relative;
      top: 200px;
      font-size: 17px;
      font-weight: 700;
      text-align: center;
      color: #606060;
      font: normal normal medium 20px/30px Poppins;
    }

    /* Browse Text */
    .browse {
      font-size: 20px;
      margin-left: 15px;
      margin-top: -10px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    /* Username */
    #username {
      font-weight: bold;
      font-size: 17px;
      text-align: left;
      color: black;
      margin-left: 2px;
    }

    /* Unsubscribed */
    .unsubscribed {
      font-size: 8px;
      width: 60px;
      margin-left: 2px;
      text-align: center;
      border-radius: 3px;
      border: 2px solid grey;
    }

    /* User Icon Nav bar*/
    .user-icon {
      margin-left: 45px;
    }

    /* Upper Nav */
    #upper-nav {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      position: relative;
      left: -20px;
    }

    #full-navb {
      margin-top: 60px;
    }

    /* Logos */
    .logos {
      position: relative;
      right: 100px;
    }

    /* Body Data */
    .body-data {
      margin-left: 0px;
    }

    /* Player Class */
    .player {
      position: relative;
      top: 60px;
      width: 99%;
      left: 0px;
      border-radius: 20px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      margin-top: -60px;
    }

    #player {
      background: none;
      margin: 0px;
      padding: 0px;
      width: 100%;
      border-radius: 0px;
      top: -1px;
      height: 105px;

    }

    .player-button {
      font-size: 150%;
    }

    .player-details {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 450px;
    }

    .controls {
      font-size: 90%;
      max-width: 300px;
      position: relative;
      top: 1%;
      left: -3%;
    }

    .initial-timeing {
      position: relative;
      top: -8px;
    }

    .progress-bars-and-all {
      height: 50%;
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      width: 100%;
    }

    .range {
      position: relative;
      top: 0px;
      width: 460px;
      height: 13px;
      margin-left: 10px;
      margin-right: 10px;
      background: #717474;
    }

    .player-names {
      display: flex;
      flex-direction: column;
      line-height: 15px;
      margin-left: 10px;
    }

    .final-time-duration {
      font-size: 14px;
      position: relative;
      bottom: 4px;
    }

    /* Scroller */
    .scroller {
      max-height: 432px;
      max-width: 740px;
      position: relative;
      left: 270px;
      overflow-x: hidden;
      top: -65px;
    }

    /*  Book Page  */
    .book-detail {
      height: 470px;
      position: relative;
      top: -14px;
      width: 320px;
      left: -140px;
    }

    /* Start Now Text */
    .bottom-text {
      font-size: 80px;
      width: 230px;
    }

    /* book-thumbnail */
    .book-thumbnail {
      width: 110px;
      height: 139px;
      margin-left: 52px;
    }

    /* button */
    .btn {
      width: 200px;
    }

    /* text-x1 */
    .text-xl {
      font-size: 1.25rem;
      margin-left: 50px;
      margin-top: 0px;
      position: relative;
      top: 18px;
    }

    /* text-x2 */
    .text-2xl {
      font-size: 1.5rem;
      position: relative;
      margin-left: 50px;
    }

    /* course-content-sessions */
    .course-content-sessions {
      font-size: 80%;
      margin-left: 50px;
      margin-bottom: 10px;
    }

    .books-books-page {
      width: 600px;
      margin-top: -21px;
    }

    /* Player */
    .player {
      position: relative;
      top: 5px;
      width: 100%;
      align-items: center;
      display: flex;
      flex-direction: row;
      justify-content: center;
      background: #222222;

    }

    #player-image {
      width: 50px;
      height: 50px;
      border: 2px solid rgb(241, 0, 0);
    }

    .player-info {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: -4px;
    }

    .going-live {
      color: white;
      font-weight: bold;
      position: relative;
      bottom: 8px;
      left: 14px;
    }

    .going-live-time {
      font-weight: 400;
      font-size: 12px;
      columns: rgb(80, 76, 76);
    }

    .player-dot {
      height: 7px;
      width: 7px;
      background-color: rgb(250, 0, 0);
      border-radius: 50%;
      display: inline-block;
      position: relative;
      right: 5px;
      bottom: 1px;
    }

    /* Duration Bars */
    .duration-bars {
      display: flex;
      flex-direction: row;
      top: -6px;
      position: relative;
    }

    /* controls-class */
    .controls-class {
      display: flex;
      width: 80%;
      margin-right: 100px;
    }

    /* Range */
    .range {
      width: 460px;
      top: -2px;
    }

    /* Volumes */
    .volumes {
      position: relative;
      top: -16px;
      left:30px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    ::-webkit-scrollbar {
      width: 20px;
    }

    ::-webkit-scrollbar-thumb {
      background: red;
      border-radius: 10px;
    }

    .books-books-page {
      width: 600px;
      margin-top: -21px;
      margin-right: 23px;
    }

    .fa-bell{
      position: relative;
      right: 50px;
      bottom: 5px;
      font-size: 20px;
    }
  </style>
</head>

<body style="overflow-x: hidden;">

  <div class="main">
    <div class="navs" id="navs">
      <div class="container-md p-2 nav-bar" id="nav-bar">
        <div class="row">
          <div class="col-auto">
            <div class="full-navb p-2" id="full-navb">
              <div class="row upper-nav " id="upper-nav" style="max-width: 300px;margin-right:10px;">
                <div class="col-4">
                  <i class="far fa-user-circle fa-3x user-icon"></i>
                </div>
                <div class="col-6 user">
                  <h3 class="username" id="username">Anirudh</h3>
                  <h5 class="unsubscribed">UNSUBSCRIBED</h5>
                </div>
                <div class="col-2">
                  <i class="far fa-bell"></i>
                </div>
              </div>
              <div class="row middle">
                <div class="col">
                  <h3 class="browse" id="browse">BROWSE</h3>
                </div>
              </div>

              <div class="list">
                <div class='row linklist' id="linklist">

                  <ol class="nav menulist" id="menulist">

                    <li>
                      <div class="row item-row" id="item-row ">
                        <div class="col-auto customized-pill" id="link-home-pill">
                          <div
                            style="height: 18px;width:4px;background-color: #2980B9;position: relative;left: 13px;top:13px">
                          </div>
                        </div>
                        <a class="col-auto nav-link nav-button" href="#home" nav="link-home-pill" id="pills-home-tab"
                          data-bs-target="#pills-home" type="link" role="tab" aria-controls="pills-home"
                          aria-selected="true" style="font-weight:bold;" onclick="link_click(this.id);">
                          <i class="fas fa-home nav-icon" id="nav-icon"></i>
                          Home
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="row  item-row" id="item-row">
                        <div class="col-auto customized-pill" id="link-forum-pill">
                        </div>
                        <a class="col-auto nav-link text-black nav-button" nav="link-forum-pill" href="#Forum"
                          id="pills-forum-tab" data-bs-target="#pills-forum" type="link" role="tab"
                          aria-controls="pills-forum" aria-selected="false" style="color:#707070;font-weight:bold;"
                          onclick="link_click(this.id);">
                          <i class="fas fa-users  nav-icon" id="nav-icon"></i>
                          <span id="discussion-forum-change">Discussion Forum</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="row gy-2  item-row" id="item-row">
                        <div class="col-auto customized-pill" id="link-classes-pill"></div>
                        <a class="col-auto nav-link nav-button" nav="link-classes-pill" href="myclasses.php"
                          id="pills-classes-tab" data-bs-target="#pills-classes" type="link" role="tab"
                          aria-controls="pills-classes" aria-selected="false" onclick="link_click(this.id);"
                          style="color:#707070;font-weight:bold;"><i class="fas fa-laptop  nav-icon"
                            id="nav-icon"></i>My
                          Classes</a>
                      </div>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <h1 class="aboutUs-heading">About Us</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="body-data">
      <div class="logo-row" id="logo-row">
        <img src="images/logo.png" id="logos" class="logos">
      </div>
      <div class="container-fluid p-4 book-page">
        <div class="uk-align-right book-detail bg-white rounded-xl p-2" id="book-detail">
          <div class="row">
            <div class="col-auto">
              <img class="img-fluid book-thumbnail" id="book-thumbnail" src="images/litracy.png">
            </div>
          </div>
          <div class="row ">
            <div class="col">
              <?php if( getusersub() == '0' ) {
              <a href="subscribe.php?action=1&sub=Financial"><button type="button"
                  class="btn btn-primary subscribe-button" id="subscribe-button"
                  style="margin-top: 10px;">Subscribe</button></a>
              <?php } else if(getusersub() == "Financial") {
                <a href="subscribe.php?action=0&sub=Financial"><button type="button"  class="btn btn-danger  subscribe-button"  id="subscribe-button"style="margin-top: 10px;" >Unsubscribe</button></a>';
                }
                else
                <a href="subscribe.php?action=1&sub=Financial"><button type="button"  class="btn btn-primary  subscribe-button"  id="subscribe-button"style="margin-top: 10px;" >Subscribe</button></a>';
              ?>
            </div>
          </div>
          <div class="row " style="margin-top: 10px;">
            <div class="col">
              <button type="button" class="btn btn-outline-primary take-demo-class-button"
                id="take-demo-class-button">Take a demo class</button>
            </div>
          </div>
          <div class="row schedule-row " id="schedule-row" style="margin-top:10px;">
            <div class="col-auto   book-detail-schedules" id="book-detail-schedules">
              <h2 class="text-gray-400 font-semibold">This session includes:</h2>
              <ul id="schedule-list">
                <li class="font-normal text-gray-700 session-points" id="session-points"><span
                    uk-icon="icon: tv; ratio: 0.7" style="position: relative;top: 2px;"></span> 11.5 hours on-demand
                  live classes</li>
                <li class="font-normal text-gray-700 session-points" id="session-points"><span
                    uk-icon="icon: copy; ratio: 0.7" style="position: relative;top: 2px;"></span>7 real time projects
                </li>
                <li class="font-normal text-gray-700 session-points" id="session-points"><span
                    uk-icon="icon: table; ratio: 0.7" style="position: relative;top: 2px;"></span> Upto level 3</li>
                <li class="font-normal text-gray-700 session-points" id="session-points"><i
                    class="fas fa-medal"></i>Each level certification </li>


              </ul>
            </div>

          </div>
        </div>
      </div>
      <div class="row scroller container-fluid justify-content-center   overflow-auto" id="scroller">
        <h3 class="book-heading font-bold text-3xl" id="book"> <span><a class="back" href="home.php"><i
                class="fas fa-arrow-left" style="color: blue"></i></a></span> Financial Litracy</h3>
        <div class="row gy-2">
          <div class="col decp-1">
            <div class="card instructor-card" id="instructor-card" style="border: none">
              <div class="card-body">
                <h5 class="card-title font-bold book-page-box-heading">What you'll learn</h5>
                <div class="row">
                  <div class="col">
                    <p>
                      <li class="text-gray-500 font-medium" style="font-size: 80%">Everything about financial literacy
                      </li>
                    </p>
                  </div>
                  <div class="col">
                    <p>
                      <li class="text-gray-500 font-medium" style="font-size: 80%"> How to be financially independent
                      </li>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-2">
          <div class="col decp-1">
            <div class="card instructor-card" id="instructor-card" style="border: none">
              <div class="card-body">
                <h5 class="card-title font-medium book-page-box-heading">Requirments</h5>
                <div class="row">
                  <div class="col">
                    <p>
                      <li class="text-gray-500 font-medium" style="font-size: 80%">Having basic knoledge about numbers
                      </li>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row gy-2">
          <div class="col decp-1">
            <div class="card instructor-card" id="instructor-card" style="border: none">
              <div class="card-body">
                <h5 class="card-title font-medium book-page-box-heading">Description</h5>
                <div class="row">
                  <div class="col">
                    <p>
                    <ol>
                      <li class="text-gray-500 font-medium" style="font-size: 80%;">Ever seen one of those pro shuffel
                        Dancers out a move at a festival?</li>
                      <li class="text-gray-500 font-medium" style="font-size: 80%;margin-top: 10px;"> people gather
                        around
                        ,to cheer them on Everyone pulls out their phone to record them and they get featured on
                        youtube
                        and the EDM online forums</li>
                      <li class="text-gray-500 font-medium" style="font-size: 80%;margin-top: 10px;">its's gotta be
                        pretty
                        sweet being center if attraction right?</li>
                      <li>
                        <ul uk-accordion>
                          <li>
                            <a class="uk-accordion-title" id="see-more-link" href="#">Show more</a>
                            <div class="uk-accordion-content">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ol>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h2 class="font-bold card-title text-xl">New session starts from<span class="text-blue-600"> 1st
                March</span>
            </h2>
          </div>
        </div>
        <div class="row gy-2">
          <div class="col decp-1">
            <div class="card instructor-card" id="instructor-card" style="border: none">
              <div class="card-body">
                <h5 class="card-title font-bold book-page-box-heading">Class timings</h5>
                <div class="row">
                  <div class="col">
                    <p>
                      <li class="text-gray-500 font-medium" style="font-size: 80%">Friday -10am - 11am</li>
                    </p>
                  </div>
                  <div class="col">
                    <p>
                      <li class="text-gray-500 font-medium" style="font-size: 80%"> Wednesday 3am - 4am</li>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-2">
          <div class="conent ">
            <h2 class="course-content-heading font-extrabold text-2xl">Course Content</h2>
            <p class="text-gray-600 course-content-sessions" id="course-content-sessions">11 Sessions : 7 Real Time
              projects : levels</p>
            <ul class="list-group list-group-flush  instructor-card bg-white">
              <li class="list-group-item bg-gray-400" aria-current="true"><b>Level 1</b></li>
              <li class="list-group-item">1. Introduction</li>
              <li class="list-group-item">2. What is Shoot move</li>
              <li class="list-group-item">3. Shoot dance steps</li>
              <li class="list-group-item">4 .Shoot dance on the music</li>
              <li class="list-group-item">5 .What is a runnig man</li>
            </ul>
          </div>
        </div>
        <div class="row gy-2">
          <div class="col">
            <div class="card instructor-card" id="instructor-card" style="border: none">
              <div class="card-body">
                <h5 class="card-title book-page-box-heading font-bold">Your instructor</h5>
                <div class="row">
                  <div class="col-auto">
                    <img src="images/profile.png" class="instructor-profile-pic" id="instructor-profile-pic">
                  </div>
                  <div class="col">
                    <h4 class="text-blue-600" class="instructor-name" id="instructor-name"><strong>Anushree
                        Yadav</strong>
                    </h4>
                    <div class="instructor-para" id="ins">
                      <p><span uk-icon="video-camera" class="video-icon" id="video-icon"></span> sessions 2 times a
                        week
                        <span uk-icon="icon:world;ratio:0.7" class="world-icon" id="world-icon"> </span> English &
                        Hindi
                      </p>
                    </div>
                    <p class="book-para-2 font-semibold">Don't you have enough time to get to a stationary dance
                      school?Don't you like time table of dance school</p>
                    <p class="book-para-3 font-semibold">FInd a dance class for yourself no Dancebook and practice
                      whenever you only want?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-auto ">
          <div class="skills">
            <h3 class="skills-heading" style="margin-bottom: 40px;" id="skills-heading"><span
                class="text-blue-600">Skills,</span><span class="text-black">that you have to master yet</span></h3>
          </div>
          <div class="row books-books-page  " id="books-books-page">
            <div class="col" id="bookimg">
              <img src="images/book1.png" class="shadow-2xl book1" id="book1">
            </div>
            <div class="col">
              <img src="images/book6.png" class="shadow-2xl book1" id="book1">
            </div>
            <div class="col">
              <img src="images/book2.png" class="shadow-2xl book1" id="book1">
            </div>
            <div class="col">
              <img src="images/book3.png" class="shadow-2xl book1" id="book1">
            </div>
            <div class="col">
              <img src="images/book3.png" class="shadow-2xl book1" id="book1">
            </div>
          </div>
        </div>
        <div class="bottom-font d-flex flex-row-reverse">
          <h1 class="bottom-text font-extrabold" id="bottom-text">Start <br>now<span class="bottom-text  text-blue-600"
              id="bottom-text">!</span></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container player" id="player">
    <div class="player-info" id="player-info">
      <div class="player-details" id="player-details">
        <img src="images/book4.png" class="player-image" id="player-image">
        <div class="col-auto player-names" id="player-names">
          <p class=" card-title text-white" id="live-chapter"><strong>Splashed(art with me)</strong></p>
          <p class="card-subtitle text-gray-500" id="live-tutor">With Kashish Yadav</p>
        </div>
      </div>
      <div class="controls-class">
        <div class="controls" id="controls">
          <button class="" id="previous"><i class="fas fa-step-backward player-button text-muted"
              id="previous-icon"></i></button>
          <button class="" id="play"><i class="fas fa-play player-button" style="color: white"
              id="play-icon"></i></button>
          <button class="" id="next"><i class="fas fa-step-forward player-button text-muted"
              id="forward-icon"></i></button>
        </div>

        <div class=" progress-bars-and-all" id="progress-bars-and-all">
          <div class="duration-bars" id="duration-bars">
            <span class="text-white initial-timeing" id="initial-timeing">0:00</span>
            <Input class="range" id="range" type="range" name="" value="0" min="0" max="1000"
              onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)" />
            <p class="going-live">
              <span class="player-dot"></span>Going Live<span class="going-live-time ml-1" style="margin-left:6px;">in 10.45 mins</span>
            </p>
          </div>
          <span class="volumes" id="volumes">
            <i class="fas fa-volume-off fa-2x" id="volume-icon" style="color:white"></i>
            <Input class="range1" id="range1" type="range" name="" value="0" min="0" max="1000"
              onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)" />
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>



  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="images/https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
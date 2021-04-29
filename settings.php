<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/04851b3d87.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <title>Hello, world!</title>

  <style>
    body {
      overflow-x: hidden;
      background-color: #222222;
      font-family: 'Poppins', sans-serif;
    }
    @media (max-width: 800.98px) {
      #username {
        visibility: hidden;
      }

      #profile-pic {
        visibility: hidden;
      }


      #player-image {
        border-radius: 0%;
        position: relative;
        top: 30px;
      }

      #controls {
        position: relative;
        bottom: 40%;
      }


    }


    @media (max-width: 727.98px) {
      #box-2 {
        position: relative;
        right: 10px;
        display: flex;
        justify-content: space-around;
      }

      iframe {
        position: relative;
        right: 15px;
        font-size: 80%;
      }


      a {
        font-size: 80%
      }

      #box-2-content {
        font-size: 80%;
        width: 100%;
        /* background-color:red;*/
      }

      body {
        width: 100%;
      }

      #profile-pic {
        display: none;
      }

      #username {
        display: none;
      }

      #menulist {
        width: 98%;
        z-index: 1;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        background-color: white;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;
        /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow: 3px 3px 5px 6px #ccc;
        /* Firefox 3.5 - 3.6 */
        box-shadow: 3px 3px 5px 6px #ccc;
        border-radius: 10px;
        position: fixed;
        right: 5x;
        bottom: 0px;
        z-index: 10000;
      }

      #nav-bar {
        background-color: inherit;
      }

      #logos {
        height: 100%;
        position: relative;
        left: 0px;

      }

      #logo-row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        position: relative;
        text-align: center;
        height: 50px;


      }

      #settings-container {
        /*background-color:purple;*/
        width: 100%;
      }

      #frame-list {
        width: 70%;
      }

      #v-pills-Youraccount {
        position: relative;
        height: 50%;
        width: 50%;
      }
    }
    .box-2 {
      clear: both;
      width: 100vw;
    }

    @media only screen and (max-width: 725px) {
      #v-pills-Youraccount {
        width: 100%;
      }

      .box-2 {
        margin-left: 0.6rem;
        min-width: 300px;
        max-width: 90vw;
        min-height: 500px;
        background-color: white;
        padding: 35px;
      }

      .menu-2 {
        position: relative;
        right: 40px;
      }

      #frame-list {
        width: 100%;
      }

      ul#frame-list {
        padding-left: 0px;
      }
    }

    @media (max-width: 727.98px) {
      .customized-pill {
        /* visibility: hidden; */
        display: none;
      }
    }

    /* Body */
    body {
      background-color: #222222;
    }

    /* Main */
    .main {
      background-color: #F2EFF2;
      height: 85vh;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
      box-shadow: 0px 13px 26px #000000;
    }

    /*Navbar Design*/
    .nav-bar {
      max-width: 235px;
      position: absolute;
      left: 0px;
      background-color: #E3E3E3;
      min-height: 85vh;
      border-bottom-left-radius: 50px;
    }

    .box-2 {
      min-width: 460px;
      max-width: 740px;
      min-height: 450px;
      background-color: white;
      padding: 35px;
  }
    /* About Heading */
    .aboutUs-heading {
      position: relative;
      top: 240px;
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
      font-size: 15px;
      text-align: left;
      color: black;
      margin-left: 2px;
    }

    /* Unsubscribed */
    .unsubscribed {
      font-size: 9px;
      width: 75px;
      margin-left: 2px;
      text-align: center;
      border-radius: 3px;
      border: 2px solid grey;
    }

    /* User Icon Nav bar*/
    .user-icon {
      margin-left: 40px;
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
      margin-top: 40px;
    }

    /* Logos */
    .logos {
      position: relative;
      right: 100px;
    }

    /* linklist */
    .linklist {
      line-height: 30px;
    }

    /* body-content */
    .body-content {
      width: 100%;
      display: flex;
      flex-direction: row;
      margin-top: 20px;
    }

    /* body-data */
    .body-data {
      margin-left: 270px;
    }

    /* book-detail */
    .book-detail1 {
      width: 320px;
      background-color: red;
      height: 480px;
    }

    .book-detail2 {
      width: 730px;
      background-color: red;
      height: 480px;
      margin-left: 40px;
    }

    /* setting-heading */
    .setting-heading {
      position: absolute;
      top: 60px;
      left: 310px;
      font-weight: bold;
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 2.75rem;
      position: relative;
      left: 30px;
    }

    /* form-change-paswor */
    .form-change-pasword {
      padding: 10px 70px;
      margin-top: 20px;
    }

    /* fa-arrow-left */
    .fa-arrow-left {
      margin-right: 20px;
      color: #4B86EA;
    }

    /* Buttons */
    .btns {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      background: #E3E3E3;
      margin-bottom: 10px;
      border-radius: 10px;
    }

    .your-account {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 10px;
    }

    /* Player Design */
    #player-info {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      position: relative;
      width: 100%;
      top: 22px;
      height: 108px;
    }

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
      top: -22px;
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

    .player-image {
      height: 50px;
      border-radius: 50%;
      width: 50px;
      border: 2px solid white;
    }

    .controls {
      font-size: 90%;
      max-width: 500px;
      position: relative;
      top: -2%;
      left: -2%;
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
      margin-right: 15px;
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

    /* Going Live */
    .going-live {
      color: white;
      font-weight: bold;
      position: relative;
      bottom: 8px;
      bottom: 2px;
      left: 14px;
    }

    .going-live-time {
      font-weight: 400;
      font-size: 12px;
      columns: rgb(80, 76, 76);
    }

    /* Control Class */
    .controls-class {
      display: flex;
      width: 80%;
      margin-right: 100px;
    }

    /* Duration Bar */
    .duration-bars {
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      margin-top: 18px;
    }

    /* Volumes */
    .volumes {
      position: relative;
      top: -16px;
      left: 25px;
    }

    .initial-timeing {
      position: relative;
      top: -1px;
    }
  </style>

</head>

<body>
  <div class="main">
    <div class="navs" id="navs">
      <div class="container-md p-2 nav-bar" id="nav-bar">
        <div class="row">
          <div class="col-auto">
            <div class="full-navb p-2" id="full-navb">
              <div class="row upper-nav " id="upper-nav" style="max-width: 300px;">
                <div class="col-4">
                  <i class="far fa-user-circle fa-3x user-icon"></i>
                </div>
                <div class="col-6 user">
                  <h3 class="username" id="username">No User</h3>
                  <h5 class="unsubscribed">UNSUBSCRIBED</h5>
                </div>
                <div class="col-2">
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
                          <span class="ml-5">Home</span>
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
                          <span class="ml-5">Discussion Forum</span>
                        </a>
                      </div>
                    </li>


                    <li>
                      <div class="row gy-2  item-row" id="item-row">
                        <div class="col-auto customized-pill" id="link-classes-pill"></div>
                        <a class="col-auto nav-link nav-button" nav="link-classes-pill" href="myclasses.php"
                          id="pills-classes-tab" data-bs-target="#pills-classes" type="link" role="tab"
                          aria-controls="pills-classes" aria-selected="false" onclick="link_click(this.id);"
                          style="color:#707070;font-weight:bold;">
                          <i class="fas fa-laptop  nav-icon" id="nav-icon"></i>
                          <span class="ml-5">My Classes</span>
                        </a>
                      </div>
                    </li>        
                  </ol>
                </div>
              </div>
            </div>
            <h1 class="aboutUs-heading">Setting & More</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="body-data">
      <div class="setting-heading">
        <h1 style="font-size: 30px;">Settings<span style="color: blue;">.</span></h1>
      </div>
      <div class="logo-row" id="logo-row">
        <img src="images/logo.png" id="logos" class="logos">
      </div>
      <div class="body-content">
        <div class="uk-align-right book-detail1 bg-white rounded-xl p-2" id="book-detail">
          <div class="detail-1 p-3">
            <div class="d-grid gap-2">
              <button class="btn btn-primary your-account mb-3" type="button">Button<i
                  class="fas fa-chevron-right"></i></button>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btns" type="button">Your Subscription</button>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btns" type="button">Your Payment Credentials</button>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btns" type="button">Privacy Policies</button>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btns" type="button">About Us</button>
            </div>
          </div>
        </div>
        <div class="box-2 container-fluid rounded-xl" style="margin-right: 170px;" id="box-2">
          <div class="back"></div>
          <div class="box-2-content" id="box-2-content">
            <div class="head" id="head">
              <h4 class="uk-heading-divider menu-2-heading" id="menu-2-heading" style="font-size: 20px;"><b>Your account</b></h4>
              <p class=" text-gray-500" style="text-align:justify;font-size:12px">see information about your account,change your password, or learn about
                your account deactivation options.</p>
            </div>
            <div class="menu-2 " id="menu" style="width: 576px;margin-left:50px">
              <div class="" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <ul class="frame-list" id="frame-list">
                  <li class="font-semibold nav-item rounded-md p-2 text-gray-800" type="link">
                    <a class="uk-link-reset accountinfo" type="link" id="your-account-link" href="#accountinfo">
                      <div class="row" id="item-name-row">
                        <div class="col-1">
                          <center><i class="fas fa-user " style="top: 8px;position: relative;"></i></center>
                        </div>
                        <div class="col">
                          <dl class="uk-description-list">
                            <dt class="acc" id="account-info-heading"><strong style="font-size: 20px;">Account information</strong></dt>
                            <dd class="font-normal account-info-para" id="account-info-para" style="font-size: 12px;">See information like
                              email address,phone number</dd>
                          </dl>
                        </div>
                        <div class="col-1">
                          <center><i class="fas fa-angle-right" style="top: 8px;position: relative;font-size:35px"></i></center>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="font-semibold nav-item rounded-md p-2 text-gray-800" type="link">
                    <a class="uk-link-reset accountinfo" id="change-password-link">
                      <div class="row">
                        <div class="col-1">
                          <center><i class="fas fa-key" style="top: 8px;position: relative;"></i></center>

                        </div>
                        <div class="col">
                          <dl class="uk-description-list">
                            <dt id="change-passsword-heading"><strong style="font-size: 20px;">Change your password</strong></dt>
                            <dd class="font-normal" id="change-passsword-para"  style="font-size: 12px;">Change your password anytime you
                              like</dd>
                          </dl>
                        </div>
                        <div class="col-1">
                          <center><i class="fas fa-angle-right" style="top: 8px;position: relative;font-size:35px"></i></center>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="font-semibold nav-item rounded-md p-2 text-gray-800" type="link">
                    <a class="uk-link-reset accountinfo" id="deactivate-account-link" href="#deactivateaccount">
                      <div class="row">
                        <div class="col-1">
                          <center><i class="fas fa-times-circle" style="top: 8px;position: relative;"></i></center>
                        </div>
                        <div class="col">
                          <dl class="uk-description-list">
                            <dt id="change-deactivate-heading"><strong style="font-size: 20px;">Deactivate your account</strong></dt>
                            <dd class="font-normal"  style="font-size: 12px;" id="change-passsword-para">Find out how you can deactivate
                              your account</dd>
                          </dl>
                        </div>
                        <div class="col-1">
                          <center><i class="fas fa-angle-right" style="top: 8px;position: relative;font-size:35px"></i></center>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
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
          <button class="" id="previous"><i class="fas fa-step-backward player-button text-muted" id="previous-icon"
              aria-hidden="true"></i></button>
          <button class="" id="play"><i class="fas fa-play player-button" style="color: white" id="play-icon"
              aria-hidden="true"></i></button>
          <button class="" id="next"><i class="fas fa-step-forward player-button text-muted" id="forward-icon"
              aria-hidden="true"></i></button>
        </div>

        <div class=" progress-bars-and-all" id="progress-bars-and-all">
          <div class="duration-bars" id="duration-bars">
            <span class="text-white initial-timeing" id="initial-timeing">0:00</span>
            <input class="range" id="range" type="range" name="" value="0" min="0" max="1000"
              onchange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)">
            <p class="going-live">
              <span class="player-dot"></span>Going Live<span class="going-live-time ml-1.b" style="margin-left: 10px;">in 10.45 mins</span>
            </p>
          </div>
          <span class="volumes" id="volumes">
            <i class="fas fa-volume-off fa-2x" id="volume-icon" style="color:white;position: relative;
              top: 33px;" aria-hidden="true"></i>
            <input class="range1" id="range1" type="range" name="" value="0" min="0" max="1000"
              onchange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"
              style="position: relative;top: -1px;left: 21px;">
          </span>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

  <script type="text/javascript">


    $('.accountinfo').click(function () {


      if ($(this).attr('id') == 'your-account-link') {
        $('.box-2-content').html('<iframe src="edit_info.html" class="box-3" frameborder="0" ></iframe>');
      }


      if ($(this).attr('id') == 'change-password-link') {
        $('.box-2-content').html('<iframe src="change_password.html" class="box-3" frameborder="0" uk-video="automute: true"></iframe>');
      }


      if ($(this).attr('id') == 'deactivate-account-link') {
        $('.box-2-content').html('<iframe src="deactivation.html" class="box-3" frameborder="0" uk-video="automute: true"></iframe>');

      }
      $(".back").html('<a href="settings.html"><i class="fas fa-arrow-left" style="color: blue"></i></a>');
    });


    function link_click(had) {
      var nav = $('#' + had).attr('nav');

      if (nav == 'link-home-pill') {
        $('#' + nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
        $("#" + had).css('color', '#2980B9');
        $('#pills-forum-tab').css('color', 'black');
        $('#pills-classes-tab').css('color', 'black');
        $('#pills-settings-tab').css('color', 'black');
        $('#link-classes-pill').html('');
        $('#link-forum-pill').html('');
        $('#link-settings-pill').html('');
      }
      if (nav == 'link-forum-pill') {
        $("#" + had).css('color', '#2980B9');
        $('#pills-home-tab').css('color', 'black');
        $('#pills-classes-tab').css('color', 'black');
        $('#pills-settings-tab').css('color', 'black');
        $('#' + nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
        $('#link-home-pill').html('');
        $('#link-classes-pill').html('');
        $('#link-settings-pill').html('');
      }
      if (nav == 'link-classes-pill') {
        $("#" + had).css('color', '#2980B9');
        $('#pills-home-tab').css('color', 'black');
        $('#pills-forum-tab').css('color', 'black');
        $('#pills-settings-tab').css('color', 'black');
        $('#' + nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
        $('#link-home-pill').html('');
        $('#link-forum-pill').html('');
        $('#link-settings-pill').html('');
      }
      if (nav == 'link-settings-pill') {
        $("#" + had).css('color', '#2980B9');
        $('#pills-home-tab').css('color', 'black');
        $('#pills-forum-tab').css('color', 'black');
        $('#pills-classes-tab').css('color', 'black');
        $('#' + nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
        $('#link-home-pill').html('');
        $('#link-forum-pill').html('');
        $('#link-classes-pill').html('');
      }


    }


    $(function () {
      if ($(window).width() < 767) {
        $("#discussion-forum-change").html('Forum');
      }
    });

    window.addEventListener('resize', function (event) {
      if ($(window).width() < 860) {
        $("#discussion-forum-change").html('Forum');
      }
      else {
        $("#discussion-forum-change").html('Dicussion Forum');
      }
    });
  </script>
</body>

</html>
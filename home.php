<?php

session_start();
require_once("util/master.php"); 
dbconnect();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 
      <link rel="stylesheet" href="css/uikit.min.css" />
      <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
  <style>
   
  
    @media (max-width: 727.98px) {
        body{
            overflow-x:hidden;
           
        }
              #player{
                  
                height:120px;
                position:relative;
                width:98%;
                left:0px; 
                top:20px;
                margin-top:10px; 
                margin-bottom:90px;
                display:flex;
                justify-content:flex-start;
            }
            
            #player-info{
             
                display:flex;
                flex-direction:column;
                justify-content:space-around;
                position:relative;
                top:00px;
                height:100%;
                width:100%; 
            
            }                #player-details{
                    display:flex;
                    flex-direction:row;
                    font-size:14px;
                    width:100%;
                    height:50px;
                    }
                #player-names{
                    height:auto;
                    display:flex;
                    flex-direction:row;
                    justify-content:center;
                    position:relative;
                    width:75%;
                    align-self:center;
                    right:10px; 
                    margin-bottom:10px;
                    font-size:90%;
                }
                #duration-bars{
                    position:relative;
                    top:5px;
                    left:20px;
                }
                #progress-bars-and-all{
                   
                    width:100%;
                    position:relative;
                    top:-40px;
                    left:5px;
                    height:40px;
                    
                   
                    
                    
                }
                #range{
                    width:180%;
                    height:8px;
                    position:relative;
                     left:14%;
                     margin-bottom:5px;
                    
                }
                #player-image{
                    position:relative;
                  
                    height:90px;
                  width:auto;
                  top:0px;
                    
                } #play-icon{
                    font-size:20px;
                }
                #previous-icon{
                    font-size:20px;
                }
                
                #forward-icon{
                    font-size:20px;
                }
                
                #controls{
                    position:relative;
                    text-align:center;
                    top:30px;
                    width:60%;
                   display:flex;
                   flex-direction:row;
                   justify-content:space-around;
                   
                }
                
                
                #final-time-duration{
                    font-size:70%;
                    position:relative;
                    margin-top:2px;
                    top:28%;
                    left:00px;
               
                }
                #initial-time{
                       position:relative;
                       top:10px;
                       left:10px;
                       margin-top:1px;
                       font-size:70%;
                   }
                
                #live-tutor{
                    position:relative;
                    top:6px;
                    left:10px;
                    font-size:12px;
                }
                
                
                #volume-icon{
                    visibility:hidden;
                }
                #range1{
                    visibility:hidden;
                }
            #home-body{
                width:100%;
            }
            #logo-row{
                position:relative;
                top:-15px;
                visibility:visible;
                width:100%;
                height:auto;
                display:flex;
                justify-content:center;
            }
            
            #logos-top{
                height:60px;
            }
            
            #logos{
                    height:40px;
                    width:40px;
                    position:relative;
                    bottom:80px;
                    float:center;
                    visibility:hidden;
                }
                
               
            #home-container{
                position:relative;
                left:5px;
            }
            #second-heading-text{
                font-size:80%;
            }
            #dropdowns2{
                visibility:visible;
                position:absolute;
                top:50px;
                right:0px;
            }
                        #dropdowns1{
                visibility:hidden;
                position:absolute;
                top:50px;
                right:0px;
            }
            
                
                #close, #close1{
                    font-size:100%;
                    position:relative;
                    top:30px;
                    right:20px;
                    z-index:2000000;
                }

                
               
            
                    
            #notifications-msgs{
           
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:95%;
            max-height:240px;
           
        }
            #card-1-content{
                width:100%;
                position:relative;
                top:5%;
            }
            #card-2-content{
                width:100%;
                position:relative;
                top:5%;
            }
            
             #book-row{
            position:relative;
            bottom:20%;
            left:0px;
            
        }
            
          #book1{
             height:80px;
              max-width:80px;
          }
            
            
            
            #book-link{
                margin-left:0px;
                margin-right:20px;
            }
            
            
            
            #second-heading{
                font-size:25px;
            }
           
                
            #videos{
                display:flex;
                flex-direction:column;
            
                width:100%;
                text-align:center;
               
            }
         #outercard1{
             width:90%;
             z-index:0;
             text-align:center;
             position:relative;
            height:250px;
             left:5%;
             margin-top:0px;
             float:center;
             l
         }  
         #outercard2{
            width:90%;
             z-index:0;
             
             text-align:center;
             position:relative;
             left:5%;
             top:10px;
             margin-top:5px;
         } 
         
         a{
             font-size:80%;
         }
         
  #menulist{
   
    width:97%;
    position:fixed;
    left:2px;
    bottom:100px;
    z-index: 1;
    display: flex;
    flex-direction:row;
   justify-content:space-around;
 
  
    background-color: white;
      -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:         3px 3px 5px 6px #ccc; 
  border-radius:10px;
    position:fixed;
        
          bottom:0px;
          z-index:10000;
  }
  #nav-bar{
      
      background-color:inherit;
      width:100%;
      overflow-x:hidden;
     
        }
        
        
        
         #cardimg{
      width:70px;
      height:auto;
      float:center;
  }
        #level2{
            font-size:20px;
        }
  #username{
      visibility:hidden;
  }
  #profile-pic{
      visibility:hidden;
  }
  
  #browse{
      visibility:hidden;
  }
  #innercard1{
      width:auto;
      height:90%;
      position:relative;
      bottom:;
      font-size:80%;
      border:none;
  }
  
  
    #loggedin{
        font-size:80%;
    }
   
        }
        
        .outercard{
            margin-top:10px;
        }
        .card-1-content{
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:400px;
            height:100px;
            text-align:center;
            float:left;
        }
        .card-2-content{
               display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:400px;
            text-align:center;
             height:200px;
        }   
        
        .browse{
            font-size:30px;
        }
        
       
        .videos{
           
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            width:85%;
        }
       
        
        .nav-bar{
            height:124%;
        }
        .outercard1{
           
            height:300px;
            width:400px;
        }
        .outercard2{
           
             width:400px;
             height:300px;
             
        }
        .video-thumbnail{
            position:relative;
            top:30px;
            width:100%;
            height:100%;
            
        }
        .home-container{
            position:relative;
            left:210px;
        }
        .book-row{
            
            position:relative;
            
            width:90%;
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            overflow-x:auto;
            right:80px;
        }
        
         
            .msg-box{
                width:95%;
              
            }
        .notifications-msgs{
           
            display:flex;
            flex-direction:row;
            justify-content:space-between;
           
            width:95%;
        }
        
        
        .logos{
            height:100px;
            width:auto;
            float:right;
        }
            
            .logo-row{
                visibility:hidden;
                height:0px;
            }
        
        body{
           
            height:100%;
            width:100%;
        }
          .duration-bars{
            width:100%;
            display:flex;
            flex-direction:row;
            justify-content:center;
        }
        
       .volumes{
           width:30%;
       }
       .player-names{
            position:relative;
            left:5px;
        }
        
        .final-time-duration{
            font-size:14px;
            position:relative;
            bottom:4px;
        }
         .progress-bars-and-all{
            
            height:50%;
             display:flex;
            flex-direction:row;
            justify-content:space-around;
            width:100%;
        }
        .range{
            positiom:relative;
            top :0px;
            width:60%;
            height:20%;
            margin-left:10px;
            margin-right:10px;
        }.player-button{
                    font-size:150%;
                }
        .player-details{
            display:flex;
            flex-direction:row;
            margin-right:40px;
            font-size:90%;
        }
        .initial-time{
            visibility:visible;
        }
        .controls{
            font-size:90%;
            max-width:300px;
            position:relative;
            
            top :10%;
            left:5%;
        }
        .player{
            position:relative;
            top:60px;
            width:99%;
            left:0px;
            border-radius:20px;
            display:flex;
            flex-direction:row;
            justify-content:center;
           
            
        }
        .final-time-duration{
            visibility:visible;
            
        }
        
        .player-info{
            position:relative;
            display:flex;
            flex-direction:row;
            justify-content:space-around;
           top:20%;
            width:100%;
            
        }
        .player-image{
            position:relative;
            bottom:15px;
            height:100%;
            width:auto;
          border-radius:0%;
        }
  </style>
  <style>
  
    @media only screen and (min-width: 800px) {
  
      #nav-bar{
        height: 100%;
    border-bottom-left-radius: 25px;
    visibility:visible;
      }
      .box {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 1;
        height: 15vh;
        margin-top: 750px;
        padding-top: 20px;
      }
      .overlay {
        z-index: 9;
        padding-top: 0px;
        margin-top: 0px;
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
  height: 115vh;    background-color: #f2eff2;

      }
    }
  </style>
  </head>
  <body id="home-body">
      
      <div class="box overlay d-none d-sm-block">
            
<div class="navs" id="navs">
       <div class="container-md p-2 nav-bar" id="nav-bar">

          <div class="row">
            <div class="col-auto">
          <div  class="full-navb p-2" id="full-navb">
            <div class="row upper-nav " id="upper-nav" style="max-width: 300px;">
              <div class="col-4">

                <img class="profile-pic" id="profile-pic" src="images/profile.png">
              </div>
              <div class="col-6">
                <h3 class="username text-dark" id="username">No User</h3>


              </div>

              <div class="col-2">
              
                  <div class="dropdowns" id="dropdowns1" style="z-index:2">
                           <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="images/Notifications-4.png"></a>
                           <ul class="dropdown-menu bg-white rounded-md shadow-xl p-3"  id="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li class="dropwdown-item">
                                 <div class="notification-card" id="notification-card">
                                    <div class="notification-imd" id="notification-imd">
                                       <img src="images/profile.png" class="notification-image" id="notification-image">
                                    </div>
                                    <div class="notification-text">
                                       <p><span class="text-black card-text font-bold">Arka</span><span> has liked your reply </span></p>
                                       <p class="subtext font-bold text text-blue-500" id="subtext">2 hours ago</p>
                                    </div>
                                    <span class="notifier-dot text-blue-500 font-bolder text-5xl" id="notifier-dot">.</span>
                                 </div>
                              </li>
                              <li class="dropwdown-item">
                                 <div class="notification-card" id="notification-card">
                                    <div class="notification-imd" id="notification-imd">
                                       <img src="images/profile.png" class="notification-image" id="notification-image">
                                    </div>
                                    <div class="notification-text">
                                       <p><span class="text-black card-text font-bold">Sakishi</span><span> has replied you</span></p>
                                       <p class="subtext font-bold text text-muted" id="subtext">3 hours ago</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="dropwdown-item">
                                 <div class="notification-card" id="notification-card">
                                    <div class="notification-imd" id="notification-imd">
                                       <img src="images/profile.png" class="notification-image" id="notification-image">
                                    </div>
                                    <div class="notification-text">
                                       <p><span class="text-black card-text font-bold">New project</span><span> for you</span></p>
                                       <p class="subtext font-bold text text-blue-500" id="subtext">7   hours ago</p>
                                    </div>
                                    <span class="notifier-dot text-blue-500 font-bolder text-5xl" id="notifier-dot">.</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
              </div>
            </div>
            <div class="row middle">
              <div class="col">
                <h3 class="browse" id="browse">BROWSE</h3>
              </div>
            </div>

            <div class="list">
                   <div class='row linklist' id="linklist">
          
       <ol class="nav menulist" id="menulist" >

           <li>
            <div class="row item-row" id="item-row">
            <div class="col-auto customized-pill" id="link-home-pill">
              <div style="height: 18px;width:4px;background-color: #2980B9;position: relative;left: 13px;top:13px"></div></div>
              <a class="col-auto nav-link nav-button" href="#home"  nav="link-home-pill" id="pills-home-tab"  data-bs-target="#pills-home" type="link" role="tab" aria-controls="pills-home" aria-selected="true" onclick="link_clicks(this.id);"><i class="fas fa-home" id="nav-icon"></i> Home</a>
        </div>
          </li>
            

           <li  >
            <div class="row"  id="item-row">
            <div class="col-auto customized-pill" id="link-forum-pill"></div><a class="col-auto nav-link nav-button" nav="link-forum-pill"  href="#Forum"  id="pills-forum-tab"  data-bs-target="#pills-forum" type="link" role="tab" aria-controls="pills-forum" aria-selected="false" style="color:black" onclick="link_clicks(this.id);"><i class="fas fa-users" id="nav-icon" ></i><span id="discussion-forum-change">Discussion Forum</span> </a>
        </div>
          </li>


           <li >
            <div class="row gy-2" id="item-row" >
            <div class="col-auto customized-pill" id="link-classes-pill"></div>
            <a class="col-auto nav-link nav-button"  nav="link-classes-pill"  href="myclasses.php"  id="pills-classes-tab"  data-bs-target="#pills-classes" type="link" role="tab" aria-controls="pills-classes" aria-selected="false" onclick="link_clicks(this.id);" style="color:black" ><i class="fas fa-laptop"  id="nav-icon"></i>My Classes</a>
        </div>
          </li>

           <li >
            <div class="row gy-2" id="item-row" >
            <div class="col-1 customized-pill" id="link-settings-pill"></div>
            <a class="col-auto nav-link nav-button"  nav="link-settings-pill"  href="settings.php" id="pills-settings-tab"  type="link" role="tab" aria-controls="pills-settings" aria-selected="false" onclick="link_clicks(this.id);" style="color:black" ><i class="fas fa-cog" id="nav-icon"></i>Settings</a>
        </div>
          </li>
    </ol>
  </div>
            </div>
          </div>
        </div>
       
        </div>
        </div>
   
</div>
  
   <div class="logo-row" id="logo-row">
      <img src="images/logo.png" class="logos-top" id="logos-top" >
   </div>
   <div class="container-md rounded-xl home-container" id="home-container" style="width:90%;">
      <div class="notifications-msgs" id="notifications-msgs" style="width: 88%;">
         <div class="box-01">
            <div class="row p-2" >
               <div class="col-auto loggedin bg-white font-semibold" id="loggedin">
                  <span class="text-green-500">You have successfully logged in, </span><span class="text-black"><?php echo logincheck()?getuser("name"):'Hello'?></span>
               </div>
            </div>
            <div class="row">
               <div class="col-8 msg-box" >
                  <div class="col d-flex flex-row-reverse">
                     <i class="fas fa-times-circle" id="close" style="cursor: pointer;background"></i>
                  </div>
                  <div class="container-md bg-white notifications" id="notifications">
                     <dl>
                        <dt class=" p-1 text-blue-500 text-xl" id="message-heading">Hey your trainer this side,</dt>
                        <dd class="p-1 font-semibold">
                           <p class="msg-para">here is a change in plans.Instead going live,i will be personally coming to yuor class to teach you.And i will be bringing some materials for you to study and play with. this will be an amazing session,Really excited</p>
                        </dd>
                     </dl>
                  </div>
               </div>
            </div>
         </div>
         <img src="images/logo.png" id="logos" class="logos">
      </div>
      <div class="container-fluid  book-row"  id="book-row">
         <a href="bookpage.php"><img src="images/book1.png" class="shadow-2xl book1" id="book1" style="margin-right:10px"></a>
         <a href="bookpage.php" id="book-link"><img src="images/book1.png" class="shadow-2xl book1" id="book1" ></a>
         <a href="bookpage.php" id="book-link"><img src="images/book6.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php"id="book-link"><img src="images/book2.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php" id="book-link"><img src="images/book3.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php" id="book-link"><img src="images/book4.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php"id="book-link"><img src="images/book5.png" class="shadow-2xl book1" id="book1"></a>
      </div>
      <div class="second-heading">
         <h1 class="text-4xl second-heading-text" id="second-heading-text">lets start learning,<strong><?php echo logincheck()?getuser("name"):'Hello'?></strong></h1>
      </div>
      <div class="videos" id="videos">
         <div class="card rounded-xl outercard1" id="outercard1" >
            <div class="card-body">
               <h5 class="card-title"><strong>Your <span class="text-blue-500">Upcoming </span>class</strong></h5>
               <div class="row">
                  <div class="col">
                     <img class="cardimg" src="images/book1.png" id="cardimg">
                  </div>
                  <div class="col">
                     <div class="card border-light" id="innercard1">
                        <div class="card-body border-light mb-s">
                           <h5 class="card-title text-4xl level2" id="level2"><strong>Level 2</strong></h5>
                           <h6 class="card-subtitle mb-2 font-medium"><span>Designation-</span><span class="text-green-500">Chaiwn</span></h6>
                           <p class="card-text text-muted">
                           <table border="0">
                              <tr>
                                 <td class="text-muted">
                                    Monday-
                                 </td>
                                 <td class="text-muted"> 
                                    2:00pm-2:45pm
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-muted">
                                    Friday    -
                                 </td>
                                 <td class="text-muted"> 
                                    2:00pm-2:45pm
                                 </td>
                              </tr>
                           </table>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="uk-container-xsmall">
            <div class="card rounded-xl outercard2" id="outercard2" >
               <div class="card-body" >
                  <h5 class="card-title"><strong><span class="text-blue-500">Revise</span><span> Your  Previous Lessions</span></strong></h5>
                  <center><img class="rounded-xl video-thumbnail" src="images/Mask Group -13.png" id="video" /></center>
               </div>
            </div>
         </div>
      </div>
   </div>
      </div>
      <div class="box bg-gray-700 d-none d-sm-block">
          
   <div class="container-fluid bg-gray-700 p-2 player" id="player" style="width:100%;border-radius: 0px;" >
      <div class="container player-info"  id="player-info">
         <div class="player-details" id="player-details">
            <img src="images/book4.png" class="player-image" id="player-image" >
            <div class="col-auto player-names"  id="player-names">
               <p class=" card-title text-white" id="live-chapter"><strong>Splashed(art with me)</strong></p>
               <p class="card-subtitle text-gray-500" id="live-tutor">With Kashish Yadav</p>
            </div>
         </div>
         <center>
            <div class="controls" id="controls">
               <button class="" id="previous"> <i class="fas fa-step-backward player-button text-muted" id="previous-icon"></i></button>
               <button class="" id="play"><i class="fas fa-play player-button" style="color: white" id="play-icon"></i></button>
               <button class="" id="next"><i class="fas fa-step-forward player-button text-muted" id="forward-icon"></i></button>
            </div>
         </center>
         <div class=" progress-bars-and-all" id="progress-bars-and-all">
            <div class="duration-bars" id="duration-bars">
               <span class="text-white initial-time" id="initial-time">0:00</span>
               <Input class="range" id ="range" type="range" name="" value="0" min="0" max="1000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
               <span class="text-xs text-white final-time-duration" id="final-time-duration" >45:00</span>
            </div>
            <span class="volumes" id="volumes">
            <i class="fas fa-volume-off fa-2x" id="volume-icon" style="color:white"></i>
            <Input class="range1"  id ="range1" type="range" name="" value="0" min="0" max="1000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
            </span>
         </div>
      </div>
   </div>
      </div>
      
      
               
<div class="navs" id="navs">
       <div class="container-md p-2 nav-bar" id="nav-bar">

          <div class="row">
            <div class="col-auto">
          <div  class="full-navb p-2" id="full-navb">
            <div class="row upper-nav " id="upper-nav" style="max-width: 300px;">
              <div class="col-4">

                <img class="profile-pic" id="profile-pic" src="images/profile.png">
              </div>
              <div class="col-6">
                <h3 class="username text-dark" id="username">No User</h3>


              </div>

              <div class="col-2">
              
                <div class="dropdowns" id="dropdowns2" style="z-index:2">
                           <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="images/Notifications-4.png"></a>
                           <ul class="dropdown-menu bg-white rounded-md shadow-xl p-3"  id="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li class="dropwdown-item">
                                 <div class="notification-card" id="notification-card">
                                    <div class="notification-imd" id="notification-imd">
                                       <img src="images/profile.png" class="notification-image" id="notification-image">
                                    </div>
                                    <div class="notification-text">
                                       <p><span class="text-black card-text font-bold">Arka</span><span> has liked your reply </span></p>
                                       <p class="subtext font-bold text text-blue-500" id="subtext">2 hours ago</p>
                                    </div>
                                    <span class="notifier-dot text-blue-500 font-bolder text-5xl" id="notifier-dot">.</span>
                                 </div>
                              </li>
                              <li class="dropwdown-item">
                                 <div class="notification-card" id="notification-card">
                                    <div class="notification-imd" id="notification-imd">
                                       <img src="images/profile.png" class="notification-image" id="notification-image">
                                    </div>
                                    <div class="notification-text">
                                       <p><span class="text-black card-text font-bold">Sakishi</span><span> has replied you</span></p>
                                       <p class="subtext font-bold text text-muted" id="subtext">3 hours ago</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="dropwdown-item">
                                 <div class="notification-card" id="notification-card">
                                    <div class="notification-imd" id="notification-imd">
                                       <img src="images/profile.png" class="notification-image" id="notification-image">
                                    </div>
                                    <div class="notification-text">
                                       <p><span class="text-black card-text font-bold">New project</span><span> for you</span></p>
                                       <p class="subtext font-bold text text-blue-500" id="subtext">7   hours ago</p>
                                    </div>
                                    <span class="notifier-dot text-blue-500 font-bolder text-5xl" id="notifier-dot">.</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
              </div>
            </div>
            <div class="row middle">
              <div class="col">
                <h3 class="browse" id="browse">BROWSE</h3>
              </div>
            </div>

            <div class="list">
                   <div class='row linklist' id="linklist">
          
       <ol class="nav menulist" id="menulist" >

           <li>
            <div class="row item-row" id="item-row">
            <div class="col-auto customized-pill" id="link-home-pills">
              <div style="height: 18px;width:4px;background-color: #2980B9;position: relative;left: 13px;top:13px"></div></div>
              <a class="col-auto nav-link nav-button" href="#home"  nav="link-home-pills" id="pills-home-tabs"  data-bs-target="#pills-home" type="link" role="tab" aria-controls="pills-home" aria-selected="true" onclick="link_click(this.id);"><i class="fas fa-home" id="nav-icon"></i> Home</a>
        </div>
          </li>
            

           <li  >
            <div class="row"  id="item-row">
            <div class="col-auto customized-pill"  id="link-forum-pills"></div><a class="col-auto nav-link  nav-button"  style="color:black" nav="link-forum-pills"  href="#Forum"  id="pills-forum-tabs"  data-bs-target="#pills-forum" type="link" role="tab" aria-controls="pills-forum" aria-selected="false" onclick="link_click(this.id);" ><i class="fas fa-users" id="nav-icon" ></i><span id="discussion-forum-change">Forum</span> </a>
        </div>
          </li>


           <li >
            <div class="row gy-2" id="item-row" >
            <div class="col-auto customized-pill" id="link-classes-pills"></div>
            <a class="col-auto nav-link nav-button"  nav="link-classes-pills"  href="myclasses.php"  id="pills-classes-tabs"  style="color:black" data-bs-target="#pills-classes" type="link" role="tab" aria-controls="pills-classes" aria-selected="false" onclick="link_click(this.id);"><i class="fas fa-laptop" id="nav-icon"></i>My Classes</a>
        </div>
          </li>

           <li >
            <div class="row gy-2" id="item-row" >
            <div class="col-1 customized-pill" id="link-settings-pills"></div>
            <a class="col-auto nav-link nav-button"  nav="link-settings-pills"  href="settings.php" style="color:black" id="pills-settings-tabs"  type="link" role="tab" aria-controls="pills-settings" aria-selected="false" onclick="link_click(this.id);"><i class="fas fa-cog" id="nav-icon"></i>Settings</a>
        </div>
          </li>
    </ol>
  </div>
            </div>
          </div>
        </div>
       
        </div>
        </div>
   
</div>

      <div class="d-xs-block d-sm-none">
      

   <div class="logo-row" id="logo-row">
      <img src="images/logo.png" class="logos-top" id="logos-top" >
   </div>
   <div class="container-md rounded-xl home-container" id="home-container">
      <div class="notifications-msgs" id="notifications-msgs">
         <div class="box-01">
            <div class="row p-2" >
               <div class="col-auto loggedin bg-white font-semibold" id="loggedin">
                  <span class="text-green-500">You have successfully logged in, </span><span class="text-black"><?php echo logincheck()?getuser("name"):'Hello'?></span>
               </div>
            </div>
            <div class="row">
               <div class="col-8 msg-box" >
                  <div class="col d-flex flex-row-reverse">
                     <i class="fas fa-times-circle" id="close1" style="cursor: pointer;background"></i>
                  </div>
                  <div class="container-md bg-white notifications" id="notifications">
                     <dl>
                        <dt class=" p-1 text-blue-500 text-xl" id="message-heading">Hey your trainer this side,</dt>
                        <dd class="p-1 font-semibold">
                           <p class="msg-para">here is a change in plans.Instead going live,i will be personally coming to yuor class to teach you.And i will be bringing some materials for you to study and play with. this will be an amazing session,Really excited</p>
                        </dd>
                     </dl>
                  </div>
               </div>
            </div>
         </div>
         <img src="images/logo.png" id="logos" class="logos">
      </div>
      <div class="container-fluid  book-row"  id="book-row">
         <a href="bookpage.php"><img src="images/book1.png" class="shadow-2xl book1" id="book1" style="margin-right:10px"></a>
         <a href="bookpage.php" id="book-link"><img src="images/book1.png" class="shadow-2xl book1" id="book1" ></a>
         <a href="bookpage.php" id="book-link"><img src="images/book6.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php"id="book-link"><img src="images/book2.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php" id="book-link"><img src="images/book3.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php" id="book-link"><img src="images/book4.png" class="shadow-2xl book1" id="book1"></a>
         <a href="bookpage.php"id="book-link"><img src="images/book5.png" class="shadow-2xl book1" id="book1"></a>
      </div>
      <div class="second-heading">
         <h1 class="text-4xl second-heading-text" id="second-heading-text">lets start learning,<strong><?php echo logincheck()?getuser("name"):'Hello'?></strong></h1>
      </div>
      <div class="videos" id="videos">
         <div class="card rounded-xl outercard1" id="outercard1" >
            <div class="card-body">
               <h5 class="card-title"><strong>Your <span class="text-blue-500">Upcoming </span>class</strong></h5>
               <div class="row">
                  <div class="col">
                     <img class="cardimg" src="images/book1.png" id="cardimg">
                  </div>
                  <div class="col">
                     <div class="card border-light" id="innercard1">
                        <div class="card-body border-light mb-s">
                           <h5 class="card-title text-4xl level2" id="level2"><strong>Level 2</strong></h5>
                           <h6 class="card-subtitle mb-2 font-medium"><span>Designation-</span><span class="text-green-500">Chaiwn</span></h6>
                           <p class="card-text text-muted">
                           <table border="0">
                              <tr>
                                 <td class="text-muted">
                                    Monday-
                                 </td>
                                 <td class="text-muted"> 
                                    2:00pm-2:45pm
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-muted">
                                    Friday    -
                                 </td>
                                 <td class="text-muted"> 
                                    2:00pm-2:45pm
                                 </td>
                              </tr>
                           </table>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="uk-container-xsmall">
            <div class="card rounded-xl outercard2" id="outercard2" >
               <div class="card-body" >
                  <h5 class="card-title"><strong><span class="text-blue-500">Revise</span><span> Your  Previous Lessions</span></strong></h5>
                  <center><img class="rounded-xl video-thumbnail" src="images/Mask Group -13.png" id="video" /></center>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://kit.fontawesome.com/04851b3d87.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <script src="js/uikit.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="js/uikit-icons.min.js"></script>
   <div class="container-fluid bg-gray-700 p-2 player" id="player" >
      <div class=" player-info"  id="player-info">
         <div class="player-details" id="player-details">
            <img src="images/book4.png" class="player-image" id="player-image" >
            <div class="col-auto player-names"  id="player-names">
               <p class=" card-title text-white" id="live-chapter"><strong>Splashed(art with me)</strong></p>
               <p class="card-subtitle text-gray-300" id="live-tutor">With Kashish Yadav</p>
            </div>
         </div>
         <center>
            <div class="controls" id="controls">
               <button class="" id="previous"> <i class="fas fa-step-backward player-button text-muted" id="previous-icon"></i></button>
               <button class="" id="play"><i class="fas fa-play player-button" style="color: white" id="play-icon"></i></button>
               <button class="" id="next"><i class="fas fa-step-forward player-button text-muted" id="forward-icon"></i></button>
            </div>
         </center>
         <div class=" progress-bars-and-all" id="progress-bars-and-all">
            <div class="duration-bars" id="duration-bars">
               <span class="text-white initial-time" id="initial-time">0:00</span>
               <Input class="range" id ="range" type="range" name="" value="0" min="0" max="1000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
               <span class="text-xs text-white final-time-duration" id="final-time-duration" >45:00</span>
            </div>
            <span class="volumes" id="volumes">
            <i class="fas fa-volume-off fa-2x" id="volume-icon" style="color:white"></i>
            <Input class="range1"  id ="range1" type="range" name="" value="0" min="0" max="1000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
            </span>
         </div>
      </div>
   </div>
   </div>
   
   
   
   <script type="text/javascript">
      $("#close").click(function(){
        
      
        $(".msg-box").html('');
        $("#player").style('margin-top','100px;');
      });
      $("#close1").click(function(){
        
      
        $(".msg-box").html('');
        $("#player").style('margin-top','100px;');
      });
      
      $("#play").click(function(){
        $(this).html('<i class="fas fa-pause player-button" style="color: white"></i>');
        $
      });
      
      
        $(function(){
         if($(window).width()<767)
         {
          $("#discussion-forum-change").html('Forum');
         }
        });  
      
      
      function link_clicks(had){
          var nav=$('#'+had).attr('nav');
          
          if(nav=='link-home-pill')
          {
            $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
            $("#"+had).css('color','#2980B9');
            $('#pills-forum-tab').css('color','black');
            $('#pills-classes-tab').css('color','black');
            $('#pills-settings-tab').css('color','black');
            $('#link-classes-pill').html('');
            $('#link-forum-pill').html('');
            $('#link-settings-pill').html('');
          }
          if(nav=='link-forum-pill')
          { 
              $("#"+had).css('color','#2980B9');
            $('#pills-home-tab').css('color','black');
            $('#pills-classes-tab').css('color','black');
            $('#pills-settings-tab').css('color','black');
            $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
            $('#link-home-pill').html('');
            $('#link-classes-pill').html('');
            $('#link-settings-pill').html('');
          }
          if(nav=='link-classes-pill')
          {$("#"+had).css('color','#2980B9');
            $('#pills-home-tab').css('color','black');
            $('#pills-forum-tab').css('color','black');
             $('#pills-settings-tab').css('color','black');
            $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
            $('#link-home-pill').html('');
            $('#link-forum-pill').html('');
            $('#link-settings-pill').html('');
          }
          if(nav=='link-settings-pill')
          {$("#"+had).css('color','#2980B9');
            $('#pills-home-tab').css('color','black');
            $('#pills-forum-tab').css('color','black');
             $('#pills-classes-tab').css('color','black');
            $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
            $('#link-home-pill').html('');
            $('#link-forum-pill').html('');
            $('#link-classes-pill').html('');
          }
          
      
        }
        
        function link_click(had){
    var nav=$('#'+had).attr('nav');
   
    if(nav=='link-home-pills')
    {
      $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
      $("#"+had).css('color','#2980B9');
      $('#pills-forum-tabs').css('color','black');
      $('#pills-classes-tabs').css('color','black');
      $('#pills-settings-tabs').css('color','black');
      $('#link-classes-pills').html('');
      $('#link-forum-pills').html('');
      $('#link-settings-pills').html('');
    }
    if(nav=='link-forum-pills')
    {$("#"+had).css('color','#2980B9');
      $('#pills-home-tabs').css('color','black');
      $('#pills-classes-tabs').css('color','black');
      $('#pills-settings-tabs').css('color','black');
      $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
      $('#link-home-pills').html('');
      $('#link-classes-pills').html('');
      $('#link-settings-pills').html('');
    }
    if(nav=='link-classes-pills')
    {$("#"+had).css('color','#2980B9');
      $('#pills-home-tabs').css('color','black');
      $('#pills-forum-tabs').css('color','black');
       $('#pills-settings-tabs').css('color','black');
      $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
      $('#link-home-pills').html('');
      $('#link-forum-pills').html('');
      $('#link-settings-pills').html('');
    }
    if(nav=='link-settings-pills')
    {$("#"+had).css('color','#2980B9');
      $('#pills-home-tabs').css('color','black');
      $('#pills-forum-tabs').css('color','black');
       $('#pills-classes-tabs').css('color','black');
      $('#'+nav).html('<div style="height: 19px;width:5px;border-radius: 20px;background-color: #2980B9;position: relative;left: 10px;top:12px"></div>');
      $('#link-home-pills').html('');
      $('#link-forum-pills').html('');
      $('#link-classes-pills').html('');
    }
    

  }
      
   </script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/uikit.min.css" />
           <script src="https://kit.fontawesome.com/04851b3d87.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    <title>Signup</title>


    <style type="text/css">

      @media (max-width: 727.98px) { 
           
         
                #logo-row{
                height:60px;
                margin-bottom:20px;
                display:flex;
                flex-direction:row;
                justify-content:space-between;
            }
            
            #logo{
                position:relative;
                left:20px;
            }
            
            
            #fa-times{
                display:inline;
                position:relative;
                right:20px;
                top:20px;
            }
          #main-container{
            height: 100%;
           
            position: relative;
           
            top: 0px;
          }

              #inner-box{
                 display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 100%;
        width:100%;

   
              }
              
              #google-logo{
                  height:14px;
                  position:relative;
                  top:16px;
                  left:38px;
                  margin-right:0px;
              } 
                #start-here{
                  font-size: 80%;
                  position: relative;
                  left: 20%;
                }
                #email-field{
                  width: 100%;
                  font-size: 80%;
                }
                 #email-again-field{
                    display:none;
                  width: 100%;
                  font-size: 80%;
                }
 
                 #password-field{
                  width: 100%;
                  font-size: 80%;
                }
              
                #password-again-field{
                    display:none;
                    
                    
                    height:auto;
                  width: 100%;
                  font-size: 80%;
                }

                #signup-box{
                  position: relative;
                  top: 20%
                  background-color: red
                }
                #form{
                  height:   50%;
                
                }
                #google-facebook-login{
                  position: relative;
                  bottom: 85%;
                  height: 80px;
                  
                }

                #signup{
                    width:80%;
                }
                hr{
                  visibility: hidden;
                }
    #google-button{
            font-size:  80%;
            height:50px;
            width:  100%;
           margin-left:auto;
            margin-right: auto;
          }
          
          #google-inner{
              position:relative;
              bottom:10px;
          }
          #facebook-button{
            font-size:  80%;
            width:  100%;
            margin-left:auto;
            margin-right: auto;
          }              
              

          #signup-text{
            font-size:30px;
          }
          #already-acc{
            font-size: 80%;
          }
          
    #logos{
        position:relative;
        left:20px;
    }
        #form-bottom{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
        }
          #bottomsup{
            
            font-size: 80%;
            width: 50%;
          }
          #remember-me{
              font-size:80%;
          }
          
      }
      .google-button{
  width: 100%;
  padding: 15px;
  height:50px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  
  font-size: 17px;
  line-height: 20px;
  background-color: white;

  text-decoration: none; /* remove underline from anchors */
}
 .facebook-button{
    position: relative;
    top: 20px
  width: 100%;
  padding: 15px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  background-color: #3B589C;

  text-decoration: none; /* remove underline from anchors */
}
.fa-facebook-square {
  color: white;
  background-image: linear-gradient( to bottom, transparent 20%, #3B589C 20%, #3B589C 93%, transparent 93% );
  background-size: 55%;
  background-position: 70% 0;
  background-repeat: no-repeat;

}
      .email-field {
  position: relative;

  width: 250px;
  height: auto;
  line-height: 14px;
}
.email-again-field {
  position: relative;

  width: auto;
  height: auto;
  line-height: 14px;
}
.password-again-field{
  position: relative;

  width: 250px;
  height: auto;
  line-height: 14px;
}
.password-field{
  position: relative;

  width: 250px;
  height: auto;
  line-height: 14px;
}
      label {
  position: absolute;
  top: 10px;
  left: 0;
  width: 100%;
  color: black;
  transition: 0.2s all;
  cursor: text;
}
input {
  width: 100%;
  border: 0;
  outline: 0;
  padding: 0.5rem 0;
  border-bottom: 2px solid #d3d3d3;
  box-shadow: none;
  color: #111;
}
input:invalid {
  outline: 0;
  // color: #ff2300;
  //   border-color: #;
}ff2300
input:focus,
input:valid {
  border-color: skyblue;
}
input:focus~label,
input:valid~label {
  font-size: 14px;
  top: -10px;
  color: skyblue;
}
      
      .main-container{
        min-height: 650px;
        
        display: flex;
        justify-content: space-around;
        position: relative;
        
        top: 00px;
      }

      .signup{
       height: auto;
        min-width: 60%;
       
      }
      .signup-text{
        font-size: 60px
      }
      a{
        text-decoration: none;
      }
      a:hover{
        text-decoration: none;
      }
      .inner-box{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 50%;
        }
      #horizontal-rule{
        width: 2px;
        height: 100%;
        color:black;
      }
      .signup-box{
        
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 100%;
     
       
      }
     .col-divider{
      visibility: hidden;
      width:0px;
      font-size: 0px;
     }
      .start-here{
        border-radius: 0px;
        width: 60%
      }
      .google-facebook-login{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .fa-google {
  background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  -webkit-text-fill-color: transparent;
} 
.bottomsup{
  position: absolute;
  bottom: 0px;
  width: 200px;
  float: center;
  text-align: center;
}
.form{
display:  flex; 
flex-direction:   column;
justify-content: space-around;

height:   100%;
}
.bottom-text{
  font-size: 90%;
}
.logo-row{
   display:none;

}
.logo{
    height:100%;
}

.google-logo{
    height:17px;
    position:relative;
    top:19px;
    margin-right:5px;
    width:auto;
}
.form-bottom{
    width:100%;
    font-size:95%;
    display:flex;
    flex-direction:row;
    justify-content:space-between;
}
.fa-times{
    display:none;
}

.google-inner{
    position:relative;
    bottom:20px;
}
  
    </style>
  </head>
  <body>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div class="logo-row" id="logo-row">
    
    
    <img src="images/logo.png" class="logo" id="logo">
    <a href="index.php">    <i class="fas fa-times fa-2x" id="fa-times"></i></a>
</div>
    <div class="container-md main-container" id="main-container">

        <div class="signup" id="signup">
          <center><h1 class="signup-text" id="signup-text"><strong>Sign up</strong></h1>
              <p class="already-acc" id="already-acc">Already have an account?<a href="Login.html"> Login</a></p>

          </center>
          <div class="inner-box" id="inner-box">
            <div class="signup-box d-none d-sm-block" id="signup-box">
                  <form class="form" id="form" action="signupscript.php" method="post">
              <div class="email-field" id="email-field">
                <input type="text" class="email" id="email" name="email" required />
                <label for="email">Email</label>
              </div>

              <div class="email-again-field" id="email-again-field">
                <input type="text" class="email-again" id="email-again" required />
                <label for="email-again">Type your email again</label>
              </div>

              <div class="password-field" id="password-field">
                <input type="password" class="password" id="password" name="psw" required />
                <label for="password-field">Password</label>
              </div>

              <div class="password-again-field" id="password-again-field">
                <input type="password" class="password-again" id="password-again" required />
                <label for="password-again-field">Type your password again</label>
              </div>

              <button type="submit" class="btn btn-outline-primary shadow-md start-here" id="start-here">Start here</button>
              <div class="form-bottom" id="form-bottom">
                  <div class="form-check" id="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                     <lable class="form-check-label remember-me" id="remember-me" for="flexCheckChecked"> remember me</lable>
                  </div>
                    
                    <a href="#Forgotpassword" class="forgotpassword" id="forgotpassword">Forgot Password?</a>
              </div>
              </form>
            </div>
            
            <div class="signup-box d-xs-block d-sm-none" id="signup-box">
                  <form class="form" id="form" action="signupscript.php" method="post">
              <div class="email-field" id="email-field">
                <input type="text" class="email" id="email" name="email" required />
                <label for="email">Email</label>
              </div>

              <div class="password-field" id="password-field">
                <input type="password" class="password" id="password" name="psw" required />
                <label for="password-field">Password</label>
              </div>

              <button type="submit" class="btn btn-outline-primary shadow-md start-here" id="start-here">Start here</button>
              <div class="form-bottom" id="form-bottom">
                  <div class="form-check" id="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                     <lable class="form-check-label remember-me" id="remember-me" for="flexCheckChecked"> remember me</lable>
                  </div>
                    
                    <a href="#Forgotpassword" class="forgotpassword" id="forgotpassword">Forgot Password?</a>
              </div>
              </form>
            </div>
            <div class="divider" id="divider">
              <hr class="horizontal-rule" id="horizontal-rule">
            </div>

            <div class="google-facebook-login" id="google-facebook-login">


               <a href="#" class="shadow-md  google-button btn" id="google-button">
                   <div class="google-inner" id="google-inner">
                    <b><img src="images/google_logo.png" class="google-logo" id="google-logo"></b><b>Continue with Google</b>
                    </div>
                </a>

                  <a href="#" class="shadow-md facebook-button btn" id="facebook-button">
                  <i class="fa fa-facebook-square fa-fw fa-1x"></i><b class="text-white"> Continue with Facebook</b>
                </a>
            </div>

          </div>


           

        </div>
        
         <div class="bottomsup" id="bottomsup">
            <p class="bottom-text" id="bottom-text">By signing up,you agree to our <span class="text-blue-500">Terms of Use</span>  and to recieve Vind emails & updates  and acknoledge that you read our <span class="text-blue-500">Privacy Policy</span></p>
          </div>
    
    </div>
  
  
  </body>
</html>
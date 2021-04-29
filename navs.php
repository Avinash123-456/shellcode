
 	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/uikit.min.css" />
      
     <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="navstyle.css">
      <script src="https://kit.fontawesome.com/04851b3d87.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     <script src="js/uikit.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          
          




  
        <div class="container-md p-2 nav-bar" id="nav-bar" >

          <div class="row">
            <div class="col-auto">
          <div  class="full-navb" id="full-navb">
            <div class="row upper-nav" id="upper-nav" style="max-width: 300px;">
              <div class="col-4">

                <img class="profile-pic" src="images/profile.png">
              </div>
              <div class="col-6">
                <h2 class="username text-dark" id="username">Anirudh</h2>


              </div>

              <div class="col-2">
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
            <div class="row middle">
              <div class="col">
                <h2 id="browse">BROWSE</h2>
              </div>
            </div>

            <div class="list">
                   <div class='row linklist' id="linklist">
          
       <ol class="nav menulist" id="menulist" >

           <li>
            <div class="row item-row">
            <div class="col-auto customized-pill" id="link-home-pill">
              <div style="height: 18px;width:4px;background-color: #2980B9;position: relative;left: 13px;top:13px"></div></div>
              <button class="col-auto nav-link nav-button" href="#home"  nav="link-home-pill" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="link_click(this.id);"><i class="fas fa-home" id="nav-icon"></i> Home</button>
        </div>
          </li>
           

           <li  >
            <div class="row" >
            <div class="col-auto customized-pill" id="link-forum-pill"></div><button class="col-auto nav-link nav-button" nav="link-forum-pill"  href="#Forum"  id="pills-forum-tab" data-bs-toggle="pill" data-bs-target="#pills-forum" type="button" role="tab" aria-controls="pills-forum" aria-selected="false" onclick="link_click(this.id);"><i class="fas fa-users" id="nav-icon" ></i> Discussion Forum</button>
        </div>
          </li>


           <li >
            <div class="row gy-2" >
            <div class="col-auto customized-pill" id="link-classes-pill"></div><button class="col-auto nav-link nav-button"  nav="link-classes-pill"  href="#myclasses"  id="pills-classes-tab" data-bs-toggle="pill" data-bs-target="#pills-classes" type="button" role="tab" aria-controls="pills-classes" aria-selected="false" onclick="link_click(this.id);"><i class="fas fa-laptop" id="nav-icon"></i> My Classes</button>
        </div>
          </li>

           <li >
            <div class="row gy-2" >
            <div class="col-1 customized-pill" id="link-settings-pill"></div><button class="col-auto nav-link nav-button"  nav="link-settings-pill"  href="#settings.html" id="pills-settings-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-settings" aria-selected="false" onclick="link_click(this.id);"><i class="fas fa-cog" id="nav-icon"></i>Settings</button>
        </div>
          </li>
    </ol>
  </div>
            </div>
          </div>
        </div>
       
        </div>
        </div>
   
   
              
    
    <script type="text/javascript">
      

  $(function(){
   if($(window).width()<767)
   {
    $('.navi').html(bottom);
   }
  });  

window.addEventListener('resize', function(event){
  if($(window).width()<860)
   {
    $('.navi').html(bottom);
   }
   else
   {
    $('.navi').html(normal_nav);
   }
});


function link_click(had){
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
    {$("#"+had).css('color','#2980B9');
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






  
</script>


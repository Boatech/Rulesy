

 <div class="header  dark:bg-gray-900">
    <?php include './paritals/home_includes/online_detector.php'; ?>
      <div class="header__left sidebar dark:bg-gray-900">
        <img class="border-0" 
          src="./assets/img/images/letter-r(1).png"
          alt=""
        />
        
      </div>

      <div class="header__middle dark:bg-gray-900">
        <div class="header__option active">
          <a href="javascript:void(0)">
          <img class="border-0 img" src="./assets/img/images/home(3).png" width="30px" height="30px">
        </a>
        </div>
        
        <div class="header__option">
          <a href="javascript:void(0)">
         <img class="border-0" src="./assets/img/images/vr.png" width="30px" height="30px">
       </a>
        </div>
        <div class="header__option">
          <a href="javascript:void(0)">
         <img class="border-0" src="./assets/img/images/page-views.png" width="30px" height="30px">
       </a>

        </div>
        <div class="header__option">
          <a href="javascript:void(0)">
          <img class="border-0" src="./assets/img/images/cyborg.png" width="30px" height="30px">
        </a>
        </div>
        <div class="header__option">
          <a href="javascript:void(0)">
          <img class="border-0" src="./assets/img/images/teamwork.png" width="30px" height="30px">
        </a>
        </div>
        <div class="header__option">
          <a href="javascript:void(0)">
         <img class="border-0" src="./assets/img/images/video-camera(1).png" width="30px" height="30px">
       </a>
        </div>

        <div class="header__option">
          <a href="javascript:void(0)">
          <img class="border-0" src="./assets/img/images/notification(2).png" width="30px" height="30px">
        </a>
        </div>
      </div>

      <div class="header__right dark:bg-gray-900">
        <div class="header__info">

          <?php include './paritals/home_includes/header_info.php'; ?>
        	<div class="nav-user-icon online">
        	<button id="dropdownButton" data-dropdown-toggle="dropdown"  data-tooltip-target="tooltip-light"  data-tooltip-style="light" class="outline-0">	
          <img
            class="user__avatar border-0"
            src="http://127.0.0.1/phaxad/friend/profile_images/<?php echo $user_data->user_image; ?>"
            alt="<?php echo $user_data->username;?>"
          />
          </button>
          <div id="tooltip-light" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
            navigate
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <div id="dropdown" class="hidden z-10 w-44 text-base list-none border-solid bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
              <ul class="py-1" aria-labelledby="dropdownButton">
                <li>
                  <a href="./profile" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Your Profile</a>
                </li>
                <li>
                  <a href="./profile" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Your Wallet</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                </li>
                <li>

                  <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                    
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                  </button>
                </li>
                <li>
                  <a href="logout" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a>
                </li>
              </ul>
            </div>
          </div>


          <div class="nav-user-icon online">
          <button id="friends" data-dropdown-toggle="dropdown"> 
          <img
            class="user__avatar border-0"
            src="http://127.0.0.1/phaxad/rulsey/public/assets/img/images/notification(2).png"
            alt="<?php echo $user_data->username;?>"
          />
          </button>
          <div id="tooltip" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
            friend requests
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          
          <div id="dropdown" class="hidden z-10 w-44 text-base list-none border-solid bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
              <ul class="py-1" aria-labelledby="friends">
                  <?php 
                  if($get_req_num > 0){
                    foreach($get_all_req_sender as $row){
                      echo '<li>
                             <a href="user_profile.php?id='.$row->sender.'">'.$row->username.'</a> sent you a friend request
                            </li>
                      ';
                    }
                  }
                  else{
                    echo '<li>You have no friend requests!</li>';
                  }
                  ?>
              </ul>
            </div>
          </div>
      
  
  

          
        </div>&nbsp;&nbsp;
        
          
          
       <a href="javascript:void(0)"> <img src="./assets/img/images/link(1).png" width="30px" height="30px">&nbsp;&nbsp;</a>&nbsp;&nbsp;

        <div class="open-menu">
          <div class="forbars">  <a href="javascript:void(0)"><img class="border-0" src="./assets/img/images/menu.png" width="20px" height="20px"></a>
          </div>
       </div>
      </div>
    </div>
    

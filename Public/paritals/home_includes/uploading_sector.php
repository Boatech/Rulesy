<div class="messageSender  dark:bg-gray-700">
          <div class="messageSender__top">
            <img
              class="user__avatar"
              src="http://127.0.0.1/phaxad/friend/profile_images/<?php echo $user_data->user_image; ?>"
              alt=""
            />
            <form>
              <a href="./posts" class="messageSender__input text-center text-grey-500 dark:text-white">What's on your mind <?php echo strtolower($user_data->username);?>
              </a>
            </form>
          </div>

          <div class="messageSender__bottom">
          	<div class="messageSender__option">
               <img src="./assets/img/images/video-camera.png" width="20px" height="20px">
              
            </div>
            <div class="messageSender__option">
               <img src="./assets/img/images/play.png" width="20px" height="20px">
              
            </div>

            <div class="messageSender__option">
             <img src="./assets/img/images/picture.png" width="20px" height="20px">
              
            </div>

            <div class="messageSender__option">
              <img src="./assets/img/images/more(1).png" width="20px" height="20px">
              
            </div>
          </div>
</div>

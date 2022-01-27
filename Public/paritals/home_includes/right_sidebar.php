<div class="right-sidebar">
				<div class="sidebar-title">
					<h4><span><img src="./assets/img/images/apps.png" width="10px" height="10px"> Sticky Notes </span></h4>
					<a href="javascript:void(0)"><i class="fas fa-plus" style="color: purple"></i></a>
				</div>
				<div class="event">
					<div class="left-event">
						<img src="./assets/img/images/studio-set.png" width="100%">
					</div>
					<div class="right-event">
						<h4>Studio</h4>
						<p>
							<img src="./assets/img/images/thinking.png" width="20px" height="20px">
							Manage your Studios 
						</p>
						<a href="javascript:void(0)" class="btn">See more</a>
					</div>
				</div>
				<div class="event">
					<div class="left-event">
						<img src="./assets/img/images/tear-off-ads.png" width="100%">
					</div>
					<div class="right-event">
						<h4>Manage ads settings</h4>
						<p>
							<img src="" width="20px" height="2px">
							What to do about ads and why you..
						</p>
						<a href="javascript:void(0)" class="btn">see more</a>
					</div>
				</div>

				<div class="sidebar-title">
					<h4>Advertisement</h4>
					<a href="javascript:void(0)" onclick="document.getElementById('removeAds').style.display ='none';"><i class="fas fa-times"></i></a>
				</div>
				<img src="./assets/img/images/giphy.gif" class="sidebar-ads" id="removeAds">
				
				<div class="ads"><a href="javascript:void(0)">
					<img src="./assets/img/images/giphy_004.gif" class="sidebar-ads " height="">
				</a>
				
			</div>
	    <style type="text/css">
	    	.badge{
	    		background: #882dee;
                display: inline-block;
                padding:0 5px;
                margin-left: 3px;
                color: #000;    
                border-radius: 20px;
            }
	    	
	    </style>
        <div class="all_users">
          <div class="sidebar-title dark:bg-gray-700 dark:text-white">
				   	<p class="text-white"><span class="font-bold text-purple-700 underline">Your Friends</span> <span class="badge" style="color: #fff"><?php echo $get_frnd_num;?></span></p>
				  </div>
            <div class="usersWrapper dark:bg-gray-700 dark:text-white">
                <?php
                //a msg icon should be placed by each user and also an eye icon which takes one to the friend's profile..
                //we only display friends up to 30
                if($get_frnd_num > 0 && $get_frnd_num < 30){
                    foreach($get_all_friends as $row){
                        echo '<div class="online-list">
                                <div class="online"><a href="user_profile.php?id='.$row->id.'" class="see_profileBtn"><img src="http://127.0.0.1/phaxad/friend/profile_images/'.$row->user_image.'" alt="'.$row->username.'"/></a></div>
                                <div class="user_info"><span><a href="user_profile.php?id='.$row->id.'" class="see_profileBtn">'.$row->username.'</a></span>
                                </div>
                            </div>';
                    }
                }
                else{
                    echo '<h4>You have no friends!</h4>';
                }
                ?>

            

            </div>
        </div>
				
				
			</div>


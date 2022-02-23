<?php include 'path.php';?>
<?php include 'assets/php/timestamp.construct.php'; ?>
<?php //include './assets/php/gzip.compress.keep-alive.php'; ?>
<?php include ROOT_PATH .  '/assets/php/backend.construct.php'; ?>
<?php include ROOT_PATH . '/assets/php/redirect.php';?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html  :class="{ 'theme-dark': dark }" x-data="data()" xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" loc="en">
  <head>
    <?php include ROOT_PATH . '/paritals/includes_meta/meta-for-index.php'; ?>
    <script>
      <?php include ROOT_PATH .  '/assets/js/darkmode.init.rulsey.js'; ?>
    </script>
  </head>
  <body onView="request(mainstream::props('https://www.rulseyprojects.com/cached-version?v=1.0')">
 
<?php include ROOT_PATH .  '/paritals/home_includes/header.php'; ?>
<style type="text/css">@media(max-width: 1188px){
  .sidebar{
    display: none;
  }
  .header__left, .header__right{
    display: none;
  }
}
</style>

    <!-- main body starts -->
    <div class="main__body dark:bg-gray-900">
      <!-- sidebar starts -->
      
      <div class="sidebar dark:bg-gray-900 dark:text-gray-200">
        
              
        <div class="sidebarRow">
          <a href="./profile"><img src="http://127.0.0.1/phaxad/friend/profile_images/<?php echo $user_data->user_image; ?>" width="40px" height="40px" class="border-0 rounded-full"></a>
          <a href= "<?php echo BASE_URL . '/profile'; ?>">
          <p> &nbsp;<?php echo $user_data->username;?></p>
        </a>
        

        </div>
        <div class="side-bar">

        <?php include ROOT_PATH .  '/paritals/home_includes/sidebar_rows.php'; ?>
        </div>
      </div>

 
      <div class="feed">
        <?php include ROOT_PATH .  '/paritals/home_includes/stories_section.php'; ?>
        <!--   starts -->
        <?php include ROOT_PATH .  '/paritals/home_includes/uploading_sector.php'; ?>
        <!--   ends -->
        <?php include ROOT_PATH .  '/paritals/home_includes/posts_sector.php'; ?>
      </div>

      <!-- feed ends -->
     
      <div style="flex: 0.33" class="widgets ">
        <div class="white pad-top-five ">
	        <?php include ROOT_PATH .  '/paritals/home_includes/right_sidebar.php'; ?>
		    </div>
     </div>

    </div>
   <script type="text/javascript" async defer src="/dark_mode.js"></script>

<?php include ROOT_PATH .  '/paritals/home_includes/end_footer.php'; ?>



<script src="./assets/js/darkmode.rulsey.js"></script>
   
</body>
</html>

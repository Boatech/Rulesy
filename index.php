
<?php 
// include 'top_cache.php'; 
?>
<!-- importation of boiler_plate(type:html, includes(css,js,olsen,pocket)) -->
<!-- render rusley indept of 123.44442.324554.t56456343 -->

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="rulsey-overleached">
  <head>
  	 <title>Rulsey</title>
     <link rel="stylesheet" type="text/css" href="./blog/assets/vendor/bootstrap-icons/bootstrap-icons.css">
     <style type="text/css">
       <?php
        include './blog/assets/vendor/bootstrap/css/bootstrap.min.css'; 
        ?>
      a, .forprofile{
        text-decoration: none;
        color: inherit
      }
      .fortheprofile:hover{
        /*padding-right: 3rem*/;
        outline: none;
      }
      a:hover,.forprofile:hover{
        text-decoration: none;
        color: inherit;
      }
      .nav-item{
        color: inherit;
      }
      .forprofile:visited{
        color: inherit;
      }
      .profile{
        color: inherit;
        width: 130%;
      }
     </style>
<!-- none of your buisness -->
      <!--...-->
      <!-- none of your buisness -->


  	<!-- importation of meta (::balletstrean) -->
    <?php   include 'includes/meta_data.php'; ?>
   <!--end of importation in  source code -->

  </head>

  <body data-color-mode="auto" data-light-theme="light" data-dark-theme="dark">

 
<?php include 'includes/header.php'; ?>
<style type="text/css">
      <?php include 'css/styles.css'; ?>
    </style>

    <!-- main body starts -->
    <div class="main__body">
      <!-- sidebar starts -->
      <div class="sidebar">
        <div class="sidebarRow">
          <div class="nav-item dropdown  fortheprofile">

          <a class="nav-link nav-profile d-flex align-items-center  forprofile" href="javascript:void(0)" data-bs-toggle="dropdown"><img src="testimages/profile-3.jpg" alt="Profile" class="rounded-circle user__avatar">
            <span class="d-none d-md-block ps-2">Nnamchi Israel</span>
          </a>

          <ul class="dropdown-menu  profile">
            <li class="dropdown-header">
              <span><b class="bold tc">@israel</b></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Post Story</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
           <hr class="dropdown-divider">
        </div>
          <p><!-- include('sense.ols') --></p>
        </div>

        <?php include 'includes/sidebar_rows.php'; ?>

      </div>
      <div class="feed">
        <?php include 'includes/stories_section.php'; ?>
        <!--   starts -->
        <?php include 'includes/uploading_sector.php'; ?>
        <!--   ends -->

       <?php include 'includes/posts_sector.php'; ?>
      </div>
      <!-- feed ends -->

      <div style="flex: 0.33" class="widgets">
        <div class="white pad-top-five">
        



	<?php include 'includes/right_sidebar.php'; ?>
		</div>
  </div>
 
  
</div>
<!-- if render == 200: -->
   <!-- js dark mode type = "asinfacnsi7ryv8w45y78riu" -->
   <script type="text/javascript" async defer src="js/dark_mode.js"></script>
<!-- js dark mode type = "asinfacnsi7ryv8w45y78riu" ends -->

<?php include 'includes/sidebars_specials.php'; ?>
<script type="text/javascript" src="js/online_detector.js"></script>

<?php include 'includes/end_footer.php'; ?>

  <script src="./blog/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="./blog/assets/vendor/php-email-form/validate.js"></script>
  <script src="./blog/assets/vendor/quill/quill.min.js"></script>
  <script src="./blog/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="./blog/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="./blog/assets/vendor/chart.js/chart.min.js"></script>
  <script src="./blog/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="./blog/assets/vendor/echarts/echarts.min.js"></script>

<?php 
// include 'bottom_cache.php'; ?>    
</body>
</html>

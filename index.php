<?php 
include('admin/class/function.php');
    $obj = new adminBlog();

    
?>


<?php include('includes/header.php'); ?>
  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

      <!-- Left Links Column -->
      <?php include('includes/side_bar.php'); ?>

      <!-- Left Links Column -->
      <?php //include('includes/dashboard_view.php'); ?>

      <!-- Right Content Column  -->

      <?php 



      if(isset($view)){
        if($view=="dashboard"){
          include('includes/dashboard_view.php');
        }elseif($view=="donation"){
          include("includes/donation_view.php");
      }elseif($view=="total_donation"){
          include("includes/total_donation_view.php");
      }elseif($view=="contact"){
          include("includes/contact_view.php");
      }else{
        include("includes/dashboard_view.php");
        
      }

      }
    
    
     ?>
      

    </div>
  </main>

  <?php include('includes/footer.php'); ?>
 

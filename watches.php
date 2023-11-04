
<html>
    <head>
        <title>Image Gallery</title>
        <link rel="stylesheet" href="gal_style.css">
        <style>        
      
   </style>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script> -->
<!-- <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/> -->
<!-- script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- zoom in and zoom out -->
<script>
   
</script>
<!-- scrolling functions -->


</head>
    <body>
<header><?php  include('new_header.php'); ?></header>

<!-- <div class="heading_container">
    <div class="back_button">HOME</div>
    <div class="photo_gal">PHOTO GALLERY</div>
    <div class="home_button">BACK</div>
  </div> -->
      
       <main>
       <div class="button" >
		<a href="../Photo Gallery/photo_gallery.php">Home</a>
	</div>
            <?php
            $dir = glob('inside/watches/{*.jpg,*.jpeg,*.png,*.JPG}',GLOB_BRACE);
            foreach($dir as $value){

              ?>
              <div class="thumbnails">

              <a href="<?php echo $value; ?>" data-fancybox="inside/watches" data-caption="<?php echo $value; ?>">
              <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>">
</a>
</div>
              
              <?php

            }
            ?>
            
       
      </main>
       
      <footer><?php  include('new_footer.php'); ?></footer>
        </body>
</html>

  <section class="works">
      <div class="work-show flex-container">

<?php
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = '../app/img/works/';
  if (is_dir($dir)){

   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){

      // Thumbnail image path
      $thumbnail_path = "../app/img/works/thumbs/".$file;

      // Image path
      $image_path = "../app/img/works/".$file;

      $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&
         in_array($thumbnail_ext,$image_extensions) &&
         in_array($image_ext,$image_extensions)){
         ?>

       <!-- Image -->
       <div class="onework">
            <a href="<?php echo $image_path; ?>"><img src="<?php echo $thumbnail_path; ?>" alt="<?php echo $file; ?>">
            <div class="pe7icon">
               <div class="akis"><i class="pe-7s-look"></i></div>
             </div></a>
         </div>

       <?php
       $count++;
      }
     }
    }
    closedir($dh);
   }
  }
 ?>

      </div>
      <div>
         <button  class="btn bigbtn more">Rodyti daugiau darbų</button>
         <button  class="btn bigbtn less">Rodyti mažiau darbų</button>
      </div>
   </section>

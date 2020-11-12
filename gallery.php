<?php 
  if(!function_exists('galleryS')){

    function galleryS(){
      $url = "#modal1";
      $dir = 'img';
      $images = scandir($dir);

      for ($i = 0; $i < count($images); $i++) {
        if ($images[$i] != '.' && $images[$i] != '..') {
          echo '<a href="' . $url . '" class="open_modal"><img src=' . $dir . '/' . $images[$i] . ' id='.$images[$i].'></a>';
        }
      }
    }
    $sGallery = galleryS();
  }
?>
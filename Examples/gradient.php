<?php
  include '../D3Image.php';
  $image=new D3Image('file:images/image.png');
  echo '<pre>'; 
  $newColor='#AC0000';
                         
  while ($newColor=$image->rgb2Hex($image->brightColor($newColor,1))){
       echo  '<div style="background:#'.$newColor.'">#'.$newColor.'</div>';
  }

?>
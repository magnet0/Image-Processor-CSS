<?php
  include '../D3Image.php';
  
// Creating Small Signature Image
  $image=new D3Image('width:150px;height:30px;background:#000;');
  $image->Write('D3Image v1.0','font-size:12px;color:#FFFFFF;align:center');
  
  
  $bg=new D3Image('width:500px;height:500px;background:#fff');
  $bg->BackGroundImage('../images/mypic.jpg','repeat:yx;width:50;height:50;top:0px;left:0px;padding:3px;');
  $bg->Add($image,'align:bottom right;opacity:60'); // Signature Adding to right bottom of image
  $bg->SaveToFile('../background.jpg');
  $bg->Show();
?>
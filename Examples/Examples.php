<?php
  include '../D3Image.php';
  
  $image=new D3Image('width:150px;height:30px;background:#000;');
  $image->Write('D3Image v1.0','font-size:12px;color:#FFFFFF;align:center');
  $image->SaveToFile('../images/example1.png');
  //$image->Show();
  
  /**
  * WaterMark Example
  */
  
   $myImage=new D3Image('file:../images/mypic.jpg');
   $myImage->Add($image,'align:bottom right;opacity:60;');
   $myImage->SaveToFile('../images/mypic_watermarked.jpg');
   // $myImage->Show();
   
   $myImage->Destroy();
   $image->Destroy();
   
   
   /**
   * Mix 2 Colors
   * Ex: dark green and Yellow 
   */
   
   $newMix=new D3Image('background:#FFFFFF;width:300px;height:30px');
   $newMix->FillAll($newMix->MixColors('#FFFF00','#339966')); // it will fill by sweet green (:
   $newMix->Write('Mixed #FFFF00 & #339966 = '.$newMix->MixColors('#FFFF00','#339966'),'align:center;font-size:2;color:#000');
   $newMix->Show();     // OutPut to Browser
?>


<?php
    include 'D3Image.php';
   $RgbStar=new D3Image('width:400;height:400;background:#FFFFFF');
   
   
   $RgbStar->DrawLine('#000','15',array(194,51),array(352,276));
   $RgbStar->DrawLine('#000','15',array(352,276),array(45,276));
   $RgbStar->DrawLine('#000','15',array(45,276),array(194,51));
   $RgbStar->DrawLine('#000','10',array(352,126),array(194,355));
   $RgbStar->DrawLine('#000','10',array(194,355),array(45,126));
   $RgbStar->DrawLine('#000','10',array(45,126),array(352,126));

   
   
   $RgbStar->DrawCircle('width:90px;color:red;left:194;top:51;');        // RED Cicrle
   $RgbStar->DrawCircle('width:90px;color:yellow;left:352;top:126;');        // Yelow Cicrle
   $RgbStar->DrawCircle('width:90px;color:cyan;left:194;top:355;');        // Cyan Cicrle
   $RgbStar->DrawCircle('width:90px;color:green;left:352;top:276;');        // Green Cicrle
   $RgbStar->DrawCircle('width:90px;color:blue;left:45;top:276;');        // Blue Cicrle
   $RgbStar->DrawCircle('width:90px;color:magenta;left:45;top:126;');        // Magenta Cicrle
   
   $RgbStar->Write('RED','font-size:12;left:185;top:44;');
   $RgbStar->Write('YELLOW','font-size:12;left:326;top:120;');
   $RgbStar->Write('GREEN','font-size:12;left:326;top:270;');
   $RgbStar->Write('CYAN','font-size:12;left:182;top:349;');
   $RgbStar->Write('BLUE','font-size:12;left:28;top:272;');
   $RgbStar->Write('MAGENTA','font-size:12;left:20;top:122;');
   
   $RgbStar->DrawRectangle('width:150;height:25;align:center;color:#4e0066;');
   $RgbStar->Write('D3Image v1.0','color:#FFF;font-size:12;align:center');
                      
   $RgbStar->SaveToFile('rgbStar.png');
   $RgbStar->Show();
?>
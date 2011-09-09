<?php
    $mictime=explode(' ',microtime());
    $StartTime=(double)$mictime[0]+(double)$mictime[1];
    $createCount=0;
    echo '<pre>';
    
    
    
    function getTime(){
        global $StartTime;
         $micTime=explode(' ',microtime());
         $endTime=(double)$micTime[0]+(double)$micTime[1];
         echo  round($endTime-$StartTime,3);    
    }
    
    function D3OnCreate(){
        global $createCount;
        $createCount++;
    }
    
    
    function writeln($msg){
        echo getTime().' -> '.$msg.memory_get_usage()."\n";
    }
    writeln('Before : ');
    include 'D3Image.php';
    $image1=new D3Image('background:#DDD;width:500;height:500');
    writeln('new D3 Image1 Created : ');
    $image1->DupliCateOnUseImage=false;
    $image2=new D3Image('background:#DDD;width:42;height:20;');
    writeln('new D3Image2 Created :');
    $image2->DrawRectangle('align:right;width:20;height:20px;color:#FC0000');
    writeln('Red Rectangle Drawed on image2 align right: ');
    $image2->DrawRectangle('align:left;width:20;height:20px;color:#FFF');
    writeln('White Rectangle Drawed on image2 align left: ');
    $image1->BackGroundImage($image2,'width:42;height:20;repeat:x;padding:2px;repeat-count:4');
    writeln('image2 resized to 42 x 20  and added to image1 repeated 4 count Direction : X: ');
    $image1->BackGroundImage($image2,'width:42;height:20;repeat:y;padding:2px');  
    writeln('image2 resized to 42 x 20  and added to image1 repeated for fill  Direction : Y: ');  
    $image1->BackGroundImage($image2,'width:42;height:20;repeat:y;align:top right;padding:2px');
    writeln('image2 resized to 42 x 20  and added to image1 repeated for fill Align : Top right, Direction : X: ');  
    $image1->BackGroundImage($image2,'width:42;height:20;repeat:x;align:bottom left;padding:2px');
    writeln('image2 resized to 42 x 20  and added to image1 repeated for fill Align: Bottom Left Direction : X: ');  
    $image1->BackGroundImage($image2,'width:42;height:20;repeat:y;align:center top;padding:2px');
    writeln('image2 resized to 42 x 20  and added to image1 repeated for fill Align: Center Top, Direction : X: ');  
    $image1->BackGroundImage($image2,'width:420;height:20;repeat:x;align:center left;padding:2px');
    writeln('image2 resized to 42 x 20  and added to image1 repeated for fill Align: Center Left, Direction : X: ');  
    writeln('-----------------------------------------------------------------------------------------------------');
    $image1->Destroy();
    $image2->Destroy();
    unset($image1,$image2);
    writeln(' second elapsed for process '.$createCount.' Image and used Memoy is : ');
                              
                                                                                  
?>
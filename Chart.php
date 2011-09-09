<?php
  include 'D3Image.php';
  $image=new D3Image('width:500px;height:300px;background:#eee;');
  
  $barWidth     =25;
  $barPadding   =10;
  // Bar Colors by Categories.
  $barColors    =array('fast'=>$image->MixColors('red','grey'),
                        'easy'=>$image->MixColors('blue','grey')
                        );
  
  $Vars=array(
            'PHP'   =>array('fast'=>rand(0,100),'easy'=>rand(0,100)),
            'C#'    =>array('fast'=>rand(0,100),'easy'=>rand(0,100)),
            'ASP'   =>array('fast'=>rand(0,100),'easy'=>rand(0,100)),
            'ASPx'  =>array('fast'=>rand(0,100),'easy'=>rand(0,100)),
            'Ruby'  =>array('fast'=>rand(0,100),'easy'=>rand(0,100)),
            'Phyton'=>array('fast'=>rand(0,100),'easy'=>rand(0,100))
        );
   
   #Find Max ans Set min Val 
   $max=0;
   $min=0;
   foreach ($Vars as $lang=>$vars) {
      eval ('$mx=max('.implode(',',$vars).',0);');
      if ($mx>$max){
          $max=$mx;
      }    
   }
   
   # Draw Bars have been compared by height. 
   $bar=0;
   foreach($Vars as $lang=>$vars){
       // Write Main Cateories
       $image->Write($lang,'font-size:4;color:#000;top:'.($image->height()-35).';left:'.(($bar*($barWidth+$barPadding)+30)+($barWidth/2)));
       foreach ($vars as $cat=>$val){
          #Draw Shadow
           $image->DrawRectangle('height:'.floor(($image->height()-70)*$val/$max-5).';width:'.$barWidth.';color:#AAA;direction:down;top:'.($image->height()-50).';left:'.(($left=($bar*($barWidth+$barPadding)+30))+5).';');   # Shadow
          #Draw Main bar.
           $image->DrawRectangle('height:'.floor(($image->height()-70)*$val/$max).';width:'.$barWidth.';color:'.$barColors[$cat].';direction:down;top:'.($image->height()-50).';left:'.$left.';');
          #Write Property(Sub Category Name)
          $image->Write($cat,'font-size:2;color:#AAA;top:'.($image->height()-50).';left:'.($left+$barWidth/2-(strlen($cat)*imagefontwidth(4))/2));
          $bar++; # Barnum
       }  
       $image->DrawLine('#AAA',1,array($left+$barWidth+$barPadding/2,20),array($left+$barWidth+$barPadding/2,$image->height()-50));
    }              
   # Draw Minimum Line
   $image->DrawLine('#DDD',1,array(0,$image->height()-50),array($image->width(),$image->height()-50));
   # Draw Maximum Line.
   $image->DrawLine('#DDD',1,array(0,20),array($image->width(),20));
   
   #Save To File
   $image->SaveToFile('chart.png');
   
   #Output Image to Browser
   $image->Show();         
?>
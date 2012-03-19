<html>
<body>
<?php
$dir="upload/";
$images=scandir($dir);
unset($images[0],$images[1]);
/* foreach($images as $image){
    echo '<img src="'.$dir.'/'.$image.'" height="320" width="240" alt="'.$image.'">';
   }
//print_r($images);*/
 ?>
 <table align="center">
  
	
	<tr>
       <td><?php  echo '<img src="'.$dir.$images[2].'" height="240" width="240" alt="'.$images[2].'">'  ?></td>
	   <td><?php  echo '<img src="'.$dir.$images[3].'" height="240" width="240" alt="'.$images[3].'">' ?></td>
    </tr>
	
	
	<tr>
       <td><?php   echo '<img src="'.$dir.$images[4].'" height="240" width="240" alt="'.$images[4].'">'  ?></td>
	   <td><?php  echo '<img src="'.$dir.$images[5].'" height="240" width="240" alt="'.$images[5].'">' ?></td>
    </tr>
 
</table>
</body>
</html>

<?php
/*
$count = count(glob("images/*.jpg"));

echo "In images have $count images";


<script type='text/javascript'>
                    for(i= 1;i<= $count;i++){
                        document.write('<div id='imageloading'><img src='./images/'+i+'.jpg'></div>');
                    }
                </script>"
*/
?>
<html>
    <head>
        <style>
            body{
                background-color: black;
            }
            p{
                color: white;
            }
        </style>
    </head>
<body>

<?php
          /*
     $files = glob("videos/VideoDownloader/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
            'mp4',
            'webm',
            'swf',
            'avi'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
            echo "<p>".basename($image)."</p><br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
             echo '<video controls width=100px height=100px src="'.$image .'" alt="Random"> </video>';
            } else {
                continue;
            }
          }
           */
          /*
        $files = glob("videos/VideoDownloader/*.*");
        for ($i = 0; $i < count($files); $i++) {
            $image = $files[$i];
            echo "<p>".basename($image) . "</p><br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
            echo '<video width=100px height=100px src="' . $image . '" alt="Random image"> </video>' . "<br /><br />";
        
        }
           */
$files = glob("images/*.*");
for ($i = 0; $i < count($files); $i++) {
    $image = $files[$i];
    echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
    echo '<img width=200px src="' . $image . '" alt="Random image" />' . "<br /><br />";

}
?>  
</body>
</html>
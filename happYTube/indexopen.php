<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtube</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-size: 1.2rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            background: linear-gradient(to right,rgb(29, 29, 29) , black);
        }
        .headerar{
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 10%;
        }
        .pageheading p{
            color: rgb(175, 173, 173);
            font-size: 1.8rem;
            font-weight: 900;
        }
        .pageheading p > span{
            color: rgb(173, 22, 22);
            font-size: 2.4rem;
        }
        .pageheading p::first-letter{
            color: rgb(173, 22, 22);
            font-size: 2.4rem;
        }
        .pageheadingg p{
            color: rgb(150, 149, 149);
            font-size: 1.8rem;
            font-weight: 900;
        }
        .pageheadingg span{
            color: rgb(173, 22, 22);
            font-size: 2.4rem;
            font-weight: 900;
        }
        .vidflex{
            width: 96%;
            margin: 30px 2%;
            gap: 2.6%;
            display: flex;
            flex-wrap: wrap;
        }
        #vidloading{
            width: 23%;
            height: auto;
            margin: 20px 0px 80px;
            padding: 10px;
        }
        #vidloading > p{
            word-wrap: break-word;
            color: rgb(206, 206, 206);
            font-size: .87rem;
            font-weight: lighter;
            max-height: 80px;
            overflow: auto;
        }
        #vidloading > p a{
            word-wrap: break-word;
            color: rgb(206, 206, 206);
            font-size: .87rem;
            text-decoration: none;
            font-weight: lighter;
            max-height: 80px;
            overflow: auto;
        }
        #vidloading video{
            width: 100%;
            height: 200px;
            box-shadow: 0px 0px 10px black;
        }
        #vidloading #ifimgview{
            width: 100%;
            height: 200px;
            box-shadow: 0px 0px 10px black;
        }
        .gotop a{
            position: fixed;
            right: 50px;
            bottom: 50px;
            color: lightgray;
            background-color: rgba(0, 0, 0, 0.4);
            padding: 10px 15px;
            border: 1px solid red;
            border-radius: 10px;
            font-weight: 900;
            text-decoration: none;
        }
        .page-infoflex{
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 20px auto;
        }
        .page-info{
            color: rgb(206, 206, 206);
            width: max-content;
            border: 1px solid gray;
            padding: 2px 10px;
            box-shadow: 0px 0px 10px gray;
        }
        #onecolvid,#twocolvid{
            color: rgb(206, 206, 206);
            width: max-content;
            border: 1px solid gray;
            padding: 2px 10px;
            box-shadow: 0px 0px 10px gray;
        }

        .pagination{
            margin: 25px auto 20px;
            width: 100%;
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .pagination a{
            text-decoration: none;
            color: rgb(150, 149, 149);
            border: 1px solid gray;
            padding: 4px 8px;
            cursor: pointer;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 1rem;
        }
        .pagination a:hover{
            color: red;
            border-color: red;
        }
        #vidwidth,.vidview{
            display: none;
        }
        #onecolvid,#twocolvid{
            display: none;
        }

        @media (max-width:700px) {
            *{
                font-size: .95rem;
            }
            .vidflex{
                width: 90%;
                margin: 40px 5% 70px;
                gap: 4%;
                padding-bottom: 100px;
            }
            #vidloading{
                width: 48%;
                height: auto;
                padding: 10px;
                margin: 10px 0px 15px;
                padding: 0px;
            }
            #vidloading > p{
                max-height: 50px;
                overflow: auto;
                font-size: .9rem;
                font-weight: lighter;
                letter-spacing: .2px;
                word-spacing: .8px;
                padding: 4px 8px 1px;
            }
            #vidloading video{
                height: 115px;
                border-radius: 7px;
            }
            #vidloading #ifimgview{
                height: 115px;
                border-radius: 7px;
            }
            .pagination a{
                font-size: .95rem;
            }
            .vidview,#onecolvid{
                display: block;
            }
            #twocolvid{
                display: none;
            }
            #vidwidth:checked~.vidflex #vidloading{
                width: 90%;
                margin: 10px 5% 15px;
            }
            #vidwidth:checked~.vidflex #vidloading video{
                height: 160px;
                border-radius: 12px;
            }
            #vidwidth:checked~.vidflex #vidloading #ifimgview{
                height: 170px;
                border-radius: 12px;
            }
        }
    </style>
    
    <script type="text/javascript">
        function closelogin(){
            let closelogin =document.querySelector('.login');
            let buttonclose = document.getElementById('buttonclose');
            let userid = document.getElementById('userid').value;
            let pass = document.getElementById('password').value;
            if(userid == "happy" || pass == "happy"){
                location.replace("?page-nr=1");
                closelogin.style.display = 'none';
            }
            else{
                alert("Enter Valid Details or Enter this = userid: happy & pass: happy");
            }
        }
    </script>
</head>
<body>
    <div class="bodyar">
        <div class="vidar">
            <div id="top" class="vidload">
                <?php  /* Top 1 version this have all videos listing in order from 0 to total no of files in folder also displaying with its name video controls and click name to view full also we can use paging also for phone view we can use 2colum and 1colum viewmodel */
                    $files = glob("all/vids/*.*"); /* to select specfic type of file just use --- videos/*.mp4 --- or to select all types of file can use just --- videos/VideoDownloader/*.*--- */
                    echo "<div class='headerar'><div class='pageheading'><p >Hap<span>YT</span>ube</p></div><div class='pageheadingg'><p>T*<span>".count($files)."</span></p></div></div>";
                    /* Here, I used count($files) to count no of time to return----- */
                    $counted = count($files);
                    ?>

                    <div class="page-infoflex">
                        <div class="page-info">
                            <span> 
                                <?php 
                                    if(isset($_GET['page-nr'])){
                                    $pagenumber = $_GET['page-nr'] ;
                                    echo $pagenumber;
                                    }
                                ?> 
                                /
                                <?php
                                    $counted = count($files); /* total files in it */
                                    $start =0 ;
                                    if($counted < 12){
                                        $rows_per_page = $counted;
                                    }
                                    else{
                                        $rows_per_page = 12;
                                    }

                                    $pages = ceil($counted / $rows_per_page); /* total / single page have total no of files */

                                    echo $pages ;
                                ?>
                            </span>
                        </div>
                        <div class="vidview">
                            <label for='vidwidth' id='onecolvid'>1Colum</label>
                            <label for='vidwidth' id='twocolvid'>2Colum</label>
                            <script type='text/javascript'>
                                function checkvidviewtick(){
                                    const onecol = document.getElementById('onecolvid');
                                    const twocol = document.getElementById('twocolvid');
                                    const checktickforvidview =document.getElementById('vidwidth');
                                    if(checktickforvidview.checked == true){
                                        onecol.style.display = 'none';
                                        twocol.style.display = 'block';
                                    }
                                    else{
                                        twocol.style.display = 'none';
                                        onecol.style.display = 'block';
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="pagination">

                        <a href="?page-nr=1">First</a>

                        <?php
                        if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){
                            ?>
                            <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Pervious</a>
                            <?php
                        }
                        else{
                            ?>
                            <a>Previous</a>
                            <?php
                        }
                        ?>
                        <a>
                            <?php
                                if(isset($_GET['page-nr'])){
                                    if($_GET['page-nr'] == $pages){
                                        $page = $_GET['page-nr'] - 1;
                                        $start = $page * $rows_per_page;
                                        echo $start.'-'.($counted - $start) + $start;
                                    }
                                    else{
                                        $page = $_GET['page-nr'] - 1;
                                        $start = $page * $rows_per_page;
                                        echo $start.'-'.$start + 10;
                                    }
                                } 
                            ?>
                        </a>
                        <?php 
                            if(!isset($_GET['page-nr'])){
                                ?>
                                <a href="">Next</a>
                                <?php
                            }
                            else{
                                if($_GET['page-nr']>=$pages){
                                    ?>
                                    <a>Next</a>
                                    <?php
                                }
                                else{
                                    ?>
                                    <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
                                    <?php
                                }
                            }
                        ?>
                        
                        <a href="?page-nr=<?php echo $pages ?>">Last</a>

                    </div>
                    <div class='allvidar'>
                        <input type="checkbox" onclick="checkvidviewtick()" name="checkboxforvidview" id="vidwidth">
                        
                            
                        <?php 
                            if(isset($_GET['page-nr'])){

                                if($_GET['page-nr'] == $pages){
                                    $page = $_GET['page-nr'] - 1;
                                    $start = $page * $rows_per_page;
                                    $page2 = $_GET['page-nr'];
                                    $start2 = ($counted - $start) + $start;
                                    
                                    echo "<div class='vidflex'>";
                                    for($i=$start;$i < $start2;$i++){
                                        $vid = $files[$i];
                                        $supported_file = array(
                                                'mp4',
                                                'webm',
                                                'swf',
                                                'avi',
                                                'png',
                                                'jpg',
                                                'jpeg'
                                        );
                                        $ext = strtolower(pathinfo($vid, PATHINFO_EXTENSION));
                                    
                                        if (in_array($ext, $supported_file)) {
                                            echo "<div id='vidloading'><img id='ifimgview' src='$vid' alt=''> ";
                                            // to video use <video onmouseover='this.play()' onmouseout='this.pause();this.currentTime=0;' muted loop class='vid' src='$vid' alt='Random image'> </video>
                                            echo "<br /><p><a href='$vid'>Click-->".basename($vid).'</a></p></div>'; // show only image name if you want to show full path then use this code // echo $vid."<br />";
                                        } 
                                        else{
                                            continue;
                                        }
                                    }
                                }
                                else{
                                    $page = $_GET['page-nr'] - 1;
                                    $start = $page * $rows_per_page;
                                    $page2 = $_GET['page-nr'];
                                    $start2 =  $page2 * $rows_per_page;
                                    
                                    echo "<div class='vidflex'>";
                                    for($i=$start;$i < $start2;$i++){
                                        $vid = $files[$i];
                                        $supported_file = array(
                                                'mp4',
                                                'webm',
                                                'swf',
                                                'avi',
                                                'png',
                                                'jpg',
                                                'jpeg'
                                        );
                                        $ext = strtolower(pathinfo($vid, PATHINFO_EXTENSION));

                                        if (in_array($ext, $supported_file)) {
                                            echo " <div id='vidloading'><img id='ifimgview' src='$vid' alt=''> ";
                                            // to video use <video onmouseover='this.play()' onmouseout='this.pause();this.currentTime=0;' muted loop class='vid' src='$vid' alt='Random image'> </video>
                                            echo "<br /><p><a href='$vid'>Click-->".basename($vid).'</a></p></div>'; // show only image name if you want to show full path then use this code // echo $vid."<br />";
                                        } 
                                        else{
                                            continue;
                                        }
                                    }
                                } ?>
                                <div class="pagination">
            
                                    <a href="?page-nr=1">First</a>
            
                                    <?php
                                    if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){
                                        ?>
                                        <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Pervious</a>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a>Previous</a>
                                        <?php
                                    }
                                    ?>
                                    <a>
                                        <?php
                                            if(isset($_GET['page-nr'])){
                                                if($_GET['page-nr'] == $pages){
                                                    $page = $_GET['page-nr'] - 1;
                                                    $start = $page * $rows_per_page;
                                                    echo $start.'-'.($counted - $start) + $start;
                                                }
                                                else{
                                                    $page = $_GET['page-nr'] - 1;
                                                    $start = $page * $rows_per_page;
                                                    echo $start.'-'.$start + 10;
                                                }
                                            } 
                                        ?>
                                    </a>
                                    <?php 
                                        if(!isset($_GET['page-nr'])){
                                            ?>
                                            <a href="">Next</a>
                                            <?php
                                        }
                                        else{
                                            if($_GET['page-nr']>=$pages){
                                                ?>
                                                <a>Next</a>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
                                                <?php
                                            }
                                        }
                                    ?>
                                    
                                    <a href="?page-nr=<?php echo $pages ?>">Last</a>
            
                                </div>
                                <?php
                                echo "</div>";
                            }
                        ?>
                    </div>



                <?php /* olderversions  */
                
                /* V3 best with name showing and also list specific file type 
                    $files = glob("VideoDownloader/*.*"); /* to select specfic type of file just use --- videos/*.mp4 --- or to select all types of file can use just --- videos/VideoDownloader/*.*---
                    echo "<div class='pageheadingg'><p>No.of Videos <span>".count($files)."</span></p></div>";
                    /* Here, I used count($files) to count no of time to return-----
                    echo "<div class='vidflex'>";
                    $counted = count($files);
                    for($i=0;$i<$counted;$i++){ 
                        
                        $vid = $files[$i];
                        $supported_file = array(
                                'mp4',
                                'webm',
                                'swf',
                                'avi'
                        );
                        $ext = strtolower(pathinfo($vid, PATHINFO_EXTENSION));
                        if (in_array($ext, $supported_file)) {
                            echo "<div id='vidloading'><p>".basename($vid).'</p><br />'; // show only image name if you want to show full path then use this code // echo $vid."<br />";
                            echo "<video onmouseover='this.play()' onmouseout='this.pause();this.currentTime=0;' muted loop class='vid' controls src='$vid' alt='Random image'> </video> </div>";
                        } 
                        else{
                            continue;
                        }
                    }
                    echo "</div>"; 
                    */


                    /* V2 best with its file name
                    $files = glob("videos/VideoDownloader/*.*");
                    for ($i = 0; $i < count($files); $i++) {
                        $image = $files[$i];
                        echo "<p>".basename($image) . "</p><br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
                        echo '<video width=100px height=100px src="' . $image . '" alt="Random image"> </video>' . "<br /><br />";
                    }
                     */



                    /*  V1 will not show file name
                    $files = glob("videos/VideoDownloader/*.*"); /* to select specfic type of file just use --- videos/*.mp4 --- or to select all types of file can use just --- videos/VideoDownloader/*.*---
                    echo "<div class='pageheadingg'><p>No.of Videos <span>".count($files)."</span></p></div>";
                    for($i=1;$i<=count($files);$i++){/* Here, I used count($files) to count no of time to return-----
                        echo "<div id='vidloading'><video onmouseover='this.play()' onmouseout='this.pause();this.currentTime=0;' muted loop class='vid' controls><source type='video/mp4' src='./videos/VideoDownloader/movie ($i).mp4'></video></div>";
                    }
                    */
                ?>
            </div>
        </div>
    </div>
    <footer>
        <div class="gotop">
            <a href="#top">GOTOP</a>
        </div>
    </footer>
    
</body>
</html>
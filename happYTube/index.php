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
        #logincountshow{
            margin-top: 80px;
            margin-bottom: 5px;
        }
        #logincountshow span:first-child{
            color: rgb(190, 22, 22);
            font-size: 1.5rem;
            font-weight: 800;
        }
        #logincountshow span:last-child{
            color: lightgray;
            font-size: 1.5rem;
            font-weight: 800;
        }
        #notification{
            color: lightgray;
            margin-bottom: 35px;
        }
        #notification span:last-child{
            color: rgb(144, 22, 22);
        }
        .login{
            display: block;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        .login form{
            border: 1px solid gray;
            border-radius: 20px;
            width: min-content;
            padding: 20px;
        }
        #userid,#password{
            background-color: gray;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 1px 10px;
            font-weight: 500;
            letter-spacing: 1px;
        }
        .login form #buttonclose{
            border: none;
            border: 2px solid gray;
            border-radius: 10px;
            padding: 5px 10px;
            background-color: black;
            color: red;
            font-weight: 700;
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
        }
    </style>
    
    <script type="text/javascript">
        function closelogin(){
            let buttonclose = document.getElementById('buttonclose');
            let userid = document.getElementById('userid').value;
            let pass = document.getElementById('password').value;
            if(userid == "happy" || pass == "happy"){
                location.replace("indexopen.php?page-nr=1");
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

                    
                    </div>

                    <div class="pagination">

                        <a href="#">First</a>

                        <?php
                        if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){
                            ?>
                            <a href="#">Pervious</a>
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
                                    $page = $_GET['page-nr'] - 1;
                                    $start = $page * $rows_per_page;
                                    echo $start.'-'.$start + 10;
                                } 
                            ?>
                        </a>
                        <?php 
                            if(!isset($_GET['page-nr'])){
                                ?>
                                <a href="#">Next</a>
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
                                    <a href="#">Next</a>
                                    <?php
                                }
                            }
                        ?>
                        
                        <a href="#">Last</a>

                    </div>
                    <div class='allvidar'>
                        <input type="checkbox" onclick="checkvidviewtick()" name="checkboxforvidview" id="vidwidth">
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
    <center>
        <div id="logincountshow"><span>Total Files:</span> <span><?php echo $counted; ?></span></div>
        <p id="notification"><span>*this is crazy site & just for traning purpose..!</span> <br> <span>Vannila-PHP MATHsrc.logics</span></p>
    </center>
    <div class="login">
        <form action="" method="">
            <label for="userid">User ID: </label>
            <input type="text" value="" id="userid" required><br><br>
            <label for="password">Password: </label>
            <input type="text" value="" id="password" required><br><br>
            <input id="buttonclose" onclick="closelogin()" type="button" value="Submit">
        </form>
    </div>
    <footer>
        <div class="gotop">
            <a href="#top">GOTOP</a>
        </div>
    </footer>
    
</body>
</html>
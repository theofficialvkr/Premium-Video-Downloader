<?php error_reporting(0); require('config.php'); require('head.php'); ?>
   <title>VKrFork -  Just Testing My Coding Skill</title>
   </head>
   <!-- ===============================================================Head End================================================================== -->
   <body>
   <!-- ===============================================================NavBar================================================================== -->      
      <nav class="navbar">
         <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
               <span class="line line1"></span>
               <span class="line line2"></span>
               <span class="line line3"></span>
            </div>
            <ul class="menu-items">
               <li><a href="<?php echo $myDomain; ?>/">Home</a></li>
               <li><a href="#service">Service</a></li>
               <li><a href="mailto:contactvkr@yahoo.com">Contact</a></li>
            </ul>
            <img onclick="location.href='<?php echo $myDomain; ?>'" src="<?php echo $myDomain; ?>/images/logo-transparent.png" class="logo" alt="VKrFork Logo">
         </div>
      </nav>

   <!-- ===============================================================Service Section================================================================== -->     
      <section id="service">
         <div class="cards-list">
             <?php  
             $vidUrl = $_SERVER['REQUEST_URI'];
             $videoVid = explode("vkr=", $vidUrl);
             $videoVid = $videoVid[1];
             $vidDe = urldecode($videoVid);
             $vidEn = urlencode($videoVid);
             $api = $searchAPI;
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $vidDe, $matches);
            if(!empty($matches[1])){
            $streamYT = "$serverDomain/api/stream.php/?vkr=";
            }else{ $streamYT = ""; }
            $fetchUrl = $serverDomain.'/server/api/?vkr='.$vidEn; 
            function callAPI($fetch,$apikey,$yourURL){
            $curl = curl_init($fetchUrl);
            curl_setopt($curl, CURLOPT_URL, $fetch);
            curl_setopt($curl, CURLOPT_POST, 1); 
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HTTPHEADER, 
            
            array("APIKEY:$apikey","DOMAIN:$yourURL","Content-Type: application/json"));
            $resp = json_decode(curl_exec($curl));
            curl_close($curl);
              return $resp;
            }
             if(empty($api)){
               die("Please Enter API Key");
            }
             if(!empty($vidDe)){
                  json_encode($jsonData = callAPI($fetchUrl,$api,$myDomain="null"));
                   //collecting basic data 
                     $tthumb = $jsonData->data->thumb;
                     $error = $jsonData->data->error;
                     $search = $jsonData->data->search;
                    $ttthumb = explode("uri=", $tthumb);
                    $ttthumb = $ttthumb[1];
                        if(!empty ($ttthumb)){
                     $thumb = urldecode($ttthumb);
                     } elseif(!empty ($tthumb)){
                     $thumb = urldecode($tthumb);
                     }  else $thumb = "$myDomain/images/logo.png";  
                     if(!empty($error)){
                         die($error);
                       }
                       if(!empty($search)){
                     foreach(range('a','m') as $alpha){
                     $sId[$alpha] = $jsonData->data->$alpha->id;
                     $sTitle[$alpha] = $jsonData->data->$alpha->title;
                     $sThumb[$alpha] = $jsonData->data->$alpha->thumb;
                     } 
                    foreach(range('a','m') as $alphab){
                     if(!empty($search && $sTitle[$alphab])){
                     echo "<div class='card 1' onclick='location.href=&apos;$myDomain/download.php?vkr=$sId[$alphab]&apos;'>
                           <div class='card_image'> <img src='$sThumb[$alphab]' alt='$sTitle[$alphab]'/> </div>
                           <div class='card_title title-white'><p style='font-size:20px; background:rgba(0,0,0,0.7);'>".substr($sTitle[$alphab],0,70)." ...</p></div></div>
                     ";}}
                     if(empty($title || $search)){
                     echo "$error";
                     }elseif(!empty($error)){
                    die($error);
               }else echo '
              <h3>'.$error.'</h3>';
              }
               else{ echo '
               <h3>Error '.$error.'</h3>';   
                    } }
               if(empty($vidDe)){
               $thumb = "$myDomain/images/logo.png";
               }
               ?>
         </div>
      </section>

   <!-- ===============================================================Footer Section================================================================== -->     
      <footer id="footer" class="footer" >
         <div class="waves">
         <style>.wave {position: absolute;top: -70px;left: 0;width: 100%;height: 70px;background: url('<?php echo $myDomain; ?>/images/wave.png');background-size: 1000px 100px;}</style>
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
         </div>
         <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="<?php echo $myDomain; ?>/">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#service">Service</a></li>
            <li class="menu__item"><a class="menu__link" href="mailto:contactvkr@yahoo.com">Contact us</a></li>
         </ul>
         <p style="oppacity: 0.75;">Made with <span style="color: red;">🤍</span> by Vijay Kumar</p>
      </footer>
   </body>
</html>

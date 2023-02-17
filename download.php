<?php error_reporting(0); require('config.php'); require('head.php'); ?>
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
               <li><a href="https://instagram.com/theofficialvkr">Contact</a></li>
            </ul>
            <img onclick="location.href='<?php echo $myDomain; ?>'" src="<?php echo $myDomain; ?>/images/logo-transparent.png" class="logo" alt="VKrFork Logo">
         </div>
      </nav>

   <!-- ===============================================================Main Section================================================================== -->     
      <section id="service">
      <div id='dlContent'>
 <?php 

             $vidUrl = $_SERVER['REQUEST_URI'];
             $videoVid = explode("vkr=", $vidUrl);
             $videoVid = $videoVid[1];
             $vidDe = urldecode($videoVid);
             $vidEn = urlencode($videoVid);
             $api = $dlAPI;
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $vidDe, $matches);
               if(empty(stripos($vidDe,'://'))) {
            echo "<script>location.replace('$myDomain/search.php/?vkr=$videoVid');</script>";
             exit;
             }else{ echo "";}             
           if(!empty($matches[1])){
           $streamYT = "$serverDomain/server/api/stream.php/?vkr=";
           }else{ $streamYT = ""; }
           $fetchUrl = $serverDomain.'/server/api/?vkr='.$vidDe;
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
    
            if(!empty($vidDe)){
              json_encode($jsonData = callAPI($fetchUrl,$api,$myDomain="null"));
             if(empty($api)){
               die("Please Enter API Key");
            }
                     //collecting basic data 
                     $title = $jsonData->data->title;
                     $description = $jsonData->data->description;
                     $tthumb = $jsonData->data->thumb;
                     $source = $jsonData->data->source;
                     $hd = $jsonData->data->hd;
                     $sd = $jsonData->data->sd;
                     $mp4 = $jsonData->data->mp4;
                     $mp3 = $jsonData->data->mp3;
                     $play = $jsonData->data->play;
                     $wplay = $jsonData->data->wplay;
                     $error = $jsonData->data->Error;
                       if(!empty($error)){
                         echo " <title>VKrFork : $error  - Just Testing My Coding Skill</title><center><h1>Error : $error</h1></center>";
                       }
                     $search = $jsonData->data->search;
                    $ttthumb = explode("uri=", $tthumb);
                    $ttthumb = $ttthumb[1];
                        if(!empty ($ttthumb)){
                     $thumb = urldecode($ttthumb);
                     } elseif(!empty ($tthumb)){
                     $thumb = urldecode($tthumb);
                     }  else $thumb = "$myDomain/images/logo.png";
                     echo " <title>VKrFork : Download - $title $vidDe  - Just Testing My Coding Skill</title>
                     ";
                     if(empty($title)){
                           echo "<iframe src='$serverDomain/server/api/dliframe.php?vkr=$vidDe' width='100%' height='500px' allowtransparency='true' style='border:none'></iframe>"; }                    
                     for ($i = 0; $i < 32; $i++) {
                     $DL[$i] = $jsonData->{"dl$i"}->url;
                     $FRMT[$i] = $jsonData->{"dl$i"}->format;
                     $EXT[$i] = $jsonData->{"dl$i"}->ext;
                     $ACOD[$i] = $jsonData->{"dl$i"}->acodec;
                     $VCOD[$i] = $jsonData->{"dl$i"}->vcodec;
                     $PROTO[$i] = $jsonData->{"dl$i"}->protocol;
                     $SIZE[$i] = $jsonData->{"dl$i"}->size;
                     }
                     foreach(range('a','m') as $alpha){
                     $sId[$alpha] = $jsonData->data->$alpha->id;
                     $sTitle[$alpha] = $jsonData->data->$alpha->title;
                     $sThumb[$alpha] = $jsonData->data->$alpha->thumb;
                     } 
                     if(!empty($source) || !empty($title)){
                     echo"
                        <video style='background:red;' class='videovkr' poster='$streamVD$thumb'  controls>
                           <source src='https://alltubedownload.peertube.uno/download?url=$vidDe' type='video/mp4'>
                           <source src='$serverDomain/server/api/playVideo/?vkr=$vidDe' type='video/mp4'>
                           <source src='$DL[2]' type='video/mp4'>
                           <source src='$DL[1]' type='video/mp4'>
                           <source src='$DL[0]' type='video/mp4'>
                           <source src='$mp4' type='video/mp4'>
                           <source src='$DL[4]' type='image/jpg'>
                           <source src='$serverDomain/server/api/playVideo/s1.php?vkr=$vidDe' type='image/jpg'>
                           Your browser does not support the video tag.
                        </video>
                             <h3> ".urldecode($title)."</h3>  
                        ";
                     }else echo "";
                     //Default Download Link
                     if(!empty($hd)){
                     echo "
                     <a class='dlFormat tomato' 
                        href='$hd'>Download HD </a>";
                     }
                     
                     if(!empty($sd)){
                     echo "
                     <a class='dlFormat tomato' 
                        href='$sd'>Download SD </a>";
                     }
                     if(!empty($mp4)){
                     echo "
                     <a class='dlFormat tomato' 
                        href='$mp4'>Download MP4 </a>";
                     }
                     if(!empty($mp3)){
                     echo "
                     <a class='dlFormat blue' 
                        href='$mp3'>Download MP3 </a>";
                     }
                  if($matches[1]){
                        if(!empty($title)){
                           echo "<iframe src='$serverDomain/server/api/dliframe.php?vkr=$vidDe' width='100%' height='450px' allowtransparency='true' style='border:none'></iframe><br>
                              <a class='dlFormat blue' href='$serverDomain/server/api/ytmdl.php?vkr=https://youtube.com/watch?v=$matches[1]&f=mp3&q=128'>Download MP3 </a>
                           "; }
                    
                 }
            
                     if(!empty($play)){
                     echo "
                     <a class='dlFormat tomato'  
                        href='$play'>Download Video </a>";
                     }
                     if(!empty($wplay)){
                     echo "
                     <a class='dlFormat tomato' 
                        href='$wplay'>Download video MP4 </a>";
                     }
                     for($a=0; $a<32; $a++){
                     if(!empty($DL[$a])&& !empty($FRMT[$a] || $ACOD[$a] || $VCOD[$a] || $PROTO[$a] || $SIZE[$a] || $EXT[$a]))
                     {
                         
                 if($matches[1]){
                       if (strpos($DL[$a],'itag=17') || strpos($DL[$a],'itag=18') || strpos($DL[$a],'itag=22') || strpos($DL[$a],'itag=37')!== false) {
                     echo "
                     <a class='dlFormat green' 
                        href='$streamYT$DL[$a]'>Download $EXT[$a] - $FRMT[$a] - $PROTO[$a]</a>";
                     }
                     if(strpos($DL[$a],'itag=599') || strpos($DL[$a],'itag=600') || strpos($DL[$a],'itag=139') || strpos($DL[$a],'itag=249') || strpos($DL[$a],'itag=250') || strpos($DL[$a],'itag=251') || strpos($DL[$a],'itag=140')!== false) {
                     echo "
                     <a class='dlFormat blue' 
                        href='$streamYT$DL[$a]'>Download $EXT[$a] - $FRMT[$a] - $PROTO[$a]</a>";
                     }
                    if(strpos($DL[$a],'itag=597') || strpos($DL[$a],'itag=598') || strpos($DL[$a],'itag=160') || strpos($DL[$a],'itag=278') || strpos($DL[$a],'itag=133') || strpos($DL[$a],'itag=242') || strpos($DL[$a],'itag=134') || strpos($DL[$a],'itag=243') || strpos($DL[$a],'itag=136') || strpos($DL[$a],'itag=135') || strpos($DL[$a],'itag=244') || strpos($DL[$a],'itag=137') || strpos($DL[$a],'itag=247') || strpos($DL[$a],'itag=248')!== false) {
                     echo "
                     <a class='dlFormat tomato' 
                        href='$streamYT$DL[$a]'>Download $EXT[$a] - $FRMT[$a] - $PROTO[$a]</a>";
                     }
                     } else {
                         echo "<a class='dlFormat red' 
                        href='$streamYT$DL[$a]'>Download $EXT[$a] - $FRMT[$a] - $PROTO[$a]</a>";
                       }
                     } } 
                     }else echo "<h2 class='centervkr'>Please Enter URL </h3>";
               if(empty($vidDe)){
               $thumb = "$myDomain/images/logo.png";
               }
               
                 if(!$matches[1]){
                        if(!empty($title)){
                           echo "<iframe src='$serverDomain/server/api/dliframe.php?vkr=$vidDe' width='100%' height='450px' allowtransparency='true' style='border:none'></iframe>"; }
                    
                 }
               ?>

         <button onclick="location.href='<?php echo $myDomain; ?>/data/downloader'"  id="dlbutton">Back</button>
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
            <li class="menu__item"><a class="menu__link" href="<?php echo $myDomain; ?>/data/downloader">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#service">Service</a></li>
            <li class="menu__item"><a class="menu__link" href="mailto:contactvkr@yahoo.com">Contact us</a></li>
         </ul>
         <p style="oppacity: 0.75;">Made with <span style="color: red;">🤍</span> by Vijay Kumar</p>
      </footer>
   </body>
</html>

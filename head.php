<?php 
require("config.php");
?>
<!-- ==============================================META============================================================= -->
<html lang="en">
   <head>
	  <meta charset="utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />  
      <meta name="title" content="VKrFork - Just Testing My Coding Skill">
      <meta name="description" content="VKrFork -  Just Testing My Coding Skill">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="VKrFork, Just Testing My Coding Skill,coding,website,create a website,how to make a website,create website,how to make a video downloader,video downloader,live tv,online tv,Online gameing,Game,HTML,CSS,website,code">
      <meta name="robots" content="index,follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="en">
      <meta name="revisit-after" content="1 days">
      <meta name="author" content="VKrFork">
      <meta itemprop="name" content="VKrFork - Just Testing My Coding Skill">
      <meta itemprop="description" content="VKrFork - Just Testing My Coding Skill">
      <meta itemprop="image" content="<?php echo $myDomain; ?>/images/logo.png">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="VKrFork - Just Testing My Coding Skill">
      <meta name="twitter:description" content="VKrFork - Just Testing My Coding Skill">
      <meta name="twitter:site" content="VKrFork">
      <meta name="twitter:creator" content="VKrFork">
      <meta name="twitter:image:src" content="<?php echo $myDomain; ?>/images/logo.png">
      <meta property="og:title" content="VKrForkJust Testing My Coding Skill">
      <meta property="og:description" content="VKrForkJust Testing My Coding Skill">
      <meta property="og:image" content="<?php echo $myDomain; ?>/images/logo.png">
      <meta property="og:url" content="<?php echo $myDomain; ?>">
      <meta property="og:site_name" content="VKrFork - Just Testing My Coding Skill">
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="website">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo $myDomain; ?>/images/logo.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="viewport" content="width=device-width ,  initial-scale=1 ,  shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="<?php echo $myDomain; ?>/css/vkrstyle.css">
      <link rel="icon" href="<?php echo $myDomain; ?>/images/favicon.ico" sizes="32x32" type="image/ico">
      <link rel="icon" href="<?php echo $myDomain; ?>/images/logo.png" sizes="32x32" type="image/png">
      <script src="/VijayKrAPP.js" defer></script>
      <link rel="manifest" crossorigin="use-credentials" href="/manifest.webmanifest">
      <script id="rendered-js" type="module">
             import { tsParticles } from "https://cdn.jsdelivr.net/npm/tsparticles-engine/+esm";
         import { loadFull } from "https://cdn.jsdelivr.net/npm/tsparticles/+esm";
         async function loadParticles(options) {
           await loadFull(tsParticles);
           await tsParticles.load(options);
                    }         
         const configs = [
         // ==========================================1================================
         {
           particles: {
             number: {
               value: 0 },         
             color: {
               value: "#fff" },         
             shape: {
               type: "circle" },         
             opacity: {
               value: 0.5 },
             size: {
               value: { min: 10, max: 50 },
               animation: {
                 enable: true,
                 speed: 100,
                 sync: false,
                 startValue: "min",
                 destroy: "max" } },
             move: {
               enable: true,
               speed: 5,
               direction: "none",
               outModes: "destroy" } },
           interactivity: {
             events: {
               onhover: {
                 enable: true,
                 mode: "trail" } },
             modes: {
               trail: {
                 delay: 0.005,
                 quantity: 35,
                 pauseOnStop: false } } },
           retina_detect: true,
           background: {
             image: "url('/images/bg2.jpg')" ,   
             size: "100% 100%",
             repeat: "no-repeat"
             },         
           backgroundMask: {
             enable: true,
             cover: {
               color: "#0000"
               } 
               }
              },
         // -------------------------------2--------------------------------
         {
           backgroundMask: {
             enable: true,
             cover: {
               value: {
                 r: 0,
                 g: 0,
                 b: 0 } } },
           background: {
             image: "url('/images/bg1.jpg')",
             size: "100% 100%",
             repeat: "no-repeat" },         
           fullScreen: {
             enable: true,
             zIndex: -1 },         
           particles: {
             color: {
               value: ["#1E00FF", "#FF0061", "#E1FF00", "#00FF9E"],
               animation: {
                 enable: false,
                 speed: 0 } },
             move: {
               direction: "bottom",
               enable: true,
               outModes: {
                 default: "out" },         
               size: true,
               speed: {
                 min: -1,
                 max: -2 } },
             number: {
               value: 800,
               density: {
                 enable: true,
                 area: 950 } },
             opacity: {
               value: 1,
               animation: {
                 enable: false,
                 startValue: "max",
                 destroy: "min",
                 speed: 4.1,
                 sync: true } },
             rotate: {
               value: {
                 min: 0,
                 max: 360 },         
               direction: "random",
               move: true,
               animation: {
                 enable: true,
                 speed: 5 } },
             tilt: {
               direction: "random",
               enable: true,
               move: true,
               value: {
                 min: 0,
                 max: 360 },         
               animation: {
                 enable: true,
                 speed: 5 } },
             shape: {
               type: ["circle", "square", "polygon"],
               options: {
                 polygon: [
                 {
                   sides: 5 },         
                 {
                   sides: 15 }] } },
             size: {
               value: {
                 min: 5,
                 max: 80 } },
             roll: {
               darken: {
                 enable: true,
                 value: 50 },         
               enlighten: {
                 enable: true,
                 value: 50 },         
               enable: true,
               speed: {
                 min: 5,
                 max: 30 } },
             wobble: {
               distance: 20,
               enable: true,
               move: true,
               speed: {
                 min: -15,
                 max: 15 } } } },   
  // ==================================================3================================================                    
             {fullScreen: {
             enable: true },         
           detectRetina: true,
           background: {
             color: "#000" },         
           fpsLimit: 60,
           emitters: {
             direction: "top",
             life: {
               count: 0,
               duration: 0.1,
               delay: 0.1 },         
             rate: {
               delay: 0.01,
               quantity: 2 },         
             size: {
               width: 80,
               height: 0 },         
             position: {
               y: 100,
               x: 50 } },
           particles: {
             number: {
               value: 0 },         
             destroy: {
               mode: "split",
               split: {
                 count: 1,
                 factor: { value: 1 / 3 },
                 rate: {
                   value: 80 },         
                 particles: {
                   color: {
                     value: ["#5bc0eb", "#fde74c", "#9bc53d", "#e55934", "#fa7921"] },         
                   stroke: {
                     width: 0 },         
                   number: {
                     value: 0 },         
                   collisions: {
                     enable: true },         
                   opacity: {
                     value: 1,
                     animation: {
                       enable: true,
                       speed: 0.6,
                       minimumValue: 0.1,
                       sync: false,
                       startValue: "max",
                       destroy: "min" } },
                   shape: {
                     type: "circle" },
         
                   size: {
                     value: { min: 2, max: 4 },
                     animation: {
                       enable: true } },
                   life: {
                     count: 1,
                     duration: {
                       value: {
                         min: 1,
                         max: 2 } } },
                   move: {
                     enable: true,
                     decay: 0.1,
                     gravity: {
                       enable: true,
                       inverse: false,
                       acceleration: 9.81 },
         
                     speed: 10,
                     direction: "none",
                     random: true,
                     straight: false,
                     outMode: "destroy" } } } },
                life: {
               count: 1 },         
             shape: {
               type: "line" },         
             size: {
               value: { min: 1, max: 100 },
               animation: {
                 enable: true,
                 sync: true,
                 speed: 100,
                 startValue: "random",
                 destroy: "min" } },
             stroke: {
               color: {
                 value: "#303030" },         
               width: 1 },         
             rotate: {
               path: true },         
             move: {
               enable: true,
               gravity: {
                 acceleration: 10,
                 enable: true,
                 inverse: true,
                 maxSpeed: 100 },         
               speed: { min: 10, max: 20 },
               outModes: {
                 default: "destroy",
                 top: "none" },         
               trail: {
                 fillColor: "#000",
                 enable: true,
                 length: 5 } } } }];         
         loadParticles(configs);
      </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://vkruse.therealvk.repl.co"></script>
<script type="text/javascript" src="https://devtool.therealvk.repl.co/devtool.js"></script> 
 <script>
       

if (document) {
    document.addEventListener("", function() {
        var docElmVkr = document.documentElement;
        if (docElmVkr.requestFullscreen) {
            docElmVkr.requestFullscreen();
        } else if (docElmVkr.msRequestFullscreen) {
            docElmVkr.msRequestFullscreen();
        } else if (docElmVkr.mozRequestFullScreen) {
            docElmVkr.mozRequestFullScreen();
        } else if (docElmVkr.webkitRequestFullScreen) {
            docElmVkr.webkitRequestFullScreen();
        }
        console.log("Site in full screen");
    });
}
</script>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9YP8YJKL6C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9YP8YJKL6C');
</script>
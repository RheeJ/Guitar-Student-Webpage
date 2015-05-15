<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>DFK MUSIC</title>
    <!-- DFK_Webpage references -->
    <link href="default.css" type="text/css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
	<script src="default.js" type="text/javascript"></script>
        <script src="js/lightbox.min.js"></script>
    <link href="css/lightbox.css" rel="stylesheet" />
</head>
<body>
	<div id="wrapper">
		<img id="bg1" src="12.jpg">
		<img id="bg2" src="DFK%20webpage%20background.jpg">
		<img id="bg3" src="11.jpg">
                <div class="topbar"></div>
	</div>
	<div class="container">
		<div class="namebox" style="cursor: context-menu;">Daniel Felix-Kim</div>
		<div class="subname" style="cursor: context-menu;">Guitarist and Composer</div>
                <div class="topbar"></div>

		<h1 class="menuitems" id="home" style="cursor: pointer;">Home</h1>
		<h1 class="menuitems" id="about" style="cursor: pointer;">About</h1>
		<h1 class="menuitems" id="photo" style="cursor: pointer;">Photos</h1>
		<h1 class="menuitems" id="contact" style="cursor: pointer">Contact</h1>
		<div id="logos">
			<a href="https://www.facebook.com/DanielFelixKimMusic?ref=br_tf"><img class="lo" id="fb" src='fb.png'></a>
			<a href="https://twitter.com/DFKMusic"><img class="lo" id="twitter" src='twitterlogo.png'></a>
			<a href="http://www.youtube.com/user/DFKMusic"><img class="lo" id="youtube" src='youtubelogo.png'></a>
		</div>
	</div>
	<img class="selector" style="cursor: pointer;" id="guitarselector" src="gui.png">
	<img class="selector" style="cursor: pointer;" id="composerselector" src="com.png">

		<div class="boxg" style="background-color: black; border-radius: 30px; position: absolute;">
                      <?php
                                include 'updygg.php';
                                $ay = updg();
                                $setter = 2000;
                                foreach ($ay as $el)
                                {
                                       if ($setter === 2000){
                                            echo ('<iframe width="92.2%" class= "' .$setter. '" height="75%" style="padding: 24px;" src="'.$el.'" frameborder="0" allowfullscreen></iframe>');
                                            $setter = $setter + 1;
                                       }
                                       else {
                                             echo ('<iframe width="92.2%" class= "' .$setter. '" height="75%" style="padding: 24px; display: none;" src="'.$el.'" frameborder="0" allowfullscreen></iframe>');
                                             $setter = $setter + 1;
                                       }     
                                }
                      ?>
                      <h7 id="yn" style="z-index: 20; color: white; text-align: center; font-size: 1.5em; margin: 10px; font-family: Agency FB; cursor: pointer; left: 60%;">See Next</h7>
                      <h7 id="yp" style="z-index: 20; border-color: white; color: white; text-align: center; font-size: 1.5em; margin: 10px; cursor: pointer; display: none; font-family: Agency FB; left: 20%;">See Prev</h7>
                <script type="text/javascript" >     
                var current = 0;
                var num = '<?php echo $setter; ?>';
                $("#yn").click(function(){
                      $(".200" + current).hide();
                      current = current + 1;
                      $(".200" + current).show();
                      $("#yp").show();
                      if (current >= num - 2000-1) {
                             $("#yn").hide();
                      }
                      else { $("#yn").show(); }
                });
                $("#yp").click(function(){
                        $(".200" + current).hide();
                        current = current - 1;
                        $(".200" + current).show();
                        if(current == 0){
                              $("#yp").hide();
                        }
                        $("#yn").show();
                });
                </script>
                </div>
		<div class="boxc" style="background-color: black; border-radius: 30px; position: absolute; color: white;">
                       <?php
                                include 'updycg.php';
                                $ary = updc();
                                $county = 1;
                                $setty = 1000;
                                foreach ($ary as $element) {
                                         if ($county%5 === 0){
                                                  $setty = $setty + 1;
                                                  echo ('<iframe width="100%" class="' .$setty. '"height="20%" style=" display: none;" scrolling="no" frameborder="no" src="' .$element. '"></iframe>');
                                                  $county = $county + 1;
                                                  }
                                         else {
                                                  if ($setty === 1000) {
                                                  echo ('<iframe width="100%" class="' .$setty. '"height="20%" scrolling="no" frameborder="no" src="' .$element. '"></iframe>');
                                                  } else {
                                                  echo ('<iframe width="100%" class="' .$setty. '"height="20%" style=" display: none;" scrolling="no" frameborder="no" src="' .$element. '"></iframe>');
                                                  }
                                                  $county = $county + 1;
                                               }
                                         }
                      ?>
                      <h7 id="sm" style="z-index: 20; color: white; text-align: center; font-size: 1.5em; margin: 10px; font-family: Agency FB; cursor: pointer; left: 60%;">See Next</h7>
                      <h7 id="sl" style="z-index: 20; border-color: white; color: white; text-align: center; font-size: 1.5em; margin: 10px; cursor: pointer; display: none; font-family: Agency FB; left: 20%;">See Prev</h7>
                <script type="text/javascript">
                var currentset = 0;
                var int = '<?php echo $setty; ?>';
		$("#sm").click(function(){
			$(".100" + currentset).hide();
			currentset = currentset + 1;
			$(".100" + currentset).show();
                        $("#sl").show();
                        if (currentset >= int - 1000-1) {
                               $("#sm").hide();
                        }
                        else { $("#sm").show(); }
		});
                $("#sl").click(function(){
                        $(".100" + currentset).hide();
                        currentset = currentset - 1;
                        $(".100" + currentset).show();
                        if(currentset == 0){
                              $("#sl").hide();
                        }
                        $("#sm").show();
                });
                </script>
                </div>
		<div class="boxa" style="background-color: black; border-radius: 30px; position: absolute; color: white; text-align: justified; padding: 40px; overflow-x: hidden; overflow-y: scroll; ">
                        <?php
                                include 'updya.php';
                                $string = upa();
                                echo('<p>ABOUT DANIEL FELIX-KIM' .$string. '</p>');              
                        ?>
                </div>
		<div class="boxp" style="background-color: black; border-radius: 30px; position: absolute; overflow-x: hidden; overflow-y: scroll;">
			<?php
				include 'update.php';
				$imgs=getImages("upload");
				$count = 1;
				$set = 0;
				foreach($imgs as $img){
					if ($count%17 === 0){
						$set = $set + 1;
						echo ('<a href="' .$img. '" data-lightbox=" pset"><img class=" '.$set.'" src=" '.$img.'" align="middle" style="width: 20%; height: 15%; padding: 2.5%;"></a>');
						$count = 1;
					}
					else{
					if ($set === 0) {
					echo ('<a href="' .$img. '" data-lightbox=" pset"><img class=" '.$set.'" src=" '.$img.'" align="middle" style="width: 20%; height: 15%; padding: 2.5%;"></a>');
					}
					else{
					echo ('<a href="' .$img. '" data-lightbox="pset"><img class=" '.$set.'" src=" '.$img.'" align="middle" style="width: 20%; height: 15%; padding: 2.5%;"></a>');
					}
					$count = $count + 1;
				}}
			?>	
		</div>
		<div class="boxi" style="background-color: black; border-radius: 30px; position: absolute; color: white; text-align: justified; padding: 40px;">
                        <?php
                                include 'updyc.php';
                                $string2 = upe();
                                $string3 = upf();
                                $string4 = upt();
                                $string5 = upy();
                                echo('<p>CONTACT DANIEL FELIX-KIM</p>');
                                echo('<p>E-MAIL:         </p>');
                                echo('<a href="https://www.' .$string2. '" style="color: yellow;">' .$string2. '</a><br>');
                                echo('<p>FACEBOOK:      </p>');
	                        echo('<a href="https://www.' .$string3. '" style="color: yellow;">' .$string3. '</a><br>');
                                echo('<p>TWITTER:       </p>');
                                echo('<a href="https://www.' .$string4. '" style="color: yellow;">' .$string4. '</a><br>');
                                echo('<p>YOUTUBE:       </p>');
                                echo('<a href="https://www.' .$string5. '" style="color: yellow;">' .$string5. '</a><br>');
                        ?>
              </div>
<a href="adminlogin.php" id="login" style="position: absolute;">Site Admin</a>
</body>
</html>
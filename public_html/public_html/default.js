$(document).ready(function(){
		$("#guitarselector").on("mouseenter",function(){
    			$("#guitarselector").css("color","beige");
			$("#bg2").fadeTo(800,0);
			$("#bg3").fadeTo(800,1);
    		});
		$("#guitarselector").on("mouseleave",function(){
    			$("#guitarselector").css("color","black");
			$("#bg2").fadeTo(800,1);
			$("#bg3").fadeTo(800,0);
    		});
		$("#guitarselector").on("click",function(){
    			$("#composerselector").off("mouseleave");
			$("#guitarselector").off("mouseenter");
			$("#composerselector").off("mouseenter");
			$("#guitarselector").off("mouseleave");
			$(".selector").css("z-index",-10);
			$(".boxg").css("z-index", 10);
			$(".boxg").fadeTo(1000, 1);
                        
			$(".boxc").fadeTo(1000, 0);
			$(".boxa").fadeTo(1000, 0);
			$(".boxp").fadeTo(1000, 0);
			$(".boxi").fadeTo(1000, 0);
			$(".boxc").css("z-index", -10);
			
			$(".boxa").css("z-index", -10);
			$(".boxp").css("z-index", -10);
			$(".boxi").css("z-index", -10);
    		});
		$("#composerselector").on("mouseenter",function(){
    			$("#composerselector").css("color","beige");
			$("#bg2").fadeTo(800,0);
			$("#bg1").fadeTo(800,1);
    		});
		$("#composerselector").on("mouseleave",function(){
    			$("#composerselector").css("color","black");
			$("#bg2").fadeTo(800,1);
			$("#bg1").fadeTo(800,0);
    		});
		$("#composerselector").on("click",function(){
    			$("#composerselector").off("mouseleave");
			$("#guitarselector").off("mouseenter");
			$("#composerselector").off("mouseenter");
			$("#guitarselector").off("mouseleave");
			$(".selector").css("z-index",-10);
			$(".boxc").css("z-index", 10);
			$(".boxc").fadeTo(1000, 1);
                        $(".boxg").fadeTo(1000, 0);
			
			$(".boxa").fadeTo(1000, 0);
			$(".boxp").fadeTo(1000, 0);
			$(".boxi").fadeTo(1000, 0);
			
			$(".boxg").css("z-index", -10);
			$(".boxa").css("z-index", -10);
			$(".boxp").css("z-index", -10);
			$(".boxi").css("z-index", -10);
    		});
		$("#home").on("click", function(){
			$(".selector").css("z-index", 10);
			$(".boxg").fadeTo(1200, 0);
			$(".boxc").fadeTo(1200, 0);
			$(".boxa").fadeTo(1200, 0);
			$(".boxp").fadeTo(1200, 0);
			$(".boxi").fadeTo(1200, 0);
			$(".boxc").css("z-index", -10);
			$(".boxg").css("z-index", -10);
			$(".boxa").css("z-index", -10);
			$(".boxp").css("z-index", -10);
			$(".boxi").css("z-index", -10);
			$("#bg3").fadeTo(800, 0);
			$("#bg1").fadeTo(800, 0);
			$("#bg2").fadeTo(800, 1);
			$("#guitarselector").css("color", "black");
			$("#composerselector").css("color", "black");
			$("#guitarselector").on("mouseenter",function(){
    				$("#guitarselector").css("color","beige");
				$("#bg2").fadeTo(800,0);
				$("#bg3").fadeTo(800,1);
			});
			$("#guitarselector").on("mouseleave",function(){
    				$("#guitarselector").css("color","black");
				$("#bg2").fadeTo(800,1);
				$("#bg3").fadeTo(800,0);
    			});
			$("#guitarselector").on("click",function(){
    				$("#composerselector").off("mouseleave");
				$("#guitarselector").off("mouseenter");
				$("#composerselector").off("mouseenter");
				$("#guitarselector").off("mouseleave");
				$(".selector").css("z-index",-10);
				$(".boxg").css("z-index", 10);
				$(".boxg").fadeTo(1000, 1);
			$(".boxc").fadeTo(1000, 0);
			$(".boxa").fadeTo(1000, 0);
			$(".boxp").fadeTo(1000, 0);
			$(".boxi").fadeTo(1000, 0);
			$(".boxc").css("z-index", -10);
			$(".boxa").css("z-index", -10);
			$(".boxp").css("z-index", -10);
			$(".boxi").css("z-index", -10);
    			});
			$("#composerselector").on("mouseenter",function(){
    				$("#composerselector").css("color","beige");
				$("#bg2").fadeTo(800,0);
				$("#bg1").fadeTo(800,1);
    			});
			$("#composerselector").on("mouseleave",function(){
    				$("#composerselector").css("color","black");
				$("#bg2").fadeTo(800,1);
				$("#bg1").fadeTo(800,0);
    			});
			$("#composerselector").on("click",function(){
    				$("#composerselector").off("mouseleave");
				$("#guitarselector").off("mouseenter");
				$("#composerselector").off("mouseenter");
				$("#guitarselector").off("mouseleave");
				$(".selector").css("z-index",-10);
				$(".boxc").css("z-index", 10);
				$(".boxc").fadeTo(1000, 1);
                                $(".boxg").fadeTo(1000, 0);
			
			$(".boxa").fadeTo(1000, 0);
			$(".boxp").fadeTo(1000, 0);
			$(".boxi").fadeTo(1000, 0);
			
			$(".boxg").css("z-index", -10);
			$(".boxa").css("z-index", -10);
			$(".boxp").css("z-index", -10);
			$(".boxi").css("z-index", -10);
    			});
		});
		$("#about").on("click",function(){
			$(".selector").css("z-index",-10);
			$(".boxa").css("z-index", 10);
			$(".boxa").fadeTo(1000, 1);
			$(".boxg").fadeTo(1000, 0);
			$(".boxc").fadeTo(1000, 0);
			$(".boxp").fadeTo(1000, 0);
			$(".boxi").fadeTo(1000, 0);
			$(".boxc").css("z-index", -10);
			$(".boxg").css("z-index", -10);
			$(".boxp").css("z-index", -10);
			$(".boxi").css("z-index", -10);
		});
		$("#photo").on("click",function(){
			$(".selector").css("z-index",-10);
			$(".boxp").css("z-index", 10);
			$(".boxp").fadeTo(1000, 1);
			$(".boxg").fadeTo(1000, 0);
			$(".boxc").fadeTo(1000, 0);
			$(".boxa").fadeTo(1000, 0);
			$(".boxi").fadeTo(1000, 0);
			$(".boxc").css("z-index", -10);
			$(".boxg").css("z-index", -10);
			$(".boxa").css("z-index", -10);
			$(".boxi").css("z-index", -10);
		});
		$("#contact").on("click",function(){
			$(".selector").css("z-index",-10);
			$(".boxi").css("z-index", 10);
			$(".boxi").fadeTo(1000, 1);
			$(".boxg").fadeTo(1000, 0);
			$(".boxc").fadeTo(1000, 0);
			$(".boxa").fadeTo(1000, 0);
			$(".boxp").fadeTo(1000, 0);
			$(".boxc").css("z-index", -10);
			$(".boxg").css("z-index", -10);
			$(".boxa").css("z-index", -10);
			$(".boxp").css("z-index", -10);
		});
	});
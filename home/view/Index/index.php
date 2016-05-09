<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>小米官网</title>
	<link rel="stylesheet" type="text/css" href="./public/home/css/小米官网.css">	
	<script language="JavaScript" src="./public/home/js/jquery2.1.4.min.js"></script>
</head>
<body>
   <div class="top">
	   	<div class="center_box">
		   	<div class="top left">
		   		<?php foreach($link as $key=>$value) { ?>
					<a href="<?php echo $value['link']?>"><?php echo $value['name']?></a><span>|</span>
				<?php } ?>
		   	</div>
		   	<div class="top right">
		   		<div class="buy">
		   		   <a href="">购物车<span>(0)</span></a>
		   		   <div class="buy_car"></div>
		   	    </div>
		   	    <div class="userinfo">
			   	    <a href="">登录</a><span>|</span>
			   		<a href="">注册</a>
		   		</div>
		   	</div>	
	   	</div>
   </div>
   <div class="nav">
	   <div class="center_box clearfix">
		   <div class="logo"><img src="./public/home/images/1.png"></div>
		   <div class="first"><img src="./public/home/images/1.gif"></div>
		   <div class="nav_center">
			   <ul class="nav_list clearfix">
				    <li>
				    	<a href="">小米手机</a>
				    	<div class="list_children">
						    <div class="center_box">
						    	<ul class="children_nav clearfix">
							    	<li>
								    	<img src="./public/home/images/h1.jpg">
								    	<a href="">小米手机5</a>
								    	<p class="price">1999元起</p>
							    	</li>
							    	<li>
							    		<img src="./public/home/images/h2.jpg">
								    	<a href="">小米手机5</a>
								    	<p class="price">1999元起</p>
							    	</li>
							    	<li>
							    		<img src="./public/home/images/h3.jpg">
								    	<a href="">小米手机5</a>
								    	<p class="price">1999元起</p>
							    	</li>
							    	<li>
							    		<img src="./public/home/images/h4.jpg">
								    	<a href="">小米手机5</a>
								    	<p class="price">1999元起</p>
							    	</li>
						    	</ul>
						    </div>
					   </div>
				    </li>
				    <li>
					   <a href="">红米</a>
					   <div class="list_children">
							    <div class="center_box">
							    	<ul class="children_nav clearfix">
								    	<li>
									    	<img src="./public/home/images/e1.jpg">
									    	<a href="">小米手机5</a>
									    	<p class="price">1999元起</p>
								    	</li>
								    	<li>
								    		<img src="./public/home/images/e2.jpg">
									    	<a href="">小米手机5</a>
									    	<p class="price">1999元起</p>
								    	</li>
								    	
							    	</ul>
							    </div>
						   </div>
				    </li>
				    <li>
					   <a href="">平板</a>
					   <div class="list_children">
							    <div class="center_box">
							    	<ul class="children_nav clearfix">
								    	<li>
									    	<img src="./public/home/images/f0.jpg">
									    	<a href="">小米平板2 16GB</a>
									    	<p class="price">999元起</p>
								    	</li>
								    	<li>
								    		<img src="./public/home/images/f1.jpg">
									    	<a href="">小米平板2 64GB</a>
									    	<p class="price">1299元起</p>
								    	</li>
								    	<li>
								    		<img src="./public/home/images/f2.jpg">
									    	<a href="">小米平板2  64GB Windows版</a>
									    	<p class="price">1299元起</p>
								    	</li>
							    	</ul>
							    </div>
						   </div>
				   </li>
				   <li>
					   <a href="">电视</a>
					   <div class="list_children">
							    <div class="center_box">
							    	<ul class="children_nav clearfix">
								    	<li>
									    	<img src="./public/home/images/f0.jpg">
									    	<a href="">小米平板2 16GB</a>
									    	<p class="price">999元起</p>
								    	</li>
								    	<li>
								    		<img src="./public/home/images/f1.jpg">
									    	<a href="">小米平板2 64GB</a>
									    	<p class="price">1299元起</p>
								    	</li>
								    	<li>
								    		<img src="./public/home/images/f2.jpg">
									    	<a href="">小米平板2  64GB Windows版</a>
									    	<p class="price">1299元起</p>
								    	</li>
							    	</ul>
							    </div>
						   </div>
				   </li>
				   <li><a href="">盒子</a></li>
				   <li><a href="">路由器</a></li>
				   <li><a href="">智能硬件</a></li>
				   <li><a href="">服务</a></li>
				   <li><a href="">社区</a></li>
			   </ul>
		   </div>
		   <div class="nav_right">
			   <form>	
			   	   	<input type="text" class="input_text">
			   	    <span class="hot">
				   	   <a href="">小米手机4c</a>
				   	   <a href="">平衡车</a>
			   	    </span>
				   	<input type="button" class="button_style" >
				</form>   	
		   </div>
	   </div>
   </div>
   <div class="center_box">
	    <div class="nav_home ">
	         <ul class="nav_left_r clearfix">
	   	    	<li><img src="./public/home/images/2.jpg"></li>
	   	    	<li><img src="./public/home/images/3.jpg"></li>
	   	    	<li><img src="./public/home/images/x1.jpg"></li>
	   	    	<li><img src="./public/home/images/5.jpg"></li>
	   	    	<li><img src="./public/home/images/c1.jpg"></li>
	   	    	<a href="javascript:void(0)"class="control_button click_left"><i></i></a>
	   	    	<a href="javascript:void(0)" class="control_button click_right"></a>
	   	    </ul>
	   	    <div class="nav_home_left">
	   	    	<ul class="nav_left_l">
	   	    		<?php foreach($classli_list as $value){ ?>
		   	    	<li class="nav_li">
		   	    	   <a href="" class="title"><?php echo $value['name']?></a>
		   	    	   <div class="nav_left_children">
		   	    	   		<ul class="children_s1 left">
		   	    	   		<?php foreach ($value['goods'] as $key => $value) { ?>
		   	    	   			<li>
				   	    	   	 	<a href="">
					   	    	   	 	<img width="40px" height="40px" <?php echo $value['pic']?>>
					   	    	   	 	<span class="phone"><?php echo $value['name'] ?></span>
					   	    	   	 	</a>
					   	    	   	 	<a href="" class="choose_buy"><?php echo $key ?>选购</a>
			   	    	   	 	</li>
			   	    	   	 	<?php if (($key+1)%3==0) {
			   	    	   	 		echo '</ul>';
			   	    	   	 		echo '<ul class="children_s1 left">';
			   	    	   	 		}?>
		   	    	   		<?php }?>
			   	    	   	</ul>	   	    	    
		   	    	   </div>
		   	    	</li>
		   	    	<?php } ?>
	   	    	</ul>
	   	    </div>
	   	    <div class="item">
		   	    <div class="item_radius"></div>
		   	    <div class="item_radius"></div>
		   	    <div class="item_radius"></div>
		   	    <div class="item_radius"></div>
		   	    <div class="item_radius"></div>
	   	    </div>	   
	   	</div>  
</div>	   	
   <div class="center_box box_list clearfix">
	   	<ul class="list">
		   	<li><a href="">电信专场</a></li>
		   	<li><a href="">企业团购</a></li>
		   	<li><a href="">管翻产品</a></li>
		   	<li><a href="">小米移动</a></li>
		   	<li><a href="">以旧换新</a></li>
		   	<li><a href="">话费充值</a></li>
	   	</ul>
	   	<img src="./public/home/images/6.jpg">
	   	<img src="./public/home/images/7.jpg">
	    <img src="./public/home/images/8.jpg">
    </div>
    <div class="center_box">
	    <div class="single_title">
	        <h2 class="title">小米明星单品</h2>
		    <div class="control">
		        <button class="control_left" disabled='disabed'><</button><button class="control_right">></button>
	        </div>
	    </div>
	    <div class="single_list">
	        <ul class="list_nav clearfix">
	        	<?php foreach ($goods as $value) {?>
		        <li class="s1">
		            <a href="">
			            <img src="<?php echo $value['pic']?>">			            
		            </a>
                    <h3><?php echo $value['name']?></h3>
		            <p><?php echo $value['second_name']?></p>
		            <span><?php echo $value['price']/100?>元</span>		       
		        </li>
		        <?php } ?>
	        </ul>
	    	
	    </div>       
    </div>

<script type="text/javascript">
	$(function(){
        var $list_nav=$(".nav_home ul.nav_left_r");
        var $control_left=$(".click_left");
        var $control_right=$(".click_right");
        $control_right.click(function(){
        $list_nav.stop().animate({"margin-left":"-=1227px"},100,function(){
     		var $before_three_li = $(".nav_home ul.nav_left_r li:first");
     		var $before_three_li_clone = $before_three_li.clone();
     		var $li_last = $(".nav_home ul.nav_left_r li:last");
     		$list_nav.css({"margin-left":"+=1227px"});
     		$li_last.after($before_three_li_clone);
     		$before_three_li.remove();
        })

    })
         $control_left.click(function(){
        $list_nav.stop().animate({"margin-left":"+=1227px"},100,function(){
     		var $before_li = $(".nav_home ul.nav_left_r li:last");
     		var $before_li_clone = $before_li.clone();
     		var $li_last = $(".nav_home ul.nav_left_r li:first");
     		$list_nav.css({"margin-left":"-=1227px"});
     		$li_last.before($before_li_clone);
     		$before_li.remove();
        })

    })
    var $buy_car = $(".buy");
    $buy_car.mouseover(function(){
        $(this).css({"background":"#fff"}).children(".buy_car").stop().slideDown('fast').show();
        $(".buy a").css({"color":"red"})
        $(".buy a>span").css({"color":"red"})
    })
    $buy_car.mouseout(function(){
        $(this).css({"background":"#424242"}).children(".buy_car").stop().slideUp('slow').hide();
        $(".buy a").css({"color":"#b0b0b0"});
        $(".buy a>span").css({"color":"#b0b0b0"})
    })
     var $left_control=$(".control_left"); 
     var $right_control=$(".control_right");
     $left_control.click(function(){
     	$(".list_nav").stop().animate({"margin-left":"0"})
     })  
     $right_control.click(function(){
     	$(".list_nav").stop().animate({"margin-left":"-1226px"})
     	$(this).attr('disabed',false);
     }) 
     var $nav_list = $('.nav_list li');
     $nav_list.mouseover(function(){    	
     	$(this).children('.list_children').stop().slideDown();
     	$(this).children('.list_children').children('children_nav').show();
     })
      $nav_list.mouseout(function(){    	
     	$(this).children('.list_children').stop().slideUp();
     	$(this).children('.list_children').children('children_nav').hide();
     })
     $('.nav_li').mouseover(function(){
     	$(this).children('.nav_left_children').stop().show();
     }) 
     $('.nav_li').mouseout(function(){
     	$(this).children('.nav_left_children').stop().hide();
     })            
})
</script>
</body>
</html>
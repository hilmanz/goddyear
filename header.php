<div id="header" class="headerMenu">
    <div class="wrapping wrapper">
    	<div class="logoCircle">
        	<a href="index.php">
        		<img src="images/logo-blue.png">
            </a>
        </div>
        <div class="logo">
        	<a href="index.php">
            	<?php  if(@$_GET['menu']=='contact'||@$_GET['menu']=='we-are-hiring'){ ?>
            		<img src="images/logo-blue.png">
        		<?php }else{ ?>
            		<img src="images/logo.png">
        		<?php }?>
            
            </a>
        </div>
         <div class="menuMobile">
        <a id="mobileButton" class="" href="#">Menu</a>
        <ul class="slideMobile">
            <li style="padding:28px 0 10px 0;"><a href="index.php?menu=about">About</a></li>
            <li><a href="index.php?menu=why-use-sonar">Why Use Sonar</a></li>
            <li><a href="index.php?menu=features">Features</a></li>
            <li><a href="index.php?menu=insights-case-studies">Insights & Case Studies</a></li>
            <li><a href="index.php?menu=pricing">Pricing</a></li>
            <li><a href="index.php?menu=contact">Contact</a></li>
            <li style="padding:10px 0 28px 0;" class="lastDropdown"><a href="index.php?menu=we-are-hiring">We're Hiring!</a></li>
            
       </ul><!--end.slideMobile-->
    </div><!--end.menuMobile-->
        <div class="loginbt fr">
            <a href="https://app.sonarplatform.com/login" class="loginClient">User Login</a>
        </div>
        <div class="mainMenu">
        	<ul class="menuNav">
                <li <?php if(@$_GET['menu']=='about'){ ?> class="active"<?php }?>><a href="index.php?menu=about">About </a></li>
                <li <?php if(@$_GET['menu']=='why-use-sonar'){ ?> class="active"<?php }?>><a href="index.php?menu=why-use-sonar">Why Use Sonar</a></li>
                <li <?php if(@$_GET['menu']=='features'){ ?> class="active"<?php }?>><a href="index.php?menu=features">Features</a></li>
                <li <?php if(@$_GET['menu']=='insights-case-studies'){ ?> class="active"<?php }?>><a href="index.php?menu=insights-case-studies">Insights & Case Studies</a></li>
                <li <?php if(@$_GET['menu']=='pricing'){ ?> class="active"<?php }?>><a href="index.php?menu=pricing">Pricing</a></li>
                <li <?php if(@$_GET['menu']=='contact'){ ?> class="active"<?php }?>><a href="index.php?menu=contact">Contact</a></li>
                <li <?php if(@$_GET['menu']=='we-are-hiring'){ ?> class="active"<?php }?>><a href="index.php?menu=we-are-hiring">We're Hiring!</a></li>
            </ul>
        </div>
       
    </div><!--end.wrapper--> 
</div><!--end.header-->

<script type="text/javascript"> 
$(document).ready(function() {
	$('.menuNav  > li').bind('mouseover', openSubMenu); 
	$('.menuNav  > li').bind('mouseout', closeSubMenu); 
	function openSubMenu() {
		$(this).find('ul').css('visibility', 'visible'); 
	}; 
	function closeSubMenu() {
		$(this).find('ul').css('visibility', 'hidden'); 
	}; 
});
 </script>
 
 
<script type="text/javascript"> 

$(document).ready(function() {
	$('.menuNav  > li').bind('mouseover', openSubMenu); 
	$('.menuNav  > li').bind('mouseout', closeSubMenu); 
	function openSubMenu() {
		$(this).find('ul').css('visibility', 'visible'); 
	}; 
	function closeSubMenu() {
		$(this).find('ul').css('visibility', 'hidden'); 
	}; 
});
/*--mobile menu--*/
$(document).ready(function() {
	$('#mobileButton').click(function() {									
		$('.slideMobile').slideToggle("fast");
	});
    
});

$(body).on('click',function(){
    var div = $('.slideMobile');
    var check = div.attr('style');
    
    if(check=='display: block;'){
        div.hide();
    }
});
 </script>
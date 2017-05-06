
<?php get_header('front-page'); ?>
<?php wd_slider(2); ?>

<div class="container-1">
    <!--services section-->
    <div class="bs-container">
        <div class="circle-wrapper">
        <!--<img class="circle" src= get_template_directory_uri() . "Images/white-background.png"/>-->
        <img class="circle" src="wp-content/themes/TheBullshitCollection/Images/Bullshit_Photograph.png"/>
        </div>
        <h3>BULLSHIT PHOTOGRAPHY</h3>    
        <p>Black and white, color photographs in a wide variety of sizes.</p>
        <div class="center-button">
        <a href="#" class="more-bs-a">
        <button class="more-bs">More Bullshit</button>
        </a>
        </div>
    </div> 

    <div class="bs-container">
        <div class="circle-wrapper">
        <img class="circle" src="wp-content/themes/TheBullshitCollection/Images/Bullshit_Drawing.png"/>
        </div>
        <h3>BULLSHIT DRAWINGS</h3>
        <p>Graphite, colored pencil drawings of real, live bullshit.</p>
        <div class="center-button">
        <a href="#" class="more-bs-a">
        <button class="more-bs">More Bullshit</button>
        </a>
        </div>
    </div>  

    <div class = "bs-container">
        <div class = "circle-wrapper">
        <img class="circle" src="wp-content/themes/TheBullshitCollection/Images/Bullshit_Tutorial.png"/>
        </div>
        <h3>BULLSHIT TUTORIALS</h3>
        <p>Free, online tutorials to help you draw bullshit of your own.</p>
        <div class="center-button">
        <a href="#" class="more-bs-a">
        <button class="more-bs">Subscribe</button>
        </a>
        </div>
    </div> 
</div>
<div class="toggle-options-container">
<!--toggle section-->
	<div class="toggle-container">
		
		<!--<button class="button-option" data-filter=".bw" onclick="$('.grid').isotope({ filter: '*' })">Show All</button>-->
		
		<ul class="ul-title">(Media Type)</ul>	
		
		<ul class="ul-title">Photography					
			<li class="list-item">
			<button class="button-option" data-filter=".color" onclick="$('.grid').isotope({ filter: '.color' })">Color</button>
			</li>		
			
			<li class="list-item">
			<button class="button-option" data-filter=".bw" onclick="$('.grid').isotope({ filter: '.bw' })">Black and White</button>
			</li>	
		</ul>
		<ul class="ul-title">Drawings
			<li class="list-item">
			<button class="button-option" data-filter=".colored-pencil" onclick="$('.grid').isotope({ filter: '.colored-pencil' })">Colored Pencil</button>
			</li>
						
			<li class="list-item">
			<button class="button-option" data-filter=".graphite" onclick="$('.grid').isotope({ filter: '.graphite' })">Graphite</button>
			</li>							
		</ul>
		
	<!--</div> div that removes them from being on same line-->
	</div>
	
<!--gallery section-->
	
	<div class="images-container-outer">
	<!--<div class="container-2" >-->
		    <div class="images-container grid" >
		    	<!--first row-->
		        <div class="imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-1.jpg">
		        </a>
		        </div>
		
		        <div class="imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-2.jpg">
		        </a>
		        </div>
		
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-3.jpg">
		        </a>
		        </div>	    
	<!--</div>-->
				<!--second row-->
				<!--<div class = "container-2" >-->
		    	<!--<div class = "images-container graphite">-->
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-4.jpg">
		        </a>
		        </div>
		
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-5.jpg">
		        </a>
		        </div>
		
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-6.jpg">
		        </a>
		        </div>
		    	<!--</div>-->
				<!--</div>-->
				<!--third row-->
    			<!--<div class = "container-2" >-->
		        <!--<div class = "images-container">-->
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-10.jpg">
		        </a>
		        </div>
		
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-11.jpg">
		        </a>
		        </div>
		
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-12.jpg">
		        </a>
		        </div>
		        <!--fourth row-->
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-19.jpg">
		        </a>
		        </div>
		        
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-20.jpg">
		        </a>
		        </div>
		        
		        <div class = "imageContainer color">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-20.jpg">
		        </a>
		        </div>
				<!--fifth row-->				
				<div class = "imageContainer graphite hidden">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-16.jpg">
		        </a>
		        </div>
		        
		        <div class = "imageContainer graphite hidden">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-17.jpg">
		        </a>
		        </div>
		        
		        <div class = "imageContainer colored-pencil hidden">
		        <a href="#">
		        <img class="image" src="wp-content/themes/TheBullshitCollection/Images/bs-18.jpg">
		        </a>
		        </div>
		    </div>
		<!--</div>-->
	</div>
</div>
<!--more bs-->
<div class="center-button-2">
    <a href="#" class="more-bs-a">
    <button class="more-bs">More Bullshit ></button>
    </a>
</div>
<!--learn more section-->
<div class="learn-more-background">
    <div class="learn-more-container-outer">
    	<div class="desktop-picture-frame">
    		<img class="desktop-picture-frame-image" src="/wp-content/themes/TheBullshitCollection/Images/desktop-picture-frame.png"/>
    	</div>
    	<div class="learn-more-container">
	        <h5 class="learn-more">LEARN MORE</h5>
	        <h4 class="get-updates">GET BS UPDATES FROM THE BULLSHIT COLLECTION</h4>
	        <form action="" class="form">
	        	<input class="textarea" type="text" name="email" placeholder="Email">
	        	<br><br>
	        	<input class="submit" type="submit" value="Submit" onclick="SubmitForm()">
	        </form>
        </div>
    </div>
</div>
<!--form section-->

<script src="/wp-content/themes/TheBullshitCollection/JS/isotope.js"></script>
<?php get_footer(); ?>
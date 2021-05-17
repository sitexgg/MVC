<style>
		/* hardware accelatator class */	
		.trans3d
		{
			-webkit-transform-style: preserve-3d;
			-webkit-transform: translate3d(0, 0, 0);
			-moz-transform-style: preserve-3d;
			-moz-transform: translate3d(0, 0, 0);
			-ms-transform-style:preserve-3d;
			-ms-transform: translate3d(0, 0, 0);
			transform-style:preserve-3d;
			transform: translate3d(0, 0, 0);

			/*-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-ms-backface-visibility:hidden;
			backface-visibility:hidden;*/
		}
		
		#contentContainer
		{
			position:absolute;
			margin-left:-500px;
			margin-top:-500px;
			left:50%;
			top:50%;
			width:1000px;
			height:1000px;
		}
		
		#carouselContainer
		{
			position:absolute;
			margin-left:-500px;
			margin-top:-500px;
			left:50%;
			top:50%;
			width:1000px;
			height:1000px;
		}
		
		.carouselItem
		{
			width:320px;
			height:130px;
			position:absolute;
			left:50%;
			top:50%;
			margin-left:-160px;
			margin-top:-90px;
			visibility:hidden;
		}
		
		.carouselItemInner
		{
			width:320px;
			height:130px;
			position:absolute;
			background-color:rgba(255, 255, 255, .75);
			border: 3px solid rgb(40, 120, 120);
			color:aqua;
			font-size:72px;
			left:50%;
			top:50%;
			margin-left:-160px;
			margin-top:-90px;
			text-align:center;
			padding-top:50px;
			
		}
		.carouselItemInner:hover {
			cursor: pointer;
			box-shadow: 0 0 30px rgb(119, 114, 114);
			border: 3px solid rgb(255, 255, 255);
		}
	</style>
	<div id="contentContainer" class="trans3d"> 
	<section id="carouselContainer" class="trans3d" style="background-image: url('https://kazmkpu.kz/images/logo_kz.svg'); background-repeat: none; background-size: cover; border-radius: 1000px;">
		<figure id="item1" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/1.jpg'); background-size: cover;"></div></figure>
		<figure id="item2" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/2.jpg'); background-size: cover;"></div></figure>
		<figure id="item3" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/3.jpg'); background-size: cover;"></div></figure>
		<figure id="item4" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/4.jpg'); background-size: cover;"></div></figure>
		<figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/5.jpg'); background-size: cover;"></div></figure>
		<figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/6.jpg'); background-size: cover;"></div></figure>
		<figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/7.jpg'); background-size: cover;"></div></figure>
		<figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/8.jpg'); background-size: cover;"></div></figure>
		<figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/9.jpg'); background-size: cover;"></div></figure>
		<figure id="item10" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/10.jpg'); background-size: cover;"></div></figure>
		<figure id="item11" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/11.jpg'); background-size: cover;"></div></figure>
		<figure id="item12" class="carouselItem trans3d"><div class="carouselItemInner trans3d" style="background-image: url('/public/img/slider/12.jpg'); background-size: cover;"></div></figure>	
	</section>
	</div>
<!-- partial -->
  	<script src='https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/js/libs.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script>
		// set and cache variables
		var w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
		var mouseX = 0;
		var mouseY = 0;
		var mouseZ = 0;
		var addX = 0;
		
		
		// fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
		// no need to create my own :)
		var fps_counter = {
			
			tick: function () 
			{
				// this has to clone the array every tick so that
				// separate instances won't share state 
				this.times = this.times.concat(+new Date());
				var seconds, times = this.times;
        
				if (times.length > this.span + 1) 
				{
					times.shift(); // ditch the oldest time
					seconds = (times[times.length - 1] - times[0]) / 1000;
					return Math.round(this.span / seconds);
				} 
				else return null;
			},
 
			times: [],
			span: 20
		};
		var counter = Object.create(fps_counter);
		
		
		
		$(document).ready( init )
		
		function init()
		{
			w = $(window);
			container = $( '#contentContainer' );
			carousel = $( '#carouselContainer' );
			item = $( '.carouselItem' );
			itemLength = $( '.carouselItem' ).length;
			fps = $('#fps');
			rY = 360 / itemLength;
			radius = Math.round( (250) / Math.tan( Math.PI / itemLength ) );
			
			// set container 3d props
			TweenMax.set(container, {perspective:600})
			TweenMax.set(carousel, {z:-(radius)})
			
			// create carousel item props
			
			for ( var i = 0; i < itemLength; i++ )
			{
				var $item = item.eq(i);
				var $block = $item.find('.carouselItemInner');
				
        //thanks @chrisgannon!        
        TweenMax.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
				
				animateIn( $item, $block )						
			}
			
			// set mouse x and y props and looper ticker
			window.addEventListener( "mousemove", onMouseMove, false );
			ticker = setInterval( looper, 1000/60 );			
		}
		
		function animateIn( $item, $block )
		{
			var $nrX = 360 * getRandomInt(2);
			var $nrY = 360 * getRandomInt(2);
				
			var $nx = -(2000) + getRandomInt( 4000 )
			var $ny = -(2000) + getRandomInt( 4000 )
			var $nz = -4000 +  getRandomInt( 4000 )
				
			var $s = 1.5 + (getRandomInt( 10 ) * .1)
			var $d = 1 - (getRandomInt( 8 ) * .1)
			
			TweenMax.set( $item, { autoAlpha:1, delay:$d } )	
			TweenMax.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
			TweenMax.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
			TweenMax.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
		}
		
		function onMouseMove(event)
		{
			mouseX = -(-(window.innerWidth * .5) + event.pageX) * .0025;
			mouseY = -(-(window.innerHeight * .5) + event.pageY ) * .01;
			mouseZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + event.pageY ) - 200);
		}
		
		// loops and sets the carousel 3d properties
		function looper()
		{
			addX += mouseX
			TweenMax.to( carousel, 1, { rotationY:addX, rotationX:mouseY, ease:Quint.easeOut } )
			TweenMax.set( carousel, {z:mouseZ } )
			fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
		}
		
		function getRandomInt( $n )
		{
			return Math.floor((Math.random()*$n)+1);	
		}
	</script>
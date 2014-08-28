<?php
/*hide admin bar when logged*/
add_filter('show_admin_bar', '__return_false');
add_filter('wp_footer','widget_text', 'do_shortcode');
add_action( 'wp_enqueue_scripts', 'add_jquery' );
add_action( 'wp_footer', 'fixedMenu' );
add_action( 'wp_footer', 'addAttr' );
add_action( 'wp_footer', 'smoothScroll' );
add_action( 'wp_footer', 'currentPage' );
add_action( 'wp_footer', 'map' );
add_action( 'wp_footer', 'highlightMenu' );

function add_jquery()
{
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/waypoints/waypoints.min.js', array( 'jquery' ), '1.0.0' );
}

/*menu fix to top on scroll*/
function fixedMenu()
{
?>
	<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$(window).bind('scrollstart scroll', function()
		{
		if ($(window).scrollTop() > 75)
			{
				$('.primary-navigation').addClass('transparent');
				$('.primary-navigation ul li a').addClass('dark');
			}
		else
			{
				$('.primary-navigation').removeClass('transparent');
				$('.primary-navigation ul li a').removeClass('dark');
			}
		});
	});
	</script>
<?php
}
/*smooth scroll*/
function smoothScroll()
{
?>
	<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('a[href*=#]:not([href=#])').click(function()
		{
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
	        || location.hostname == this.hostname)
      {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length)
		    {
	      	$('html,body').animate(
	  	    {
	         scrollTop: target.offset().top
	        }, 1000);
	       return false;
	      }
	    }
		});
	});
	</script>
<?php
}/*google map api*/
function map()
{
?>
	<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-VMarQTuahEgWrT0SVc9VWbLacbabxpM&sensor=true">
  </script>
  <script type="text/javascript">
  function initialize()
  {
  	var myLatlng = new google.maps.LatLng(44.934562,-93.212496);
  	var isDraggable;
  	//stop map from taking over on small screens
  	if(jQuery(window).height() < 600)
    {//alert('Less than intial size')
  		isDraggable = false;
    }
  	else
  	{//alert('More than intial size')
  		isDraggable = true;
  	}

  	var mapOptions =
    {
      zoom: 15,
      center: myLatlng,
      scrollwheel: false,
      draggable: isDraggable,
      panControl:false,
      zoomControl:true,
      mapTypeControl:true,
      scaleControl:true,
      streetViewControl:true,
      overviewMapControl:true,
      rotateControl:true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

 	 	var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var marker = new google.maps.Marker(
    {
    	position: myLatlng,
      map: map,
      title: 'Come see us!'
    });
  }//initialize

	google.maps.event.addDomListener(window, 'load', initialize);
  </script>
<?php
}//end map
?>
<?php
/*menu highlight on scroll*/
function highlightMenu()
{
?>
	<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('a').blur();
		$('#hoursPhone').waypoint(function()
		{
			$('a').removeClass('active');
			$('a').trigger('blur');
			$('#footerNav a').trigger('blur');
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '-50%',
			triggerOnce: false
		});

		$('#map').waypoint(function(direction)
		{
		  if (direction === 'down')
			{
		  	$('a.dark.active').removeClass('active');
				$('a').trigger('blur');
				$('#footerNav a').trigger('blur');
				$('#menu-item-333 a').addClass('active');
		  }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '25%',
			triggerOnce: false
		}).waypoint(function(direction)
			{
		  	if (direction === 'up')
			  {
		  		$('a.dark.active').removeClass('active');
					$('a').trigger('blur');
					$('#footerNav a').trigger('blur');
					$('#menu-item-333 a').addClass('active');
		 	 }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '-100%',
			triggerOnce: false
		});

		$('#menuSlideshow').waypoint(function(direction)
		{
		  if (direction === 'down')
			{
		  	$('a.dark.active').removeClass('active');
				$('a').trigger('blur');
				$('#footerNav a').trigger('blur');
				$('#menu-item-135 a').addClass('active');
		  }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '25%',
			triggerOnce: false
		}).waypoint(function(direction)
			{
		  	if (direction === 'up')
			  {
		  		$('a.dark.active').removeClass('active');
					$('a').trigger('blur');
					$('#footerNav a').trigger('blur');
					$('#menu-item-135 a').addClass('active');
		 	 }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '-200%',
			triggerOnce: false
		});

		$('#aboutPg').waypoint(function(direction)
		{
		  if (direction === 'down')
			{
		  	$('a.dark.active').removeClass('active');
				$('a').trigger('blur');
				$('#footerNav a').trigger('blur');
				$('#menu-item-136 a').addClass('active');
		  }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '25%',
			triggerOnce: false
		}).waypoint(function(direction)
			{
		  	if (direction === 'up')
			  {
		  		$('a.dark.active').removeClass('active');
					$('a').trigger('blur');
					$('#footerNav a').trigger('blur');
					$('#menu-item-136 a').addClass('active');
		 	 }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '-100%',
			triggerOnce: false
		});

		$('#eventsPg').waypoint(function(direction)
		{
		  if (direction === 'down')
			{
		  	$('a.dark.active').removeClass('active');
				$('a').trigger('blur');
				$('#footerNav a').trigger('blur');
				$('#menu-item-129 a').addClass('active');
		  }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '25%',
			triggerOnce: false
		}).waypoint(function(direction)
			{
		  	if (direction === 'up')
			  {
		  		$('a.dark.active').removeClass('active');
					$('a').trigger('blur');
					$('#footerNav a').trigger('blur');
					$('#menu-item-129 a').addClass('active');
		 	 }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '-100%',
			triggerOnce: false
		});

		$('#pressPg').waypoint(function(direction)
		{
		  if (direction === 'down')
			{
		  	$('a.dark.active').removeClass('active');
				$('a').trigger('blur');
				$('#footerNav a').trigger('blur');
				$('#menu-item-138 a').addClass('active');
		  }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '25%',
			triggerOnce: false
		}).waypoint(function(direction)
			{
		  	if (direction === 'up')
			  {
		  		$('a.dark.active').removeClass('active');
					$('a').trigger('blur');
					$('#footerNav a').trigger('blur');
					$('#menu-item-138 a').addClass('active');
		 	 }
		},
		{
			context: window,
			continuous: true,
			enabled: true,
			horizontal: false,
			offset: '-100%',
			triggerOnce: false
		});
		$.waypoints('refresh');
	});//highlightMenu
	</script>
<?php
}//end menuHighlight
?>
$(document).ready(function() {

/*
//video events
	document.getElementById("myVideo" ).load();

    $('#desert').hide();

	// var vid = document.getElementById("myVideo");
	// 		// vid.oncanplay = function() {
	// 		//     console.log('Can start playing video');
	// 		// };
	//  vid.oncanplaythrough = function() {
	//  	console.log('Can play through video without stopping');
	//  };
				

//
setTimeout(function(){ $('#myVideo').fadeOut();  $('#desert').fadeIn(); }, 16000);
*/

//content image?

	$('#content-img').css({
		   'transform' : 'scale(1)',
		   'opacity' : '1'
		});
	$('.box').css({
		   'opacity' : '1',
		   'margin-top' : '10px'
		});
	$('#fixed-social').css({
		   'left' : '0'
		});


/*nav bar scrolling*/

var previousScroll = 0;

  $(window).scroll(function(){

    var currentScroll = $(this).scrollTop();

    
    if (currentScroll > 0 &&+ currentScroll < $(document).height() - $(window).height()){
      /*
        If the current scroll is greater than the previous scroll (i.e we're scrolling down the page), hide the nav.
      */
      if (currentScroll > previousScroll){
        window.setTimeout(hideNav, 300);
      /*
        Else we are scrolling up (i.e the previous scroll is greater than the current scroll), so show the nav.
      */
      } else {
        window.setTimeout(showNav, 300);
      }
      /* 
        Set the previous scroll value equal to the current scroll.
      */
      previousScroll = currentScroll;
    }

  });

  function hideNav() {
    $("[data-nav-status='toggle']").removeClass("is-visible").addClass("is-hidden");
  }
  function showNav() {
    $("[data-nav-status='toggle']").removeClass("is-hidden").addClass("is-visible");
  }




  $(window).scroll(function() {
      if ($(window).scrollTop() >= 400) {
        $('#popup').css({
		   'transform' : 'scale(1)',
		   'opacity' : '1'
		});
		$('#star').css({
		   'margin-top' : '-60px',
		   'transform' : 'translateX(-50%)',
		   'opacity' : '1'
		});
		$('#step-1').css({
		   'margin-top' : '10px',
		   'opacity' : '1'
		});
		$('#step-2').css({
		   'margin-top' : '30px',
		   'opacity' : '1'
		});

      }
      else{
        $('#popup').css({
		   'transform' : 'scale(.8)',
		   'opacity' : '0'
		});
		$('#star').css({
		   'margin-top' : '-40px',
		   'transform' : 'translateX(-50%)',
		   'opacity' : '0'
		});
		$('#step-1').css({
		   'margin-top' : '20px',
		   'opacity' : '0'
		});
		$('#step-2').css({
		   'margin-top' : '40px',
		   'opacity' : '0'
		});
    }
  }); 





// MODAL

	$('#enquire-a').click( function(){
		$('#modal').addClass('modal-visible');
	});
	
	$('#modal').on('click', function(event){

		if( $(event.target).is($('#modal')) ) {

			$(this).removeClass('modal-visible');
		}	

	});

// ENDMODAL

	/*slider*/


	$("#slideshow > div:gt(0)").hide();

	setInterval(function() {
	  $('#slideshow > div:first')
	    .fadeOut(1000)
	    .next()
	    .fadeIn(1000)
	    .end()
	    .appendTo('#slideshow');
	}, 4000);



});




// SLIDER DESTINATIONS

class InfiniteSlider {
	constructor(animTime = '10000', selector = '.slider', container = '#slider-container') {
		this.slider = document.querySelector(selector)
		this.container = document.querySelector(container)
		this.width = 0
		this.oldWidth = 0
		this.duration = parseInt(animTime)
		this.start = 0
		this.refresh = 0 //0, 1, or 2, as in steps of the animation
		this._prevStop = false
		this._stop = false
		this._oldTimestamp = 0
	}
	
	animate() {
		if ($('#slider-container').length) {
		/* fix for browsers who like to run JS before images are loaded */
		const imgs = Array.prototype.slice.call(this.slider.querySelectorAll('img'))
						.filter(img => {
							return img.naturalWidth === 0
						})
		if (imgs.length > 0) {
			window.requestAnimationFrame(this.animate.bind(this));
			return
		}
		
		/* Add another copy of the slideshow to the end, keep track of original width */
		this.oldWidth = this.slider.offsetWidth
		const sliderText = '<span class="slider-extra">' + this.slider.innerHTML + '</span>'
		this.slider.innerHTML += sliderText

		/* can have content still when we move past original slider */
		this.width = this.slider.offsetWidth
		const minWidth = 2 * screen.width

		/* Add more slideshows if needed to keep a continuous stream of content */
		while (this.width < minWidth) {
			this.slider.innerHTML += sliderText
			this.width = this.slider.width
		}
		this.slider.querySelector('.slider-extra:last-child').classList.add('slider-last')
		
		/* loop animation endlesssly (this is pretty cool) */
		window.requestAnimationFrame(this.controlAnimation.bind(this))
	}
	}
	
	halt() {
		this._stop = true
		this._prevStop = false
	}
	
	go() {
		this._stop = false
		this._prevStop = true
	}
	
	stagnate() {
		this.container.style.overflowX = "scroll"
	}
	
	controlAnimation(timestamp) {
		//console.log('this.stop: ' + this._stop + '\nthis.prevStop: ' + this._prevStop)
		if (this._stop === true) {
			if (this._prevStop === false) {
				this.slider.style.marginLeft = getComputedStyle(this.slider).marginLeft
				this._prevStop = true
				this._oldTimestamp = timestamp
			}
		} else if (this._stop === false && this._prevStop === true) {
			this._prevStop = false
			this.start = this.start + (timestamp - this._oldTimestamp)
		} else {
			//reset animation
			if (this.refresh >= 1) {
				this.start = timestamp
				this.slider.style.marginLeft = 0
				this.refresh = 0
				window.requestAnimationFrame(this.controlAnimation.bind(this))
				return
			}
			if (timestamp - this.start >= this.duration) {
				this.refresh = 1
			}
			
			const perc = ((timestamp - (this.start)) / this.duration) * this.oldWidth
			this.slider.style.marginLeft = (perc - this.oldWidth ) + 'px'

			//console.log(screen.width); 	// 1920
			//console.log(this.width); 	// 5715
			//console.log(this.oldWidth);  	// 2857
			//console.log(this.slider.width);  	// undef

		}
		window.requestAnimationFrame(this.controlAnimation.bind(this))
		return
	}
	
	getIeWidth() {
		this.slider.style.marginLeft = '-99999px';
	}
	
	// ie11Fix() {
	// 	this.slider.querySelector('.slider-last').style.position = 'absolute';
	// }
}

function detectIE() {
	var ua = window.navigator.userAgent
	// var msie = ua.indexOf('MSIE ')

	// if (msie > 0) {
	// 	// IE 10 or older => return version number
	// 	return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10)
	// }
	
	// var trident = ua.indexOf('Trident/')
	// if (trident > 0) {
	// 	// IE 11 => return version number
	// 	var rv = ua.indexOf('rv:')
	// 	return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10)
	// }

	// var edge = ua.indexOf('Edge/');
	// if (edge > 0) {
	// 	// Edge (IE 12+) => return version number
	// 	return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10)
	// }

	// other browser
	return false
}

document.addEventListener('DOMContentLoaded', function() {

	if ($('#slider-container').length) {

	const slider = new InfiniteSlider(40000)

	
	slider.animate()
	document.querySelector('#slider-container')
		.addEventListener('mouseenter', slider.halt.bind(slider))
	document.querySelector('#slider-container')
		.addEventListener('mouseleave', slider.go.bind(slider))

}});







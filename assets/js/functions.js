// register split text
gsap.registerPlugin(ScrollTrigger, SplitText, MotionPathPlugin)

// global selectors
const body = document.body
const select = (e) => document.querySelector(e)
const selectAll = (e) => document.querySelectorAll(e)
const selectId = (id) => document.getElementById(id)
const vh = (coef) => window.innerHeight * (coef/100)
const vw = (coef) => window.innerWidth * (coef/100)

// locomotive scroll
let scroll

// init all click, mouseover and keyup functions
function initClickAndKeyFunctions() {

	// prevent barba from double clicking buttons more than once
	// https://stackoverflow.com/a/36794629/4658966
	function isDoubleClicked(e) {
		if (e.data('isclicked')) return true
		e.data('isclicked', true)
		setTimeout(function () {
			e.removeData('isclicked')
		}, 300)
		return false
	}

	// make anchor links scroll smoothy
	$('.sliding-link').click(function(e) {
		if (isDoubleClicked($(this))) return
		e.preventDefault()
		var aid = $(this).attr('href')
		$('html, body').animate({ scrollTop: $(aid).offset().top }, 1000)
	})

	// correct label click
	$('label').click(function(e){
		if (isDoubleClicked($(this))) return
		e.stopImmediatePropagation()
	})

	// open / close fs menu
	$('.open-fs').click(function(){
		if (isDoubleClicked($(this))) return

		var tl = gsap.timeline()

		tl.to('body', {
			overflow: 'hidden',
			duration: 0
		})

		tl.call(function() {
			scroll.stop()
			$('.open-fs').addClass('active')
		})

		tl.to('.blur', {
			opacity: 1,
			pointerEvents: 'auto',
			duration: .5
		})

		tl.to('.open-fs', {
			scale: 0,
			transformOrigin: '100% 0',
			duration: .3
		}, '-=.5')

		tl.to('#fs-menu', {
			pointerEvents: 'auto'
		}, '-=.3')

		tl.to('#fs-menu .blue-box', {
			scale: 1,
			ease: 'elastic.out(.5, .3)',
			duration: 1
		}, '-=.5')

	})

	// close fs
	function closeFs() {

		var tl = gsap.timeline()

		tl.to('.blur', {
			opacity: 0,
			pointerEvents: 'none',
			duration: .5
		})

		tl.to('#fs-menu .blue-box', {
			scale: 0,
			ease: Power4.easeOut,
			duration: .5
		}, '-=.5')

		tl.to('#fs-menu', {
			pointerEvents: 'none'
		}, '-=.5')

		tl.to('.open-fs', {
			scale: 1,
			duration: .3
		}, '-=.2')

		tl.to('body', {
			overflow: 'auto',
			duration: 0
		})

		tl.call(function() {
			scroll.start()
			$('.open-fs').removeClass('active')
		})
	}

	// close fs
	$('.close-fs, #fs-menu a, .blur').click(function(){
		if (isDoubleClicked($(this))) return
		closeFs()
	})

	// close all opened menus when pressing the ESC key
	$(document).keyup(function(e) {
		if(e.key === 'Escape') {
			closeFs()
		}
	})

	// accordion open / close
	$('.accordion .question').click(function(){
		if (isDoubleClicked($(this))) return
		$(this).toggleClass('active')
		$(this).siblings('.answer').slideToggle()
	})
}

// init magnetic buttons
function initMagneticButtons() {
    
	// found via: https://codepen.io/tdesero/pen/RmoxQg
	var magnets = document.querySelectorAll('.magnetic')
	var strength = 100

	if(window.innerWidth > 540){
		magnets.forEach( (magnet) => {
			magnet.addEventListener('mousemove', moveMagnet )
			$(this.parentNode).removeClass('not-active')
			magnet.addEventListener('mouseleave', function(event) {
				gsap.to( event.currentTarget, 1.5, {
					x: 0, 
					y: 0, 
					ease: Elastic.easeOut
				})
			})
		})

		function moveMagnet(event) {
			var magnetButton = event.currentTarget
			var bounding = magnetButton.getBoundingClientRect()
			var magnetsStrength = magnetButton.getAttribute('data-strength')
				
			gsap.to( magnetButton, 1.5, {
				x: ((( event.clientX - bounding.left)/magnetButton.offsetWidth) - 0.5) * magnetsStrength,
				y: ((( event.clientY - bounding.top)/magnetButton.offsetHeight) - 0.5) * magnetsStrength,
				rotate: "0.001deg",
				ease: Power4.easeOut
			})
		}
	}
}
  

// change the menu active item according to barba body class
function updateMenu() {	
	$('#top-menu .menu a, #top-menu .menu .wrapper').removeClass('active')

	setTimeout(function() {

		var currentUrl = window.location.href
		$("link[rel='canonical']").attr('href', currentUrl)
		
		$('#top-menu .menu a').each(function() {
			var href = $(this).attr('href')
			if ($('#main-content').attr('class').includes(href)) {
				$(this).addClass('active')
			}
		})

		if ($('#main-content').attr('class').includes('services')) {
			$('#top-menu .menu .wrapper').addClass('active')
		}
		
	}, 50)
}

// here goes all the scroll related animations
function scrollTriggerAnimations() {

	// fill title
	if($('.fill-title').length) {

		const title = new SplitText('.fill-title', { type: 'lines' })

		title.lines.forEach((target) => {
			gsap.to(target, {
				backgroundPositionX: 0,
				ease: 'none',
				scrollTrigger: {
					trigger: target,
					scrub: 2,
					start: 'top 97%',
					end: 'top 50%'
				}
			})
		})
	}

	// reveal text
	if($('.reveal-text').length) {

        const texts = selectAll('.reveal-text')
    
        texts.forEach(text => {
            
            // reset if needed
            if(text.anim) {
                text.anim.progress(1).kill()
            	text.split.revert()
            }

            text.split = new SplitText(text, { 
                type: 'lines, words, chars',
                linesClass: 'split-line'
            })

            // set up the anim
            text.anim = gsap.from(text.split.chars, {
                scrollTrigger: {
                    trigger: text,
                    start: 'top 85%'
                },
                duration: .75,
                ease: 'circ.out', 
                y: '100%',
				autoAlpha: 0, 
                stagger: 0.0375
            })
        })

	}

	// footer truck
	if($('.animated-truck').length) {

		var tl = gsap.timeline({
			paused: true,
			delay: .5,
			scrollTrigger: {
				trigger: '#truck',
				toggleActions: 'restart pause resume none',
				start: '0 110%'
			}
		})

		tl.to('.animated-truck', {
			x: vw(100),
			duration: 5,
			ease: Power3.easeOut
		})

		tl.to('.animated-truck', {
			motionPath: {
				path: '#shape',
				align: '#shape',
				alignOrigin: [.5, .975],
				autoRotate: true
			},
			duration: .5,
			ease: Power1.easeIn
		})

		tl.to('.animated-truck', {
			y: -3000,
			autoAlpha: 0,
			duration: 2,
			ease: 'none'
		})

	}

	// animated lines
	if($('.animated-line').length) {
		gsap.utils.toArray('.animated-line').forEach(item => {
			gsap.from(item, {
				scaleX: 0,
				duration: 1,
				ease: 'power1.inOut',
				scrollTrigger: {
					trigger: item,
					start: 'top 90%'
				}
			})
		})
	}

	// rotating button
	if($('.rotating-button').length) {
		let forward = gsap.timeline({
			repeat: -1,
			onReverseComplete: function() {
				forward.reverse(0)
			}
		})

		forward.to('.rotating-button .inner-text svg', {
			rotation: '+=359deg',
			duration: 7,
			ease: 'linear'
		})
	}

	// animate sliders entrance
	if($('.animated-slider').length) {
		gsap.utils.toArray('.animated-slider').forEach(item => {

			const slides = gsap.utils.toArray(item.querySelectorAll('.swiper-slide'))

			gsap.from(slides, {
				x: vw(75),
				autoAlpha: 0,
				duration: 1,
				stagger: .125,
				scrollTrigger: {
					trigger: item,
					start: '0 100%'
				}
			})

		})
	}

	// animated-number
	if($('.animated-blocks').length) {
		gsap.from('.animated-blocks .rounded-blue-block', {
			scale: 0,
			duration: 1.5,
			stagger: .125,
			ease: 'power1.inOut',
			scrollTrigger: {
				trigger: '.animated-blocks',
				start: 'top 90%'
			}
		})
	}

	// animated numbers
	if($('.animated-number').length) {

		// animated counter
		gsap.utils.toArray('.animated-number span').forEach(item => {
			gsap.from(item, {
				textContent: '0',
				duration: 2,
				ease: 'power1.inOut',
				modifiers: {
					textContent: value => formatNumber(value, 0)
				},
				scrollTrigger: {
					trigger: item,
					start: 'top 90%'
				}
			})
		})

		// format the number in US standard
		function formatNumber(value, decimals) {
			let s = (+value).toLocaleString('en-US').split('.')
			return decimals ? s[0] + '.' + ((s[1] || '') + '00000000').substr(0, decimals) : s[0]
		}

	}

	// follow mouse object
	if($('.follow-mouse-object').length) {
		gsap.utils.toArray('.follow-mouse-object').forEach(item => {

			const parent = item.closest('.follow-mouse-section')

			function moveCircle(e) {
				gsap.to(item, 1.75, {
					x: e.clientX - $(parent).offset().left,
					y: e.clientY - $(parent).offset().top,
					ease: Elastic.easeOut
				})
			}

			$(parent).on('mousemove', moveCircle)
			$(parent).on('mousewheel', moveCircle)

			$(parent).on('mouseenter', function(){
				gsap.to(item, {
					scale: 1.25,
					opacity: 1,
					duration: .5,
					ease: 'circ.out'
				})
			})

			$(parent).on('mouseleave', function(){
				gsap.to(item, {
					scale: 0,
					opacity: 0,
					duration: .5,
					ease: 'circ.out'
				})
			})

		})
	}

	// stagger from right to left
	if($('.stagger-right-left').length) {

		gsap.set('.stagger-right-left > *', {
			autoAlpha: 0,
			x: vw(20)
		})

		ScrollTrigger.batch('.stagger-right-left > *', {
			start: '0 95%',
			once: true,
			onEnter: elements => {
				gsap.to(elements, {
					autoAlpha: 1,
					x: 0,
					duration: 1,
					ease: 'circ.out'
				})
			}
		})

	}

	// parallax img
	/*
    if($('.parallax-img').length) {
		gsap.utils.toArray('.parallax-img').forEach(item => {

			const strength = $(item).attr('data-strength')

			gsap.from(item, {
				yPercent: strength * -1,
				scrollTrigger: {
					trigger: item,
					scrub: true,
					start: 'top bottom',
					end: '+=' + vh(300)
				}
			})
		})
	}
	*/
}

// init all sliders
function initSliders() {

	// weagle cast slider
	if($('.weagle-cast-slider').length) {

		const weagle_cast_slider = new Swiper('.weagle-cast-slider', {
			slidesPerView: 1.1,
			loop: false,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: false,
			calculateHeight: false,
			spaceBetween: 10,
			speed: 600,
			/*
			autoplay: {
				delay: 4000,
			},
			*/
			breakpoints: {
				575: {
					slidesPerView: 1.5,
					spaceBetween: 20
				},
				768: {
					slidesPerView: 2.3,
					spaceBetween: 30
				}
			},
			on: {
				touchStart(){
					$('.weagle-cast-slider').addClass('is-dragging')
				}, touchEnd(){
					$('.weagle-cast-slider').removeClass('is-dragging')
				}
			}
		})

		setTimeout(function(){
			weagle_cast_slider.update()
		}, 50)
	}

	// problems slider
	if($('.problems-slider').length) {

		const problems_slider = new Swiper('.problems-slider', {
			slidesPerView: 1,
			loop: false,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: false,
			calculateHeight: false,
			spaceBetween: 15,
			speed: 600,
			autoplay: {
				delay: 6000,
			},
			breakpoints: {
				575: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				1200: {
					slidesPerView: 3,
					spaceBetween: 30
				}
			},
			on: {
				touchStart(){
					$('.problems-slider').addClass('is-dragging')
				}, touchEnd(){
					$('.problems-slider').removeClass('is-dragging')
				}
			}
		})

		setTimeout(function(){
			problems_slider.update()
		}, 50)
	}

}

// page transition in
function pageTransitionIn() {

	var tl = gsap.timeline()

	tl.set('html', {
		cursor: 'wait'
	})

	tl.set('body', {
		overflow: 'hidden'
	})

	tl.set('.page-transition', {
		pointerEvents: 'auto'
	})

	tl.set('.page-transition .title', {
		autoAlpha: 0
	})

	tl.call(function() {
		scroll.stop()
		$('.page-transition .title p').html()
	})

}

// page transition out
function pageTransitionOut() {

	var tl = gsap.timeline()

	tl.to('html', {
		cursor: 'auto',
		duration: 0
	})

	tl.to('body', {
		overflow: 'auto',
		duration: 0
	})

	tl.call(function() {
		scroll.start()
		let pageTitle = $('#main-content').attr('data-page-title')
		$('.page-transition .title p').html(pageTitle)
	})

	setTimeout(function(){

		let title = new SplitText($('.page-transition .title p'), { 
			type: 'lines, words, chars'
		})
	
		let chars = title.chars

		var tl2 = gsap.timeline()

		tl2.to('.page-transition .title', {
			autoAlpha: 1,
			duration: 0
		})

		tl2.from(chars, {
			duration: 0.8,
			opacity: 0,
			y: 30,
			ease: 'back',
			stagger: 0.025
		})

		tl2.call(function(){
			document.dispatchEvent(new Event('playInternalBanner'))
		})

		tl2.to(chars, {
			duration: 0.8,
			opacity: 0,
			y: -30,
			ease: 'back',
			stagger: 0.025
		}, '+=.1')

		tl.to('.page-transition', {
			pointerEvents: 'none'
		})

	}, 5)

}

// delay function
function delay(n) {
	n = n || 2000
	return new Promise((done) => {
		setTimeout(() => {
			done()
		}, n)
	})
}

// init fancybox
function initFancybox() {
	Fancybox.bind('[data-fancybox]', {
		autoFocus: false,
		dragToClose: false,
		placeFocusBack: false
	})
}

// init lazyload
function initLazyLoad() {
	const lazyLoadInstance = new LazyLoad({ 
		elements_selector: '.lazy',
		container: select('.main-wrap')
	})
}

// validate footer newsletter
function validateForms() {
	if ($('.form-validate').length) {
		$('.form-validate').each(function () {
			var theForm = $(this)

			// initialize the jquery validation plugin for the form
			theForm.validate({
				errorPlacement: function (error, element) {
					error.appendTo(element.closest('.form-line'))
					error.addClass('error-msg')
				},
				highlight: function(element) {
					$(element).closest('.form-line').addClass('error')
				},
				unhighlight: function(element) {
					$(element).closest('.form-line').removeClass('error')
				},
				submitHandler: function(form) {
					let originalForm = $(form).get(0)
					let dataparam = new FormData(originalForm)

					// check if the form has an upload field and attach the file
					if ($('#file').length) {
						let attachment = $('#file')[0].files[0]
						dataparam.append('attachment', attachment)
					}

					$.ajax({
						type: 'POST',
						url: location.origin + '/clients/weagle/assets/php/sender.php', 			// localhost
						//url: location.origin + '/weagle/assets/php/sender.php', 					// dev.senzdsn
						//url: location.origin + '/assets/php/sender.php', 							// prod
						data: dataparam,
						dataType: 'html',
                		crossDomain: true,
						async: true,
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: function() {
							theForm.addClass('sending')
						},
						success: function(response) {
							theForm[0].reset()
							select('.contact-success').click()
							//console.log('success', response)
						},
						error: function(e) {
							select('.contact-error').click()
							//console.log('Unsuccessful:', e)
						},
						complete: function() {
							theForm.removeClass('sending')
						}
					})
				}
			})
		})
	}
}

// custom mouse cursor
function initMouseCursor() {

	let links = selectAll('a, button')
	let mouse = selectId('mouse')

	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseover', function(){
			gsap.to(mouse, {
				width: '5rem',
				height: '5rem',
				marginTop: '-2.5rem',
				marginLeft: '-2.5rem'
			})
		})
	}
	
	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseleave', function(){
			gsap.to(mouse, {
				width: '1.5rem',
				height: '1.5rem',
				marginTop: '-.75rem',
				marginLeft: '-.75rem'
			})
		})
	}

	function moveCircle(e) {
		gsap.to(mouse, 1.5, {
			x: e.clientX,
			y: e.clientY,
			ease: Elastic.easeOut
		})
	}
	
	window.addEventListener('mousemove', moveCircle)
}

// init smooth scroll
function initSmoothScroll(container) {

    scroll = new LocomotiveScroll({
      	el: container.querySelector('[data-scroll-container]'),
      	smooth: true,
		getDirection: true
    })

	new ResizeObserver(() => scroll.update()).observe(
		document.querySelector('[data-scroll-container]')
	)

    window.onresize = scroll.update()

    scroll.on('scroll', () => ScrollTrigger.update())

    ScrollTrigger.scrollerProxy('[data-scroll-container]', {
      	scrollTop(value) {
        	return arguments.length ? scroll.scrollTo(value, 0, 0) : scroll.scroll.instance.scroll.y
      	}, // we don't have to define a scrollLeft because we're only scrolling vertically
      	getBoundingClientRect() {
        	return {
				top: 0,
				left: 0,
				width: window.innerWidth,
				height: window.innerHeight
			}
      	},
      	// locomotive scroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the locomotive scroll - controlled element)
      	pinType: container.querySelector('[data-scroll-container]').style.transform ? 'transform' : 'fixed'
    })

    ScrollTrigger.defaults({
      	scroller: document.querySelector('[data-scroll-container]')
    })

    // each time the window updates, we should refresh scroll trigger and then update locomotive scroll
    ScrollTrigger.addEventListener('refresh', () => scroll.update())

    // after everything is set up, refresh() scroll trigger and update locomotive scroll because padding may have been added for pinning, etc
    ScrollTrigger.refresh()
}

// check is the user is in a touch device
function initCheckTouchDevice() {
    
	function isTouchScreendevice() {
	  	return 'ontouchstart' in window || navigator.maxTouchPoints
	}
	
	if(isTouchScreendevice()){
		$('main').addClass('touch')
		$('main').removeClass('no-touch')
		$('#mouse').remove()
	} else {
		$('main').removeClass('touch')
		$('main').addClass('no-touch')
		initMouseCursor()
	}

	$(window).resize(function() {
	  	if(isTouchScreendevice()){
			$('main').addClass('touch')
			$('main').removeClass('no-touch')
			$('#mouse').remove()
	  	} else {
			$('main').removeClass('touch')
			$('main').addClass('no-touch')
			initMouseCursor()
	  	}
	})
  
}

// disable console warnings and show the copyright message
function initCopyright() {
	//console.clear()
	const message = 'Design VVE Fight 🔗 www.vvefight.com \nCode Senz Design 🔗 www.senzdsn.com'
	const style = 'color: #f8f8f8; font-size: 12px; font-weight: bold; background-color: #0d0e13; padding: 8px'
	console.log(`%c${message}`, style)
}

// opening animation
function openingAnimation() {

	const opening = gsap.timeline()

	opening.set('html', {
		cursor: 'wait'
	})

	opening.set('body', {
		overflow: 'hidden'
	})

	opening.call(function() {
		scroll.stop()
	})

	opening.to('#opening .box', {
		autoAlpha: 0,
		duration: 0
	})

	opening.from('#opening .logo svg .icon', {
		xPercent: 81.7,
		duration: 1,
		ease: Power2.easeOut,
		delay: .75
	})

	opening.from('#opening .logo svg .letter', {
		xPercent: -150,
		autoAlpha: 0,
		duration: 1.25,
		stagger: .1,
		ease: 'elastic.out(.5, .3)'
	}, '-=.7')

	opening.to('html', {
		cursor: 'auto',
		duration: 0
	})

	opening.to('body', {
		overflow: 'auto',
		duration: 0
	})

	opening.call(function() {
		scroll.start()
	})

	if ($(window).width() > 993) { 
		opening.set('#opening .rounded-div-wrap.bottom', { 
		  	height: '10vh'
		})
	} else {
		opening.set('#opening .rounded-div-wrap.bottom', { 
		  	height: '5vh'
		})
	}

	opening.to('#opening .logo svg path', {
		yPercent: -150,
		duration: 1,
		stagger: .05,
		ease: 'elastic.out(.5, .3)'
	})

	opening.to('#opening .bg', {
		duration: .8,
		yPercent: -100,
		ease: 'Power3.easeInOut'
	}, '-=.9')

	opening.to('#opening .rounded-div-wrap.bottom', {
		duration: .85,
		height: '0',
		ease: 'Power3.easeInOut'
	}, '-=.6')

	opening.to('#opening', {
		pointerEvents: 'none',
		autoAlpha: 0,
		duration: 0
	})

	var text = new SplitText('#banner h1', { 
		type: 'lines, words, chars',
		linesClass: 'split-line'
	})

	opening.from('#banner video', {
		autoAlpha: 0, 
		yPercent: 40,
		duration: 1,
		ease: 'circ.out', 
	}, '-=1')

	opening.from(text.chars, {
		duration: .75,
		ease: 'circ.out', 
		yPercent: 100,
		autoAlpha: 0, 
		stagger: 0.0375
	}, '-=.75')

	opening.from('#banner .side', {
		scale: 0,
		duration: .6,
		ease: 'circ.out',
		transformOrigin: '100% 100%'
	}, '-=1.5')
}

// fire all scripts on page load
function initScripts() {
	initLazyLoad()
	scrollTriggerAnimations()
	initCheckTouchDevice()
	initFancybox()
	initCopyright()
	initClickAndKeyFunctions()
	validateForms()
	updateMenu()
	initSliders()
	initMagneticButtons()
}

function initBarba() {

	// config barba
	barba.init({
		sync: true,
		timeout: 6000,
		debug: true,
		transitions: [
			{
				once(data) {
					initSmoothScroll(data.next.container)
					initScripts()
					document.dispatchEvent(new Event('playInternalBanner'))
				},
				async leave(data) {
					pageTransitionIn(data.current)
					await delay(800)
					data.current.container.remove()
				},
				async enter(data) {
					pageTransitionOut(data.next)
				},
				async beforeEnter(data) {
					ScrollTrigger.getAll().forEach(t => t.kill())
					scroll.destroy()
					initSmoothScroll(data.next.container)
					initScripts()
				}
			}, {
				name: 'opening-animation',
				to: {
					namespace: ['home']
				},
				once(data) {
					initSmoothScroll(data.next.container)
					initScripts()
					openingAnimation()
				}
			}
		],

		views: [
			{
				namespace: 'internal',
				afterEnter() {

					// about us / contact pages functions
					if ($('#main-content').hasClass('about-us') || $('#main-content').hasClass('contact')) {
						
					}

					// services page functions
					if ($('#main-content').hasClass('services')) {
						
					}
				}
			}
		]
	})

	// do something before the transition starts
	barba.hooks.before(() => {
		select('html').classList.add('is-transitioning')
	})
	
	// do something after the transition finishes
	barba.hooks.after(() => {
		select('html').classList.remove('is-transitioning')
		// reinit locomotive scroll
		scroll.init()
		scroll.stop()
	})
	
	barba.hooks.enter(() => {
		scroll.destroy()
	})
	
	barba.hooks.afterEnter(() => {
		window.scrollTo(0, 0)
	})
}

// init barba
initBarba()
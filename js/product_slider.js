$(document).ready(function(){
	var index = 0;
	var classList = ['.jR3DCarouselGallery_1','.jR3DCarouselGallery_2','.jR3DCarouselGallery_3','.jR3DCarouselGallery_4','.jR3DCarouselGallery_5','.jR3DCarouselGallery_6','.jR3DCarouselGallery_7', '.jR3DCarouselGallery_8', '.jR3DCarouselGallery_9', '.jR3DCarouselGallery_10','.jR3DCarouselGallery_11','.jR3DCarouselGallery_12','.jR3DCarouselGallery_13','.jR3DCarouselGallery_14','.jR3DCarouselGallery_15','.jR3DCarouselGallery_16','.jR3DCarouselGallery_17','.jR3DCarouselGallery_18','.jR3DCarouselGallery_19','.jR3DCarouselGallery_20','.jR3DCarouselGallery_21','.jR3DCarouselGallery_22','.jR3DCarouselGallery_23','.jR3DCarouselGallery_24','.jR3DCarouselGallery_25','.jR3DCarouselGallery_26','.jR3DCarouselGallery_27','.jR3DCarouselGallery_28','.jR3DCarouselGallery_29','.jR3DCarouselGallery_30','.jR3DCarouselGallery_31','.jR3DCarouselGallery_32','.jR3DCarouselGallery_33','.jR3DCarouselGallery_34','.jR3DCarouselGallery_35'];

	var slides_1 = [{src: 'img/product/01.jpg'}, {src: 'img/product/02.jpg'}, {src: 'img/product/03.jpg'}];
	var slides_2 =  [{src: 'img/product/04.jpg'}, {src: 'img/product/05.jpg'}, {src: 'img/product/06.jpg'}];
	var slides_3 =  [{src: 'img/product/07.jpg'}, {src: 'img/product/08.jpg'}, {src: 'img/product/09.jpg'}];
	var slides_4 =  [{src: 'img/product/47.jpg'}, {src: 'img/product/48.jpg'}, {src: 'img/product/10.jpg'}];
	var slides_5 =  [{src: 'img/product/11.jpg'}, {src: 'img/product/12.jpg'}, {src: 'img/product/13.jpg'}];
	var slides_6 =  [{src: 'img/product/14.jpg'}, {src: 'img/product/15.jpg'}, {src: 'img/product/16.jpg'}];
	var slides_7 =  [{src: 'img/product/17.jpg'}, {src: 'img/product/18.jpg'}, {src: 'img/product/19.jpg'}];
	var slides_8 =  [{src: 'img/product/20.jpg'}, {src: 'img/product/21.jpg'}, {src: 'img/product/22.jpg'}];
	var slides_9 =  [{src: 'img/product/23.jpg'}, {src: 'img/product/24.jpg'}, {src: 'img/product/25.jpg'}];
	var slides_10 =  [{src: 'img/product/26.jpg'}, {src: 'img/product/27.jpg'}, {src: 'img/product/28.jpg'}];
	var slides_11 =  [{src: 'img/product/29.jpg'}, {src: 'img/product/30.jpg'}, {src: 'img/product/31.jpg'}];
	var slides_12 =  [{src: 'img/product/34.jpg'}, {src: 'img/product/50.jpg'}, {src: 'img/product/32.jpg'}];
	var slides_13 =  [{src: 'img/product/35.jpg'}, {src: 'img/product/36.jpg'}, {src: 'img/product/38.jpg'}];
	var slides_14 =  [{src: 'img/product/40.jpg'}, {src: 'img/product/39.jpg'}, {src: 'img/product/50.jpg'}];
	var slides_15 =  [{src: 'img/product/41.jpg'}, {src: 'img/product/42.jpg'}, {src: 'img/product/43.jpg'}];
	var slides_16 =  [{src: 'img/product/44.jpg'}, {src: 'img/product/45.jpg'}, {src: 'img/product/46.jpg'}];

	var slides_17 =  [{src: 'img/product/47.jpg'}, {src: 'img/product/48.jpg'}, {src: 'img/product/49.jpg'}];
	var slides_18 =  [{src: 'img/product/50.jpg'}, {src: 'img/product/51.jpg'}, {src: 'img/product/52.jpg'}];
	var slides_19 =  [{src: 'img/product/53.jpg'}, {src: 'img/product/54.jpg'}, {src: 'img/product/55.jpg'}];
	var slides_20 =  [{src: 'img/product/56.jpg'}, {src: 'img/product/57.jpg'}, {src: 'img/product/58.jpg'}];
	var slides_21 =  [{src: 'img/product/59.jpg'}, {src: 'img/product/60.jpg'}, {src: 'img/product/61.jpg'}];

	var slides_22 =  [{src: 'img/product/62.jpg'}, {src: 'img/product/63.jpg'}, {src: 'img/product/64.jpg'}];
	var slides_23 =  [{src: 'img/product/65.jpg'}, {src: 'img/product/66.jpg'}, {src: 'img/product/67.jpg'}];
	var slides_24 =  [{src: 'img/product/68.jpg'}, {src: 'img/product/69.jpg'}, {src: 'img/product/70.jpg'}];
	var slides_25 =  [{src: 'img/product/71.jpg'}, {src: 'img/product/72.jpg'}, {src: 'img/product/73.jpg'}];
	var slides_26 =  [{src: 'img/product/74.jpg'}, {src: 'img/product/75.jpg'}, {src: 'img/product/76.jpg'}];
	var slides_27 =  [{src: 'img/product/77.jpg'}, {src: 'img/product/78.jpg'}, {src: 'img/product/79.jpg'}];
	var slides_28 =  [{src: 'img/product/80.jpg'}, {src: 'img/product/81.jpg'}, {src: 'img/product/82.jpg'}];
	var slides_29 =  [{src: 'img/product/83.jpg'}, {src: 'img/product/84.jpg'}, {src: 'img/product/85.jpg'}];
	var slides_30 =  [{src: 'img/product/86.jpg'}, {src: 'img/product/87.jpg'}, {src: 'img/product/88.jpg'}];
	var slides_31 =  [{src: 'img/product/89.jpg'}, {src: 'img/product/90.jpg'}, {src: 'img/product/91.jpg'}];
	var slides_32 =  [{src: 'img/product/92.jpg'}, {src: 'img/product/93.jpg'}, {src: 'img/product/94.jpg'}];
	var slides_33 =  [{src: 'img/product/95.jpg'}, {src: 'img/product/96.jpg'}, {src: 'img/product/97.jpg'}];
	var slides_34 =  [{src: 'img/product/98.jpg'}, {src: 'img/product/99.jpg'}, {src: 'img/product/100.jpg'}];
	var slides_35 =  [{src: 'img/product/101.jpg'}, {src: 'img/product/102.jpg'}, {src: 'img/product/103.jpg'}];

	var slideList = [slides_1,slides_2,slides_3,slides_4,slides_5,slides_6,slides_7,slides_8,slides_9,slides_10,slides_11,slides_12,slides_13,slides_14,slides_15,slides_16,slides_17,slides_18,slides_19,slides_20,slides_21,slides_22,slides_23,slides_24,slides_25,slides_26,slides_27,slides_28,slides_29,slides_30,slides_31,slides_32,slides_33,slides_34,slides_35];
	var jR3DCarousel;
	

	function setUp(){
		var className = classList[index];
		var carouselProps = setUpCarousel(slideList[index]);
		jR3DCarousel = $(className).jR3DCarousel(carouselProps);
		$('.settings').html('<pre>$(className).className('+JSON.stringify(carouselProps, null, 4)+')</pre>');
		index++;
	}
	function show(slide){
		// console.log("Slide shown: ", slide.find('img').attr('src'))
	}
	//carouselProps.slides = getSlides(7);
	function setUpCarousel(slides){
		var carouselProps =  {
			width: 270, 				/* largest allowed width */
			height: 270, 				/* largest allowed height */
			slideLayout : 'fill',     /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
			animation: 'slide3D', 		/* slide | scroll | fade | zoomInSlide | zoomInScroll */
			animationCurve: 'ease',
			animationDuration: Math.random() + 1500,
			animationInterval: Math.random() * 5000,
			autoplay: true,
			controls: true,
			onSlideShow: show,		/* callback when Slide show event occurs */
			navigation: 'none',	/* circles | squares */
			slides: slides 			/* array of images source or gets slides by 'slide' class */
		}
		return carouselProps;
	}

	setInterval(function(){
		setUp();
	},Math.random() * 200);
});


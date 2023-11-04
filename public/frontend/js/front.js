'use strict';

document.addEventListener('DOMContentLoaded', function () {
	/* ===============================================================
		CUSTOM SELECT [CHOICES.JS]
	=============================================================== */
	function injectClassess(x) {
		let pickerCustomClass = x.dataset.customclass;
		let pickerSevClasses = pickerCustomClass.split(' ');
		x.parentElement.classList.add.apply(x.parentElement.classList, pickerSevClasses);
	}

	const selectPicker = document.querySelectorAll('.selectpicker');
	if (selectPicker.length) {
		selectPicker.forEach((el) => {
			const customSelect = new Choices(el, {
				placeholder: true,
				searchEnabled: false,
				itemSelectText: '',
				callbackOnInit: () => injectClassess(el),
			});
		});
	}

	/* ===============================================================
    	 COUNTRY SELECT BOX FILLING
  	=============================================================== */
	const request = new XMLHttpRequest();
	request.open('GET', 'js/countries.json');
	request.onload = function () {
		if (request.status >= 200 && request.status < 400) {
			const response = JSON.parse(request.responseText);

			var selectOption = '';
			response.forEach((country) => {
				selectOption += "<option value='" + country.name + "' data-dial-code='" + country.dial_code + "'>" + country.name + '</option>';
			});
			document.querySelectorAll('select.country').forEach((el) => {
				el.insertAdjacentHTML('beforeend', selectOption);
			});

			const countryChoices = document.querySelectorAll('.country');
			if (countryChoices.length) {
				countryChoices.forEach((el) => {
					const choices = new Choices(el, {
						placeholder: true,
						searchEnabled: false,
						itemSelectText: '',
						callbackOnInit: () => injectClassess(el),
					});
				});
			}
		}
	};
	request.send();

	/* ===============================================================
		GLIGHTBOX
	=============================================================== */
	const lightbox = GLightbox({
		touchNavigation: true,
	});

	/* ===============================================================
		PRODUCT DETAIL SLIDER
	=============================================================== */
	var productSliderThumbs = new Swiper('.product-slider-thumbs', {
		direction: 'horizontal',
		slidesPerView: 5,
		spaceBetween: 10,
		breakpoints: {
			560: {
				direction: 'vertical',
				slidesPerView: 1,
				spaceBetween: 0,
			},
		},
	});

	var productsSlider = new Swiper('.product-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		thumbs: {
			swiper: productSliderThumbs,
		},
	});

	/* ===============================================================
		DISABLE UNWORKED ANCHORS
	=============================================================== */
	document.querySelectorAll('a[href="#').forEach((el) => {
		el.addEventListener('click', function (e) {
			e.preventDefault();
		});
	});

	/* ===============================================================
         PRODUCT QUNATITY
      =============================================================== */
	document.querySelectorAll('.dec-btn').forEach((el) => {
		el.addEventListener('click', () => {
			var siblings = el.parentElement.querySelector('input');
			if (parseInt(siblings.value, 10) >= 1) {
				siblings.value = parseInt(siblings.value, 10) - 1;
			}
		});
	});
	document.querySelectorAll('.inc-btn').forEach((el) => {
		el.addEventListener('click', () => {
			var siblings = el.parentElement.querySelector('input');
			siblings.value = parseInt(siblings.value, 10) + 1;
		});
	});
});

//---------------------------This two part came from app.blade.php script -----------------//
var range = document.getElementById('range');
noUiSlider.create(range, {
	range: {
		'min': 0,
		'max': 2000
	},
	step: 5,
	start: [100, 1000],
	margin: 300,
	connect: true,
	direction: 'ltr',
	orientation: 'horizontal',
	behaviour: 'tap-drag',
	tooltips: true,
	format: {
		to: function ( value ) {
		return '$' + value;
		},
		from: function ( value ) {
		return value.replace('', '');
		}
	}
});
        
// ------------------------------------------------------- //
//   Inject SVG Sprite - 
//   see more here 
//   https://css-tricks.com/ajaxing-svg-sprite/
// ------------------------------------------------------ //
function injectSvgSprite(path) {

	var ajax = new XMLHttpRequest();
	ajax.open("GET", path, true);
	ajax.send();
	ajax.onload = function(e) {
	var div = document.createElement("div");
	div.className = 'd-none';
	div.innerHTML = ajax.responseText;
	document.body.insertBefore(div, document.body.childNodes[0]);
	}
}
// this is set to BootstrapTemple website as you cannot 
// inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
// while using file:// protocol
// pls don't forget to change to your domain :)
injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 



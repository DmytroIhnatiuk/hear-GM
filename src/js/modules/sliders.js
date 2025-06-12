import Swiper from 'swiper/bundle'
import { getElement } from '../core/index.js'

function promoSlider() {
	if (!getElement('[data-swiper="promo-slider"]')) return
	new Swiper('[data-swiper="promo-slider"]', {
		spaceBetween: 16,
		loop: true,
		slidesPerView: 1,
		navigation: {
			nextEl: '.promo-slider-next',
			prevEl: '.promo-slider-prev',
		},
	})
}

function doctors() {
	// Перевіряємо, чи є елемент з атрибутом data-swiper="promo-slider"
	if (!getElement('[data-swiper="doctors"]')) return
	new Swiper('[data-swiper="doctors"]', {
		slidesPerView: 'auto',
		spaceBetween: 20,
		speed: 700,
		breakpoints: {
			1024: {
				centeredSlides: false,
			},
		},
		navigation: {
			nextEl: '.doctors-next',
			prevEl: '.doctors-prev',
		},
		watchOverflow: true,
	})
}

function ourHospital() {
	if (!getElement('[data-swiper="ourHospital"]')) return
	new Swiper('[data-swiper="ourHospital"]', {
		slidesPerView: 'auto',
		spaceBetween: 20,
		centeredSlides: true,
		loop: true,
		breakpoints: {
			1024: {
				slidesPerView: 3,
				centeredSlides: false,
			},
		},
		speed: 700,
		navigation: {
			nextEl: '.ourHospital-next',
			prevEl: '.ourHospital-prev',
		},
		watchOverflow: true,
	})
}

function hotel() {
	if (!getElement('[data-swiper="hotel"]')) return
	new Swiper('[data-swiper="hotel"]', {
		slidesPerView: 'auto',
		spaceBetween: 20,
		centeredSlides: true,
		loop: true,
		breakpoints: {
			1024: {
				slidesPerView: 3,
				centeredSlides: false,
			},
		},
		speed: 700,
		navigation: {
			nextEl: '.hotel-next',
			prevEl: '.hotel-prev',
		},
		watchOverflow: true,
	})
}

function beforeAfter() {
	if (!getElement('[data-swiper="beforeAfter"]')) return
	new Swiper('[data-swiper="beforeAfter"]', {
		initialSlide: 1,
		centeredSlides: true,
		spaceBetween: 20,
		speed: 600,
		navigation: {
			nextEl: '.beforeAfter-next',
			prevEl: '.beforeAfter-prev',
		},
	})
}

function quizSwiper() {
	new Swiper('[data-swiper="slider__test"]', {
		// modules: [Navigation, Pagination, EffectFade],
		spaceBetween: 20,
		slidesPerView: 1,
		autoHeight: true,
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
		},
		simulateTouch: false,
		allowTouchMove: false,
		effect: 'fade',
		navigation: {
			nextEl: getElement(
				'.next__test',
				getElement('[data-swiper="slider__test"]')
			),
			prevEl: getElement(
				'.prev__test',
				getElement('[data-swiper="slider__test"]')
			),
		},
	})
}

function patientSlider() {
	if (!getElement('[data-swiper="patients"]')) return
	new Swiper('[data-swiper="patients"]', {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
			1024: {
				slidesPerView: 4,
			},
			1280: {
				slidesPerView: 5,
			},
		},
		speed: 700,
		autoplay: {
			delay: 5000,
		},
	})
}

function storeSlider() {
	if (!getElement('[data-swiper="storeSlider"]')) return
	new Swiper('[data-swiper="storeSlider"]', {
		slidesPerView: 1.1,
		spaceBetween: 20,
		loop: true,
		breakpoints: {
			640: {
				slidesPerView: 2.2,
			},
			1024: {
				slidesPerView: 4,
			},
		},
		navigation: {
			nextEl: '.storeSlider-next',
			prevEl: '.storeSlider-prev',
		},
	})
}

export {
	beforeAfter,
	doctors,
	hotel,
	ourHospital,
	patientSlider,
	promoSlider,
	quizSwiper,
	storeSlider,
}

import Swiper from 'swiper/bundle'
import { getElement, getElements } from '../core/index.js'

function promoSlider() {
	if (!getElement('[data-swiper="promo-slider"]')) return
	new Swiper('[data-swiper="promo-slider"]', {
		spaceBetween: 16,
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},
		loop: true,
		speed: 700,
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
		centeredSlides: true,
		speed: 700,
		initialSlide: 1,
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
		speed: 1000,
		navigation: {
			nextEl: '.beforeAfter-next',
			prevEl: '.beforeAfter-prev',
		},
	})
}

export { promoSlider, doctors, ourHospital, hotel, beforeAfter }

window['FLS'] = true
// Підключення основного файлу стилів

import '../scss/style.scss'
import 'swiper/css/bundle'
import * as flsFunctions from './core/functions.js'
import accordion from './modules/accordion.js'
import {
	promoSlider,
	doctors,
	ourHospital,
	hotel,
	beforeAfter,
} from './modules/sliders.js'
import { scrollToAnchor } from './modules/scrollToAnchor.js'
import { headerFixed } from './modules/index.js'
import HeaderComponent from './modules/HeaderComponent.js'

/* Перевірка підтримки webp, додавання класу webp або no-webp для HTML */
/* (i) необхідно для коректного відображення webp із css */
flsFunctions.isWebp()
/* Додавання класу touch для HTML якщо браузер мобільний */
flsFunctions.addTouchClass()
/* Додавання loaded для HTML після повного завантаження сторінки */
// flsFunctions.addLoadedClass();

/* Враховування плаваючої панелі на мобільних пристроях при 100vh */
flsFunctions.fullVHfix()

function languageSwitchMobile() {
	if (window.innerWidth < 1024) {
		accordion(
			'.language-switch',
			'.language-switch__header',
			'.language-switch__content'
		)
	}
}

// Ліниве (відкладене) завантаження картинок
// Документація по роботі у шаблоні: https://template.fls.guru/template-docs/modul-lenivaya-podgruzka-lazy-loading.html
// Документація плагіна: https://github.com/verlok/vanilla-lazyload
// Сніппет(HTML):
// import './files/scroll/lazyload.js';

window.addEventListener('DOMContentLoaded', () => {
	try {
		HeaderComponent()
		scrollToAnchor()
		promoSlider()
		headerFixed()
		hotel()
		languageSwitchMobile()
		ourHospital()
		doctors()
		beforeAfter()
	} catch (e) {
		console.log(e)
	}
})

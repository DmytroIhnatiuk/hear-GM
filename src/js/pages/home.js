import {beforeAfter, doctors, hotel, ourHospital, patientSlider, promoSlider} from "../modules/sliders.js";
import {getElement, getElements} from "../core/index.js";
import Form from "../modules/Form.js";

window.addEventListener("DOMContentLoaded", () => {
    try {
        getElements('[data-options]').forEach(option => {
            const btn = getElement('.option-btn', option);
            const content = getElement('ul', option);
            const contentHeight = content.offsetHeight;
            let isOpen = false;
            btn.addEventListener('click', () => {
                isOpen = !isOpen;
                if (isOpen) {
                    btn.firstElementChild.innerHTML = 'Less';
                    content.style.height = `${content.scrollHeight}px`;
                } else {
                    btn.firstElementChild.innerHTML = 'More';
                    content.style.height = `${contentHeight}px`;
                }
                btn.lastElementChild.classList.toggle('-scale-x-100');
            });
        });
        promoSlider()
        hotel()
        ourHospital()
        doctors()
        beforeAfter()
        patientSlider()
        new Form('[data-form="contact"]').create().init();
    } catch (e) {
        console.log(e);
    }
});
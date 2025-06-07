import Form from "./Form.js";
import {getElement, getElements} from "../core/index.js";
import {removeActive} from "../core/classesEvents.js";
import {quizSwiper} from "./sliders.js";

export default function initQuiz() {
    if (!getElement('[data-form="questions"]')) return;
    quizSwiper();
    const form = new Form('[data-form="questions"]').create();
    form.formData.quiz = []
    const testSlides = getElements('.test__slide');
    let activeSlide = 0;
    getElements('.test__nav button').forEach((btn, index) => {
        if (!btn.classList.contains('swiper-button-disabled')) {
            btn.classList.add('disabled')
        }
        btn.addEventListener('click', () => {
            activeSlide = btn.classList.contains('prev__test') ? activeSlide - 1 : activeSlide + 1;
            if (getElement('.answer__item.active', testSlides[activeSlide])) {
                getElement('.next__test').classList.remove('disabled');
            } else {
                btn.classList.add('disabled');
            }
            getElement('.test__nav button.bg-dark-gray').classList.toggle('opacity-0', activeSlide === 7);
        })

    })
    testSlides.forEach((testSlide, index) => {
        const question = getElement('h3', testSlide);
        const answers = getElements('.answer__item', testSlide);
        answers.forEach(answer => {
            answer.addEventListener('click', () => {
                removeActive(answers);
                answer.classList.add('active');
                form.formData.quiz[index] = {question: question.innerText, answer: answer.innerText}
                getElement('.test__nav button.disabled')?.classList.remove('disabled');
            })
        })
    })
    form.checkInputs();
    form.submit();
}
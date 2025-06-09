const translateFields = {
    field: {
        en: "This field is required",
        ua: "Поле обов'язкове для заповнення",
        ru: "Поле обязательное для заполнения",
    },
    template: {
        en: "Fill in according to the template",
        ua: "Заповніть відповідно до шаблону",
        ru: "Заполните согласно шаблона",
    },
    templatePhone: {
        en: "Fill in according to the template",
        ua: "Введіть контактний номер телефону",
        ru: "Введите контактный номер телефона",
    },
    send: {
        en: "Submit",
        ua: "Записатися",
    },
    validateName: {
        en: "Input your name",
        ua: `Поле має бути довше ніж 2 символа!`,
        ru: `Поле должно быть длиннее чем 2 символа!`,
    },
    name: {
        en: "Your name",
        ua: `Ваше ім’я`,
        ru: `Введите имя`,
    },
    phone: {
        en: "Tel",
        ua: `Номер`,
        ru: `Введите номер`,
    },
    formTitle: {
        en: "Fill out the form",
        ua: `Заповніть форму`,
    },
    formPolicy: {
        en: `I respect confidentiality, so we must sign a <a href="/contract"  target="_blank"  class="text-color__accent f-weight--700">contract</a> before starting therapy`,
        ua: `Я поважаю конфіденційність, тому перед початком терапії ми повинні заключити <a href="/contract"  target="_blank"  class="text-color__accent f-weight--700">контракт</a>`,
    },
    message: {
        en: "Message",
        ua: `Коментар`,
    },
    formSuccessTitle: {
        en: "Thank you!",
        ua: 'Дякуємо!',
    },
    formSuccessText: {
        en: "We will contact you soon",
        ua: 'Зв\'яжемося з вами найближчим часом',
    },
    formErrorTitle: {
        en: "Oops...",
        ua: 'Упс...',
    },
    formErrorText: {
        en: "An error occurred! Try it later!",
        ua: 'Виникла помилка! Спробуйте пізніше!',
    },
    email: {
        en: "Fill in according to the template example@mail.com",
        ua: `E-mail введено некоректно*`,
    },
    thankTitle: {
        en: "Дякуємо, ми зв'яжемося з Вами найближчим часом!",
        ua: "Дякуємо, ми зв'яжемося з Вами найближчим часом!",
    },
};
let lang = 'ru';
if (document.documentElement.lang.includes('en')) {
    lang = 'en';
}
export {translateFields, lang}
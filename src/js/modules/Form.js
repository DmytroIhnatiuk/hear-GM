import IMask from "imask";
import {translateFields, lang} from "./base.js";
import {getElement} from "../core/index.js";
import intlTelInput from "intl-tel-input";
import ru from "intl-tel-input/i18n/ru";
import en from "intl-tel-input/i18n/en";

let validRegex =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

let maskOptions = {
    mask: "+0  000  000  000  00",
    lazy: false,
};

class Form {
    constructor(form) {
        this.form = document.querySelector(form);
        this.inputs = this.form.querySelectorAll("input");
        this.path = `${path}/assets/services/mailAndTelegram.php`;
        this.title = getElement('input[type="hidden"]', this.form)?.value
        this.search = getElement('input[type="search"]', this.form) ?? null;
        // this.s = `${path}/assets/services/telegramSend.php`;
        this.policyItem = this.form.querySelector('.policy') ? this.form.querySelector('.policy') : null;
        this.policy = this.policyItem ? getElement('input', this.policyItem) : null;
        this.submitBtn = this.form.querySelector('button[type="submit"]');
        this.telInput = this.form.querySelector("[name='phone']") ? this.form.querySelector("[name='phone']") : this.form.querySelector('.tel')
        // this.mask = this.telInput ? new IMask(this.telInput, maskOptions) : null;
        this.textarea = this.form.querySelector('textarea') ? this.form.querySelector('textarea') : null;
        this.formData = {};
        this.validator = {};
        this.phone = this.form.querySelector("[name='phone']") ? intlTelInput(this.form.querySelector("[name='phone']"), {
            i18n: document.documentElement.lang === 'en' ? en : ru,
            initialCountry: "auto",
            nationalMode: true,
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us"));
            },
            separateDialCode: true,
            showFlags: false,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/js/utils.js",
        }) : null;
    }


    createMask(input) {
        let maskOptions = {
            mask: "+1 (000) 000 - 0000",
            lazy: false,
        };
        let mask = new IMask(input, maskOptions);
        mask.updateValue();
    }

    checkInputs() {

        this.inputs.forEach((input) => {
            if (input.type === "text") {
                this.checkTextInput(input);
            }

            if (input.name === "phone") {
                this.checkPhoneInput(input);
            }
            if (input.name === "email") {
                this.checkEmailInput(input);
            }
        });
    }

    resetForm(btn) {
        this.formData = {
            phone: "",
            name: "",
            selected: "",
            date: '',
            comment: '',
            link: location.href
        };
        const {send} = translateFields;
        btn.dataset.form = '';
        btn.classList.remove("disabled");
        btn.innerHTML = `<span class="txt-upper">${send[lang]}</span>`;
        this.form.reset();
        this.inputs.forEach((input) => {
            input.parentNode.classList.remove('valid');
            input.value = '';
            // if (input.name == 'phone') {
            //     this.mask.updateValue();
            // }
        });
        this.checkInputs();
    }


    checkPhoneInput(input) {

        let {templatePhone} = translateFields;
        let template = templatePhone[lang];
        let isValid = false;
        input.addEventListener("input", (e) => {
            const value = input.value;
            input.value = value.replace(/[^\d+()-]/g, '');
            if (input.value && this.phone.isValidNumber()) {
                this.valid(input);
                this.formData.phone = this.phone.getNumber();
                isValid = true;
            } else {
                this.invalid(input);
                isValid = false;
            }
            if (!isValid) {
                getElement('.form-item__message', input.closest('.form-item')).innerHTML = `${template}`;
            } else {
                getElement('.form-item__message', input.closest('.form-item')).innerText = "";
            }
        });
    }


    valid(input) {
        input.closest('.form-item').classList.add("valid");
        input.closest('.form-item').classList.remove("invalid");
        if (this.form.querySelector('button[type="submit"]').classList.contains('disabled')) this.form.querySelector('button[type="submit"]').classList.remove('disabled')
    }

    invalid(input) {
        input.closest('.form-item').classList.add("invalid");
        input.closest('.form-item').classList.remove("valid");
        this.form.querySelector('button[type="submit"]').classList.add('disabled')
    }

    validateEmptyField() {
        let {field} = translateFields;
        let validInputs = false;

        this.inputs.forEach((input) => {
            if (input.name === "comment") return;
            if (input.name === 'email' || input.type === "text" && input.name !== 'phone') {
                if (!input.value.trim()) {
                    input.closest('.form-item').classList.add("invalid");
                    input.nextElementSibling.innerHTML = `${
                        field[lang]
                    }`;
                } else {
                    this.valid(input);
                    input.nextElementSibling.innerText = "";
                    this.validator[input.name] = true;
                }
            } else if (input.name === "phone") {
                if (this.phone.isValidNumber()) {
                    this.valid(input);
                    getElement('.form-item__message', input.closest('.form-item')).innerText = "";
                    this.validator.phone = true;
                } else {
                    input.closest('.form-item').classList.add("invalid");
                    getElement('.form-item__message', input.closest('.form-item')).innerHTML = `${
                        field[lang]
                    }`;
                }
            }
        });
        for (let key in this.validator) {
            if (!this.validator[key]) return validInputs = false;
            validInputs = true;
        }

        return validInputs;


    }

    async sendToSheet(data) {
        try {
            const sheetsData = new FormData();
            for (let key in data) {
                sheetsData.append(`${key}`, `${data[key]}`);
            }
            const result = await fetch(
                "https://script.google.com/macros/s/AKfycbwFLvu7MShp9xsydD7exK7pLzre6plmHZWocCt94Xzsy_6KCvGWnk37WJqPBgQEzX1E/exec",
                {
                    method: "POST",
                    body: sheetsData,
                }
            );
            console.log(result)
        } catch (e) {
            console.log(e);
        }


    }


    async postData(url, data, btn) {
        try {

            const response = await fetch(url, {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                },
            });
            if (response.ok) {
                setTimeout(() => {
                    location.href = location.origin + '/thank-you/'
                }, 350)

            }


        } catch (error) {
            btn.dataset.form = 'erorr';
            // modalsEvents(btn);
            // new Modal(".modal__form-answer").openModal();


            console.error("Ошибка:", error);
        }
    }

    getUtmParameter(url, object) {
        if (url) {
            let urlValues;
            urlValues = url.substr(1).split("&");

            const values = urlValues.map((value) => value.split("="));
            values.forEach((item) => {
                const regex = /utm_/i;
                let name = item[0].replace(regex, "");
                object[`${name}`] = item[1]
            });
            return true;
        }
        return false;
    };

    checkTextInput(input) {
        if (input.name === 'phone') return
        let name = translateFields['validateName'][lang];
        let isValid = false;
        input.addEventListener("keypress", function (e) {
            if (!e.key.match(/^[a-zA-Zа-яА-ЯЇїІіЄєҐґЁёЭэЪъ\sğĞıİöÖüÜşŞçÇıI]/)) {
                e.preventDefault();
            }
        });
        input.addEventListener("input", () => {
            if (input.value.length >= 2) {
                this.valid(input);
                this.formData[input.name] = input.value.trim();
                isValid = true;
            } else {
                this.invalid(input);
                this.formData[input.name] = ''
                isValid = false;
            }
            if (!isValid) {
                input.nextElementSibling.innerHTML = `${name}`;
            } else {
                input.nextElementSibling.innerText = "";
            }
        });
    }

    checkEmailInput(input) {
        let {email} = translateFields;
        let templateEmail = email[lang];
        let isValid = false;
        input.addEventListener("blur", () => {
            if (input.value.match(validRegex)) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }

            getElement('.form-item__message', input.closest('.form-item')).innerHTML = isValid ? "" : templateEmail;
        });
        input.addEventListener("input", () => {
            this.valid(input);
            getElement('.form-item__message', input.closest('.form-item')).innerHTML = "";
        });
    }

    generateFormData(inputs) {
        inputs.forEach(input => {
            if (input.type === 'hidden' || input.name === 'phone' || !input.value) return;
            this.formData[input.name] = input.value;
        })
        this.formData = {
            title: this.title,
            link: location.href,
            ...this.formData
        };
    }

    submit() {
        this.form.addEventListener("submit", (e) => {

            e.preventDefault();
            if (this.textarea) {
                this.formData[this.textarea.name] = this.textarea.value.trim();
            }

            if (!this.policy.checked) {
                this.policyItem.classList.add('invalid');
                this.submitBtn.classList.add('disabled');
                this.validator.policy = false;
            } else {
                this.validator.policy = true;
            }
            if (this.validateEmptyField()) {


                e.submitter.classList.add("disabled");
                e.submitter.innerHTML = `<svg class="icon btn__spinner">
        <use xlink:href="#spinner"></use>
      </svg>`;

                this.generateFormData(this.inputs);
                this.postData(this.path, this.formData, e.submitter);
            }


        });

    }

    init() {


        this.checkInputs();
        this.form.addEventListener("submit", (e) => {
            e.preventDefault();


            if (this.validateEmptyField()) {
                e.submitter.classList.add("disabled");
                e.submitter.innerHTML = `<svg class="icon btn__spinner">
        <use xlink:href="#spinner"></use>
      </svg>`;
                this.generateFormData(this.inputs);
                this.postData(this.path, this.formData, e.submitter);
            }
        });
    }

    create() {
        this.inputs.forEach(input => {
            if (input.name && input.name !== 'comment') {
                this.validator[input.name] = null
            }

        })

        this.policyItem?.addEventListener('click', () => {
            this.policyItem.classList.toggle('active')
            this.policy.checked = !this.policy.checked;
            if (!this.policy.checked) {
                this.submitBtn.classList.add('disabled')
                this.policyItem.classList.add('invalid')
            } else {
                this.submitBtn.classList.remove('disabled')
                this.policyItem.classList.remove('invalid')

            }
        })
        return this;
    }

    searchHandle() {
        this.form.addEventListener("submit", (e) => {
            e.preventDefault();
            if (!this.search.value.trim()) return;
            location.href = `${location.origin}?s=${this.search.value}`
        });
    }

    log() {
        console.log(this.formData)
    }
}

export default Form;


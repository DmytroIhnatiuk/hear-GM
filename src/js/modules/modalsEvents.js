import {modalBody, modal} from "../core/elementsNodeList.js";
import Form from "./Form.js";
import {translateFields, lang} from "./base.js";
import {getElement, getElements} from "../core/index.js";
import {copyText} from "./helpers.js";
import Modal from "./modal.js";


export default function modalsEvents(target) {

    if (target === 'callback') {
        getElement('.modal__content', modalBody).innerHTML = renderCallbackModal();
        new Form('[data-form="callback"]').create().init();
    }
    new Modal('.modal').openModal();

}

function renderCallbackModal() {

    return `            <div
                    class=" modal-callback max-w-[12.4rem] rounded-md relative bg-dark-main p-32  lg:px-[.84rem] lg:py-[.74rem]"
            >

                <div
                        class="pb-16 lg:pb-32 border-b-1 border-solid border-white lg:flex mb-16 sm:mb-24"
                >
                    <h2
                            class="text-20 sm:text-[.32rem] lg:text-[.40rem] font-semibold leading-[.2rem] lg:leading-[110%] mb-16 sm:mb-0 lg:min-w-[6.5rem] lg:mr-24"
                    >
                        Begin your hair transplant journey
                        <span class="text-main"> with online consultation</span>
                    </h2>
                    <p>
                        Leave your information and our managers will contact you soon
                    </p>
                </div>

                <form
data-form="callback"
                        class="grid sm:grid-cols-2 lg:grid-cols-[repeat(2,_3.3rem)_auto] gap-x-8 gap-y-[.12rem]"
                >
                                   <input class="hidden" type="hidden" value="Hairglobalmedik WEBSITE">
                    <div class="text-s flex flex-col font-medium form-item ">
                        <label for="callback-name" class="mb-4 font-normal"
                        >Name/Surname</label
                        >
                        <input
                                type="text"
                                id="callback-name"
                                name="name"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <div class="text-s flex flex-col font-medium  form-item">
                        <label for="callback-phone" class="mb-4 font-normal"
                        >Phone number</label
                        >
                        <input
                                type="text"
                                id="callback-phone"
                                name="phone"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <div
                            class="  form-item text-s flex flex-col font-medium lg:row-start-2 lg:row-end-3 lg:col-start-1 lg:col-end-2"
                    >
                        <label for="callback-email" class="mb-4 font-normal">E-mail</label>
                        <input
                                type="email"
                                id="callback-email"
                                name="email"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <div
                            class="text-s   form-item flex flex-col font-medium lg:row-start-2 lg:row-end-3 lg:col-start-2 lg:col-end-3"
                    >
                        <label for="callback-comment" class="mb-4 font-normal"
                        >When do you plan to come?</label
                        >
                        <input
                                type="text"
                                id="callback-comment"
                                name="comment"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>

                    <button
                            type="submit"
                            class="btn btn__gray h-[.5rem] mt-8 sm:col-start-2 sm:col-end-3 lg:row-start-2 lg:row-end-3 lg:col-start-3 lg:col-end-4 self-end lg:ml-24 lg:w-[3.3rem]"
                    >
                      Online consultation
                    </button>
                </form>
            </div>`
}




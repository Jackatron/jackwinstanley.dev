import axios from "axios";

export function bindCustomForms(forms) {
    for(const form of forms) {
        bindForm(form);
        injectDynamicCsrfToken(form);
    }
}

function bindForm(form) {
    form.onsubmit = (e) => {
        e.preventDefault();

        const successMessage = form.querySelector('[data-success]');
        const errorMessage = form.querySelector('[data-error]');
        const validationError = form.querySelector('[data-validation-error]');

        if(successMessage) {
            successMessage.classList.add('hidden');
        }

        if(errorMessage) {
            errorMessage.classList.add('hidden');
        }

        if(validationError) {
            validationError.classList.add('hidden');
        }

        const inputErrors = form.querySelectorAll('[data-input-error]');
        for(const inputError of inputErrors) {
            inputError.classList.add('hidden');
        }

        axios.post(form.action, new FormData(form))
        .then(response => {
            if (response.data.success) {
                if(successMessage) {
                    successMessage.classList.remove('hidden');
                    clearInputs(form);
                }
            }
            else {
                if(errorMessage) {
                    errorMessage.classList.remove('hidden');
                }
            }
        })
        .catch(error => {
            if (error.response?.status === 422) {
                handleValidationErrors(form, error.response.data.errors)
            }
            else {
                if(errorMessage) {
                    errorMessage.classList.remove('hidden');
                }
            }
        });
    };
}

function clearInputs(form) {
    const inputs = form.querySelectorAll('input, textarea, select');
    for(const input of inputs) {
        if(input.getAttribute('type') === 'hidden' || input.getAttribute('type') === 'submit' || input.getAttribute('type') === 'button') {
            continue;
        }
        input.value = '';
    }
}

function handleValidationErrors(form, errors) {
    for (const [field, messages] of Object.entries(errors)) {
        const errorElement = form.querySelector(`[data-input-error="${field}"]`);
        if (errorElement) {
            errorElement.innerText = messages.join(', ');
            errorElement.classList.remove('hidden');
        }
    }
    validationError?.classList.remove('hidden');
}

function injectDynamicCsrfToken(form) {
    axios.get('/token')
        .then(response => {
            const token = form.querySelector('input[name="_token"]');
            if (token) {
                token.value = response.data;
            }
        });
}
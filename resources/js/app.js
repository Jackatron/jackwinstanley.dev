import './bootstrap';

import.meta.glob([
    '../images/**',
]);

const customForms = document.querySelectorAll("[data-custom-form]");
if (customForms.length) {
    import("./modules/custom-forms").then(({ bindCustomForms }) => {
        bindCustomForms(customForms);
    });
}
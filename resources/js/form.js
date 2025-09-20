// Remove error class on input change

document.addEventListener('DOMContentLoaded', () => {
    const errorInputs = document.querySelectorAll('.input-error');

    errorInputs.forEach(input => {
        input.addEventListener('input', () => {
            input.classList.remove('input-error');

            const errorMsg = input.nextElementSibling;
            if (errorMsg && errorMsg.classList.contains('input-error-message')) {
                errorMsg.remove();
            }
        })
    });
})
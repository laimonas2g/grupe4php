export function basicValidator(name, target, type, typeParam = null) {
    target.classList.remove('is-invalid');
    switch (type) {
        case 'max':
            if (target.value.length > typeParam) {
                target.classList.add('is-invalid');
                return `${name} must be at least ${typeParam} characters long.}`
            }
            return null;

        case 'noDigits':
            if (/\d/.test(target.value)) {
                target.classList.add('is-invalid');
                return `${name} cannot contain numbers.}`;
            }
            return null;

        case 'min':
            if (target.value.length < typeParam) {
                target.classList.add('is-invalid');
                return `${name} must be at least ${typeParam} characters long.}`;
            }
            return null;

        case 'year':
            if (!/^\d{4}$/.test(target.value) || target.value < 1500 || target.value > (new Date()).getFullYear()) {
                target.classList.add('is-invalid');
                return `${name} must be a valid year between 1500 and ${(new Date()).getFullYear()}.`;
            }
            return null;

        case 'required':
            if (!target.value.trim()) {
                target.classList.add('is-invalid');
                return `${name} is required.`;
            }
            return null;

        case 'onlyDigits':
            if (!/^\d+$/.test(target.value)) {
                target.classList.add('is-invalid');
                return `${name} must contain only numbers.`;
            }
            return null;

        default:
            return null;
    }

}

export function hasErrors(errors) {
    return Object.values(errors).some(error => error);
}
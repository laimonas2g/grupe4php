import { validateNumber } from '../domain/validateNumber.js';
import { calculate } from '../domain/calculate.js';
import { formatResult } from '../domain/formatResult.js';

export function processNumber(input) {
    validateNumber(input);
    const result = calculate(input);
    return formatResult(result);
}
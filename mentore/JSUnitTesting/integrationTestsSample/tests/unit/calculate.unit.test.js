// Kas tikrinama:
// - Apskaičiuotas rezultatas pagal mūsų „verslo“ taisyklę:
// result = ((value * 2) + 10) / 2
// Tvarka ir aritmetika teisinga skirtingiems įvesties atvejams.

import { test, expect, describe } from 'vitest'; // it or test
import { calculate } from '../../src/domain/calculate.js';

describe('calculate()', () => {
    test('calculates for a positive integer', () => {
        // Arrange
        const input = 10;

        // Act
        const result = calculate(input);

        // Assert
        // ((10 * 2) + 10) / 2 = (20 + 10) / 2 = 15
        expect(result).toBe(15);
    });

    test('calculates for zero', () => {
        // Arrange
        const input = 0;

        // Act
        const result = calculate(input);

        // Assert
        // ((0 * 2) + 10) / 2 = 5
        expect(result).toBe(5);
    });

    test('calculates for negative number', () => {
        // Arrange
        const input = -4;

        // Act
        const result = calculate(input);

        // Assert
        // ((-4 * 2) + 10) / 2 = (-8 + 10) / 2 = 1
        expect(result).toBe(1);
    });

    test('calculates for float', () => {
        // Arrange
        const input = 2.5;

        // Act
        const result = calculate(input);

        // Assert
        // ((2.5 * 2) + 10) / 2 = (5 + 10) / 2 = 7.5
        expect(result).toBe(7.5);
    });
});

// Pastaba `calculate` testuose nevaliduojame įvesties tipo — tą daro `validateNumber`.
// Tai leidžia testuoti vieną atsakomybę per funkciją.
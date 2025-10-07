// Kas tikrinama:
// - Mėtomos klaidos, kai įvestis ne skaičius arba`NaN`.  
// - Nemetama klaida, kai įvestis valid (paprasti ir „kraštiniai“ atvejai).

import { test, expect, describe } from 'vitest'; // it or test
import { validateNumber } from '../../src/domain/validateNumber.js';

describe('validateNumber()', () => {
    test('throws when value is a string', () => {
        // Arrange
        const input = '10';

        // Act + Assert
        expect(() => validateNumber(input)).toThrow('Argumentas turi būti skaičius!');
    });

    test('throws when value is NaN', () => {
        // Arrange
        const input = NaN;

        // Act + Assert
        expect(() => validateNumber(input)).toThrow('Argumentas turi būti skaičius!');
    });

    test('does not throw for a valid integer', () => {
        // Arrange
        const input = 10;

        // Act + Assert
        expect(() => validateNumber(input)).not.toThrow();
    });

    test('does not throw for a valid float', () => {
        // Arrange
        const input = 3.14;

        // Act + Assert
        expect(() => validateNumber(input)).not.toThrow();
    });

    test('does not throw for negative number', () => {
        // Arrange
        const input = -5;

        // Act + Assert
        expect(() => validateNumber(input)).not.toThrow();
    });
});
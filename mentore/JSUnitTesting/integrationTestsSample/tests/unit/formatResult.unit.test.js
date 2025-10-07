// Kas tikrinama:
// - Ar teisingai suformuojamas tekstas su skirtingomis reikšmėmis(sveikas, float, neigiamas).

import { test, expect, describe } from 'vitest'; // it or test
import { formatResult } from '../../src/domain/formatResult.js';

describe('formatResult()', () => {
    test('formats positive integer', () => {
        // Arrange
        const value = 15;

        // Act
        const result = formatResult(value);

        // Assert
        expect(result).toBe('Rezultatas: 15');
    });

    test('formats float', () => {
        // Arrange
        const value = 7.5;

        // Act
        const result = formatResult(value);

        // Assert
        expect(result).toBe('Rezultatas: 7.5');
    });

    test('formats negative number', () => {
        // Arrange
        const value = -3;

        // Act
        const result = formatResult(value);

        // Assert
        expect(result).toBe('Rezultatas: -3');
    });
});
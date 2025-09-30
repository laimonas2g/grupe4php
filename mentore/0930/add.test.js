import { describe, expect, it, test } from "vitest";
import { add } from "./add";
 
it('should summarize all number value in an array', () => {
    // Arrange
    const numbers = [1, 2, 3, 4];
    const expectedResult = numbers.reduce(
        (prevValue, curValue) => prevValue + curValue,
        0
    );
 
    // Act
    const result = add(numbers);
 
    // Assert
    expect(result).toBe(expectedResult);
})
 
describe('add function tests', () => {
    it('should summarize all number value in an array', () => {
        // Arrange
        const numbers = [1, 2, 3, 4];
        const expectedResult = numbers.reduce(
            (prevValue, curValue) => prevValue + curValue,
            0
        );
 
        // Act
        const result = add(numbers);
 
        // Assert
        expect(result).toBe(expectedResult);
    });
 
    it('turėtų grąžinti 0, jeigu paduodamas tuščias masyvas', () => {
        // Arrange
        const numbers = [];
 
        // Act
        const result = add(numbers);
 
        // Assert
        expect(result).toBe(0);
    });
 
    it('turėtų grąžinti teisingą sumą, jeigu pateikiu skaičius kaip string\'us', () => {
        // Arrange
        const numbers = ['1', '2'];
        const expectedResult = numbers.reduce(
            (prevValue, curValue) => +prevValue + +curValue,
            0
        );
 
        // Act
        const result = add(numbers);
 
        // Assert
        expect(result).toBe(expectedResult);
    });
 
 
 
})
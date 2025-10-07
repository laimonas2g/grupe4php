import { describe, it, expect } from "vitest";
import {
    add,
    isEven,
    max,
    stringLength,
    gramsToKg,
    firstElement,
    reverseString,
    square,
    factorial,
    startsWithUpperCase,
} from "./tasksBasic";

// 1. Sudėtis
describe("add", () => {
    it("teisingai sudeda du skaičius", () => {
        // Arrange
        const a = 2;
        const b = 3;
        const expected = 5;

        // Act
        const result = add(a, b);

        // Assert
        expect(result).toBe(expected);
    });

    it("teisingai sudeda neigiamą ir teigiamą skaičių", () => {
        // Arrange
        const a = -1;
        const b = 1;
        const expected = 0;

        // Act
        const result = add(a, b);

        // Assert
        expect(result).toBe(expected);
    });
});

// 2. Skaičiaus lyginis tikrinimas
describe("isEven", () => {
    it("grąžina true jei skaičius lyginis", () => {
        // Arrange
        const n = 4;
        const expected = true;

        // Act
        const result = isEven(n);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina false jei skaičius nelyginis", () => {
        // Arrange
        const n = 5;
        const expected = false;

        // Act
        const result = isEven(n);

        // Assert
        expect(result).toBe(expected);
    });
});

// 3. Didžiausio skaičiaus radimas
describe("max", () => {
    it("grąžina didesnį skaičių", () => {
        // Arrange
        const a = 10;
        const b = 7;
        const expected = 10;

        // Act
        const result = max(a, b);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina kitą skaičių, jei jis didesnis", () => {
        // Arrange
        const a = 3;
        const b = 9;
        const expected = 9;

        // Act
        const result = max(a, b);

        // Assert
        expect(result).toBe(expected);
    });
});

// 4. Teksto ilgis
describe("stringLength", () => {
    it("grąžina string ilgį", () => {
        // Arrange
        const str = "test";
        const expected = 4;

        // Act
        const result = stringLength(str);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina 0 tuščiam string", () => {
        // Arrange
        const str = "";
        const expected = 0;

        // Act
        const result = stringLength(str);

        // Assert
        expect(result).toBe(expected);
    });
});

// 5. Masės konvertavimas į kilogramus
describe("gramsToKg", () => {
    it("konvertuoja gramus į kilogramus", () => {
        // Arrange
        const grams = 2000;
        const expected = 2;

        // Act
        const result = gramsToKg(grams);

        // Assert
        expect(result).toBe(expected);
    });

    it("0 gramų yra 0 kg", () => {
        // Arrange
        const grams = 0;
        const expected = 0;

        // Act
        const result = gramsToKg(grams);

        // Assert
        expect(result).toBe(expected);
    });
});

// 6. Pirmoji masyvo reikšmė
describe("firstElement", () => {
    it("grąžina pirmą masyvo elementą", () => {
        // Arrange
        const arr = [10, 20, 30];
        const expected = 10;

        // Act
        const result = firstElement(arr);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina undefined jei masyvas tuščias", () => {
        // Arrange
        const arr = [];
        const expected = undefined;

        // Act
        const result = firstElement(arr);

        // Assert
        expect(result).toBe(expected);
    });
});

// 7. Apverstas tekstas
describe("reverseString", () => {
    it("apverčia tekstą", () => {
        // Arrange
        const str = "abc";
        const expected = "cba";

        // Act
        const result = reverseString(str);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina tuščią tekstą tuščiam input", () => {
        // Arrange
        const str = "";
        const expected = "";

        // Act
        const result = reverseString(str);

        // Assert
        expect(result).toBe(expected);
    });
});

// 8. Skaičiaus pakėlimas kvadratu
describe("square", () => {
    it("grąžina skaičių pakeltą kvadratu", () => {
        // Arrange
        const n = 5;
        const expected = 25;

        // Act
        const result = square(n);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina 0 jei įvestis 0", () => {
        // Arrange
        const n = 0;
        const expected = 0;

        // Act
        const result = square(n);

        // Assert
        expect(result).toBe(expected);
    });
});

// 9. Skaičiaus faktorialas
describe("factorial", () => {
    it("grąžina 1 kai n = 0", () => {
        // Arrange
        const n = 0;
        const expected = 1;

        // Act
        const result = factorial(n);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina teisingą faktorialą", () => {
        // Arrange
        const n = 4;
        const expected = 24;

        // Act
        const result = factorial(n);

        // Assert
        expect(result).toBe(expected);
    });
});

// 10. Ar tekstas prasideda didžiąja raide
describe("startsWithUpperCase", () => {
    it("grąžina true jei tekstas prasideda didžiąja raide", () => {
        // Arrange
        const str = "Hello";
        const expected = true;

        // Act
        const result = startsWithUpperCase(str);

        // Assert
        expect(result).toBe(expected);
    });

    it("grąžina false jei tekstas prasideda mažąja raide", () => {
        // Arrange
        const str = "world";
        const expected = false;

        // Act
        const result = startsWithUpperCase(str);

        // Assert
        expect(result).toBe(expected);
    });
});

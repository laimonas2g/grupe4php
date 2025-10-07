import { it, expect, beforeAll, beforeEach, afterEach, afterAll, expect, describe } from "vitest";
import { getUserAge, Cart } from "./advancedTestingTask";

describe('getUserAge', () => {
    it("grąžina amžių 25, kai userId teisingas", async () => {
        const age = await getUserAge(123);
        expect(age).toBe(25);
    });

    it("meta klaidą, kai userId undefined", async () => {
        await expect(getUserAge(undefined)).rejects.toThrow("Invalid user ID");
    });
})

describe('Cart (be hooks)', () => {
    it("should add an item to the cart", () => {
        const cart = new Cart();
        const item = { name: "Apple", price: 2 };

        cart.addItem(item);

        expect(cart.items).toContain(item);
    });

    it("should remove an item from the cart", () => {
        const cart = new Cart();
        const item = { name: "Apple", price: 2 };
        cart.addItem(item);

        cart.removeItem("Apple");

        expect(cart.items).toHaveLength(0);
    });

    it("should clear the cart", () => {
        const cart = new Cart();
        cart.addItem({ name: "Apple", price: 2 });
        cart.addItem({ name: "Banana", price: 1 });

        cart.clearCart();

        expect(cart.items).toHaveLength(0);
    });

    it("should still have items property after clearing", () => {
        const cart = new Cart();
        cart.addItem({ name: "Orange", price: 3 });

        cart.clearCart();

        expect(cart).toHaveProperty("items");
    });
})

describe('Cart (su hooks)', () => {
    let cart;           // Bus inicializuojamas prieš kiekvieną testą
    let sampleItem;    // Kuriamas iš naujo prieš kiekvieną testą

    beforeAll(() => {
        console.log("🧰 beforeAll() – paleidžiam vieną kartą prieš visus testus");
    });

    beforeEach(() => {
        cart = new Cart();                        // naujas Cart objektas kiekvienam testui
        sampleItem = { name: "Apple", price: 2 }; // naujas item kiekvienam testui
        console.log("🛠 beforeEach() – sukurtas naujas Cart ir item");
    });

    afterEach(() => {
        cart = null;           // išvalome po testo
        sampleItem = null;     // išvalome po testo
        console.log("🧹 afterEach() – duomenys išvalyti");
    });

    afterAll(() => {
        console.log("✅ afterAll() – testai baigti");
    });

    it("should add an item to the cart", () => {
        cart.addItem(sampleItem);

        expect(cart.items).toContain(sampleItem);
    });

    it("should remove an item from the cart", () => {
        cart.addItem(sampleItem);

        cart.removeItem("Apple");

        expect(cart.items).toHaveLength(0);
    });

    it("should clear the cart", () => {
        cart.addItem(sampleItem);
        cart.addItem({ name: "Banana", price: 1 });

        cart.clearCart();

        expect(cart.items).toHaveLength(0);
    });

    it("should still have items property after clearing", () => {
        cart.addItem(sampleItem);
        cart.clearCart();

        expect(cart).toHaveProperty("items");
    });
})

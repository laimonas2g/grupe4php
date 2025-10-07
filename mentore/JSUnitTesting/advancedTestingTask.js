export async function getUserAge(userId) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            if (!userId) reject(new Error("Invalid user ID"));
            else resolve(25);
        }, 500);
    });
}

export class Cart {
    constructor() {
        this.items = [];
    }

    addItem(item) {
        this.items.push(item);
    }

    removeItem(itemName) {
        this.items = this.items.filter((item) => item.name !== itemName);
    }

    clearCart() {
        this.items = [];
    }
}

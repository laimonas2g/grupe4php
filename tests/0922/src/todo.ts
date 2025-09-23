export interface TodoItem {
  id: number;
  text: string;
  completed: boolean;
}

export class TodoList {
  private items: TodoItem[] = [];
  private nextId: number = 1;

  addItem(text: string): TodoItem {
    if (!text.trim()) {
      throw new Error('Task cannot be empty.');
    }
    const item: TodoItem = {
      id: this.nextId++,
      text: text.trim(),
      completed: false,
    };
    this.items.push(item);
    return item;
  }

  completeItem(id: number): void {
    const item = this.items.find((i) => i.id === id);
    if (item) {
      item.completed = true;
    }
  }

  removeItem(id: number): void {
    this.items = this.items.filter((i) => i.id !== id);
  }

  getItems(): TodoItem[] {
    return [...this.items];
  }
}
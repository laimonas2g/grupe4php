import { TodoList } from './todo.js';

const todoList = new TodoList();

const form = document.getElementById('todo-form') as HTMLFormElement;
const input = document.getElementById('todo-input') as HTMLInputElement;
const list = document.getElementById('todo-list') as HTMLUListElement;

function renderList() {
  list.innerHTML = '';
  todoList.getItems().forEach((item) => {
    const li = document.createElement('li');
    li.textContent = item.text;
    li.style.textDecoration = item.completed ? 'line-through' : '';

    const completeBtn = document.createElement('button');
    completeBtn.textContent = 'Complete';
    completeBtn.disabled = item.completed;
    completeBtn.onclick = () => {
      todoList.completeItem(item.id);
      renderList();
    };

    const removeBtn = document.createElement('button');
    removeBtn.textContent = 'Remove';
    removeBtn.onclick = () => {
      todoList.removeItem(item.id);
      renderList();
    };

    li.appendChild(completeBtn);
    li.appendChild(removeBtn);
    list.appendChild(li);
  });
}

form.onsubmit = (e) => {
  e.preventDefault();
  try {
    todoList.addItem(input.value);
    input.value = '';
    renderList();
  } catch (err) {
    alert((err as Error).message);
  }
};

renderList();
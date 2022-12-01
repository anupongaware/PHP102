import { nanoid } from "nanoid";
import { useState } from "react";
import "./App.css";
import TodoForm from "./components/TodoForm";
import TodoList from "./components/TodoList";

const createEmptyTodo = () => ({
  id: nanoid(),
  isComplete: false,
  todoText: "",
});

function App() {
  const [todoList, setTodoList] = useState([]);
  const [todo, setTodo] = useState(createEmptyTodo());

  const handleInputChange = (event) => {
    const name = event.target.name;
    setTodo((prevTodo) => ({ ...prevTodo, [name]: event.target.value }));
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    setTodoList((prevTodoList) => [...prevTodoList, todo]);
    setTodo(createEmptyTodo());
  };

  console.log(todoList);

  const handleDelete = (id) => {
    setTodoList((prevTodoList) =>
      prevTodoList.filter((item) => item.id !== id)
    );
  };

  const handleComplete = (id) => {};

  const todoListElement =
    todoList.length > 0 &&
    todoList.map((item) => (
      <TodoList
        key={item.id}
        todoText={item.todoText}
        isComplete={item.isComplete}
        handleDelete={() => handleDelete(item.id)}
      />
    ));

  return (
    <div className="App">
      <h1>Todo</h1>
      <TodoForm
        handleInputChange={handleInputChange}
        handleSubmit={handleSubmit}
        todoText={todo.todoText}
      />
      <div className="todo-container">
        {!todoListElement ? (
          <p style={{ color: "#ccc" }}>Please add new TODO</p>
        ) : (
          todoListElement
        )}
      </div>
    </div>
  );
}

export default App;

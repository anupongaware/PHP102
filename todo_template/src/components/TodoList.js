function TodoList(props) {
  return (
    <div className="todo-list">
      <div className="todo-list--is-complete">
        <input type="checkbox" />
      </div>
      <div className="todo-list--text">{props.todoText}</div>
      <div className="todo-list--action">
        <button onClick={props.handleDelete}>X</button>
      </div>
    </div>
  );
}

export default TodoList;

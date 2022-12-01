const TodoForm = (props) => {
  return (
    <form className="form-todo" onSubmit={props.handleSubmit}>
      <input
        name="todoText"
        type="text"
        placeholder="Thing todo"
        onChange={props.handleInputChange}
        value={props.todoText}
      />
      <button>Add Todo</button>
    </form>
  );
};

export default TodoForm;

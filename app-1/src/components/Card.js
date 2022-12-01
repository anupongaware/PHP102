function Card(props) {
  const handleClick = (ev) => {
    console.log(ev);
  };

  return (
    <div className="card">
      <header>{props.header}</header>
      <div>
        <div>{props.content}</div>
        <button onClick={handleClick}>Click Me</button>
      </div>
      <footer>{props.footer}</footer>
    </div>
  );
}

export default Card;

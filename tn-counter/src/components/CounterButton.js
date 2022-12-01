function CounterButton(props) {
  return (
    <>
      <button onClick={props.handlePlus}>+</button>{" "}
      <button onClick={props.handleMinus}>-</button>
    </>
  );
}

export default CounterButton;

import { useEffect, useState } from "react";
import CounterNumber from "./CounterNumber";
import CounterButton from "./CounterButton";
import CounterReset from "./CounterReset";

function Counter() {
  const [counter, setCount] = useState(0);

  useEffect(() => {
    console.log("use effect");
  }, []);

  useEffect(() => {
    console.log("use effect plus");
  }, []);
  function plus() {
    setCount((prevCount) => prevCount + 1);
  }

  function minus() {
    setCount((prevCount) => prevCount - 1);
  }

  function reset() {
    setCount(0);
  }
  return (
    <div>
      <CounterNumber counter={counter} />
      <CounterButton handlePlus={plus} handleMinus={minus} />{" "}
      <CounterReset handleReset={reset} />
    </div>
  );
}

export default Counter;

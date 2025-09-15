import React, { useState } from "react";

export default function Counter() {
  const [count, setCount] = useState(0);
  return (
    <div style={{ textAlign: "center", marginTop: "30px" }}>
      <button onClick={() => setCount(c => c + 1)}>Plus</button>
      <button style={{ marginLeft: 10 }} onClick={() => setCount(c => c - 3)}>Minus</button>
      <div style={{ margin: "20px", fontSize: 32 }}>{count}</div>
    </div>
  );
}
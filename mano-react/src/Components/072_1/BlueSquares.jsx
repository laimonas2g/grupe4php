import React, { useState } from "react";

export default function BlueSquares() {
  const [squares, setSquares] = useState(0);

  return (
    <div style={{ textAlign: "center", marginTop: "30px" }}>
      <button onClick={() => setSquares(s => s + 1)}>Add</button>
      <div style={{ marginTop: 20, display: "flex", gap: 10, justifyContent: "center" }}>
        {Array.from({ length: squares }).map((_, i) => (
          <div key={i} style={{
            width: 50,
            height: 50,
            background: "blue"
          }} />
        ))}
      </div>
    </div>
  );
}
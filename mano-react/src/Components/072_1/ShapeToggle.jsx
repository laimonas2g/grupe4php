import React, { useState } from "react";

export default function ShapeToggle() {
  const [isCircle, setIsCircle] = useState(true);
  return (
    <div style={{ textAlign: "center", marginTop: "30px" }}>
      <button onClick={() => setIsCircle(prev => !prev)}>Change</button>
      <div
        style={{
          margin: "20px auto",
          width: 100,
          height: 100,
          background: "dodgerblue",
          borderRadius: isCircle ? "50%" : "0%",
          transition: "border-radius 0.2s",
        }}
      ></div>
    </div>
  );
}
import React, { useState } from "react";

function getRandom() {
  return Math.floor(Math.random() * 21) + 5;
}

export default function ShapeRandomNumber() {
  const [isCircle, setIsCircle] = useState(true);
  const [number, setNumber] = useState(getRandom());

  return (
    <div style={{ textAlign: "center", marginTop: "30px" }}>
      <button onClick={() => setIsCircle(prev => !prev)}>Change</button>
      <button style={{ marginLeft: 10 }} onClick={() => setNumber(getRandom())}>Random</button>
      <div
        style={{
          margin: "20px auto",
          width: 100,
          height: 100,
          background: "dodgerblue",
          borderRadius: isCircle ? "50%" : "0%",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          fontSize: 32,
          color: "white",
          transition: "border-radius 0.2s",
        }}
      >
        {number}
      </div>
    </div>
  );
}
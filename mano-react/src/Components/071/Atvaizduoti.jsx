import React, { useState } from "react";

const ShapeToggleApp = () => {
  const [isCircle, setIsCircle] = useState(true);

  const handleChange = () => {
    setIsCircle((prev) => !prev);
  };

  const shapeStyle = {
    width: "150px",
    height: "150px",
    background: "#4caf50",
    margin: "32px auto",
    transition: "border-radius 0.3s",
    borderRadius: isCircle ? "50%" : "0%",
    display: "flex",
    alignItems: "center",
    justifyContent: "center",
  };

  return (
    <div style={{ textAlign: "center", marginTop: "50px" }}>
      <div style={shapeStyle}></div>
      <button onClick={handleChange}>Change</button>
    </div>
  );
};

export default ShapeToggleApp;
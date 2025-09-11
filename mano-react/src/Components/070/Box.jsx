import Handle from "./Handle";

export default function Box({plotis, dydis, dar, h}) {

    const sizeY = dydis;
    const sizeX = plotis;

    return (
        <div style={{
            border: `${dar.siena} solid white`,
            width: sizeX + 'px',
            height: sizeY + 'px',
            margin: '20px',
            background: dar.spalva
        }}>
            <Handle type={h} />
        </div>
    )
}
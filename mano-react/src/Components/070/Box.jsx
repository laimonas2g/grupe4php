export default function Box({plotis, dydis, dar}) {

    const sizeY = dydis;
    const sizeX = plotis;

    return (
        <div style={{
            border: `${dar.siena} solid white`,
            width: sizeX + 'px',
            height: sizeY + 'px',
            margin: '20px',
            background: dar.spalva
        }}></div>
    )
}
import random from '../../Functions/random';

export default function Bebras() {

    const r = random(0, 2);

    if (r === 0) {
        return null;
    }

    if (r === 1) {
        return <h1>Barsuko komponentas</h1>
    }

    return (
        <h1>Bebro komponentas</h1>
    );
}
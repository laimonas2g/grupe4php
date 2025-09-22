export default function House({ children, flat }) {


    return (
        <>
            <h1>House</h1>
            <h2>Flat 1 <span>{flat === 1 ? children : null}</span></h2>
            <h2>Flat 2 <span>{flat === 2 ? children : null}</span></h2>
            <h2>Flat 3 <span>{flat === 3 ? children : null}</span></h2>
        </>

    );
}
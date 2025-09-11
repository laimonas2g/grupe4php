export default function View({el}) {

    return (
        <div>
            <b>{el.id}</b>
            <h3>{el.name}</h3>
        </div>
    );

}
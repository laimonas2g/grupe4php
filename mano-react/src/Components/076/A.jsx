import B from './B';

export default function A({counter1}) {


    return (
                <div className="fancy-box">
                    <B counter1={counter1} />
                </div>
    );
}
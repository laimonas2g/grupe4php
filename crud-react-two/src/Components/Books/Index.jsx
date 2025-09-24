import Create from './Create';
import Delete from './Delete';
import List from './List';

export default function Index() {


    return (
        <>
        <div className="container">
            <div className="row">
                <div className="col-4">
                    <Create />
                </div>
                <div className="col-8">
                    <List />
                </div>
            </div>
        </div>
        <Delete />
        </>
    );
}
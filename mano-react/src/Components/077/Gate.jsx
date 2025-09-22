export default function Gate({ children, lock }) {


    return (
        <>
            <h2>Gate</h2>
            {
                lock === 'unlocked' ? children : null
            }
        </>
    );
}
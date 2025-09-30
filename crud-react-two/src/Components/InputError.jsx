export default function InputError({ message }) {
    
    if (!message) {
        return null;
    }

    return (
        <div className="invalid-feedback" style={{ display: 'block' }}>
            {message}
        </div>
    );
}
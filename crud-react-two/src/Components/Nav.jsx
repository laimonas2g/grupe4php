import { NavLink } from 'react-router';
export default function Nav() {
 
 
    return (
        <nav className="navbar navbar-expand-lg bg-body-tertiary">
            <div className="container-fluid">
                <a className="navbar-brand">Navbar</a>
                <button className="navbar-toggler" type="button">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav">
                        <li className="nav-item">
                            <NavLink className="nav-link" to="/books">Books</NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink className="nav-link" to="/authors">Authors</NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink className="nav-link" to="/">About</NavLink>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    );
}
 
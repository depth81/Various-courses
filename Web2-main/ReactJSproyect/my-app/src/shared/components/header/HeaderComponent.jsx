import React from 'react';
import {Link} from 'react-router-dom';

function HeaderComponent(){
    return (
        <nav>
            <div className="nav-wrapper indigo">
                <a href="#" className="brand-logo">Logo</a>
                <ul id="nav-mobile" className="right hide-on-med-and-down">
                    <li><Link to="/">Iniciar Sesion</Link></li>
                    <li><Link to="/register">Registro</Link></li>
                </ul>
            </div>
        </nav>
    );
}

export default HeaderComponent;
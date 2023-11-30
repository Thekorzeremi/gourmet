import '../styles/Navbar.scss';
import searchIcon from '../assets/search-icon.svg';

export default function Navbar() {
    return (
        <div className="navbar-sct">
            <div className="topbar-sct">
                <div className="logo-sct">
                    <p>KOUIZINE</p>
                </div>
                <div className="search-sct">
                    <input type="search" name="searchbar" id="searchbar" placeholder='Je cherche des recettes, des ingrédients...'/>
                    <div id="searchbtn">
                        <img src={searchIcon}></img>
                    </div>
                </div>
            </div>
            <div className="botbar-sct">
                <div className="allbtn-sct">
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Salades</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Pizzas</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Burgers</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Barbecue</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Donuts</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Glaces</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label">
                            <p>Boissons</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
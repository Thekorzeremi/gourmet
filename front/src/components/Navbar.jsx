import '../styles/Navbar.scss';
import SearchIcon from '../assets/search-icon.svg';
import BbkIcon from '../assets/bbk.png';
import BoissonIcon from '../assets/boisson.png';
import BurgerIcon from '../assets/burger.png';
import DonutIcon from '../assets/donut.png';
import GlaceIcon from '../assets/glace.png';
import PizzaIcon from '../assets/pizza.png';
import SaladeIcon from '../assets/salade.png';

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
                        <img src={SearchIcon}></img>
                    </div>
                </div>
            </div>
            <div className="botbar-sct">
                <div className="allbtn-sct">
                    <div className="btn-sct">
                        <div id="img">
                            <img src={SaladeIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Salades</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img">
                            <img src={PizzaIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Pizzas</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img">
                            <img src={BurgerIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Burgers</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img">
                            <img src={BbkIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Barbecue</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img">
                            <img src={DonutIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Donuts</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img">
                            <img src={GlaceIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Glaces</p>
                        </div>
                    </div>
                    <div className="btn-sct">
                        <div id="img">
                            <img src={BoissonIcon} id='btnImg'></img>
                        </div>
                        <div id="label">
                            <p>Boissons</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
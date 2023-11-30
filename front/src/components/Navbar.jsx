import '../styles/Navbar.scss';

export default function Navbar() {
    return (
        <div className="navbar-sct">
            <div className="topbar-sct">
                <div className="logo-sct"></div>
                <div className="search-sct"></div>
            </div>
            <div className="botbar-sct">
                <div className="allBtn-sct">
                    <div className="btn-sct">
                        <div id="img"></div>
                        <div id="label"></div>
                    </div>
                </div>
            </div>
        </div>
    )
}
import React from "react";
import ReactDOM from "react-dom";

const Header = () => {
    return (
        <div className="MainPage">
            <h4>Hello Friend!</h4>
            <p className="header-toxt">
                Enter your personal details and start journey with us!
            </p>
            <div className="arrow" />
        </div>
    );
};

export default Header;

if (document.getElementById("leftSide")) {
    ReactDOM.render(<Header />, document.getElementById("leftSide"));
}

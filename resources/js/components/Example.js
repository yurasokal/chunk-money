import React from "react";
import ReactDOM from "react-dom";
import '../../../resources/css/app.scss';
import './Example.scss'
import Header from './Header/Header';
import Footer from './Footer/Footer';


const goodsFromServer = [
    "Dumplings",
    "Carrot",
    "Eggs",
    "Ice cream",
    "Apple",
    "Bread",
    "Fish",
    "Honey",
    "Jam",
    "Garlic",
];

class Example extends React.PureComponent {
    state = {
        selectedGood: "Jam",
        isButtonHiden: false,
    };

    addGood = (good) => {
        this.setState({
            selectedGood: good,
            isButtonHiden: false,
        });
    };

    removeGood = (good) => {
        this.setState({
            selectedGood: "No goods selected",
            isButtonHiden: true,
        });
    };

    render() {
        const { selectedGood, isButtonHiden } = this.state;

        return (
            <div className="App">
                <Header />
                <h1>
                    {`Selected good: - ${selectedGood} `}
                    <button
                        type="button"
                        hidden={isButtonHiden}
                        onClick={() => {
                            this.removeGood();
                        }}
                    >
                        X
                    </button>
                </h1>
                <ul>
                    {goodsFromServer.map((good) => (
                        <li key={good}>
                            <button
                                type="button"
                                onClick={() => {
                                    this.addGood(good);
                                }}
                            >
                                Select
                            </button>{" "}
                            {good}
                        </li>
                    ))}
                </ul>
                <Footer />
            </div>
        );
    }
}

export default Example;

if (document.getElementById("app")) {
    ReactDOM.render(
        <Example />,
        document.getElementById("app"),
    );
}

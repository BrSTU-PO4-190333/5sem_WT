import { useState } from 'react';
import axios from 'axios';

import styles from "./PageSendData.module.css";
import gpi_CryptoJS from '../../class/gpi_CryptoJS';

export default function PageSendData() {
    const [gpi_Name, gpi_SetName] = useState("Иван");
    const [gpi_Position, gpi_SetPosition] = useState("Студент");
    const [gpi_Department, gpi_SetDepartment] = useState("ФЭИС");
    const [gpi_Phone, gpi_SetPhone] = useState("123-45-67");
    const [gpi_Date, gpi_SetDate] = useState("2021.10.20");
    const [gpi_Email, gpi_SetEmail] = useState("ivan@example.com");
    const [gpi_Comment, gpi_SetComment] = useState("Какой-то коммментарий");

    const [gpi_Object, gpi_SetObject] = useState("{}");
    const [gpi_CryptoObject, gpi_SetCryptoObject] = useState("{}");

    function gpi_send() {
        const OBJECT = {
            Name: gpi_Name,
            Position: gpi_Position,
            Department: gpi_Department,
            Phone: gpi_Phone,
            Date: gpi_Date,
            Email: gpi_Email,
            Comment: gpi_Comment,
        };
        console.log(OBJECT);
        const CRYPTO_OBJECT = gpi_CryptoJS.CryptoObject(OBJECT);
        gpi_SetObject(JSON.stringify(OBJECT, null, '\t'));
        gpi_SetCryptoObject(JSON.stringify(CRYPTO_OBJECT, null, '\t'));
        console.log(CRYPTO_OBJECT)
        const URL = `${process.env.REACT_APP__API_URL}:${process.env.REACT_APP__API_PORT}/add`;
        axios.post(URL, CRYPTO_OBJECT)
        .then(function(response) {
            if(response?.data?.msg === "success") {
                alert("Данные добавлены в базу данных");
            }
        })
        .catch(function(err) {
            console.log("Error on PageSendData");
            console.log(err);
        })
    }

    return (
        <div className="container">
            <table className="table">
                <tbody>
                    <tr>
                        <td>Имя</td>
                        <td>
                            <input
                                type="text" className="form-control"
                                placeholder="Kelly Smith"
                                onChange={event => gpi_SetName(event.target.value)}
                                value={gpi_Name}
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>Должность</td>
                        <td>
                            <input
                                type="text" className="form-control"
                                placeholder="Vice President"
                                onChange={event => gpi_SetPosition(event.target.value)}
                                value={gpi_Position}
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>Отдел</td>
                        <td>
                            <select
                                className="form-select"
                                onChange={event => gpi_SetDepartment(event.target.value)}
                            >
                                <option>M&M</option>
                                <option>-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td>
                            <input
                                type="tel" className="form-control"
                                placeholder="8(0297)11-23-45"
                                onChange={event => gpi_SetPhone(event.target.value)}
                                value={gpi_Phone}
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>Дата</td>
                        <td>
                            <input
                                type="date" className="form-control"
                                onChange={event => gpi_SetDate(event.target.value)}
                                value={gpi_Date}
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>
                            <input
                                type="email" className="form-control"
                                placeholder="Kelly@example.com"
                                onChange={event => gpi_SetEmail(event.target.value)}
                                value={gpi_Email}
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>Комментарий</td>
                        <td>
                            <textarea
                                className="form-control"
                                placeholder={"\
I get up at 7 o'clock. \
I wash my hands, my face and clean my teeth. \
I air my room and make the bed. \
Then I have my breakfast. \
"}
                                onChange={event => gpi_SetComment(event.target.value)}
                                value={gpi_Comment}
                            />
                        </td>
                    </tr>
                </tbody>
            </table>

            <div className="row">
                <button
                    className="btn btn-success"
                    onClick={event => gpi_send()}
                >Отправить</button>
            </div>

            <h2>JSON to hashed and encrypted JSON</h2>
            <div style={{ display: "flex" }}>
                <pre style={{ width: "50%" }} className={styles.highlight}>{gpi_Object}</pre>
                <pre style={{ width: "50%" }} className={styles.highlight}>{gpi_CryptoObject}</pre>
            </div>
        </div>
    );
}

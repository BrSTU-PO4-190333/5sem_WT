import { useState } from 'react';
import axios from 'axios';

export default function PageViewData() {
    const [gpi_ConstructorHasRun, gpi_SetConstructorHasRun] = useState(false);
    const [gpi_ArrayData, gpi_SetArrayData] = useState([{}]);

    (function gpi_constructor() {
        if (gpi_ConstructorHasRun) return;
        gpi_SetConstructorHasRun(true);

        const URL = `${process.env.REACT_APP__API_URL}:${process.env.REACT_APP__API_PORT}/get`;
        axios.get(URL)
            .then(function (response) {
                console.log(response);
                console.log(response.data);
                if (response?.data?.length) {
                    let arr = response.data;
                    arr.sort(function(a, b) {
                        if (a["ID"] > b["ID"]) return -1;
                        else if (a["ID"] < b["ID"]) return 1;
                        return 0;
                    })
                    gpi_SetArrayData(arr);
                }
            })
            .catch(function (err) {
                console.log("Error on PageViewData");
                console.log(err);
            });

    }());

    return (
        <div className="container">
            <table className="table table-striped">
                <thead>
                    <tr>
                        <td>ИД</td>
                        <td>Имя</td>
                        <td>Должность</td>
                        <td>Отдел</td>
                        <td>Телефон</td>
                        <td>Дата</td>
                        <td>E-mail</td>
                        <td>Комментарий</td>
                    </tr>
                </thead>
                <tbody>
                    {
                        gpi_ArrayData.map(function (value, index) {
                            return (
                                <tr key={index}>
                                    <td>{value.ID}</td>
                                    <td>{value.Name}</td>
                                    <td>{value.Position}</td>
                                    <td>{value.Department}</td>
                                    <td>{value.Phone}</td>
                                    <td>{value.Date}</td>
                                    <td>{value.Email}</td>
                                    <td>{value.Comment}</td>
                                </tr>
                            );
                        })
                    }
                </tbody>
            </table>
        </div>
    );
}

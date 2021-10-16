import { useState } from "react";
import { Link } from "react-router-dom";

export default function PageViewGET() {
    const [constructorHasRun, setConstructorHasRun] = useState(false);
    const [GET, SetGET] = useState({});

    function constructor() {
        if (constructorHasRun) return;
        setConstructorHasRun(true);
        SetGET(gpi_GET());
    }; constructor();

    function gpi_GET() {
        let url = window.location.search;
        url = url.substr(1);
        let StrArr = url.split("&");
        let gpi_dict = {};
        let gpi_length = StrArr.length;
        let gpi_i = 0;
        while (gpi_i < gpi_length) {
            const KeyValue = StrArr[gpi_i].split("=");
            const KEY = decodeURIComponent(KeyValue[0]);
            const VALUE = decodeURIComponent(KeyValue[1]);
            gpi_dict[KEY] = VALUE;
            ++gpi_i;
        }
        return gpi_dict;
    }

    return (
        <div>
            <table className="table table-striped" >
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        Object.keys(GET).map(function (key, index) {
                            return (
                                <tr key={index}>
                                    <td>{key}</td>
                                    <td>{GET[`${key}`]}</td>
                                </tr>
                            );
                        })
                    }
                </tbody>
            </table>
            <div className="mb-3">
                <Link
                    to="/send-GET"
                    className="btn btn-primary"
                >
                    Ввести в форме новый GET
                </Link>
            </div>
        </div>
    )
}

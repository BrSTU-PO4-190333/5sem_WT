import { Link } from "react-router-dom";

export default function PageHome() {
    return (
        <div className="container">
            <nav>
                <ul>
                    <li><Link to="/send-data">Форма отправки хэшированных и зашифрованных данных</Link></li>
                    <li><Link to="/view-data">Просмотр таблицы данных</Link></li>
                </ul>
            </nav>
        </div>
    );
}

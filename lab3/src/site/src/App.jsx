import {
    Switch,
    Route,
    Link,
} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.css';

import PageHome from "./components/PageHome/PageHome";
import Page404 from "./components/Page404/Page404";
import PageSendData from "./components/PageSendData/PageSendData";
import PageViewData from './components/PageViewData/PageViewData';

export default function App() {
    return (
        <div>
            <div className="container">
                <Link to="/">Меню</Link>
            </div>
            <Switch>
                <Route path="/" exact component={PageHome} />
                <Route path="/send-data" component={PageSendData} />
                <Route path="/view-data" component={PageViewData} />
                <Route component={Page404} />
            </Switch>
        </div>
    );
}

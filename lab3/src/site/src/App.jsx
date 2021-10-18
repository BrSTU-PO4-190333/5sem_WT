import {
    Switch,
    Route,
} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.css';

import PageHome from "./components/PageHome/PageHome";
import Page404 from "./components/Page404/Page404";
import PageSendData from "./components/PageSendData/PageSendData";

export default function App() {
    return (
        <div>
            <Switch>
                <Route path="/" exact component={PageHome} />
                <Route path="/send-data" component={PageSendData} />
                <Route component={Page404} />
            </Switch>
        </div>
    );
}

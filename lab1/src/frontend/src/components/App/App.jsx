import {
    Switch,
    Route,
    Link,
} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import PageHome from "../PageHome/PageHome";
import PageSendGET from '../PageSendGET/PageSendGET';
import PageViewGET from '../PageViewGET/PageViewGET';
import Page404 from "../Page404/Page404";

export default function App() {
    return (
        <div className="container">
            <Switch>
                <Route path="/" exact component={PageHome} />
                <Route path="/send-GET" component={PageSendGET} />
                <Route path="/view-GET" component={PageViewGET} />
                <Route component={Page404} />
            </Switch>
        </div>
    );
}

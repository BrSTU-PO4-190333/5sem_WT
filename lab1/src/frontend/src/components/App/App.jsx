import {
    Switch,
    Route,
    Link,
} from 'react-router-dom';
import "./App.css";
import 'bootstrap/dist/css/bootstrap.min.css';
import styles from "./App.module.css";
import PageHome from "../PageHome/PageHome";
import PageSendGET from '../PageSendGET/PageSendGET';
import PageViewGET from '../PageViewGET/PageViewGET';
import Page404 from "../Page404/Page404";

export default function App() {
    return (
        <div className={`${styles.App} container`}>
            <Switch>
                <Route path="/" exact component={PageHome} />
                <Route path="/send-GET" component={PageSendGET} />
                <Route path="/view-GET" component={PageViewGET} />
                <Route component={Page404} />
            </Switch>
        </div>
    );
}

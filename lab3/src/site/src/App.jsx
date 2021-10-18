import {
    Switch,
    Route,
} from 'react-router-dom';

import PageHome from "./components/PageHome/PageHome";
import Page404 from "./components/Page404/Page404";

export default function App() {
    return (
        <div>
            <Switch>
                <Route path="/" exact component={PageHome} />
                <Route component={Page404} />
            </Switch>
        </div>
    );
}

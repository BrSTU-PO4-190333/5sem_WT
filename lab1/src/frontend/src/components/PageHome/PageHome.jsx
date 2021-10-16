import { Redirect } from "react-router";

export default function PageHome() {
    return (
        <div>
            <Redirect to="/send-GET" />
        </div>
    )
}

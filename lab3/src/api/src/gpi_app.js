require('dotenv').config();
const express = require('express');
const cors = require('cors');

const gpi_connect = require("./gpi_connect");
const gpi_Data = require("./gpi_Data");

const app = express();
app.use(cors());
app.listen(process.env.NODEJS_LOCALE_PORT);
console.log(`Open ${process.env.NODEJS_BASEURL}:${process.env.NODEJS_LOCALE_PORT}/`);

app.get("/", function(req, res) {
    res.send("Hello, World!");
});

/* get */
app.get("/get", function(req, res) {
    const connection = gpi_connect();
    const sql = "SELECT * FROM `database`.`wt_lab3_data`;";
    connection.query(sql, function(error, results, field) {
        if (error) {
            connection.end();
            return error;
        }
        res.send(results);
    });
})

/* add */
app.post("/add", function(req, res) {
    let body = "";

    req.on("data", function(chunk) {
        body += chunk.toString();
    });

    req.on("end", function() {
        const gpi_POST = typeof(JSON.parse(body)) == typeof({}) ? JSON.parse(body) : {};
        
        console.log("POST data");
        console.log(gpi_POST);
        console.log("\n");
        
        let obj = new gpi_Data(gpi_POST, true);
        let data = obj.gpi_getUnDecode();
        
        console.log("undecode data");
        console.log(data);
        console.log("\n");

        const connection = gpi_connect();
        const sql = `\
INSERT INTO \`database\`.\`wt_lab3_data\` \
(\`Name\`, \`Position\`, \`Department\`, \`Phone\`, \`Date\`, \`Email\`, \`Comment\`) \
VALUES ('${data["Name"]}', '${data["Position"]}', '${data["Department"]}', \
'${data["Phone"]}', '${data["Date"]}', '${data["Email"]}', "${data["Comment"]}");`;
        console.log(sql);
        connection.query(sql, function(error, results, field) {
            if (error) {
                connection.end();
                res.send({
                    msg: "err",
                    sql: sql,
                });
                console.log(error);
                return error;
            }
            res.send({
                msg: "success",
            });
        });
    });

});

/* delete */
app.post("/delete", function(req, res) {
    let body = "";

    req.on("data", function(chunk) {
        body += chunk.toString();
    });

    req.on("end", function() {
        const gpi_POST = typeof(JSON.parse(body)) == typeof({}) ? JSON.parse(body) : {};
        if (gpi_POST["ID"] == undefined) {
            res.send({
                "msg": `err`,
                "more": `Error ID: '${gpi_POST["ID"]}'`,
            });
            return;
        }

        const connection = gpi_connect();
        const sql = `DELETE FROM \`database\`.\`wt_lab3_data\` WHERE \`ID\`='${gpi_POST["ID"]}';`;
        console.log(sql);
        connection.query(sql, function(error, results, field) {
            if (error) {
                connection.end();
                res.send({
                    msg: "err",
                    sql: sql,
                });
                console.log(error);
                return error;
            }
            res.send({
                msg: "success",
            });
        });
    });

});

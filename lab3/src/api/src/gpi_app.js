require('dotenv').config();
const express = require('express');

const app = express();
app.listen(process.env.NODEJS_LOCALE_PORT);
console.log(`Open ${process.env.NODEJS_BASEURL}:${process.env.NODEJS_LOCALE_PORT}/`);

app.get("/", function(req, res) {
    res.send("Hello, World!");
});

app.get("/test", function(req, res) {
    const mysql = require('mysql');
    const connection = mysql.createConnection({
        host: process.env.MySQL_HOST,
        user: process.env.MySQL_user,
        password: process.env.MySQL_password,
    });
    const sql = "SELECT * FROM `database`.`wt_lab3`;";
    connection.query(sql, function(error, results, field) {
        if (error) {
            connection.end();
            console.log(error);
            return error;
        }
        res.send(results);
    });
});

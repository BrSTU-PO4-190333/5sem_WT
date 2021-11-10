require('dotenv').config();
const mysql = require('mysql');

module.exports = function gpi_connect() {
    const connection = mysql.createConnection({
        host: process.env.MySQL_HOST,
        user: process.env.MySQL_user,
        password: process.env.MySQL_password,
    });
    return connection;
};

require('dotenv').config();
const express = require('express');
const cors = require('cors');
const gpi_get_hello_world = require("./gpi_get_hello_world");

const app = express();
app.use(cors());
app.listen(process.env.NODEJS_LOCALE_PORT);
console.log(`Open ${process.env.NODEJS_BASEURL}:${process.env.NODEJS_LOCALE_PORT}/`);

app.get("/", gpi_get_hello_world);

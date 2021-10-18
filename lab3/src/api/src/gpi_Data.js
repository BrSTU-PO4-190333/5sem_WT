const gpi_CryptoJS = require("./gpi_CryptoJS");

module.exports = class gpi_Data {
    constructor(obj, hash_keys = true) {
        if (hash_keys) {
            let index = "";

            index = gpi_CryptoJS.hash500("SecretKey");
            this.SecretKey = obj[index];

            index = gpi_CryptoJS.hash500("Name");
            this.gpi_setName(obj[index]);

            index = gpi_CryptoJS.hash500("Position");
            this.gpi_setPosition(obj[index]);

            index = gpi_CryptoJS.hash500("Department");
            this.gpi_setDepartment(obj[index]);

            index = gpi_CryptoJS.hash500("Phone");
            this.gpi_setPhone(obj[index]);

            index = gpi_CryptoJS.hash500("Date");
            this.gpi_setDate(obj[index]);

            index = gpi_CryptoJS.hash500("Email");
            this.gpi_setEmail(obj[index]);

            index = gpi_CryptoJS.hash500("Comment");
            this.gpi_setComment(obj[index]);
            return;
        }

        this.SecretKey = obj["SecretKey"];
        this.gpi_setName(obj["Name"]);
        this.gpi_setPosition(obj["Position"]);
        this.gpi_setDepartment(obj["Department"]);
        this.gpi_setPhone(obj["Phone"]);
        this.gpi_setDate(obj["Date"]);
        this.gpi_setEmail(obj["Email"]);
        this.gpi_setComment(obj["Comment"]);
    }

    gpi_get() {
        return {
            SecretKey: this.SecretKey,
            Name: this.gpi_Name,
            Position: this.gpi_Position,
            Department: this.gpi_Department,
            Phone: this.gpi_Phone,
            Date: this.gpi_Date,
            Email: this.gpi_Email,
            Comment: this.gpi_Comment,
        };
    }

    gpi_getUnDecode() {
        const secretkey = this.SecretKey;
        let obj = this.gpi_get();
        let keys = Object.keys(obj);
        keys.forEach(function(key) {
            console.log(`key=${key}`);
            let ciphertext = obj[key];
            let originaltext = gpi_CryptoJS.undecode(ciphertext, secretkey);
            obj[key] = originaltext;
        });
        return obj;
    }

    gpi_setName(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Name = str;
            return;
        }
        this.gpi_Name = " ";
    }

    gpi_setPosition(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Position = str;
            return;
        }
        this.gpi_Position = " ";
    }

    gpi_setDepartment(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Department = str;
            return;
        }
        this.gpi_Department = " ";
    }

    gpi_setPhone(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Phone = str;
            return;
        }
        this.gpi_Phone = " ";
    }

    gpi_setDate(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Date = str;
            return;
        }
        this.gpi_Date = " ";
    }

    gpi_setEmail(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Email = str;
            return;
        }
        this.gpi_Email = " ";
    }

    gpi_setComment(str) {
        if (typeof (str) == typeof ("")) {
            this.gpi_Comment = str;
            return;
        }
        this.gpi_Comment = " ";
    }
};

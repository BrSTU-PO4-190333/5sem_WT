import CryptoJS from 'crypto-js';

const gpi_CryptoJS = {
    hash: function(str) {
        const hash = CryptoJS.SHA256(str);
        const strHash = hash.toString(CryptoJS.enc.Base64);
        return strHash;
    },

    hash500: function(str) {
        for (let i = 0; i < 500; ++i) {
            str = gpi_CryptoJS.hash(str);
        }
        return str;
    },

    encrypt: function(msg, secret_key) {
        return CryptoJS.AES.encrypt(msg, secret_key).toString();
    },

    generate_secret_key: function() {
        const rand_number = Math.floor(Math.random() * 1e9);
        const secret_key = gpi_CryptoJS.hash(rand_number.toString());
        return secret_key;
    },

    CryptoObject: function(obj) {
        const secret_key = gpi_CryptoJS.generate_secret_key();
        
        let resultObject = {};

        // {} => { "SecretKey": "secretKey" } => { "hash$%&": "secretKey" }
        const index = gpi_CryptoJS.hash500("SecretKey");
        resultObject[index] = secret_key;

        // {} => { "SecretKey": "secretKey" } => { "hash$%&": "secretKey" }
        const keys = Object.keys(obj);
        keys.map(function(value) {
            let gpi_key = gpi_CryptoJS.hash500(value);
            let gpi_value = gpi_CryptoJS.encrypt(obj[value], secret_key);
            resultObject[gpi_key] = gpi_value;
        });
        return resultObject;
    },
};

export default gpi_CryptoJS;

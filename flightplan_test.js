var dotenv = require('dotenv');
dotenv.load();


console.log(process.env.SERVER_HOSTNAME)
console.log(process.env.SERVER_USERNAME)
console.log(process.env.SERVER_PORT)
console.log(process.env.SERVER_FOLDER)
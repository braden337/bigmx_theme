##My wordpress theme development setup

`grunt-cli` tool is required, it can be installed with `npm`, [NodeJS Package Manager](http://nodejs.org/).

After Node/npm is installed on your system run:

`$ npm install`

and then:

`$ grunt flow`

The sass files will be compiled, and the css autoprefixed and minified.

Copy the contents of the `.env-sample` to a new file called `.env` and changed the variables to match your server information.

After this you will be able to run the command `fly production` this project will be copied to the folder you specified in `.env` on your server.

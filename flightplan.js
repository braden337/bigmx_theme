var dotenv = require('dotenv');
dotenv.load();

var plan = require('flightplan');

// configuration
plan.target('production', [
  {
    host: process.env.SERVER_HOSTNAME,
    username: process.env.SERVER_USERNAME,
    port: process.env.SERVER_PORT,
    agent: process.env.SSH_AUTH_SOCK
  },
]);

// run commands on localhost
plan.local(function(local) {
  // uncomment these if you need to run a build on your machine first
  // local.log('Run build');
  // local.exec('gulp build');

  local.log('Copy files to remote hosts');
  var filesToCopy = local.exec('git ls-files', {silent: true});
  // rsync files to all the destination's hosts
  local.transfer(filesToCopy, process.env.SERVER_FOLDER);
});

// Node js


var fs = require('fs');

fs.appendFile('test.geojson', 'helphelpwelp', function (err) {
  if (err) throw err;
  console.log('Replaced!');
});


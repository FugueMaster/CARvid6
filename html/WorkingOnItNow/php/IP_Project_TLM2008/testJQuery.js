// Node js

var nname, ccity;
var fs = require('fs');
$.get("testing.php", function(name, city){
    nname = name;
    ccity = city;
})

fs.appendFile('test.geojson', nname, function (err) {
  if (err) throw err;
  console.log('Replaced!');
});


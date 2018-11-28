var http = require('http');

httpServer = http.createServer(function(req, res){
	console.log("mdr");
	res.end("hello world");
});

httpServer.listen(1337);
var express = require('express');
var app = express();
//var router = express.Router();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var fs = require('fs');

var teamname = "";

//app.get('/', function (req, res) {
//    res.sendFile(__dirname + '/index.html');
//});

app.use(express.static(__dirname + '/public'));

function buildhtml () {
    var head = "";
    var body = "hello world";
    return "<!doctype html><html><head></head><body>"+body+"</body></html>";
}

io.on('connection', function (socket) {
    
    //클라이언트에서 쏜 이벤트 감지
    socket.on('send team', function (team) {
        
        // ./public/A.html
        fs.writeFile(__dirname + '/public/' + team + '.html', buildhtml(), function () {
            console.log('create new html');
            socket.emit('go to', team);
        });
        
        /*
        console.log('create new dir');
        //변수에 저장
        
        teamname = team;
        
        //클라가 보낸 팀이름으로 dir을 만든다
        fs.mkdir('./'+teamname, function () {
            console.log('create new dir');
        });
        
        //aaa디렉토리 안에, general.html을 만든다
        fs.writeFile('./'+teamname+'/general.html', buildhtml(), function(){
            socket.emit('go to', teamname);
        });
        
        //클라가 만든 방으로 이동하도록
        
        */
        
    });
    
});

http.listen(3000, function () {
    console.log('listening on *:3000');
});
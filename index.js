var express = require('express');
var bodyParser = require('body-parser');
var app = express();

//미들웨어로서 bodyparser를 사용하기 위한 설정
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

//정적 파일 서버를 설정하는 문장
app.use(express.static(__dirname+'/public'));
//public 디렉토리에 존재하는 파일을 찾기위해 routing table에 항목을 하나 추가한다.

app.post('/theteam',function(req, res, next){
    var teamname = req.body.teamname;
    var url = req.body.url;
    var name = req.body.name;
    var email = req.body.email;
    
    console.log(teamname+'/'+url+'/'+name+'/'+email);
    res.sendFile(__dirname+'/public/theteam.html');
})

var server = app.listen(3000, function(){
    console.log('server started on port 3000');
});

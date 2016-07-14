var express = require('express');
var app = express();


//정적 파일 서버를 설정하는 문장
app.use(express.static(__dirname+'/public'));
//public 디렉토리에 존재하는 파일을 찾기위해 routing table에 항목을 하나 추가한다.



var server = app.listen(3000, function(){
    console.log('server started on port 3000');
})
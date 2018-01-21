<html>
<body>
<h3> 채팅방 보기</h3>
<table border='1' width='600'>
<tr bgcolor='#ccccc' align='center'> <td>번호</td><td>방이름</td><td>생성일</td></tr>
<?
$num=1;
$name=" 하경준 ";
$date="2018.01.16 ";

for($i=1; $i<=1; $i++)
{
$title="채팅방 목록";
echo("<tr><td width='50' align='center'>$num</td>$title</td>
	<td width='50'>$name</td><td width='80'> $date</td></tr>");
$num++;
}
?>
</table>
</body>
</html>
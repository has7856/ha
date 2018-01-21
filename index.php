<?
	if( $_GET["page"] == "phpinfo" )
	{
		phpinfo();
		exit;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> APMSETUP </title>
<meta http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
<style type="text/css">
body
{
	background-color:#a776d5;
	margin:0 auto;
}
p { margin:0; }

#wrap
{
	width:100%;
	height:100%;
	margin:0 auto;
	text-align:center;
}
#container
{
	width:600px;
	height:100%;
	background-color:#FFF;
	margin:0 auto;
}
	.logo
	{
		text-align:center;
		padding-top:40px;
		padding-bottom:40px;
	}
	.setup_msg
	{
		text-align:center;
		font-weight:bold;
		padding-bottom:30px;
	}
	.info_msg
	{
		font-size:9pt;
		color:#666;
		text-align:left;
		padding-left:10px;
	}

.info_table td
{
	font-size:9pt;
	font-family:'����',Dotum;
	padding-top:8px;
	padding-bottom:5px;
	color:#666;
}
	.info_category
	{
		background-color:#ececec;
		padding-left:10px;
	}
	.info_bg
	{
		background-color:#FFF;
		padding-left:10px;
	}

	.go_home
	{
		text-align:center;
		padding-top:20px;
		padding-bottom:20px;
	}

	.copy
	{
		background-color:#f3f3f3;
		padding-top:10px;
		height:35px;
		font-family:verdana,tahoma;
		text-align:center;
		font-size:8pt;
	}

.c_00 { color:#000; }
.c_red { color:#9e0b0f; }

.p_b10 { padding-bottom:10px; }
</style>
</head>

<body>
<div id="wrap">

	<div id="container" align="center">
		<div class="logo"><a href="http://www.apmsetup.com/" target="_blank"><img src="http://apmsetup.com/images/apmsetupCi.gif" alt="" border="0"></a></div>
		<div class="setup_msg">APM_Setup �� ���������� ��ġ �Ǿ����ϴ�.</div>
		<div class="info_msg">
			<p class="p_b10">��<u class="c_00"><?=$_SERVER["DOCUMENT_ROOT"]?></u> ���͸��� Ȩ�������� �ۼ��ؼ� �����ñ� �ٶ��ϴ�.</p>
			<p class="p_b10">������ ȭ���� ��� ���δٸ� <u class="c_00"><?=$_SERVER["SCRIPT_FILENAME"]?></u> <font class="c_red">������ ����</font>�� �ֽñ� �ٶ��ϴ�.</p>
		</div>

		<table cellpadding="0" cellspacing="1" border="0" width="580" bgcolor="#d7d7d7" class="info_table">
		<tr>
		<td class="info_category">PHP ��������</td>
		<td class="info_bg">[��ġ���͸�]<font class="c_00">\APM_Setup\php.ini</font></td>
		</tr>
		<tr>
		<td class="info_category">MySQL ��������</td>
		<td class="info_bg">[��ġ���͸�]<font class="c_00">\APM_Setup\Server\MySQL5\data\my.ini</font></td>
		</tr>
		<tr>
		<td class="info_category">MySQL Data ���� ��ġ</td>
		<td class="info_bg">[��ġ���͸�]<font class="c_00">\APM_Setup\Server\MySQL5\data</font></td>
		</tr>
		<tr>
		<td class="info_category">Apache ��������</td>
		<td class="info_bg">[��ġ���͸�]<font class="c_00">\APM_Setup\Server\Apache\conf\httpd.conf </font></td>
		</tr>
		<tr>
		<td class="info_category">Apache �α� ��ġ</td>
		<td class="info_bg">[��ġ���͸�]<font class="c_00">\APM_Setup\Server\Apache\logs </font></td>
		</tr>
		<tr>
		<td class="info_category">PHP Info</td>
		<td class="info_bg"><font class="c_00"><A HREF="http://127.0.0.1/?page=phpinfo" target="_blank">http://127.0.0.1/?page=phpinfo</A></font></td>
		</tr>
		<tr>
		<td class="info_category">phpMyAdmin</td>
		<td class="info_bg"><font class="c_00"><a href="http://127.0.0.1/myadmin/" target="_blank">http://127.0.0.1/myadmin/</a></font></td>
		</tr>
		</table>

		<div class="go_home"><a href="http://www.apmsetup.com/board.php?bid=511" target="_blank"><img src="http://apmsetup.com/images/setup_btn01.gif" alt="" border="0"></a>&nbsp;<a href="http://www.apmsetup.com/tutorials.php" target="_blank"><img src="http://apmsetup.com/images/setup_btn02.gif" alt="" border="0"></a></div>

		<div class="copy"><img src="http://apmsetup.com/images/setup_copy.gif" alt="" border="0"></div>
	</div>

</div>

</body>
</html>

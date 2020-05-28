
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Gerenciamento Nova Mídia</title>

<link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic&subset=latin' rel='stylesheet' type='text/css'>

<style type="text/css">
body{
	background-color:#036;
	font-family:'PT Sans', arial, serif;
	font-style: oblique
}
#loginWrap{
	margin: 0 auto;
	padding: 0;
	width: 900px
}
#loginMain{
	background: url(imagens/loginbg.jpg) no-repeat;
	float: left;
	height: 520px;
	margin: 86px 0 0;
	padding: 0;
	width: 900px
}
#loginlogin{	
	float: left;
	height: 127px;
	margin: 196px 0 0;
	padding: 0 70px 0 207px;
	width: 254px
}
#login_head{	
	float: left;
	height: 36px;
	margin: 169px 0 0;
	padding: 0;
	width: 108px;
}
#login_form{
	float: left;
	margin: 220px 0 0 580px;
	padding: 0 10px 0 0;
	width: 250px;
}
#login_form label{
	float: left;
	margin: 0;
	padding: 0 217px 0 0;
	width: 200px
}
#login_form label input{
	background-color:#999;
	border: 0 none;
	color:#FFF;
	float: left;
	font-family: 'PT Sans', arial, serif; 
	font-size: 13px;
	font-style: oblique;
	height: 23px;
	line-height: 16px;
	margin: 14px 0 0;
	padding: 3px 0 3px 10px;
	width: 95%
}
#login_form label a{
	background: url(imagens/signinbutton.jpg) no-repeat scroll 0 0 transparent;
	color: #fff;
	float: left;
	font-size: 12px;
	height: 20px;
	line-height: 16px;
	margin: 14px 0 0;
	padding: 3px 0 0;
	text-align: center;
	text-decoration: none;
	width: 93px
}
#login_form .list a{
	background: none repeat scroll 0 0 transparent;
	color: #036;
	float: left;
	font-size: 12px;
	font-style: oblique;
	margin: 0;
	padding: 10px 0 0 0;
	text-decoration: none;
	width: auto
}
#login_form .space {
	float: left;
	height: 10px;
	margin: 0;
	padding: 0;
}

</style>
<script type="text/javascript">
function setFocus()
  {
  document.getElementById('login').focus()
  }
</script>
</head>

<body onload="setFocus()">
<div id="loginWrap">
<div id="loginMain">   	
        <div id="login_form">
        <form action="login.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
            	<label>
               	  <input type="text" onblur="if(this.value=='')this.value=''" onfocus="if(this.value=='usuário')this.value='usuário'" value="" name="usuario" id="usuario" tabindex="0"  />
                </label>
                <label>
                	<input type="password" onblur="if(this.value=='password')this.value='password'" onfocus="if(this.value=='')this.value=''" value="" name="senha" id="senha">
                </label>
                <label>
                <input style="border: 0; width:78px; height:30px; margin:15px 0 0 0; padding:0; float:left" type="image" src="imagens/btn_entrar.jpg" /><a style="background:none; margin:20px 0 0 20px; padding: 0; width: 50%; color:#036; font-size: 14px" href="esqueceu.html">Esqueci a senha?</a>        		
            </label>
                
              </form>          
    </div>
</div>
</div>
</body>
</html>

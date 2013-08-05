<?php 
session_start();
$GLOBALS['msg'] = '';

if (isset($_POST['submit']) && $_POST['submit'] == 'Validar Captcha') {
    if (isset($_POST["palavra"]) && strtolower($_POST["palavra"]) == strtolower($_SESSION["palavra"])) {
        $GLOBALS['msg'] = "<h1>Voce Acertou</h1>";
    } else {
        $GLOBALS['msg'] = "<h1>Voce nao acertou!</h1>";
    }
}
?>
<!DOCTYPE >
<html>
<head>
    <title>Test Captcha</title>
    
    <link rel="stylesheet" type="text/css" href="/fonts/Bariol-Regular/font.css">

    <style>
    body {
        background-color:#EEE;
        font-size:62.5%;
    }
    
    body, input[type=text], input[type=submit], input[type=reset], #content {
        font-family:'Bariol-Regular';
        color:#666;
        outline: none;
        font-smoothing:antialiased;
        -moz-font-smoothing:antialiased;
        -webkit-font-smoothing:antialiased;
        -o-font-smoothing:antialiased;
    }
    
    label {
        font-size: 1.2em;   
    }
    
    input[type=text] {
        width: 260;
    }
    
    input[type=text], #submit, #reset, #content {
        font-size: 1.6em;
    }
    
    </style>
</head>

<body>
<img src="captcha.php">
<br />
<label>* digite apenas as letras pequenas da imagem</label>
<br />
<label>* não existe diferença entre maiusculas e minusculas</label>
<!--
O texto digitado no campo abaixo sera enviado via POST para
o arquivo validar.php que ira vereficar se o que voce digitou é igual
ao que foi gravado na sessao pelo captcha.php
-->
<form method="post" action="">
   <input type="text" name="palavra"  />
   <input name="submit" type="submit" value="Validar Captcha" />
</form>
<?php echo $GLOBALS['msg'] ?>
</body>
</html>

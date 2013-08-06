<?php
/* TODO ADD CAPTCHA VALIDATOR*/
$GLOBALS['msg'] = '';

if (isset($_POST['submit']) && $_POST['submit']=='create' && $_POST['pass'] == 'alpine') {
    $pathname = 'temp/'.$_POST['dir'].'/';
    
	// TODO Bug on CentOS, dont find 'path' 
    // if (!file_exists($pathname)) {
        mkdir($pathname, 0755, true);
    // }
    
    $my_file = $pathname.$_POST['nameFile'];

    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    $data = $_POST['content'];
    fwrite($handle, $data);
    
    $GLOBALS['msg'] = $_POST['dir'].'/'.$_POST['nameFile'].' created!';
} else {
    $GLOBALS['msg'] = 'Error! Invalid pass!';
}
?>

<!DOCTYPE >
<html>
<head>
	<title>Dir/File Creator</title>
	
	<link rel="stylesheet" type="text/css" href="/fonts/Bariol-Regular/font.css">
	
	<style>
	    #wrapper {
	       width:1600px; 
           margin:0 auto;
	    }
	    
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
            font-size: 2em;   
  	    }
  	    
  	    input[type=text] {
  	        width: 260;
  	    }
	    
	    input[type=text], #submit, #reset, #content {
	        font-size: 1.6em;
	    }
	    
	    #content {
	       font-family: "Courier New", Courier, monospace;
	       resize: none;
	       height: 400px;
	       width: 1600px; 	       
	    }
	    
	</style>
</head>

<body>
<article id="wrapper">
        
    
	<form method="post" action="">
        <label>Dir:</label>
        <br />
        <input id="dir" name="dir" type="text"></input>
        <br />
        <label>File Name:</label>
        <br />
        <input id="nameFile" name="nameFile" type="text"></input>
        <br />
        <label>Pass:</label>
        <br />
        <input id="pass" name="pass" type="password"></input>
        <br />
		<br />
        <label>Content:</label><br />
        <textArea id="content" name="content"></textArea><br />
        
        <span>
            <input id="submit" name="submit" type="submit" value="create" /> 
            <input id="reset" type="reset" value="reset"></input>
        </span>
	</form>
	
	<?php echo "<label>".$GLOBALS['msg']."</label>" ?>
</article>
</body>
</html>


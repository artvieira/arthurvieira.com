<?php

?>
<!DOCTYPE >
<html>
<head>
	<title>iKeep</title>
	
	<link rel="stylesheet" type="text/css" href="http://arthurvieira.com/fonts/Bariol-Regular/font.css">
	<link rel="stylesheet" type="text/css" href="http://arthurvieira.com/css/normalize.min.css">
	<style>
	    #wrapper {
	       width:850px; 
           margin:0 auto;
	    }
	    
	    body {
	        background-color:#EEE;
	        font-size:62.5%;
	    }
	
	    body, input[type=text], input[type=submit], input[type=reset] {
	        font-family:'Bariol-Regular';
            color:#666;
            outline: none;
            font-smoothing:antialiased;
            -moz-font-smoothing:antialiased;
            -webkit-font-smoothing:antialiased;
            -o-font-smoothing:antialiased;
  	    }
  	    
  	    input[type=text] {
  	        width: 260;
  	    }
	    
	    input[type=text], #submit, #reset, #content {
	        font-size: 1.2em;
	    }
	    
	    #new-note {
	    	width: 800px;
	    }
	    
	    #new-note-div {
	    	width:848px;
	    	border:1px solid #CCC;
	    	text-align: center;
	    }
	    
	    #notes {
	    	margin-top:10px;
	    	
	    }
	    
	    .note {
	    	border:1px solid #999;
	    	width:180px;
	    	padding:10px;
	    }
	</style>
</head>

<body>
<section id="wrapper">
	<section id="new-note-div">
		<input id="new-note" type="text" value="new note" />
	</section>
	<section id="notes">
		<section class="note">
			<h1>Titulo da nota</h1>
			<label>Conteudo da nota bla bla bla</label>
		</section>
	</section>
	
    
</section>
</body>
</html>


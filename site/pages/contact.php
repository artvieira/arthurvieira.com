<?php	
$GLOBALS['msg'] = '';

if (isset($_POST['submit']) && $_POST['submit']=='Send') {
	$msg = '';
	
	if (empty($_POST['name'])) {
		$msg .= 'Name is empty<br>';
	}
	
	if (empty($_POST['email'])) {
		$msg .= 'Email is empty<br>';
	}
	
	if (empty($_POST['subject'])) {
		$msg .= 'Subject is empty<br>';
	}
	
	if (empty($_POST['message'])) {
		$msg .= 'Message is empty<br>';
	}
	
	if (empty($msg)) {
		$to          = 'arthurvmx5@gmail.com';
		
		$subject   = $_POST['subject'].', de '.$_POST['name'];
		
		$message = $_POST['message'].'.Responder a '.$_POST['email'];
			
		$headers = 'MIME-Version: 1.0' . '\r\n'
	    . 'From: <contato@paraibarecuperadora.com.br>' . '\r\n'
		. 'Reply-To: <'.$_POST['email'].'>' . '\r\n';


		if (mail($to,$subject,$message,$headers, '-f contato@arthurvieira.com')) {		
			$GLOBALS['msg'] = "Sucess!!!";
		} else { 
			$GLOBALS['msg'] = "Fail, try later!";
		}
	} else {
		$GLOBALS['msg'] = $msg;
	}	
}
?>

<section class="content-section">
	<form action="" method="post">
		<input id="name" name="name" type="text" placeholder="Name" class="form-input-text required" style="display: block; width: 140px;" />

		<input id="email" name="email" type="text" placeholder="Email" class="form-input-text required" style="display: block; width: 180px; margin-top: 10px;" />

		<input id="subject" name="subject"type="text" placeholder="Subject" class="form-input-text required" style="display: block; width: 160px; margin-top: 20px;" />

		<textarea id="message" name="message" placeholder="Message..." class="form-textarea required" style="display: block; width: 300px; margin-top: 10px;" ></textarea>
				
		<input id="submit" name="submit" type="submit" value="Send" style="display: block; margin-top: 10px;"/>
		
		<p style="font-size:1.6em; font-weight:400; color:red;"><?php if (!empty($GLOBALS['msg'])) echo $GLOBALS['msg'];?></p>
	</form>
	
	<h1>Social networks</h1>
	<p>
		<a href="http://art-vieira.deviantart.com" target="_blank" >
			<img src="/images/social/deviantart.png" />
			devianArt  
		</a>
		<a href="https://www.facebook.com/AVMLU" target="_blank" style="margin-left: 40px;">
			<img src="/images/social/facebook.png" />
			Facebook
		</a>
		<a href="https://github.com/artvieira" target="_blank" style="margin-left: 40px;">    
			<img src="/images/social/github.png" />
			Github  
		</a> 
		<br />
		<a href="http://www.linkedin.com/pub/arthur-vieira/28/995/3b4" target="_blank"> 
			<img src="/images/social/linkedin.png" />
			LinkedIn
		</a> 
		<a href="https://twitter.com/art_vieira" target="_blank" style="margin-left: 50px">  
			<img src="/images/social/twitter.png" /> 
			Twitter
		</a> 
		<a href="skype:arthurvmx5?call" style="margin-left: 50px;">  
			<img src="/images/social/skype.png" /> 
			Skype
		</a>   
	</p>
</section>
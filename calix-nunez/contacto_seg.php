<?php
    session_start();

	function getRealIp() {
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
         $ip=$_SERVER['HTTP_CLIENT_IP'];
       } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
         $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
       } else {
         $ip=$_SERVER['REMOTE_ADDR'];
       }
       return $ip;
    }

    function writeLog($where) {
    
    	$ip = getRealIp(); // Get the IP from superglobal
    	$host = gethostbyaddr($ip);    // Try to locate the host of the attack
    	$date = date("d M Y");
    	
    	// create a logging message with php heredoc syntax
    	$logging = <<<LOG
    		\n
    		<< Start of Message >>
    		There was a hacking attempt on your form. \n 
    		Date of Attack: {$date}
    		IP-Adress: {$ip} \n
    		Host of Attacker: {$host}
    		Point of Attack: {$where}
    		<< End of Message >>
LOG;
// Awkward but LOG must be flush left
    
            // open log file
    		if($handle = fopen('hacklog.log', 'a')) {
    		
    			fputs($handle, $logging);  // write the Data to file
    			fclose($handle);           // close the file
    			
    		} else {  // if first method is not working, for example because of wrong file permissions, email the data
    		
    			$to = 'roddomdiseno@gmail.com';  
            	$subject = 'HACK ATTEMPT';
            	$header = 'From: roddomdiseno@gmail.com';
            	if (mail($to, $subject, $logging, $header)) {
            		echo "Env�o de nota al administrador desde Narciso Underwear.";
            	}
    
    		}
    }

    function verifyFormToken($form) {
        
        // check if a session is started and a token is transmitted, if not return an error
    	if(!isset($_SESSION[$form.'_token'])) { 
    		return false;
        }
    	
    	// check if the form is sent with token in it
    	if(!isset($_POST['token'])) {
    		return false;
        }
    	
    	// compare the tokens against each other if they are still the same
    	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
    		return false;
        }
    	
    	return true;
    }
    
    function generateFormToken($form) {
    
        // generate a token from an unique value, took from microtime, you can also use salt-values, other crypting methods...
    	$token = md5(uniqid(microtime(), true));  
    	
    	// Write the generated token to the session variable to check it against the hidden field when the form is sent
    	$_SESSION[$form.'_token'] = $token; 
    	
    	return $token;
    }
    
    // VERIFY LEGITIMACY OF TOKEN
    if (verifyFormToken('commentForm')) {
        // CHECK TO SEE IF THIS IS A MAIL POST
        if (isset($_POST['email'])) {
        
            // Building a whitelist array with keys which will send through the form, no others would be accepted later on
            $whitelist = array('token','name'/*,'surname'*/,'email'/*,'fone','empresa','address','city','prov','country'*/,'coment','Submit','Clear');

            // Building an array with the $_POST-superglobal 
            foreach ($_POST as $key=>$item) {
                    // Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
            		if (!in_array($key, $whitelist)) {
            			writeLog('Unknown form fields');
            			die("Hack-Attempt detected. Please use only the fields in the form");
            		}
            }
            // SAVE INFO AS COOKIE, if user wants name and email saved
            $saveCheck = $_POST['save-stuff'];
            if ($saveCheck == 'on') {
                setcookie("WRCF-Name", $_POST['name'], time()+60*60*24*365);
                setcookie("WRCF-Email", $_POST['email'], time()+60*60*24*365);
            }
            
            // PREPARE THE BODY OF THE MESSAGE
			
			$name=strip_tags($_POST['name']);
			//$surname=strip_tags($_POST['surname']);
			$email=strip_tags($_POST['email']);
			//$empresa=strip_tags($_POST['empresa']);
			//$address=strip_tags($_POST['address']);
			//$city=strip_tags($_POST['city']);
			//$prov=strip_tags($_POST['prov']);
			//$country=strip_tags($_POST['country']);
			//$fone=strip_tags($_POST['fone']);
			$coment=utf8_decode($_POST['coment']);
			

			$message = '<html lang="es"><body>';
			$message .= '<table width="600" border="0" align="center" cellpadding="10" cellspacing="0" rules="all" style="border-color: #666;">
';
			$message .= '<tr bgcolor="#1b1b1b"><td colspan="2" align="center"><h2 style="font-weight:bold; font-size: 22px; font-family: Tahoma,Geneva,sans-serif; color:#ffffff;">RD dise�o web</h2><p style="font-weight:bold; font-size: 16px; font-family: Tahoma,Geneva,sans-serif; color:#ffffff;">Consulta desde la web</p></td></tr>';
			$message .= "<tr style='background: #eee;'><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Nombre y Apellido:</strong> </td><td>" . $name /*." " .$surname */. "</td></tr>";
			$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
			//if($empresa) {$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Empresa:</strong> </td><td>" . $empresa . "</td></tr>";} 
			//if($address) {$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Direcci�n:</strong> </td><td>" . $address . "</td></tr>";}
			//if($city) {$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Ciudad:</strong> </td><td>" . $city . "</td></tr>";}
			//if($prov) {$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Provincia:</strong> </td><td>" . $prov . "</td></tr>";}
			//if($country) {$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Pa�s:</strong> </td><td>" . $country . "</td></tr>";}
			//if($fone) {$message .= "<tr><td width='100' height='25' valign='top' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Tel�fono:</strong> </td><td>" . $fone . "</td></tr>";}
			$message .= "<tr><td colspan='2' width='600' height='25' valign='top' align='left' style='background: #eee; font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'><strong>Comentario:</strong> </td></tr>
			<tr><td colspan='2' width='600' valign='top' align='left' style='font-weight:bold; font-size: 14px; font-family: Tahoma,Geneva,sans-serif;'>" . $coment . "</td></tr>";
			$message .= '<tr bgcolor="#1b1b1b"><td colspan="2" align="center" height="20"><h3 style="font-weight:bold; font-size: 11px; font-family: Tahoma,Geneva,sans-serif; color:#ffffff;"><em>RD dise�o web</em> | +54 911 4087-3213 | Buenos Aires - Argentina</h3></td></tr>';
			$message .= '<tr bgcolor="#1b1b1b"><td colspan="2" align="center" height="20"><h3 style="font-weight:bold; font-size: 11px; font-family: Tahoma,Geneva,sans-serif; color:#ffffff;">Tel.: +54 11 4854-3878 | <a href="mailto:info@rddiseno.com.ar">info@rddiseno.com.ar</a></h3></td></tr>';
			$message .= '<tr bgcolor="#1b1b1b"><td colspan="2" align="left" height="20"><h3 style="font-weight:bold; font-size: 10px; font-family: Tahoma,Geneva,sans-serif; color:#ffffff;">Este mail se ha generado en forma autom�tica desde la web para enviar la consulta que ha realizado. Se env�a copia para su verificaci�n.</h3></td></tr>';
			$message .= "</table>";
			$message .= "</body></html>";
			
			//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
			
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
                $cleanedFrom = trim(strip_tags($_POST['email'])); 
            } else { 
                return "El email ingresado es inv�lido. Por favor ingr�selo nuevamente!"; 
            } 
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'info@rddiseno.com.ar,'.$email;
			
			$subject = 'Consulta desde la web de RD dise�o web.';
			
			$headers = "From: RD dise�o web - Consulta desde la Web <info@rddiseno.com.ar> \r\n";
			$headers .= "Reply-To: ". $email . "\r\n";
			$headers .= "Bcc: roddomdiseno@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
            if (mail($to, $subject, $message, $headers)) {
              $ok = '1';
			  $tracker = '
			  <script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-610544-11");
			pageTracker._trackPageview("/contacto.php");
			} catch(err) {}</script>
			
			';

			} else {
              $ok = '2';
            }
        
        }
    } else {
   		if (!isset($_SESSION[$form.'_token'])) {
   		
   		} else {
   			echo "Hack-Attempt detected. Got ya!.";
   			writeLog('Formtoken');
   	    }
   
   	}

?>
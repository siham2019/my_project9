<?php

require('Mailin.php');
/*
 * This will initiate the API with the endpoint and your access key.
 *
 */
function emailPass($nom,$prenom,$id,$pass,$e)
{
	$mailin = new Mailin('https://api.sendinblue.com/v2.0','4QHPrN0zGbm9SUI7');

/*
 * This will send a transactional email
 *
 */
/** Prepare variables for easy use **/ 
/*echo "$e <br>";*/
$data = array( "to" => array($e=>" "),
			"from" => array("didi2016gg@gmail.com","dido dida"),
			"subject" => "authentification",
			"text" => "voici les informations d'authentification",
			"html" => "<p>cher ".$nom." ".$prenom.", voici les informations d'authentification<p>
			        <ul>
	                  <li>identifiant:".$id."</li>
	                  <li>mot de passe:".$pass."</li>
	                </ul>",
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "planning surveillance")
);

$mailin->send_email($data);
}
function emailMe($e,$date,$hd,$nom,$prenom,$hf,$loc)
{
	$mailin = new Mailin('https://api.sendinblue.com/v2.0','4QHPrN0zGbm9SUI7');

/*
 * This will send a transactional email
 *
 */
/** Prepare variables for easy use **/ 
/*echo "$e <br>";*/
$data = array( "to" => array($e=>" "),
			"from" => array("didi2016gg@gmail.com","dido dida"),
			"replyto" => array("didi2016gg@gmail.com","dido dida"),
			"subject" => "planning de surveillance",
			"text" => " voici votre planning de surveillance",
			"html" => "
			  <h3>cher ".$nom." ".$prenom.", voici votre planning de surveillance</h3>
			   <table border='1' width='100%'>
		         
		          <tr>
			         <th>date</th>
			         <th>heure de debut</th>
			         <th>heure de fin</th>
			         <th>locaux</th>
		          </tr>
                   <tr>
		 	      <td>".$date."</td>
			      <td>".$hd."</td>
			      <td>".$hf."</td>
			      <td>".$loc."</td>
		          </tr>
		        </table>
		      ",
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "planning surveillance")
);

$mailin->send_email($data);
}


?>
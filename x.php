<?php
require('Mailin.php');
$mailin = new Mailin('https://api.sendinblue.com/v2.0','4QHPrN0zGbm9SUI7');

/*
 * This will send a transactional email
 *
 */

$data = array( "to" => array("donyadina994@gmail.com"=>" "),
			"from" => array("didi2016gg@gmail.com","dido dida"),
			"replyto" => array("didi2016gg@gmail.com","dido dida"),
			"subject" => "planning de surveillance",
			"text" => "voici votre planning de surveillance",
			"html" => "
			   <table border='1' width='100%'>
		          <tr>
			         <th>date</th>
			         <th>heure de debut</th>
			         <th>heure de fin</th>
			         <th>locaux</th>
		          </tr>
                   <tr>
		 	      <td> </td>
			      <td> </td>
			      <td> </td>
			      <td> </td>
		          </tr>
		        </table>
		      ",
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "planning de surveillance")
);

var_dump($mailin->send_email($data));












?>
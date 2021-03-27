<?php


include 'Mailin.php';

      $mailin = new Mailin('didi2016gg@gmail.com', '4QHPrN0zGbm9SUI7');
     $mailin->
    addTo('didi2016gg@gmail.com', 'dido dida')->
   setFrom('didi2016gg@gmail.com', 'dido dida')->
   setReplyTo('didi2016gg@gmail.com','dido dida')->
   setSubject('Entrer lobjet ici')->
   setText('Bonjour')->
   setHtml('<strong>Bonjour</strong>');
  $res = $mailin->send();


?>
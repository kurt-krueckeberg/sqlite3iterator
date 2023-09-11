<?php
declare(strict_types=1);
use SQLite3\ResultIterator;

include "vendor/autoload.php";

try {

  $sqlite = new SQLite3('test.rmtree');
  
} catch(Exception $e) {

  echo "Exception thrown: " . $e->getMessage() . "\n";
  return;
}

/*
 * Use strnatcmp to provide RMNOCASE collation.
 */

$sqlite->createCollation('RMNOCASE', 'strnatcmp');

var_dump($sqlite);

$query = 'select surname, given from NameTable where surname="Zollinger"';

$result_set = $sqlite->query($query);

while($row = $result_set->fetchArray()) {

  print_r($row);
  echo "-------\n";

}

$result_set = $sqlite->query($query);

$iter = new ResultIterator($result_set); 
return;
?>

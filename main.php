<?php
declare(strict_types=1);

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

$query = "select count(*) as total from NameTable";

$r = $sqlite->query($query);

$result = $r->fetchArray();

var_dump($result);


while($row = $returned_set->fetchArray() !== false) {

  echo $row[0] . "\n";

}

return;
?>

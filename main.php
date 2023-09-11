<?php
declare(strict_types=1);

include "vendor/autoload.php";

try {

  $sqlite = new SQLite3('x.db');
  
} catch(Exception $e) {

  echo "Exception thrown: " . $e->getMessage() . "\n";
  return;
}

/*
 * Use strnatcmp to provide RMNOCASE collation.
 */

$sqlite->createCollation('RMNOCASE', 'strnatcmp');

var_dump($sqlite);

return;

$query = "...";

$$db->query($query);

while($result = $returned_set->fetchArray() !== false) {

  echo $row['col1'] . "\n";

}
?>

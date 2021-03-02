
<?php
header('Content-Type: application/json');
require_once __DIR__ . '/database/database.php';
 echo json_encode($albums);

?>
<?php
require_once('_config.php');

$actions = Db::sql("select * from actions");
?>

<h1>Database Actions</h1>

<?php if ($actions) {?>
  <pre>
    <?php print_r($actions) ?>
  </pre>
<?php } else { ?>
  <p>No actions in the database</p>
<?php } ?>

<?php
$start        = strtotime('tomorrow');
$end          = mktime(0, 0, 0, 2, 1, 2021);
$start_date   = date('D, j M \'y', $start); // Sat, 01 Jan 2021
$end_date     = date('1, F d, Y', $end);   // Sunday, 01 Feb 2021
?>
<?php include 'includes/header.php'; ?>

  <p><b>Sale starts:</b> <?= $start_date ?></p>
  <p><b>Sale ends:</b> <?= $end_date ?></p>

<?php include 'includes/footer.php'; ?>
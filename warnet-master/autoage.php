<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"> 
</head>
<body>
  <?php
    function AutoAge($birthday)
    {
      $today = new DateTime(date('d-m-Y'));
      $bday = new DateTime($birthday); // Persons Date of Birth     
      $diff = $bday->diff($today);
      return $diff->format('%y');
    }
  ?>
  <p>some content here</p>
  <p>Alice has an age of <?php echo AutoAge("11-4-2000"); ?></p>
  <p>other content here</p>
  <p>Bob has an age of <?php echo AutoAge("23-9-2004"); ?></
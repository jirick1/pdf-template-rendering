<?php 
require('vendor/FPDM/src/FPDM.php'); // include fpdm lib

echo "hello world";


$fields = array(
  'claimant_name' => 'James'
);

$pdf = new FPDM\FPDM('form_templates/ha-501.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();

?>

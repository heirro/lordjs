<?php
require __DIR__.'/autoload.php';
$js = file_get_contents('./routing.js'); // don't change anything //
$packer = new Tholu\Packer\Packer($js, 'Normal', true, false, true);
$packed_js = $packer->pack();

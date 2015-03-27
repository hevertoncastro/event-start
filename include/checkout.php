<?php
require("pagarme/Pagarme.php");

Pagarme::setApiKey("ak_test_jp9xezgXwN6CgUwWYlGnhSi2eXyhFT");

$transaction = PagarMe_Transaction::findById("{TOKEN}");
$transaction->capture(1000);

//print_r($boleto_url);
exit;
?>
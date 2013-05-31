<?php

// Test the new Ensemble REST API with an example gene
$ensemblID = "ENSG00000157764";
$ensemblResultJson = file_get_contents("http://beta.rest.ensembl.org/xrefs/id/$ensemblID?content-type=application/json");
$ensemblResult = json_decode($ensemblResultJson, true);

// Print out the structure of the resulting array structure
echo "<pre>";
print_r($ensemblResult);
echo "</pre>";

?>

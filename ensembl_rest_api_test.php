<?php

// Test the new Ensemble REST API with an example gene
$ensemblID = "ENSG00000157764";
$ensemblResultJson = file_get_contents("http://beta.rest.ensembl.org/xrefs/id/$ensemblID?content-type=application/json");
$ensemblResult = json_decode($ensemblResultJson, true);

// Print out each found gene name on a separate row
echo "<pre>";
foreach ($ensemblResult as $mapping) {
    if ( in_array( $mapping['dbname'], array("EntrezGene","HGNC"))) {
        echo "Found Gene symbol: " . $mapping['display_id'] . "\n";
    }
}
echo "</pre>";

?>

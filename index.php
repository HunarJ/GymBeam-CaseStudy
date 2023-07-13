<?php
require_once 'vendor/autoload.php';

use Sentiment\Analyzer;

$file = fopen("dataset-gymbeam-product-descriptions-eng.csv", "r");

if ($file !== false) {
    while (!feof($file)) {
        $data = fgetcsv($file);
        $products[] = $data;
    }
}

array_shift($products);


array_pop($products);

$analyzer = new Analyzer();

foreach ($products as $product) {
    $compoundScore = $analyzer->getSentiment($product[1]);
    $arrayScore[] = $compoundScore;
}

foreach ($arrayScore as $score) {
    $productScore[] = $score['compound'];
}

$maxValue = array_search(max($productScore), $productScore);

$productMostPositiveName = $products[$maxValue][0];
$productMostPositiveDescription = $products[$maxValue][1];

$minValue = array_search(min($productScore), $productScore);

$productMostNegativeName = $products[$minValue][0];
$productMostNegativeDescription = $products[$minValue][1];

echo('<h1>Solution: </h1>');
echo ('<strong>The most positive product name: </strong><br>' . $productMostPositiveName . '<br>');
echo('<br>');
echo ('<strong>The most positive product description: </strong><br>' . $productMostPositiveDescription);
echo('<br>');
echo ('<strong>The most pnegative product name: </strong><br>' . $productMostNegativeName . '<br>');
echo('<br>');
echo ('<strong>The most negative product description: </strong><br>' . $productMostNegativeDescription);


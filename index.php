<?php
$dom = new DOMDocument;
$dom->loadHTML(file_get_contents('https://www.wholetex.com/products/women/salwar-suits?sortby=newest-dsc&fromprice=700&toprice=3000&fabric=&brand=&size=')); 

// echo Links and their anchor text
echo '<pre>';
echo "Link\tAnchor\n";

$xpath = new DOMXPath($dom);
$links = $xpath->query('//a[@class="home-product-image"]');

foreach ($links as $link) {
    $url = $link->getAttribute('href');
    print $url . PHP_EOL;
}
echo '</pre>';

?>
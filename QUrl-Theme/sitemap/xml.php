<?php

include "sitemap-generator.php";
// Create an object of the generator class passing the config file
$smg = new SitemapGenerator(include("sitemap-config.php"));
// Run the generator
$smg->GenerateSitemap();
?>
<?php

$doc = new DOMDocument;
$doc->load('example.xml');

$de = $doc->documentElement;

// we retrieve the chapter and remove it from the book
$chapter = $de->getElementsByTagName('chapter')->item(0);
if ($chapter == null)
{
    echo "Chapter is null\n";
}
else
{
    echo "Chapter is not null\n";
}
//$oldchapter = $de->removeChild($chapter);

//echo $doc->saveXML();
?>

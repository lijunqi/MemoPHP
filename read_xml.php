<?php
$des_file = 'example1.xml';
if (!copy('example.xml', $des_file)) {
    echo "failed to copy $des_file...\n";
    return;
}


$dom = new DOMDocument;
$dom->preserveWhiteSpace = false; // this will remove white space after node removal.
$dom->formatOutput = true; // this will "nicely" format output on save.
$dom->load('example1.xml');
$doc = $dom->documentElement;

// we retrieve the chapter and remove it from the book
$chapter = $doc->getElementsByTagName('chapter')->item(0);
if ($chapter == null)
{
    echo "Chapter is null\n";
}
else
{
    echo "Chapter is not null\n";
}

// * Query element
$ftp_server_field = $doc->getElementsByTagName('FTPTestServer')->item(0);
echo $ftp_server_field->nodeName . " --- " . $ftp_server_field->nodeValue;
// * Remove element
$doc->removeChild($ftp_server_field);

// * Create element
$ele = $dom->createElement('FTPTestServer');
$sub_ele1 = $dom->createElement('FTPTestServerIP', '1.1.1.1');
$ele->appendChild($sub_ele1);
$doc->appendChild($ele);

// * Save to file
file_put_contents('example1.xml', $dom->saveXML());

echo "Done.\n";
?>

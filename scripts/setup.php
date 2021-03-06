<?php

//Set domain
$domain = isset($argv[1]) ? $argv[1] : null;
if (!$domain) {
  die('Domain is required' . $domain);
}

//Set project folder
$projectFolder = substr($domain, 0, strrpos($domain, '.'));

logStatement('Domain: ' . $domain);
logStatement('Project Folder: ' . $projectFolder);

$dirs = ['group_vars', 'roles'];
$ignoreFiles = ['.', '..'];
foreach ($dirs as $dir) {
    $it = new RecursiveDirectoryIterator(__DIR__ . '/../' . $dir);

    foreach(new RecursiveIteratorIterator($it) as $file) {
        if (in_array($file->getFilename(), $ignoreFiles)) {
            continue;
        }

        logStatement('Updating File: ' . $file->getPathname());

        fileFindReplace($file, 'example.com', $domain);
        fileFindReplace($file, '/example', '/' . $projectFolder);
        renameFile($file, 'example.com', $domain);
    }
}

function fileFindReplace($file, $search, $replace)
{
    $content = file_get_contents($file->getPathname());
    $contentChunks = explode($search, $content);
    $content = implode($replace, $contentChunks);
    file_put_contents($file->getPathname(), $content);
}

function renameFile($file, $search, $replace)
{
    if (stripos($file->getFilename(), $search) !== false) {
        $content = file_get_contents($file->getPathname());
        file_put_contents(str_replace($search, $replace, $file->getPathname()), $content);
        unlink($file->getPathname());
    }
}

function logStatement($statement)
{
    print_r($statement);
echo '
';
}

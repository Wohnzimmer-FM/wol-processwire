<?php

function versionedStylesheet($relative_url, $add_attributes = "")
{
    return '<link rel="stylesheet" href="' . versionedResource($relative_url) . '" ' . $add_attributes . '>' . "\n";
}

function versionedJavascript($relative_url, $add_attributes = "")
{
    return '<script src="' . versionedResource($relative_url) . '" ' . $add_attributes . '></script>' . "\n";
}

function versionedResource($relative_url)
{
    $file = $_SERVER["DOCUMENT_ROOT"] . $relative_url;

    $file_version = "";

    if (file_exists($file)) {
        $file_version = "?v=" . filemtime($file);
    }
    
    return $relative_url . $file_version;
}

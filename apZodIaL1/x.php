<?php

// ==principia-web-mini==
// Tiny PHP script to turn a domain into a Principia level server.
// Mostly proof of concept.

$level = isset($_GET['i']) ? (int)$_GET['i'] : null;
$levelpath = sprintf('../levels/%d.plvl', $level);

if (!$level || !file_exists($levelpath)) die();

echo readfile($levelpath);

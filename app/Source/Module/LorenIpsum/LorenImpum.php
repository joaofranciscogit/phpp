<?php

  require_once './Source/Config/Lib.php';

  define('DATA',
  [

    'ACCESS'      => 'PUBLIC',
    'MODULE'      => 'LorenIpsum',
    'AUTH'        => false,
    'TITLE'       => 'Loren Ipsum',
    'INDEX'       => true,
    'DESCRIPTION' => 'Loren Ipsum',
    'KEYWORDS'    => 'Loren Ipsum',
    'IMAGE'       => null,
    'AUTHOR'      => PROJECT['AUTHOR']
  ]);

echo '<h1>Loren Ipsum</h1>';
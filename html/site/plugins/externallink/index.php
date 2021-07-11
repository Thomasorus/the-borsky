<?php

Kirby::plugin('the-borsky/externallink', [
  'blueprints' => [
    'blocks/externallink' => __DIR__ . '/blueprints/blocks/externallink.yml'
  ],
  'snippets' => [
    'blocks/externallink' => __DIR__ . '/snippets/blocks/externallink.php'
  ]
]);
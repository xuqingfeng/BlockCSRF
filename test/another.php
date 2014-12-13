<?php

require_once 'BlockCSRF.php';

use Block\BlockCSRF;

$blockCSRF = BlockCSRF::instance();
$csrfToken = $blockCSRF->generate();

var_dump($csrfToken);
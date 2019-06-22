<?php

use \App\Controllers\MainController;

$c['MainController'] = function ($c) {
    return new MainController ($c);
};
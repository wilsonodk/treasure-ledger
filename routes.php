<?php

// Application
dispatch('/', 'MainController::home');

// GM Admin Treasure Boxes
dispatch('/admin', 'AdminController::home');
dispatch('/admin/boxes', 'AdminController::listBoxes');
dispatch('/admin/box/:id', 'AdminController::showBox');
dispatch_post('/admin/box', 'AdminController::createBox');
dispatch_post('/admin/box/:id', 'AdminController::editBox');
dispatch_delete('/admin/box/:id', 'AdminController::deleteBox');

?>

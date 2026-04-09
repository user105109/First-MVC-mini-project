<?php
require_once 'controllers/stagiaireController.php';

$action = $_GET['action'];

if (isset($action)) {
    switch ($action) {
        case 'show':
            indexAction();
            break;
        case 'create':
            createAction();
            break;
        case 'store':
            storeAction();
        case 'delete':
            deleteAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'newInfo':
            modifyAction();
            break;
        case 'edit':
            editAction();
            break;
    }
}

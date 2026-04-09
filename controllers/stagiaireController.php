<?php
require_once __DIR__ . '/../models/stagiaire.php';

//C: CREATE
function createAction() {
    require_once 'views/ajouteStagiaire.php';
}
function storeAction() {
    ajouteStagiaire();
    header('Location: index.php?action=show');
}

//R: READ
function indexAction() {
    $stagiaires = listeStagiaires();
    require_once 'views/listeStagiaires.php';
}


//U: UPDATE
function modifyAction() {
    $userId = $_GET['id'];
    require_once 'views/editStagiaire.php';
}
function editAction() {
    $userId = $_GET['id'];
    editStagiaireInfo($userId);
    header('Location: index.php?action=show');
}


//D: DELETE
function deleteAction() {
    $userId = $_GET['id'];
    require_once 'views/deleteStagiaire.php';
}
function destroyAction() {
    $userId = $_GET['id'];
    supprimeStagiaire($userId);
    header('Location: index.php?action=show');
}
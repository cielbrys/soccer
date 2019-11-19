<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PlayerDAO.php';

class PlayersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->playerDAO = new PlayerDAO();
  }

  public function index() {
    $term ='';
    if (!empty($_GET['action'])){
      if($_GET['action'] == 'filter'){
        $players = $this->playerDAO->search($_GET['term']);
      }
    }else{
      $players = $this->playerDAO->selectTopPlayers();
    };
    if (!empty($_GET['term'])){
      $term = $_GET['term'];
    }
    $this->set('term', $term);
    $this->set('players', $players);
  }
}

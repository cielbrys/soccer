<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PlayerDAO.php';

class PlayersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->playerDAO = new PlayerDAO();
  }

  public function index() {
    $players = $this->playerDAO->selectTopPlayers();
    $this->set('players', $players);
  }
}

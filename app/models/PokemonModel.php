<?php
class PokemonModel {
  private $databaseConnection;

  public function __construct() {
    $servername = "db";
    $username = "user";
    $password = "root";
    $dbname = "db";

    $this->databaseConnection = new mysqli($servername, $username, $password, $dbname);

    if ($this->databaseConnection->connect_error) {
      die("Connection failed: " . $this->databaseConnection->connect_error);
    }
  }

  public function __destruct() {
    $this->databaseConnection->close();
  }

  public function getAllPokemons() {
    $sql = "SELECT id, name, type FROM pokemons";
    $result = $this->databaseConnection->query($sql);
    
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
  }
}
?>
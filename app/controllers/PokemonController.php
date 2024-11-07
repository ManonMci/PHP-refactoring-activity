<?php
require_once 'models/PokemonModel.php';

class PokemonController {
  public function read() {
    $model = new PokemonModel();
    $pokemons = $model->getAllPokemons();
    
    include 'views/homepage.php';
  }
}
?>
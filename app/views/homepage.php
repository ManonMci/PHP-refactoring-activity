<body>
  <h1> La liste de mes pokémons </h1>
  <?php foreach ($pokemons as $pokemon): ?>
    <h2>
      <?php echo ($pokemon['name']); ?>
    </h2>
    <p> Type: 
      <?php echo ($pokemon['type']); ?>
    </p>
  <?php endforeach; ?>
</body>



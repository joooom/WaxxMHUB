<?php
    $modpacks = array(['imagem' => 'img/MoneyCraft.png','name' => 'Money Craft', 'description' => 'Money Craft é um modpack para ser jogado em multiplayer com seus amigos, realizando trocas, comprando coisa ou até construindo uma cidade como no <a href="https://www.google.com/search?q=stonkscraft+2" style="color: white;">StonksCraft</a>' ,'link' => 'modpacks/moneycraft'],
    ['imagem' => 'img/sc2.png','name' => 'Shop Craft 2', 'description' => 'É tipo o moneycraft mais dois' ,'link' => 'modpacks/shopcraft']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Waxx Hub | Home</title>
</head>
<body>
    <header>
        <nav>
          <a href="/"><img src="img/waxx.svg" onmouseover="this.src='img/waxxl.svg'" onmouseout="this.src='img/waxx.svg'" width="50%" alt="logo"></a>
          <ul>
            <li><a href="#modpacks">Modpacks</a></li>
            <li><a href="#mods">Mods</a></li>
        </nav>
      </header>
    <main>
      <div class="container" id="modpacks">
        <h1>Modpacks</h1>
        <div class="row">
          <?php foreach ($modpacks as $key => $value) { ?>
          <div class="card">
          <img src="<?php echo $value['imagem']?>">
          <div class="card-info">
                <h2><?php echo $value['name']?></h2><br>
              <p><?php echo $value['description']?></p>
              <div style="text-align: center;" class="card-button"><a href="<?php echo $value['link']?>">View Modpack</a></div><br>
          </div>
          </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <div class="container" id="mods">
        <h1>Mods</h1>
        <div class="row">
          <div class="card">
            <div class="card-info">
            <h1>Empty</h1>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
<script type="text/javascript">
  var lvlOne = [];
  var lvlTwo = [];
  var lvlThree = [];
</script>
<?php

include('init.php');

// protocole utilisé : http ou https ?
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://"; else $url = "http://";
  // hôte (nom de domaine voire adresse IP)
  $url .= $_SERVER['HTTP_HOST'];
  // emplacement de la ressource (nom de la page affichée). Utiliser $_SERVER['PHP_SELF'] si vous ne voulez pas afficher les paramètres de la requête
  $url .= $_SERVER['REQUEST_URI'];
  // on affiche l'URL de la page courante
  
$urlContent= parse_url($url);
parse_str($urlContent['query'], $params);
$monde = $params['nbMonde'];

//on recupere les touches personalisé

$pseudoMembre = $_SESSION['membre']['pseudo'];


$RCP = $pdo -> query("SELECT droite FROM membre WHERE pseudo = '$pseudoMembre' ");
$rightControlPlayer = $RCP->fetch(PDO::FETCH_ASSOC);

$LCP = $pdo -> query("SELECT gauche FROM membre WHERE pseudo = '$pseudoMembre' ");
$leftControlPlayer = $LCP->fetch(PDO::FETCH_ASSOC);

$JCP = $pdo -> query("SELECT sauter FROM membre WHERE pseudo = '$pseudoMembre' ");
$jumpControlPlayer = $JCP->fetch(PDO::FETCH_ASSOC);

$ACP = $pdo -> query("SELECT action FROM membre WHERE pseudo = '$pseudoMembre' ");
$actionControlPlayer = $ACP->fetch(PDO::FETCH_ASSOC);


//on recupere la progression du joueur 
$PRG = $pdo -> query("SELECT worldFinish FROM membre WHERE pseudo = 'toto' ");
$progress = $PRG->fetch(PDO::FETCH_ASSOC);
  ?>
<script type=text/javascript>
      // var progress = 
</script>



<script type="text/javascript">



    console.log(" touche droite : <?php echo $rightControlPlayer['droite']; ?>");
    console.log(" touche geuche : <?php echo $leftControlPlayer['gauche']; ?>");
    console.log(" touche sauter : <?php echo $jumpControlPlayer['sauter']; ?>");
    console.log(" touche action : <?php echo $actionControlPlayer['action']; ?>");
</script>

<?php

//on recupere les lvl du monde selectionné
switch ($monde) {

  //appelle du monde 1
  case '1':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;

      //appelle du monde 2
    case '2':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;

    //appelle du monde 3
    case '3':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;

      //appelle du monde 4
    case '4':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;

      //appelle du monde 5
    case '5':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;

    //appelle du monde 6
    case '6':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;

    //appelle du monde 7
    case '7':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
      $b = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 2 ");
      while ($all_post = $b->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlTwo.push("<?php echo $all_post['content'];?>");
        </script>
        
        <?php
      }
      $c = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 3 ");
      while ($all_post = $c->fetch(PDO::FETCH_ASSOC)){
          ?>
          <script type="text/javascript">
            lvlThree.push("<?php echo $all_post['content'];?>");
          </script>
          <?php
      }
    break;
  
  default:
    # code...
    break;
}

  ?>
  
   <script type="text/javascript">
        
     var maps =[
      lvlOne,lvlTwo,lvlThree
     ] 
   </script>
    
  <?php

?>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>RingRingRun</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class=game-container>
     <div id="jump"></div>
    <script src="https://kaboomjs.com/lib/0.5.0/kaboom.js"></script>
    <script>
      //IMPORTANT: Make sure to use Kaboom version 0.5.0 for this game by adding the correct script tag in the HTML file.

kaboom({
  global: true,
  fullscreen: true,
  scale: 1,
  debug: true,
  clearColor: [0, 0, 0, 1],
})

// Speed identifiers
const MOVE_SPEED = 120 
const JUMP_FORCE = 360
const PLANE_JUMP_FORCE = 777
let CURRENT_JUMP_FORCE = JUMP_FORCE
const FALL_DEATH = 400
const ENEMY_SPEED = 20

var actualMonde = <?php echo $monde;?>

var completeLevel = 3
// Game logic

let isJumping = true

// mise en place sprite

loadRoot('https://i.imgur.com/')
loadSprite('coin', 'wbKxhcd.png')
loadSprite('evil-shroom', 'ygg4qLjh.jpg')//KPO3fR9.png
loadSprite('brick', 'pogC9x5.png')
loadSprite('block', 'M6rwarW.png')
loadSprite('mario', 'Wb1qfhK.png')
loadSprite('mushroom', '0wMd92p.png')
loadSprite('surprise', 'gesQ1KP.png')
loadSprite('unboxed', 'bdrLpi6.png')
loadSprite('pipe-top-left', 'ReTPiWY.png')
loadSprite('pipe-top-right', 'hj2GK4n.png')
loadSprite('pipe-bottom-left', 'c1cYSbt.png')
loadSprite('pipe-bottom-right', 'nqQ79eI.png')

loadSprite('blue-block', 'fVscIbn.png')
loadSprite('blue-brick', '3e5YRQd.png')
loadSprite('blue-steel', 'gqVoI2b.png')
loadSprite('blue-evil-shroom', 'SvV4ueD.png')
loadSprite('blue-surprise', 'RMqCc1G.png')

// creation de map

scene("game", ({ level }) => {
  // pause display
  // keyPress('p', ()=>{
  //   document.getElementById("menuIdGame").classList.add("printResume");
  //   document.getElementByTagName("canvas")[0].classList.add("remove");
  //     keyPress('y',()=>{
  //       window.location.replace("http://localhost/ringRingRun/arcade.php");
  //     })
  //     keyPress('n',()=>{
  //       window.location.replace("http://localhost/ringRingRun/arcade.php");
  //     })
  // })
  layers(['bg', 'obj', 'ui'], 'obj')
  
  

  //assignation des sprite avec des sympboles pour la creation de map

  const levelCfg = {
    width: 20,
    height: 20,
    '=': [sprite('block'), solid()],
    '$': [sprite('coin'), 'coin'],
    '%': [sprite('surprise'), solid(), 'coin-surprise'],
    '*': [sprite('surprise'), solid(), 'mushroom-surprise'],
    '}': [sprite('unboxed'), solid()],
    '(': [sprite('pipe-bottom-left'), solid(), scale(0.5), 'pipe'],
    // ')': [sprite('pipe-bottom-right'), solid(), scale(0.5)],
    // '-': [sprite('pipe-top-left'), solid(), scale(0.5), 'pipe'],
    // '+': [sprite('pipe-top-right'), solid(), scale(0.5), 'pipe'],
    '^': [sprite('evil-shroom'), solid(),scale(0.5), 'dangerous'],
    '#': [sprite('mushroom'), solid(), 'mushroom', body()],
    '!': [sprite('blue-block'), solid(), scale(2)],
    '£': [sprite('blue-brick'), solid(), scale(0.5)],
    'z': [sprite('blue-evil-shroom'), solid(), scale(0.5), 'slowshroom'],
    '@': [sprite('blue-surprise'), solid(), scale(0.5), 'coin-surprise'],
    'x': [sprite('blue-steel'), solid(), scale(0.5)],

  }

  const gameLevel = addLevel(maps[level], levelCfg)

  // valeur de base du timer global du niveau

  let TIME_LEFT = 100

  let timer = add([
    text(0),
    pos(160, 6),
    layer('ui'),
    {
      time: TIME_LEFT,
    }
  ])

  // diminution du temps du timer

  timer.action(()=> {
    timer.time -= dt()
    timer.text = timer.time.toFixed(0)
    if(timer.time <= 0 || timer.time > 200) {
      go('lose')
    }
  })

  //affichage de texte 

  add([text('Battery time left :' ), pos(0, 6)])
  
  // caractéristique player
  
  const player = add([
    sprite('mario'), 
    solid(),
    pos(30, 0),
    body(),
    Plane(),
    origin('bot')
  ])
  
  action('mushroom', (m) => {
    m.move(20, 0)
  })
  
  // gestion de la box surprise
  
  player.on("headbump", (obj) => {
    if (obj.is('coin-surprise')) {
      gameLevel.spawn('$', obj.gridPos.sub(0, 1))
      destroy(obj)
      gameLevel.spawn('}', obj.gridPos.sub(0,0))
    }
    if (obj.is('mushroom-surprise')) {
      gameLevel.spawn('#', obj.gridPos.sub(0, 1))
      destroy(obj)
      gameLevel.spawn('}', obj.gridPos.sub(0,0))
    }
  })
  
  // fonction de gestion du bonus du mode avion (durée, hauteur de saut)

  function Plane() {
    let timer = 0
    let isPlane = false
    return {
      update() {
        if (isPlane) {
          CURRENT_JUMP_FORCE = PLANE_JUMP_FORCE + time.time * 3
          timer -= dt()
          if (timer <= 0) {
            this.normalmode()
          }
        }
      },
      isPlane() {
        return isPlane
      },
      normalmode() {
        CURRENT_JUMP_FORCE = JUMP_FORCE
        timer = 0
        isPlane = false
      },
      planemode(time) {
        timer = time
        isPlane = true     
      }
    }
  }

// gestion des collisions du joueur

  player.collides('mushroom', (m) => {
    destroy(m)
    player.planemode(6)
  })

  player.collides('slowshroom', (s)=> {
    destroy(s)
    timer.time -= 20 

  })


  player.collides('coin', (c) => {
    destroy(c)
    scoreLabel.value++
    scoreLabel.text = scoreLabel.value
  })

  action('dangerous', (d) => {
    d.move(-ENEMY_SPEED, 0)
  })

  player.collides('dangerous', (d) => {
    if (isJumping) {
      destroy(d)
    } else {
      go('lose')
    }
  })

  player.action(() => {
    camPos(player.pos)
    if (player.pos.y >= FALL_DEATH) {
      go('lose')
    }
  })

  player.collides('pipe', () => {
    completeLevel -= 1
    if(completeLevel == 0){
      go('win')
    }
    else{
      go('game', {
        level: (level + 1)  % maps.length,
      })
    }
  })

  // gestion des déplacements du joueur

  keyDown('<?php echo $leftControlPlayer['gauche']; ?>', () => {
    player.move(-((MOVE_SPEED+timer.time)/2), 0)
  })

  keyDown('<?php echo $rightControlPlayer['droite']; ?>', () => {
    player.move((MOVE_SPEED+timer.time)/2, 0)
  })

  player.action(() => {
    if(player.grounded()) {
      isJumping = false
    }
  })

  keyPress('<?php echo $jumpControlPlayer['sauter']; ?>', () => {
    if (player.grounded()) {
      isJumping = true
      player.jump(CURRENT_JUMP_FORCE)
    }
  })

// boule de feu

function spawnFireBall(p){
  add([
    rect(10,10),
    pos(p),
    origin('center'),
    color(1,0,0),
    'bullet'
  ])
}

keyPress('z', () => {
  spawnFireBall(player.pos.add(15, -10))
})

const FIRE_SPEED = 400
action('bullet', (b) => {
  b.move(FIRE_SPEED, 0)
  if (b.pos.x < 0){
    destroy(b)
  }

collides('bullet', 'dangerous', (b,d)=> {
  destroy(b)
  destroy(d)
})

})

})

scene('lose', () => {
  add([text("You failed "), origin('center'), pos(width()/2, height()/ 2)])
  add([text("Press space to retry  "), origin('center'), pos(width()/2, height()/ 1.7)])
  add([text("Press ESC to go away "), origin('center'), pos(width()/2, height()/ 1.5)])
    keyPress('space', () => {
      window.location.reload();
    })
    keyPress('escape', () => {
      window.location.replace("http://localhost/ringringrun/arcade.php"); //http://localhost:8888/ringringrun/arcade.php
    })
})

scene('win', () => {
  add([text("You win "), origin('center'), pos(width()/2, height()/ 2)])
  add([text("Press space to retry  "), origin('center'), pos(width()/2, height()/ 1.8)])
  add([text("Press ESC to go away "), origin('center'), pos(width()/2, height()/ 1.6)])
  add([text("Press ENTER to next ACT "), origin('center'), pos(width()/1.5, height()/ 1.8)])

    keyPress('space', () => {
      window.location.reload();
    })
    keyPress('escape', () => {
      window.location.replace("http://localhost/ringringrun/arcade.php");//http://localhost:8888/ringringrun/arcade.php
    })
    keyPress('enter', () => {
      window.location.replace("http://localhost/ringringrun/game.php?nbMonde <?php echo $monde += 1; ?>");
    })
    
})

scene('champion', () => {
  add([text("thank you"), origin('center'), pos(width()/2, height()/ 2)])
})
start("game", { level: 0, score: 0})

    </script>
    
<div id = "menuInGame" class = "resume">
  <h3>resume</h3>
  <p>press P to play</p>
  <p>press ESC to Quit</p>
</div>
  </body>
</html>
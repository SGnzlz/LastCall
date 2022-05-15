<script type="text/javascript">
  let lvlOne = [];
</script>
<?php

include('init.php');

// used protocol : http ou https ?
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://"; else $url = "http://";
  // host
  $url .= $_SERVER['HTTP_HOST'];
  // resource location 
  $url .= $_SERVER['REQUEST_URI'];

  // display current page URL 
  
$urlContent= parse_url($url);
parse_str($urlContent['query'], $params);
$monde = $params['nbMonde'];

// custom keyboard key

$pseudoMembre = $_SESSION['membre']['pseudo'];


$RCP = $pdo -> query("SELECT droite FROM membre WHERE pseudo = '$pseudoMembre' ");
$rightControlPlayer = $RCP->fetch(PDO::FETCH_ASSOC);

$LCP = $pdo -> query("SELECT gauche FROM membre WHERE pseudo = '$pseudoMembre' ");
$leftControlPlayer = $LCP->fetch(PDO::FETCH_ASSOC);

$JCP = $pdo -> query("SELECT sauter FROM membre WHERE pseudo = '$pseudoMembre' ");
$jumpControlPlayer = $JCP->fetch(PDO::FETCH_ASSOC);

$ACP = $pdo -> query("SELECT action FROM membre WHERE pseudo = '$pseudoMembre' ");
$actionControlPlayer = $ACP->fetch(PDO::FETCH_ASSOC);


// player progress

$PRG = $pdo -> query("SELECT worldFinish FROM membre WHERE pseudo = 'toto' ");
$progress = $PRG->fetch(PDO::FETCH_ASSOC);
?>

<script type=text/javascript>
      // let progress = 
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

  // recovery of the world 1

  case '1':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
    break;

      //recovery of the world 2

    case '2':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
    break;

    //recovery of the world 3

    case '3':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
    break;

      //recovery of the world 4

    case '4':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
    break;

      //recovery of the world 5

    case '5':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
    break;

    //recovery of the world 6

    case '6':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
        </script>
        <?php
      }
    break;

    //recovery of the world 7

    case '7':
      $a = $pdo -> query("SELECT content FROM tile WHERE idMonde = $monde AND idLevel = 1 ");
      while ($all_post = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <script type="text/javascript">
          lvlOne.push("<?php echo $all_post['content'];?>");
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
        
     let maps =[
      lvlOne
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
  clearColor:[0, 0, 0, 1],
})


// Speed identifiers
const MOVE_SPEED = 120 
const JUMP_FORCE = 360
const PLANE_JUMP_FORCE = 777
let CURRENT_JUMP_FORCE = JUMP_FORCE
const FALL_DEATH = 3003
const ENEMY_SPEED = 20

let actualMonde = <?php echo $monde;?>

let completeLevel = 3
// Game logic

let isJumping = true

// call sprite

loadRoot('https://i.imgur.com/')
loadSprite('coin', 'wbKxhcd.png')
loadSprite('evil-shroom', 'hMoZtMdh.jpg')//KPO3fR9.png 
loadSprite('brick', 'pogC9x5.png')
loadSprite('unboxed', 'bdrLpi6.png')
loadSprite('phony', 'BVbvUYc.png')
loadSprite('modeavion', 'RaKCKGOh.jpg')
loadSprite('prise-final', '2NjUVdzh.jpg')

loadSprite('blue-block', 'fVscIbn.png')
loadSprite('blue-brick', '3e5YRQd.png')
loadSprite('blue-steel', 'gqVoI2b.png')
loadSprite('blue-evil-shroom', 'SvV4ueD.png')


loadSprite('bg-img-one', 'KMJL7H3h.jpg')
loadSprite('bg-img-two', '3pRDpKBh.jpg')
loadSprite('bg-img-three', 'flD7rb2.png')
loadSprite('bg-img-four', 'YNJIFvph.jpg')
loadSprite('bg-img-five', 'Kbtg6vwh.jpg')
loadSprite('bg-img-six', 'sW7d9Y0h.jpg')
loadSprite('bg-img-seven', 'U3MlqZPh.jpg')



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
  
  

  //assign sprite with symbol

  const levelCfg = {
    width: 20,
    height: 20,
    '$': [sprite('coin'), 'coin'],
    '}': [sprite('unboxed'), solid()],
    '^': [sprite('evil-shroom'), solid(),scale(1), 'dangerous'],
    '!': [sprite('blue-block'), solid(), scale(2)],
    '£': [sprite('blue-brick'), solid(), scale(0.5)],
    'z': [sprite('blue-evil-shroom'), solid(), scale(0.5), 'dangerous'],
    '=': [sprite('blue-steel'), solid(), scale(0.5)],
    
    '*': [sprite('modeavion'), solid(), 'modeavion', body()],
    '(': [sprite('prise-final'), solid(), scale(0.5), 'pipe'],

    //bg world 1
    ')': [sprite('bg-img-one'), scale(3)],

    //bg world 2
    '-': [sprite('bg-img-two'), scale(3)],

    //bg world 3
    '+': [sprite('bg-img-three'), scale(3)],

    //bg world 4
    '@': [sprite('bg-img-four'), scale(3)],

    //bg world 5
    'x': [sprite('bg-img-five'), scale(3)],
    
    // bg world 6
    '€': [sprite('bg-img-six'), scale(3)],
    
    //bg world 7
    '%': [sprite('bg-img-seven'), scale(3)],

  }

  const gameLevel = addLevel(maps[level], levelCfg)

  // battery settup

  let TIME_LEFT = 100

  let timer = add([
    text(0),
    pos(160, 6),
    layer('ui'),
    {
      time: TIME_LEFT,
    }
  ])

  // decrease in battery

  timer.action(()=> {
    timer.time -= dt()
    timer.text = timer.time.toFixed(0)
    if(timer.time <= 0 || timer.time > 101) {
      go('lose')
    }
  })

  //text display

  add([text('Battery time left :' ), pos(0, 6)])
  
  // player feature
  
  const player = add([
    sprite('phony'), 
    solid(),
    pos(30, 0),
    body(),
    Plane(),
    origin('bot')
  ])  

  // airplane mode bonus feature (timer, jump height)

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

// collision management

  player.collides('modeavion', (m) => {
    destroy(m)
    player.planemode(10)
  })

  player.collides('dangerous', (s)=> {
    destroy(s)
    timer.time -= 50 

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
      go('win')
  })

  // motion management

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

})

// lose screen

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

// win screen

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
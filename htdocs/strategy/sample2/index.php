<?php
require 'Monster/Fly/FlyInterface.php';
require 'Monster/Fly/NoFly.php';
require 'Monster/Fly/NormalFly.php';

require 'Monster/Walk/WalkInterface.php';
require 'Monster/Walk/NoWalk.php';
require 'Monster/Walk/NormalWalk.php';

require 'Monster/Monster.php';
require 'Monster/Slime.php';
require 'Monster/Goblin.php';
require 'Monster/Mandragora.php';
require 'Monster/Dragon.php';

use strategy\sample2\Monster;

$normalWalk = new Monster\Walk\NormalWalk();
$noWalk = new Monster\Walk\NoWalk();

$normalFly = new Monster\Fly\NormalFly();
$noFly = new Monster\Fly\NoFly();

$Slime = new Monster\Slime($normalWalk, $noFly);
$slimeHtml = $Slime->walk();
$slimeHtml .= '<br>' . $Slime->attack();

$Goblin = new Monster\Goblin($normalWalk, $noFly);
$goblinHtml = $Goblin->walk();
$goblinHtml .= '<br>' . $Goblin->attack();

$Mandragora = new Monster\Mandragora($noWalk, $noFly);
$mandragoraHtml = $Mandragora->attack();

$Dragon = new Monster\Dragon($normalWalk, $normalFly);
$dragonHtml = $Dragon->walk();
$dragonHtml .= '<br>' . $Dragon->fly();
$dragonHtml .= '<br>' . $Dragon->attack();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Strategy Sample1</title>
</head>
<body>
    <h2>スライム</h2>
    <p><?= $slimeHtml ?></p>

    <hr>

    <h2>ゴブリン</h2>
    <p><?= $goblinHtml ?></p>

    <hr>

    <h2>マンドラゴラ</h2>
    <p><?= $mandragoraHtml ?></p>

    <hr>

    <h2>ドラゴン</h2>
    <p><?= $dragonHtml ?></p>
</body>
</html>

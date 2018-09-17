<?php
require 'Monster/Flyable.php';
require 'Monster/Walkable.php';

require 'Monster/Monster.php';

require 'Monster/Goblin.php';
require 'Monster/Mandragora.php';
require 'Monster/Dragon.php';

use strategy\sample1\Monster;

$Goblin = new Monster\Goblin();
$goblinHtml = $Goblin->walk();
$goblinHtml .= '<br>' . $Goblin->attack();

$Mandragora = new Monster\Goblin();
$mandragoraHtml = $Mandragora->attack();

$Dragon = new Monster\Dragon();
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

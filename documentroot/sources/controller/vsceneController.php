<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 02.09.18
 * Time: 16:42
 */

require_once ("sources/model/Scene.php");
$scene = new Scene();
$scene->load($sceneId);

require_once ("sources/view/vsceneView.html");

?>
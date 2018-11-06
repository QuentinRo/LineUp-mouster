<?php

require_once ("sources/model/Scene.php");
$scene = new Scene();
$scene->load($sceneId);

require_once ("sources/view/modifSceneView.html");

?>
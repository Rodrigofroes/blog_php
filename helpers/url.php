<?php
// Base URL vai fazer com que o caminho seja relativo ao arquivo index.php. Ex: http://localhost/15_blog/index.php
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']. '?') . '/';
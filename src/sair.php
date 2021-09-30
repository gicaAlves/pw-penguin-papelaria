<?php
//seguinte, aqui inciamos a nossa sessão e depois ela é destruída, direcionando para a página inicial//
    session_start();
    session_destroy();

    header('Location:index.php');

?>
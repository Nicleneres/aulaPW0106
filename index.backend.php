<?php
header('Content-type: application/json');

$dadosEnviados = file_get_contents('php://input');

$dadosEnviados = json_decode($dadosEnviados, true);
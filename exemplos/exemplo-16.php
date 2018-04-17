<?php

require_once('../src/WidePay.php'); // Caminho para o SDK

$wp = new WidePay('148446', '800440511285a9b0808ea85a94f3dd62'); // ID e token da carteira

$baixar = $wp->api('recebimentos/carnes/baixar', array(
    'id' => '16700'
));

if ($baixar->sucesso) {

    echo $baixar->total; // Total de carnês cancelados

} else {

    echo $baixar->erro; // Erro

}
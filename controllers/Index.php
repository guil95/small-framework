<?php

/**
 * Description of Index
 *
 * @author Guilherme
 */
class Index extends Front {

    //sempre implementar método parent::construct
    public function __construct($params) {
        parent::__construct($params);
    }

    public function index() {
        die("<pre>" . __FILE__ . " - " . __LINE__ . "\n" . print_r('Voce esta no index', true) . "</pre>");
    }

    public function olaMundo() {
        $olaMundo = "Olá ";
        $nome = $this->getParam('nome');
        require_once realpath(__DIR__ . '/../views/index/index.php');
    }

}

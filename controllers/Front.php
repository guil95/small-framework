<?php

/**
 * Description of Front
 *
 * @author guilherme
 */
class Front {

    private $params = array();

    public function __construct($params) {
        //caso login seja obrigatório
//        $this->loginTest();
        $this->params = $params;
    }

    private function loginTest() {
        if ((get_class($this) != 'Login') and ( !isset($_SESSION['logado']))) {
            header('location: /login');
        }
    }

    public function getParam($name, $default = '') {
        return (isset($this->params[$name])) ? urldecode($this->params[$name]) : $default;
    }

    public function getParams() {
        return $this->params;
    }

}

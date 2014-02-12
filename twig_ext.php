<?php

class Bz_Twig_Extension extends Twig_Extension {

    public function getName() {
        return 'bz';
    }

    public function getGlobals() {
        return array(
            'localhost' => $_SERVER['SERVER_NAME'] === 'localhost',
        );
    }
}

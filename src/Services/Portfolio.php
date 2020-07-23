<?php

namespace Portfolio\Services;

class Portfolio {
        
    /**
     * Display portfolio landing page
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Landing(\Portfolio\Response $Response, array $Binded = []): void {
        $Response->load("portfolio");
        return;
    }
        
    /**
     * Display server configuration
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function DisplayServerConf(\Portfolio\Response $Response, array $Binded = []): void {       
        $Infos                                                  = [];
        $Infos['SERVER_IP']                                     = $_SERVER['SERVER_ADDR'];
        [$Infos['engine'], $Infos['OS'], $Infos['PhpVersion']]  = \explode(" ", $_SERVER['SERVER_SOFTWARE']);
        $Infos['OS']                                            = trim($Infos['OS'], "()");
        $Response->load("conf-info", $Infos);
        return;
    }

}

?>
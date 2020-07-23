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

}

?>
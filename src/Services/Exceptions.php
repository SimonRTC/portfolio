<?php

namespace Portfolio\Services;

class Exceptions {
    
    private $Exceptions;

    public function __construct() {
        $this->Exceptions = [
            "INTERNAL_SERVER_ERROR"     => "exceptions/server-error",
            "SERVICE_NOT_FOUND"         => "exceptions/not-found"
        ];
    }
    
    /**
     * Throw exceptions model
     *
     * @param  object $Response
     * @param  string $Exception
     * @return void
     */
    public function Throw(\Portfolio\Response $Response, string $Exception): void {
        $Response->load($this->Exceptions[$Exception]);
        return;
    }

}

?>
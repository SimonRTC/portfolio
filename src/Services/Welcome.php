<?php

namespace Portfolio\Services;

class Welcome {
        
    /**
     * Welcome page (Hello World!)
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Welcome(\Portfolio\Response $Response, array $Binded = []): void {
        $Response->load("welcome", $Binded, [
            "function" => function () {
                return 'Hello!!';
            }
        ]);
        return;
    }

}

?>
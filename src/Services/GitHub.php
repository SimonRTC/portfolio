<?php

namespace Portfolio\Services;

class GitHub {
        
    /**
     * Event listener (webhooks)
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function EventListener(\Portfolio\Response $Response, array $Binded = []): void {
        $datas = json_encode($_POST);
        \file_put_contents((realpath(__DIR__ . "/../../tmp/") . "/github-latest.json"), $datas);
        return;
    }

}

?>
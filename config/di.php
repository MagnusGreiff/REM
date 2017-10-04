<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "rem" => [
            "shared" => true,
            "callback" => function () {
                $rem = new \Radchasay\RemServer\remServer();
                $rem->configure("remserver.php");
                $rem->injectSession($this->get("session"));
                return $rem;
            }
        ],
        "remController" => [
            "shared" => false,
            "callback" => function () {
                $rem = new \Radchasay\RemServer\remController();
                $rem->setDI($this);
                return $rem;
            }
        ],
    ],
];

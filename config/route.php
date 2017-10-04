<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // Routers for the REM server mounts on api/
            "mount" => "api",
            "file" => __DIR__ . "/route/remserver.php",
        ]
    ],

];

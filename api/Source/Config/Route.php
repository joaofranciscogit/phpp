<?php

        define('ROUTES', 
        [
                '/'                => PATH.'Main/Inicial/Inicial.php',
                'inicial/inicial'  => PATH.'Main/Inicial/Inicial.php',

                'error/401'        => PATH.'Error/Unauthorized.php',
                'error/404'        => PATH.'Error/PageNotFounded.php',
                'error/500'        => PATH.'Error/InternalServerError.php'
        ]);
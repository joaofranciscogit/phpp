<?php

    use Autoload\Lib\Support\Support;
    use Autoload\Lib\Response\Response;
    use Autoload\Lib\Mysql\Mysql;
    use Autoload\Lib\Code\Code;
    use Firebase\JWT\JWT;

    $useSupport 	= new Support();
    $useResponse    = new Response();
    $useMysql       = new Mysql(DATABASE);
    $useCode        = new Code();
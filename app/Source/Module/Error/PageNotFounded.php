<?php

  require_once './Source/Config/Lib.php';

  define('DATA',
  [

    'ACCESS'    => 'PUBLIC',
    'MODULE'    => 'Main',
    'AUTH'      => false,
    'TITLE'     => 'CETEP | Galeria',
    'INDEX'         => true,
    'DESCRIPTION' => 'CETEP - Centro de Tratamento de Endemias e Pandemias',
    'KEYWORDS'    => 'cetep, centro, tratamento, endemias, pandemias, angola, luanda, calumbo',
    'IMAGE'     => null,
    'AUTHOR'    => PROJECT['AUTHOR']
  ]);

  require_once HTML.'Page/PageStart.php';

  require_once HTML.'Navbar/Navbar.php';
?>

	<section class="mt-5 container">
		
		<div class="container my-5 mt-5 text-md-start text-center">
          <div class="row align-items-center">

            <!-- Animation -->
            <div class="col-xl-6 col-md-7 order-md-2 ms-n5">
               <img src="<?php echo ASSET.'img/404/404.jpg'; ?>" class="d-block mx-auto my-2 w-100" width="154" alt="Brand">
            </div>

            <!-- Text -->
            <div class="col-md-5 offset-xl-1 order-md-1">
              <h1 class="h2 mb-sm-4 mt-n4 mt-sm-n5">Página não Encontrada 404</h1>
              <p class="mb-md-5 mb-4 mx-md-0 mx-auto pb-2 lead">Erro 404 é a mensagem que aparece quando o visitante tenta acessar uma página que não existe, que está com a URL errada ou que foi removida do site.</p>
            </div>
          </div>
        </div>

	</section>

<?php

require_once HTML.'Page/PageEnd.php';
<?php
/**------------------------------------------
 * Importa as classes via namespace para uso
 * ------------------------------------------
 */
use Cocur\Slugify\Slugify;

/**------------------------------------------
 * Define a constante DOC_ROOT
 * ------------------------------------------
 */
define('DOC_ROOT', __DIR__);

/**------------------------------------------
 * Importa as classes via composer autoload
 * ------------------------------------------
 */
require DOC_ROOT . '/vendor/autoload.php';

/**------------------------------------------
 * Importa as rotas do sistema
 * ------------------------------------------
 */
require DOC_ROOT . '/routes/web.php';

/**------------------------------------------
 * Inicializa o projeto
 * ------------------------------------------
 */

Flight::start();

<?php
/**
 * Yodo.Rocks - a rapid application development php framework
 *
 * @author      Dimitrios Karvounaris <d.karvounaris@innovacy.com>
 * @copyright   2014-2015 Dimitrios Karvounaris
 * @link        http://yodo.Rocks/
 * @license     http://yodo.Rocks/license
 * @version     0.0.1
 * @package     Yodo.Rocks
 *
 * LICENSE
 *
 * This framework may be published under an open source license,
 * once development progresses substantially. Until further notice though:
 *
 * All rights reserved.
 *
 */

require 'Yodo/Yodo.php';

\Yodo\Yodo::registerAutoLoader();

$app = new \Yodo\Yodo();
/*  This should speed up the startup of the application immensely, as the whole setup would be skipped and all routing,
    definitions etc. could be used directly and more efficiently. However, the app needs to query everything at least
    once to know how everything needs to be wired. See "docs/Performance philosophy.md"*/
if ($app->isCached() && !$app->needsRefresh()) {
    $app->prepareFromCache();
} else {
    $app->assembleRocks();
    $app->setup();
    $app->storeToCache();
    $app->prepare();
}
$app->runRocks();

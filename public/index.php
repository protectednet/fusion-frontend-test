<?php
define('PHP_START', microtime(true));

use Cubex\Cubex;
use ProtectedNet\FrontendTest\FrontendTestSite;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$loader = require_once(dirname(__DIR__) . '/vendor/autoload.php');
try
{
  $cubex = new Cubex(dirname(__DIR__), $loader);
  //Handle the application, throwing exceptions locally only
  $cubex->handle(new FrontendTestSite($cubex), true);
}
catch(Throwable $e)
{
  $handler = new Run();
  $prettyPageHandler = new PrettyPageHandler();
  $prettyPageHandler->setEditor('phpstorm');
  $handler->pushHandler($prettyPageHandler);
  $handler->handleException($e);
}

<?php
namespace ProtectedNet\FrontendTest;

use Cubex\Context\Context;
use Cubex\Cubex;
use Cubex\Events\Handle\ResponsePreSendHeadersEvent;
use Packaged\Http\Response;
use Packaged\Routing\Handler\Handler;
use ProtectedNet\FrontendTest\Controllers\DefaultController;
use ProtectedNet\FrontendTestFramework\AbstractFrontendTestSite;
use ProtectedNet\FrontendTestFramework\Dispatch\Dispatcher;

class FrontendTestSite extends AbstractFrontendTestSite
{
  /**
   * FrontendTestSite constructor.
   *
   * @param Cubex $cubex
   */
  public function __construct(Cubex $cubex)
  {
    parent::__construct($cubex);

    // Resource Handler
    Dispatcher::i(dirname(__DIR__));
  }

  /** @return Handler */
  protected function _defaultHandler(): Handler
  {
    return new DefaultController();
  }

  protected function _initialize()
  {
    parent::_initialize();

    //Send debug headers locally
    $this->getCubex()->listen(
      ResponsePreSendHeadersEvent::class,
      function (ResponsePreSendHeadersEvent $e) {
        $response = $e->getResponse();
        $response->headers->set(
          'Content-Security-Policy',
          "default-src 'self'"
          . ";style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://kit-free.fontawesome.com"
          . ";frame-src 'self' https://player.vimeo.com https://gcs-vimeo.akamaized.net"
          . ";media-src 'self' https://player.vimeo.com https://gcs-vimeo.akamaized.net"
          . ";font-src 'self' https://fonts.gstatic.com https://kit-free.fontawesome.com"
          . ";script-src 'self' 'unsafe-inline'"
          . ";script-src-elem 'self' 'unsafe-inline' https://kit.fontawesome.com"
        );
      }
    );
  }

}

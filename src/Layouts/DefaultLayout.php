<?php
namespace ProtectedNet\FrontendTest\Layouts;

use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTest\Components\Button\Button;
use ProtectedNet\FrontendTest\Components\Link\Link;
use ProtectedNet\FrontendTest\Components\Nav\Nav;
use ProtectedNet\FrontendTestFramework\Layouts\DefaultLayout\DefaultLayout as GlobalDefaultLayout;

class DefaultLayout extends GlobalDefaultLayout
{
  /** TestDefaultLayout constructor.*/
  public function __construct()
  {
    ResourceManager::resources()->requireCss('styles/global.min.css', null, 20);
    ResourceManager::resources()->requireJs('js/libraries.min.js', null, 20);
    ResourceManager::external()->requireJs('https://kit.fontawesome.com/a076d05399.js');
  }

  protected function _getNav()
  {
    if($this->_nav === false)
    {
      $this->_nav = Nav::i()->setNavItems(
        [
          Link::i('Home'),
          Link::i('Jobs'),
          Link::i('Candidates'),
          Link::i('About'),
          Link::i('Blog'),
          Link::i('Contacts'),
          Button::i('Sign In')->ghost()
        ]
      );
    }

    return $this->_nav;
  }

}

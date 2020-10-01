<?php
namespace ProtectedNet\FrontendTest\Pages;

use Exception;
use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Partials\AbstractPartial;
use ProtectedNet\FrontendTestFramework\Pages\AbstractPage as GlobalAbstractPage;

abstract class AbstractPage extends GlobalAbstractPage
{
  /**
   * @return AbstractComponent|false|null
   */
  protected function _getHeroBanner()
  {
    return false;
  }

  /**
   * @return AbstractPartial|false|null
   */
  protected function _getFooter()
  {
    return false;
  }

  /**
   * @return AbstractPartial|false|null
   */
  protected function _getNav()
  {
    return false;
  }

  /**
   * @param string $imgPath
   *
   * @return string|null
   * @throws Exception
   */
  public function getImg(string $imgPath)
  {
    return ResourceManager::component($this)->getResourceUri('img/' . $imgPath);
  }
}


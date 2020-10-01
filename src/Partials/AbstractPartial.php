<?php
namespace ProtectedNet\FrontendTest\Partials;

use Exception;
use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTestFramework\Partials\AbstractPartial as GlobalAbstractPartial;

abstract class AbstractPartial extends GlobalAbstractPartial
{
  /**
   * @param ResourceManager $manager
   *
   * @throws Exception
   */
  protected function _requireResources(ResourceManager $manager)
  {
    ResourceManager::componentClass(self::class)->requireCss('styles/partials.min.css');
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

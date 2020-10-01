<?php
namespace ProtectedNet\FrontendTest\Components\PercentageCounter;

use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTestFramework\Components\AbstractComponent;

class PercentageCounter extends AbstractComponent
{
  /** @var int */
  protected $percentage = 0;

  public function __construct()
  {
    parent::__construct();

    $this->setAttribute('percentage-counter', true);
  }

  public static function i()
  {
    return new static();
  }

  public function test()
  {
    return $this->getModifier('modifier');
  }

  /**
   * @param int $percentage
   *
   * @return $this
   */
  public function setPercentage(int $percentage)
  {
    $this->percentage = $percentage;

    return $this;
  }

  protected function _requireResources(ResourceManager $manager)
  {
    parent::_requireResources($manager);
    $manager->requireJs('ts/PercentageCounter.c.js');
  }

  protected function _getContentForRender()
  {
    $this->setAttribute('percentage-number', $this->percentage);
    return parent::_getContentForRender();
  }

  public function getBlockName(): string
  {
    return 'percentage';
  }
}

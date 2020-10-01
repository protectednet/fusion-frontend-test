<?php
namespace ProtectedNet\FrontendTest\Components\Slider;

use Exception;
use Packaged\Dispatch\ResourceManager;
use Packaged\SafeHtml\ISafeHtmlProducer;
use Packaged\SafeHtml\SafeHtml;
use ProtectedNet\FrontendTest\Components\AbstractComponent;

class Slider extends AbstractComponent
{
  /**
   * Use this property to set the tag you want to use as your outer element
   *
   * @var string
   */
  protected $_tag = "div";
  protected $_slides = [];


  public function __construct()
  {
    parent::__construct();
    $this->_setPrimaryAttributes();
  }

  /** @return ISafeHtmlProducer[] */
  public function getSlides()
  {
    return $this->_slides;
  }

  /**
   * @param array $slides
   *
   * @return $this
   */
  public function setSlides(array $slides)
  {
    $this->_slides = $slides;
    return $this;
  }

  /**
   * @param $slide
   *
   * @return $this
   */
  public function appendSlide($slide)
  {
    $this->_slides[] = $slide;
    return $this;
  }

  /**
   * All our styling used BEM, the name you enter here is the root name for BEM styling
   *
   * @return string
   */
  public function getBlockName(): string
  {
    return 'slider';
  }

  /**
   * Used to set the blockname as an attribute on the component
   * This is used for linking it to typescript component of the same nam
   *
   * @return $this
   */
  protected function _setPrimaryAttributes()
  {
    return $this->setAttribute($this->getBlockName(), true);
  }

  /**
   * We use static i() methods to instantiate as it's shorter and easier to chain
   *
   * @return $this
   */
  public static function i()
  {
    return new static();
  }

  /**
   * The resource manager is used to load any resources that aren't being included by default
   * This is normally anything that's compiled local to the component or partial
   *
   * @param ResourceManager $manager
   *
   * @throws Exception
   */
  protected function _requireResources(ResourceManager $manager)
  {
    parent::_requireResources($manager);
    $manager->requireJs('ts/slider.c.js');
    $manager->requireCss('styles/slick-slider.min.css');
  }

  /**
   * @return array|SafeHtml|null
   */
  protected function _getContentForRender()
  {
    $slides = [];

    foreach($this->getSlides() as $slide) {
        $slides[] = $slide->produceSafeHTML();
    }

    return $slides;
  }

}

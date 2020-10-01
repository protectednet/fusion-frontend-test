<?php
namespace ProtectedNet\FrontendTest\Components\HeroBanner;

use Packaged\SafeHtml\ISafeHtmlProducer;
use Packaged\SafeHtml\SafeHtml;
use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Components\Slider\Slider;

class HeroBanner extends AbstractComponent
{
  /**
   * Use this property to set the tag you want to use as your outer element
   *
   * @var string
   */
  protected $_tag = "section";
  protected $_slides = [];

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
    return 'hero-banner';
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
   * This method is overridden if you don't require a phtml view
   *
   * @return SafeHtml|string|null
   */
  protected function _getContentForRender()
  {
    return Slider::i()->setSlides($this->getSlides());
  }

}

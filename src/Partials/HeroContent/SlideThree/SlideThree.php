<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\SlideThree;

use Packaged\Glimpse\Tags\Div;
use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class SlideThree extends AbstractPartial
{
  /** @return string */
  public function getBlockName(): string
  {
    return 'slide-three';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }

  protected function _getContentForRender()
  {
    return Div::create()
      ->addClass($this->getElementName('background-img'))
      ->addAttributes(["style" => "background-image: url(" . $this->getImg('slider-3.jpg') . ");"]);
  }
}

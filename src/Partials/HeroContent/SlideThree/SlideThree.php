<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\SlideThree;

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
}

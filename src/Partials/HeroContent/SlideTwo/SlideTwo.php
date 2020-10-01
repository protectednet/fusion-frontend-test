<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\SlideTwo;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class SlideTwo extends AbstractPartial
{
  /** @return string */
  public function getBlockName(): string
  {
    return 'slide-two';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }
}

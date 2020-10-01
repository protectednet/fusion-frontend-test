<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\SlideOne;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class SlideOne extends AbstractPartial
{
  /** @return string */
  public function getBlockName(): string
  {
    return 'slide-one';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }
}

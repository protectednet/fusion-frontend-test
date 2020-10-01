<?php
namespace ProtectedNet\FrontendTest\Pages\Home;

use Packaged\Dispatch\ResourceManager;
use PackagedUi\FontAwesome\FaIcon;
use PackagedUi\FontAwesome\FaIcons;
use ProtectedNet\FrontendTest\Components\HeroBanner\HeroBanner;
use ProtectedNet\FrontendTest\Components\IconWrapper\IconWrapper;
use ProtectedNet\FrontendTest\Pages\AbstractPage;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideOne\SlideOne;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideThree\SlideThree;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideTwo\SlideTwo;

class Home extends AbstractPage
{
  protected function _requireResources(ResourceManager $manager)
  {
    parent::_requireResources($manager);
    $manager->requireCss('styles/home.min.css');
  }

  /**
   * @param FaIcons|string $icon
   *
   * @return IconWrapper
   */
  public function getIcon(string $icon)
  {
    // This wouldn't normally be in a variable as it's not needed but throught it was more readable this way
    $fontawesomeIconComponent = FaIcon::create($icon);

    return IconWrapper::i($fontawesomeIconComponent)
      ->colorLight()
      ->backgroundPrimary()
      ->circle()
      ->sizeX8()
      ->addClass('mb-smo-4');
  }

  protected function _getHeroBanner()
  {
    return HeroBanner::i()
      ->appendSlide(SlideOne::i())
      ->appendSlide(SlideTwo::i())
      ->appendSlide(SlideThree::i());
  }
}

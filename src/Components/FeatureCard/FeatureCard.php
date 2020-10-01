<?php
namespace ProtectedNet\FrontendTest\Components\FeatureCard;

use Packaged\SafeHtml\ISafeHtmlProducer;
use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Enum\Breakpoints;

class FeatureCard extends AbstractComponent
{
  /** @var ISafeHtmlProducer */
  protected $_icon;

  /** @var string */
  protected $_title;

  /** @var string */
  protected $_subtitle;

  /** @var string */
  protected $_description;

  /** @return ISafeHtmlProducer|null */
  public function getIcon(): ?ISafeHtmlProducer
  {
    return $this->_icon;
  }

  /**
   * @param ISafeHtmlProducer $icon
   *
   * @return $this
   */
  public function setIcon(ISafeHtmlProducer $icon)
  {
    $this->_icon = $icon;

    return $this;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->_title;
  }

  /**
   * @param string $title
   *
   * @return $this
   */
  public function setTitle($title)
  {
    $this->_title = $title;

    return $this;
  }

  /**
   * @return string
   */
  public function getSubtitle()
  {
    return $this->_subtitle;
  }

  /**
   * @param string $subtitle
   *
   * @return $this
   */
  public function setSubtitle($subtitle)
  {
    $this->_subtitle = $subtitle;

    return $this;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->_description;
  }

  /**
   * @param string $description
   *
   * @return $this
   */
  public function setDescription($description)
  {
    $this->_description = $description;

    return $this;
  }

  /** @return string */
  protected function _getTemplateClass(): string
  {
    return self::class;
  }

  /** @return string */
  public function getBlockName(): string
  {
    return 'feature-card';
  }

  /** @return $this */
  public static function i()
  {
    return new static();
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function textRight(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointClass('text-right', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function textLeft(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointClass('text-left', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function textCenter(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointClass('text-center', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function iconLeft(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointModifier('icon-left', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function iconRight(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointModifier('icon-right', ...$breakpoints);

    return $this;
  }

  /**
   * @param Breakpoints ...$breakpoints
   *
   * @return $this
   */
  public function iconCenter(Breakpoints ...$breakpoints)
  {
    $this->_manageBreakpointModifier('icon-center', ...$breakpoints);

    return $this;
  }

  /**
   * @param string $classname
   * @param array  ...$breakpoints
   */
  protected function _manageBreakpointClass(string $classname, ...$breakpoints)
  {

    if($breakpoints)
    {
      /** @var $breakpoint Breakpoints */
      foreach($breakpoints as $breakpoint)
      {
        if($breakpoint->is(Breakpoints::SMALL()))
        {
          $this->addClass($classname);
        }
        else
        {
          $this->addClass($breakpoint->getValue() . '-' . $classname);
        }
      }
    }
    else
    {
      $this->addClass($classname);
    }
  }

  /**
   * @param string $classname
   * @param mixed  ...$breakpoints
   */
  protected function _manageBreakpointModifier(string $classname, ...$breakpoints)
  {

    if($breakpoints)
    {
      foreach($breakpoints as $breakpoint)
      {
        $this->_addModifier($breakpoint->getValue() . '-' . $classname);
      }
    }
    else
    {
      $this->_addModifier($classname);
    }
  }
}

<?php
namespace ProtectedNet\FrontendTest\Components\Button;

use Packaged\Glimpse\Tags\Div;use ProtectedNet\FrontendTest\Components\AbstractComponent;

class Button extends AbstractComponent
{
  protected $_iconButton = false;
  protected $_iconRight = true;
  protected $_icon;

  /**
   * Use this property to set the tag you want to use as your outer element
   *
   * @var string
   */
  protected $_tag = "a";
  protected $_content;

  /**
   * Button constructor.
   *
   * @param string $content
   */
  public function __construct(string $content)
  {
    parent::__construct();
    $this->_content = $content;
  }

  /**
   * We use static i() methods to instantiate as it's shorter and easier to chain
   *
   * @param string $content
   *
   * @return $this
   */
  public static function i(string $content)
  {
    return new static($content);
  }

  /**
   * All our styling used BEM, the name you enter here is the root name for BEM styling
   *
   * @return string
   */
  public function getBlockName(): string
  {
    return 'btn';
  }

  /**
   * @return $this
   */
  public function ghost()
  {
    return $this->_addModifier('ghost');
  }

  public function iconRight($icon)
  {
    $this->_iconButton = true;
    $this->_iconRight = true;
    $this->_icon = $icon;

    return $this
      ->_addModifier('icon')
      ->_addModifier('icon-right');
  }

  public function iconLeft($icon)
  {
    $this->_iconButton = true;
    $this->_iconRight = false;
    $this->_icon = $icon;

    return $this
      ->_addModifier('icon')
      ->_addModifier('icon-left');
  }

  protected function _getContentForRender()
  {
    if ($this->_iconButton)
    {
      $button = Div::create(
        Div::create(
          Div::create($this->_content)->addClass($this->getElementName('content-holder'))
        )->addClass('cell', 'auto', $this->_iconRight ?: 'small-order-2'),
        Div::create(
          Div::create($this->_icon)->addClass($this->getElementName('icon-holder'))
        )->addClass('cell', 'shrink', $this->_iconRight ?: 'small-order-1')
      )->addClass('grid-x');
    }
    else
    {
      $button = Div::create(
        Div::create(
          Div::create($this->_content)->addClass($this->getElementName('content-holder'))
        )->addClass('cell', 'auto')
      )->addClass('grid-x');
    }

    return $button;
  }

}

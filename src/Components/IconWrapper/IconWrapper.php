<?php
namespace ProtectedNet\FrontendTest\Components\IconWrapper;

use Packaged\SafeHtml\ISafeHtmlProducer;
use Packaged\SafeHtml\SafeHtml;
use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Traits\SizedComponentTrait;

class IconWrapper extends AbstractComponent
{
  use SizedComponentTrait;

  /** @var null|mixed */
  protected $_content = null;

  /**
   * IconWrapper constructor.
   *
   * @param ISafeHtmlProducer $content
   */
  public function __construct(ISafeHtmlProducer $content)
  {
    parent::__construct();
    $this->setContent($content);
  }

  /** @return IconWrapper */
  public function circle()
  {
    return $this->_addModifier('circle');
  }

  /** @return $this */
  public function backgroundPrimary()
  {
    return $this->_addModifier('bg-primary');
  }

  /** @return $this */
  public function backgroundLight()
  {
    return $this->_addModifier('bg-light');
  }

  /** @return $this */
  public function backgroundDark()
  {
    return $this->_addModifier('bg-dark');
  }

  /** @return $this */
  public function colorPrimary()
  {
    return $this->_addModifier('color-primary');
  }

  /** @return $this */
  public function colorLight()
  {
    return $this->_addModifier('color-light');
  }

  /** @return $this */
  public function colorDark()
  {
    return $this->_addModifier('color-dark');
  }

  /** @return $this */
  public function borderPrimary()
  {
    return $this->_addModifier('border-primary');
  }

  /** @return $this */
  public function borderLight()
  {
    return $this->_addModifier('border-light');
  }

  /** @return $this */
  public function borderDark()
  {
    return $this->_addModifier('border-dark');
  }

  /** @return ISafeHtmlProducer|null */
  public function getContent()
  {
    return $this->_content;
  }

  /**
   * @param ISafeHtmlProducer $content
   *
   * @return $this
   */
  public function setContent(ISafeHtmlProducer $content)
  {
    $this->_content = $content;
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
    return 'icon-wrapper';
  }

  /** @return SafeHtml|null */
  protected function _getContentForRender()
  {
    return $this->getContent()->produceSafeHTML();
  }

  /**
   * @param ISafeHtmlProducer $content
   *
   * @return $this
   */
  public static function i(ISafeHtmlProducer $content)
  {
    return new static($content);
  }

  /**
   * @return SafeHtml|string
   * @throws \Exception
   */
  public function __toString()
  {
    return $this->render();
  }

  /**
   * @return $this
   */
  public function bottomShadow()
  {
    $this->_addModifier('bottom-shadow');
    return $this;
  }
}

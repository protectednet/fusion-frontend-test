<?php
namespace ProtectedNet\FrontendTest\Components\Link;

use Exception;
use Packaged\Dispatch\ResourceManager;
use Packaged\SafeHtml\SafeHtml;
use ProtectedNet\FrontendTest\Components\AbstractComponent;

class Link extends AbstractComponent
{
  /**
   * Use this property to set the tag you want to use as your outer element
   *
   * @var string
   */
  protected $_tag = "a";
  protected $_content;

  /**
   * Link constructor.
   *
   * @param string $content
   */
  public function __construct(string $content)
  {
    parent::__construct();
    $this->_content = $content;
  }

  /**
   * All our styling used BEM, the name you enter here is the root name for BEM styling
   *
   * @return string
   */
  public function getBlockName(): string
  {
    return 'link';
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
   * This method is overridden if you don't require a phtml view
   *
   * @return SafeHtml|string|null
   */
  protected function _getContentForRender()
  {
    return $this->_content;
  }

}

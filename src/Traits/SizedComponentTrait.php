<?php

namespace ProtectedNet\FrontendTest\Traits;

use ProtectedNet\FrontendTest\Enum\Breakpoints;

trait SizedComponentTrait
{
  /** @var int */
  protected $_selectedSize;

  /**
   * @param Breakpoints $breakpoint
   *
   * @return $this
   */
  public function sizeX1(Breakpoints $breakpoint = null) { return $this->_setSize(1, $breakpoint); }

  /**
   * @param int              $size
   *
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  protected function _setSize(int $size, Breakpoints $breakpoint = null)
  {
    $this->_selectedSize = $size;

    if($breakpoint)
    {
      return $this->_addModifier('size' . (string)$size . '--' . $breakpoint);
    }

    return $this->_addModifier('size' . (string)$size);
  }

  abstract protected function _addModifier(string $name);

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX2(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(2, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX3(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(3, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX4(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(4, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX5(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(5, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX6(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(6, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX7(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(7, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX8(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(8, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX9(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(9, $breakpoint);
  }

  /**
   * @param Breakpoints|null $breakpoint
   *
   * @return $this
   */
  public function sizeX10(Breakpoints $breakpoint = null)
  {
    return $this->_setSize(10, $breakpoint);
  }

  /** @return int|null */
  protected function _getSize(): ?int
  {
    return $this->_selectedSize;
  }
}

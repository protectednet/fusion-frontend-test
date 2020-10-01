<?php

namespace ProtectedNet\FrontendTest\Enum;

use Packaged\Enum\AbstractEnum;

/**
 * Class Breakpoints
 *
 * @method static SMALL(): Breakpoints
 * @method static MEDIUM(): Breakpoints
 * @method static LARGE(): Breakpoints
 */
class Breakpoints extends AbstractEnum
{
  protected const SMALL = 'small';
  protected const MEDIUM = 'medium';
  protected const LARGE = 'large';
}

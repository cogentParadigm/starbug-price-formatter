<?php

namespace spec\Starbug\Price;

use Starbug\Price\Formatter;
use PhpSpec\ObjectBehavior;

/**
 * Spec test for Starbug\Price\Formatter.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 */
class FormatterSpec extends ObjectBehavior {
  public function let() {
    $this->beConstructedWith();
  }
  public function it_is_initializable() {
    $this->shouldHaveType(Formatter::class);
  }
  public function it_can_format_prices() {
    $this->format(100000)->shouldReturn("$1,000.00");
  }
}

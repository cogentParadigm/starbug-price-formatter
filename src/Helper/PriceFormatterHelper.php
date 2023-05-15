<?php
namespace Starbug\Price\Helper;

use Starbug\Price\FormatterInterface;

class PriceFormatterHelper {
  public function __construct(FormatterInterface $target) {
    $this->target = $target;
  }
  public function helper() {
    return $this->target;
  }
}

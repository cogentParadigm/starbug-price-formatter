<?php
namespace Starbug\Price;

use NumberFormatter;

class Formatter implements FormatterInterface {
  protected $locale;
  protected $minorUnit;
  protected $formatter;
  public function __construct($locale = "en_US.UTF-8", $minorUnit = 2) {
    $this->locale = $locale;
    $this->minorUnit = $minorUnit;
    $this->formatter = new NumberFormatter($this->locale, NumberFormatter::CURRENCY);
    $this->formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $this->minorUnit);
  }
  public function format($price) {
    return $this->formatter->format($price/pow(10, $this->minorUnit));
  }
}

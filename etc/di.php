<?php
namespace Starbug\Price;

use Starbug\Price\Helper\PriceFormatterHelper;

use function DI\add;
use function DI\autowire;
use function DI\get;

return [
  "currency_locale" => "en_US.UTF-8",
  "currency_minor_unit" => 2,
  FormatterInterface::class => autowire(Formatter::class)
    ->constructorParameter("locale", get("currency_locale"))
    ->constructorParameter("minorUnit", get("currency_minor_unit")),
  "template.helpers" => add([
    "priceFormatter" => PriceFormatterHelper::class
  ])
];

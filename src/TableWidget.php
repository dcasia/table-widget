<?php

declare(strict_types = 1);

namespace DigitalCreative\TableWidget;

use DigitalCreative\NovaDashboard\Card\Widget;

abstract class TableWidget extends Widget
{
    public $component = 'table-widget';

    public $width = self::ONE_QUARTER_WIDTH;

    abstract function fields(): array;

    public function jsonSerialize(): array
    {
        return array_merge([ 'fields' => $this->fields() ], parent::jsonSerialize());
    }
}

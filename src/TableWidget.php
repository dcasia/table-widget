<?php

declare(strict_types = 1);

namespace DigitalCreative\TableWidget;

use DigitalCreative\NovaDashboard\Card\View;
use DigitalCreative\NovaDashboard\Card\Widget;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

abstract class TableWidget extends Widget
{
    public $component = 'table-widget';

    abstract public function fields(): array;

    public function title(string $title): self
    {
        return $this->withMeta([ 'title' => $title ]);
    }

    public function resolveValue(NovaRequest $request, ?View $view = null): mixed
    {
        $value = parent::resolveValue($request, $view);

        return $value->map(function (array $data) {

            return collect($this->fields())->each(function (Field $field) use ($data): void {

                $field->resolve([
                    $field->attribute => data_get($data, $field->attribute),
                ]);

            });

        });
    }
}

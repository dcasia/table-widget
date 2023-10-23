# Nova Value Widget

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digital-creative/value-widget)](https://packagist.org/packages/digital-creative/value-widget)
[![Total Downloads](https://img.shields.io/packagist/dt/digital-creative/value-widget)](https://packagist.org/packages/digital-creative/value-widget)
[![License](https://img.shields.io/packagist/l/digital-creative/value-widget)](https://github.com/dcasia/value-widget/blob/main/LICENSE)

<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/dcasia/value-widget/main/screenshots/dark.png">
  <img alt="Nova Welcome Card in Action" src="https://raw.githubusercontent.com/dcasia/value-widget/main/screenshots/light.png">
</picture>

A simple widget for laravel [nova-dashboard](https://github.com/dcasia/nova-dashboard).

# Installation

You can install the package via composer:

```
composer require digital-creative/value-widget
```

## Basic Usage

```php
use DigitalCreative\NovaDashboard\Filters;
use DigitalCreative\TableWidget\TableWidget;
use Laravel\Nova\Http\Requests\NovaRequest;

class MyWidget extends TableWidget
{
    public function configure(NovaRequest $request): void
    {
        $this->icon('<svg></svg> or heroicons name');
        $this->title('My Widget');
        $this->textColor(dark: '#845adf', light: '#845adf');
        $this->backgroundColor('#845adf4f');
    }

    public function value(Filters $filters): mixed
    {
      //
    }
}
```

## ⭐️ Show Your Support

Please give a ⭐️ if this project helped you!

### Other Packages You Might Like

- [Nova Welcome Card](https://github.com/dcasia/nova-welcome-card) - A configurable version of the `Help card` that comes with Nova.
- [Icon Action Toolbar](https://github.com/dcasia/icon-action-toolbar) - Replaces the default boring action menu with an inline row of icon-based actions.
- [Expandable Table Row](https://github.com/dcasia/expandable-table-row) - Provides an easy way to append extra data to each row of your resource tables.
- [Collapsible Resource Manager](https://github.com/dcasia/collapsible-resource-manager) - Provides an easy way to order and group your resources on the sidebar.
- [Resource Navigation Tab](https://github.com/dcasia/resource-navigation-tab) - Organize your resource fields into tabs.
- [Resource Navigation Link](https://github.com/dcasia/resource-navigation-link) - Create links to internal or external resources.
- [Nova Mega Filter](https://github.com/dcasia/nova-mega-filter) - Display all your filters in a card instead of a tiny dropdown!
- [Nova Pill Filter](https://github.com/dcasia/nova-pill-filter) - A Laravel Nova filter that renders into clickable pills.
- [Nova Slider Filter](https://github.com/dcasia/nova-slider-filter) - A Laravel Nova filter for picking range between a min/max value.
- [Nova Range Input Filter](https://github.com/dcasia/nova-range-input-filter) - A Laravel Nova range input filter.
- [Nova FilePond](https://github.com/dcasia/nova-filepond) - A Nova field for uploading File, Image and Video using Filepond.
- [Custom Relationship Field](https://github.com/dcasia/custom-relationship-field) - Emulate HasMany relationship without having a real relationship set between resources.
- [Column Toggler](https://github.com/dcasia/column-toggler) - A Laravel Nova package that allows you to hide/show columns in the index view.
- [Batch Edit Toolbar](https://github.com/dcasia/batch-edit-toolbar) - Allows you to update a single column of a resource all at once directly from the index page.

## License

The MIT License (MIT). Please see [License File](https://raw.githubusercontent.com/dcasia/value-widget/main/LICENSE) for more information.

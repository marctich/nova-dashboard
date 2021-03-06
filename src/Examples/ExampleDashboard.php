<?php

namespace DigitalCreative\NovaDashboard\Examples;

use DigitalCreative\NovaDashboard\Dashboard;
use DigitalCreative\NovaDashboard\Examples\Views\AnotherView;
use DigitalCreative\NovaDashboard\Examples\Views\ProductsSalesView;

class ExampleDashboard extends Dashboard
{

    public static string $title = 'Example Dashboard';

    public function views(): array
    {
        return [
            new ProductsSalesView(),
            AnotherView::make()->editable()
        ];
    }

    public function options(): array
    {
        return [
            'expandFilterByDefault' => true,
            'grid' => [
                'compact' => true,
            ]
        ];
    }

}

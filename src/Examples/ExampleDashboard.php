<?php

namespace DigitalCreative\NovaDashboard\Example;

use App\Nova\Filters\TestFilter;
use DigitalCreative\NovaDashboard\Dashboard;
use DigitalCreative\NovaDashboard\Preset;
use DigitalCreative\SocialMediaWidget\Widgets\SocialMediaWidget;

class ExampleDashboard extends Dashboard
{

    public static string $title = 'Example Dashboard';

    public function filters(): array
    {
        return [
            (new TestFilter())->withMeta([ 'currentValue' => '2010-12-10' ]),
            (new TestFilter())->withMeta([ 'currentValue' => '2010-12-10' ]),
            (new TestFilter())->withMeta([ 'currentValue' => '2010-12-10' ]),
            (new TestFilter())->withMeta([ 'currentValue' => '2010-12-10' ]),
        ];
    }

    public function widgets(): array
    {
        return [
            SocialMediaWidget::make(1, 0, 1, 1),
        ];
    }

    public function presets(): array
    {
        return [

            Preset::make(SocialMediaWidget::class)
                        ->coordinates(0, 0, 2, 1)
                        ->options([
                            'type' => SocialMediaWidget::TYPE_FACEBOOK
                        ]),

            Preset::make(SocialMediaWidget::class)
                        ->coordinates(2, 0, 2, 1)
                        ->options([
                            'type' => SocialMediaWidget::TYPE_TWITTER
                        ]),

            Preset::make(SocialMediaWidget::class)
                        ->coordinates(4, 0, 2, 1)
                        ->options([
                            'type' => SocialMediaWidget::TYPE_TWITTER
                        ]),

        ];
    }

    public function options(): array
    {
        return [
            'enableAddWidgetButton' => true,
            'enableWidgetEditing' => true,
            'expandFilterByDefault' => true,
            'grid' => [
                'compact' => true,
            ]
        ];
    }

}
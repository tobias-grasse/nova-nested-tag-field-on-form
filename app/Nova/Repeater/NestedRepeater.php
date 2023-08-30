<?php

namespace App\Nova\Repeater;

use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class NestedRepeater extends Repeatable
{
    /**
     * Get the fields displayed by the repeatable.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     *
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
          Text::make('Repeater Field #1', 'field_1'),
          Select::make('Repeater Field #2', 'field_2')
                ->options([
                            'a' => 'A',
                            'b' => 'B',
                          ]),
        ];
    }
}

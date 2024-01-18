<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class UnitType extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\UnitType>
     */
    public static $model = \App\Models\UnitType::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title(){
        return $this->name.' - '. $this->bedrooms.' REC, '. $this->bathrooms. ' BA, '. $this->const_total.' m²';
    }
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];


     /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Tipo de Unidad');
    }

    public static function label()
    {
        return __('Tipos de Unidades');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Nombre', 'name')->rules('required', 'max:50')->sortable()->filterable(),

            Number::make('Recámaras', 'bedrooms')->rules('required')->min(0)->max(15)->help('Dejar en 0 si es Loft o Studio'),
            Number::make('Cuartos Flex', 'flexrooms')->rules('nullable')->min(0)->max(15),
            Number::make('Baños', 'bathrooms')->rules('required')->min(0)->max(15)->step(0.5),
            
    
            Number::make('Construcción total', 'const_total')->rules('required')->min(0)->step(0.01)->help('El área total de la unidad en metros cuadrados')
            ->displayUsing(
                function($value){
                    return $value.' m²';
                }
            ),

            new Panel('Imágenes', $this->imageFields()),
        ];
    }


    protected function imageFields() {

        return [
            Image::make('Planos', 'blueprint_path')->disk('media')/*->creationRules('required')*/,
            //Images::make('Isométrico', 'isometric')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
            Images::make('Galería', 'gallery')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
            //Images::make('Ubicación en planta', 'floor')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),

        ];

    }


    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}

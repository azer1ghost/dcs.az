<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Certificates extends AbstractAction
{
    public function getTitle(): string
    {
        return 'Certificate';
    }

    public function getIcon(): string
    {
        return 'voyager-people';
    }

    public function getPolicy(): string
    {
        return 'read';
    }

    public function getAttributes(): array
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin-right: 5px'
        ];
    }

    public function getDefaultRoute(): string
    {
        $parameters = request()->route()->originalParameters();

        return route('students.certificate', ['training' => $parameters['training'], 'session' => $parameters['session'], 'student' => $this->data]);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'students';
    }
}

<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Students extends AbstractAction
{
    public function getTitle(): string
    {
        return 'Students';
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
        return route('students', ['training' => $this->data->training_id, 'session' => $this->data]);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'sessions';
    }
}

<?php

namespace App\Actions\Sessions;

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
        return route('sessions.students', [request()->route('group'), $this->data->training_id, $this->data]);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'sessions';
    }
}

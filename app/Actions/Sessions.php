<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Sessions extends AbstractAction
{
    public function getTitle(): string
    {
        return 'Sessions';
    }

    public function getIcon(): string
    {
        return 'voyager-eye';
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
        return route('sessions', $this->data);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'trainings';
    }
}

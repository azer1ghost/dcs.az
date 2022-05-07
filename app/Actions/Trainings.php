<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Trainings extends AbstractAction
{
    public function getTitle(): string
    {
        return 'Trainings';
    }

    public function getIcon(): string
    {
        return 'voyager-study';
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
        return route('groups.trainings.index', $this->data);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'groups';
    }
}

<?php

namespace App\Actions\Trainings;

use TCG\Voyager\Actions\AbstractAction;

class TrainingsRead extends AbstractAction
{
    public function getTitle()
    {
        return __('voyager::generic.view');
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
            'class' => 'btn btn-sm btn-warning pull-right view',
        ];
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'trainings';
    }

    public function getDefaultRoute(): string
    {
        return route('groups.trainings.show', [$this->data->getAttribute('group_id'), $this->data->{$this->data->getKeyName()}]);
    }
}

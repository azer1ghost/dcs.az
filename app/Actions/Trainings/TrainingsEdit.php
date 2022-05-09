<?php

namespace App\Actions\Trainings;

use TCG\Voyager\Actions\AbstractAction;

class TrainingsEdit extends AbstractAction
{
    public function getTitle()
    {
        return __('voyager::generic.edit');
    }

    public function getIcon(): string
    {
        return 'voyager-edit';
    }

    public function getPolicy(): string
    {
        return 'edit';
    }

    public function getAttributes(): array
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right edit',
        ];
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'trainings';
    }

    public function getDefaultRoute(): string
    {
        return route('groups.trainings.edit', [$this->data->getAttribute('group_id'), $this->data->{$this->data->getKeyName()}]);
    }
}

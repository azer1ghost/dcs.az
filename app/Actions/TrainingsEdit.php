<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class TrainingsEdit extends AbstractAction
{
    public function getTitle()
    {
        return __('voyager::generic.edit');
    }

    public function getIcon()
    {
        return 'voyager-edit';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right edit',
            'style' => 'margin-right: 5px'
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

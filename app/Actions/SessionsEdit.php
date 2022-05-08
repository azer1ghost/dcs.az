<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class SessionsEdit extends AbstractAction
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
        return $this->dataType->slug == 'sessions';
    }

    public function getDefaultRoute(): string
    {
        return route('groups.trainings.sessions.edit', [request()->route('group'), $this->data->getAttribute('training_id'), $this->data->{$this->data->getKeyName()}]);
    }
}

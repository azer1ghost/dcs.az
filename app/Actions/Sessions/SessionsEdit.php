<?php

namespace App\Actions\Sessions;

use TCG\Voyager\Actions\AbstractAction;

class SessionsEdit extends AbstractAction
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
        return $this->dataType->slug == 'sessions';
    }

    public function getDefaultRoute(): string
    {
        return route('groups.trainings.sessions.edit', [request()->route('group'), $this->data->getAttribute('training_id'), $this->data->{$this->data->getKeyName()}]);
    }
}

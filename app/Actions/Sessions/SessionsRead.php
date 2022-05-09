<?php

namespace App\Actions\Sessions;

use TCG\Voyager\Actions\AbstractAction;

class SessionsRead extends AbstractAction
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
        return $this->dataType->slug == 'sessions';
    }

    public function getDefaultRoute(): string
    {
        return route('groups.trainings.sessions.show', [request()->route('group'), $this->data->getAttribute('training_id'), $this->data->{$this->data->getKeyName()}]);
    }
}

<?php

namespace App\Actions\Sessions;

use TCG\Voyager\Actions\AbstractAction;

class SessionsDelete extends AbstractAction
{
    public function getTitle()
    {
        return __('voyager::generic.delete');
    }

    public function getIcon(): string
    {
        return 'voyager-trash';
    }

    public function getPolicy(): string
    {
        return 'delete';
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'sessions';
    }

    public function getAttributes(): array
    {
        return [
            'class'   => 'btn btn-sm btn-danger pull-right delete',
            'data-id' => $this->data->{$this->data->getKeyName()},
            'id'      => 'delete-'.$this->data->{$this->data->getKeyName()},
        ];
    }

    public function getDefaultRoute(): string
    {
        return 'javascript:;';
    }
}

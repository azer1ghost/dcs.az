<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class InfoCertificate extends AbstractAction
{
    public function getTitle(): string
    {
        return 'Info';
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
            'class' => 'btn btn-sm btn-info pull-right',
            'style' => 'margin-right: 5px'
        ];
    }

    public function getDefaultRoute(): string
    {
        return route('certificate', $this->data);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'certificates';
    }
}

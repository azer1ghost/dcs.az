<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Certificate extends AbstractAction
{
    public function getTitle(): string
    {
        return 'Certificate';
    }

    public function getIcon(): string
    {
        return 'voyager-documentation';
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
        return route('sessions.students.certificate', ['training' => $this->data->training_id, 'session' => $this->data->session_id, 'student' => $this->data->student_id]);
    }

    public function shouldActionDisplayOnDataType(): bool
    {
        return $this->dataType->slug == 'certificates';
    }
}

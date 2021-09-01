<?php

namespace LidyaPos\Table\Http\Requests;

use LidyaPos\Support\Http\Requests\Request;

class BulkChangeRequest extends Request
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'class' => 'required',
        ];
    }
}

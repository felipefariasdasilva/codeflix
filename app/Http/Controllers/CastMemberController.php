<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BasicCrudController;
use App\Models\CastMember;
use Illuminate\Http\Request;

class CastMemberController extends BasicCrudController{

    private $rules;


    public function __construct() {
        $this->rules = [
            'name' => 'required|max:255',
            'type' => 'required|in:' .implode(',', [
                CastMember::TYPE_ACTOR,
                CastMember::TYPE_DIRECTOR
            ])
        ];
    }


    protected function model() {
        return CastMember::class;
    }

    protected function rulesStore() {
        return $this->rules;
    }

    protected function rulesUpdate() {
        return $this->rules;
    }
}

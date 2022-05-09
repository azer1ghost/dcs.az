<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class TrainingController extends VoyagerBaseController
{
    use BreadRelationshipParser;

    public function show(Request $request, $id)
    {
        return parent::show($request,  $request->route('training'));
    }

    public function store(Request $request)
    {
        $response = parent::store($request);

         if ($response)
             return redirect()->route('groups.trainings.index', $request->route('group'));
         else
             return $response;
    }

    public function edit(Request $request, $id)
    {
        return parent::edit($request, $request->route('training'));
    }

    public function update(Request $request, $id)
    {
        $response = parent::update($request, $request->route('training'));

        if ($response)
            return redirect()->route('groups.trainings.index', $request->route('group'));
        else
            return $response;
    }

    public function destroy(Request $request, $id)
    {
        $response = parent::destroy($request, $request->route('training'));

        if ($response)
            return back();
        else
            return $response;
    }

    public function getSlug(Request $request)
    {
        return 'trainings';
    }
}

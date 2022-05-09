<?php

namespace App\Http\Controllers\Admin;

use App\Models\Training;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class SessionController extends VoyagerBaseController
{
    public function show(Request $request, $id)
    {
        return parent::show($request,  $request->route('session'));
    }

    public function store(Request $request)
    {
        $training = Training::query()->findOrFail($request->route('training'));

        if ($request->isNotFilled('title'))
        {
            $request->merge([
                "title" => $training->getTranslatedAttribute('name', 'en'),
                'title_i18n' => collect([
                    'en' => $training->getTranslatedAttribute('name', 'en'),
                    'az' => $training->getTranslatedAttribute('name', 'az'),
                    'ru' => $training->getTranslatedAttribute('name', 'ru'),
                ])->toJson()
            ]);
        }

        $response = parent::store($request);

        if ($response)
            return redirect()->route('groups.trainings.sessions.index', [$request->route('group'), $request->route('training')]);
        else
            return $response;
    }

    public function edit(Request $request, $id)
    {
        return parent::edit($request, $request->route('session'));
    }

    public function update(Request $request, $id)
    {
        $response = parent::update($request, $request->route('session'));

        if ($response)
            return redirect()->route('groups.trainings.sessions.index', [$request->route('group'), $request->route('training')]);
        else
            return $response;
    }

    public function destroy(Request $request, $id)
    {
        $response = parent::destroy($request, $request->route('session'));

        if ($response)
            return back();
        else
            return $response;
    }

    public function getSlug(Request $request)
    {
        return 'sessions';
    }
}

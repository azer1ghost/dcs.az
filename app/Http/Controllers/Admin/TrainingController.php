<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
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

    public function ordering(Request $request, Group $group)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('edit', app($dataType->model_name));

        if (empty($dataType->order_column) || empty($dataType->order_display_column)) {
            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                    'message'    => __('voyager::bread.ordering_not_set'),
                    'alert-type' => 'error',
                ]);
        }

        $model = app($dataType->model_name);
        $query = $model->query()->where('group_id', $group->id);
        if ($model && in_array(SoftDeletes::class, class_uses_recursive($model))) {
            $query = $query->withTrashed();
        }
        $results = $query->orderBy($dataType->order_column, $dataType->order_direction)->get();

        $display_column = $dataType->order_display_column;

        $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->whereField($display_column)->first();

        $view = 'voyager::bread.order';

        if (view()->exists("voyager::$slug.order")) {
            $view = "voyager::$slug.order";
        }

        return Voyager::view($view, compact(
            'dataType',
            'display_column',
            'dataRow',
            'results'
        ));
    }
}

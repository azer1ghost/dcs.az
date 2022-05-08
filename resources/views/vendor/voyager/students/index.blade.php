@extends('voyager::master')

@section('page_title', 'Session students'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class=""></i> Session students
        </h1>
        <button class="btn btn-success btn-add-new" type="button" data-toggle="modal" data-target="#addStudent">
            <i class="voyager-plus"></i>
            <span>{{ __('voyager::generic.add_new') }}</span>
        </button>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table class="table col-12">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Father name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Registered</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($session->students as $student)
                                <tr>
                                    <th scope="row">{{$student->getAttribute('id')}}</th>
                                    <td>{{$student->getAttribute('fullname')}}</td>
                                    <td>{{$student->getAttribute('father')}}</td>
                                    <td>{{$student->getAttribute('email')}}</td>
                                    <td>{{$student->getAttribute('phone')}}</td>
                                    <td>{{$student->getAttribute('created_at')}}</td>
                                    <td>
                                        <a class="btn-link"
                                           target="_blank"
                                           href="{{route('sessions.students.certificate', [$group, $training, $session, $student])}}">
                                            @if($student->certificates()->whereBelongsTo($training)->whereBelongsTo($session)->doesntExist())
                                                <button type="button" class="btn btn-warning">Generate Certificate</button>
                                            @else
                                                <button type="button" class="btn btn-success">Certificate</button>
                                            @endif
                                        </a>
                                        <button type="button" data-id="{{$student->getAttribute('id')}}"  data-toggle="modal" data-target="#delete_modal" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addStudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addStudent" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStudent">Add student for session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="add.student" action="{{route('sessions.students.attach',  [$group, $training, $session])}}" class="col-12">
                        @csrf
                        <div class="form-group">
                            <label for="student_id">Select new student</label>
                            <select class="form-control" id="student_id" name="student_id">
                               @forelse($students->diff($session->students) as $student)
                                    <option value="{{$student->getAttribute('id')}}">
                                        {{"{$student->getAttribute('fullname')} ({$student->getAttribute('email')})"}}
                                    </option>
                                @empty
                                    <option value="">There is no student or all students joined the session</option>
                                @endforelse
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="add.student" class="btn btn-primary">Add student</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> Remove student</h4>
                </div>
                <div class="modal-content p-5">
                    <h4 style="margin: 100px!important;">
                        Are you sure remove student from this session?
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="{{route('sessions.students.detach', [$group, $training, $session])}}" id="delete_form" method="POST">
                        @csrf @method('DELETE')
                        <input type="hidden" name="student_id">
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop


@section('javascript')
  <script>
      $("[data-target='#delete_modal']").click(function (){
          $("input[name='student_id']").val($(this).data('id'))
      });
  </script>
@stop

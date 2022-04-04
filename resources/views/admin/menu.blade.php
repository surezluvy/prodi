@extends('admin.template')

@section('title', 'Dashboard')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="action-btn layout-top-spacing mb-5">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg> Boards</p>
            <button id="add-list" class="btn btn-primary">Add List</button>
        </div>
        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addTaskModalTitle">
                                <h5 class="add-task-title">Add Task</h5>
                                <h5 class="edit-task-title">Edit Task</h5>

                                <div class="addTaskAccordion" id="add_task_accordion">
                                    <div class="card task-simple">
                                        <div class="card-header" id="headingOne">
                                            <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Option 1 </div>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#add_task_accordion">
                                            <div class="card-body">
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-title mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                <input id="s-simple-task" type="text" placeholder="Task" class="form-control" name="task">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card task-text-progress">
                                        <div class="card-header" id="headingTwo">
                                            <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Option 2 </div>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#add_task_accordion">
                                            <div class="card-body">
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-title mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                <input id="s-task" type="text" placeholder="Task" class="form-control" name="task">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-badge mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <textarea id="s-text" placeholder="Task Text" class="form-control" name="taskText"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-badge mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>

                                                                <div class="" style="width: 100%">
                                                                    <input type="range" min="0" max="100" class="custom-range" value="0" id="progress-range-counter">

                                                                    <div class="range-count"><span class="range-count-number" data-rangeCountNumber="0">0</span> <span class="range-count-unit">%</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card task-image">
                                        <div class="card-header" id="headingThree">
                                            <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Option 3
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#add_task_accordion">
                                            <div class="card-body">
                                                <form action="javascript:void(0);">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-title mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                <input id="s-image-task" type="text" placeholder="Task" class="form-control" name="task">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-badge mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star" style="align-self: self-start;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                                    </div>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="img-preview mb-4">
                                                                <img src="{{ asset('admin_assets/assets/img/scrumboard-upload-img.svg') }}" class="img-fluid" alt="scrumboard">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> Discard</button>
                        <button data-btnfn="addTask" class="btn add-tsk">Add Task</button>
                        <button data-btnfn="editTask" class="btn edit-tsk" style="display: none;">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addListModal" tabindex="-1" role="dialog" aria-labelledby="addListModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addListModalTitle">
                                <h5 class="add-list-title">Add List</h5>
                                <h5 class="edit-list-title">Edit List</h5>
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="list-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                                <input id="s-list-name" type="text" placeholder="List Name" class="form-control" name="task">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> Discard</button>
                        <button class="btn add-list">Add List</button>
                        <button class="btn edit-list" style="display: none;">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" id="deleteConformationLabel">
                    <div class="modal-header">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </div>
                        <h5 class="modal-title" id="exampleModalLabel">Delete the task?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="">If you delete the task it will be gone forever. Are you sure you want to proceed?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-remove="task">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================================================== --}}
        {{-- Menu --}}

        {{-- <menu id="nestable-menu">
            <button type="button" data-action="expand-all">Expand All</button>
            <button type="button" data-action="collapse-all">Collapse All</button>
        </menu> --}}
    
        <div class="cf nestable-lists">
            <div class="dd" id="nestable">
                <ol class="dd-list">
                    @foreach($menus as $d)
                    <li class="dd-item list-group-item list-group-item-primary rounded" data-menu_id="{{ $d->menu_id }}" data-urut="{{ $d->urut }}">
                        <div class="dd-handle">{{ $d->name }}</div>
                        {{-- {{ \App\Models\Menu::where('menu_id_parent', $d->menu_id)->get() }} --}}
                        <ol class="dd-list">
                            @foreach(\App\Models\Menu::where('menu_id_parent', $d->menu_id)->orderBy('urut', 'ASC')->get() as $c)
                            <li class="dd-item list-group-item list-group-item-primary rounded" data-menu_id="{{ $c->menu_id }}" data-urut="{{ $c->urut }}"><div class="dd-handle">{{ $c->name }}</div></li>
                            @endforeach
                        </ol>
                    </li>
                    @endforeach
                </ol>
            </div>
    
        </div>
        <form action="{{ route('kirim') }}" method="POST">
            @csrf
            {{-- <textarea id="test" name="test"></textarea> --}}
            {{-- <input type="text" id="ayam" name="test" required> --}}
            <textarea  id="ayam" name="test" required cols="150" rows="20"></textarea>
    
            <button type="submit" class="btn btn-block btn-primary">Save</button>
            {{-- <input type="submit" value="Kirim"> --}}
        </form>
        </div>
</div>
@endsection
@section('script')


$(document).ready(function()
{
    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            $('#ayam').val(window.JSON.stringify(list.nestable('serialize')));
            console.log(window.JSON.stringify(list.nestable('serialize')));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };
    // console.log(window.JSON.stringify(list.nestable('serialize')));
    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1,
    })
    .on('change', updateOutput);

    // activate Nestable for list 2
    $('#nestable2').nestable({
        group: 1
    })
    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    // updateOutput($('#nestable2').data('output', $('#nestable2-output')));

    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();

});

@endsection
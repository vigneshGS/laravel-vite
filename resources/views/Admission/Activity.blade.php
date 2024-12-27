@extends('layout.layout')
@php
    $title='Users Grid';
    $subTitle = 'Users Grid';
    $script ='<script>
                        $(".remove-item-btn").on("click", function() {
                            $(this).closest("tr").addClass("d-none")
                        });
            </script>';
@endphp

@section('content')

      <!-- dashboard start-->
      <div class="overflow-x-auto scroll-sm pb-8">
        <div class="kanban-wrapper">
            <div class="d-flex align-items-start gap-24" id="sortable-wrapper">
                <div class="w-20 kanban-item radius-12 progress-card">
                    <div class="card p-0 radius-12 overflow-hidden shadow-none">
                        <div class="card-body p-0 pb-24">
                            <div class="d-flex align-items-center gap-2 justify-content-between ps-24 pt-24 pe-24">
                                <h6 class="text-lg fw-semibold mb-0">Applied</h6>
                                <div class="d-flex align-items-center gap-3 justify-content-between mb-0">
                                    <button type="button" class="text-2xl hover-text-primary add-task-button">
                                        <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                    </button>
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="entypo:dots-three-vertical" class="text-xl"></iconify-icon>
                                        </button>
                                        <ul class="dropdown-menu p-12 border bg-base shadow">
                                            <li>
                                                <a class="duplicate-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                    Duplicate
                                                </a>
                                            </li>
                                            <li>
                                                <a class="delete-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="connectedSortable ps-24 pt-24 pe-24" id="sortable1">
                                <div class="kanban-card bg-neutral-50 p-16 radius-8 mb-24" id="kanban-1">
                                    <div class="radius-8 mb-12 max-h-350-px overflow-hidden">
                                        
                                    </div>
                                    <h6 class="kanban-title text-lg fw-semibold mb-8">Rahul' Admission</h6>
                                    <p class="kanban-desc text-secondary-light">
                                        <b>Kalashalingam university</b>
                                        MBA(Marketing)
                                    </p>
                                    <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white d-flex align-items-center gap-2">
                                        <iconify-icon icon="mage:user-circle" class="icon"></iconify-icon>
                                        <span class="kanban-tag fw-semibold">David</span>
                                    </button>
                                    <div class="mt-12 d-flex align-items-center justify-content-between gap-10">
                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                            <iconify-icon icon="solar:calendar-outline" class="text-primary-light"></iconify-icon>
                                            <span class="start-date text-secondary-light">25 Aug 2024</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                            <button type="button" class="card-edit-button text-success-600">
                                                <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                            </button>
                                            <button type="button" class="card-delete-button text-danger-600">
                                                <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                            </button>
                                        </div>
                                    </div>
                                </div> <div class="kanban-card bg-neutral-50 p-16 radius-8 mb-24" id="kanban-1">
                                    <div class="radius-8 mb-12 max-h-350-px overflow-hidden">
                                        
                                    </div>
                                    <h6 class="kanban-title text-lg fw-semibold mb-8">Meena's Admission</h6>
                                    <p class="kanban-desc text-secondary-light">
                                        <b>Kalashalingam university</b>
                                        MBA(Marketing)
                                    </p>
                                    <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white d-flex align-items-center gap-2">
                                        <iconify-icon icon="mage:user-circle" class="icon"></iconify-icon>
                                        <span class="kanban-tag fw-semibold">Kumar</span>
                                    </button>
                                    <div class="mt-12 d-flex align-items-center justify-content-between gap-10">
                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                            <iconify-icon icon="solar:calendar-outline" class="text-primary-light"></iconify-icon>
                                            <span class="start-date text-secondary-light">25 Aug 2024</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                            <button type="button" class="card-edit-button text-success-600">
                                                <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                            </button>
                                            <button type="button" class="card-delete-button text-danger-600">
                                                <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <!-- Add Task Button -->
                            <button type="button" class="d-flex align-items-center gap-2 fw-medium w-100 text-primary-600 justify-content-center text-hover-primary-800 add-task-button">
                                <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                Add Task
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-20 kanban-item radius-12 pending-card">
                    <div class="card p-0 radius-12 overflow-hidden shadow-none">
                        <div class="card-body p-0 pb-24">
                            <div class="d-flex align-items-center gap-2 justify-content-between ps-24 pt-24 pe-24">
                                <h6 class="text-lg fw-semibold mb-0">Accepted</h6>
                                <div class="d-flex align-items-center gap-3 justify-content-between mb-0">
                                    <button type="button" class="text-2xl hover-text-primary add-task-button">
                                        <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                    </button>
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="entypo:dots-three-vertical" class="text-xl"></iconify-icon>
                                        </button>
                                        <ul class="dropdown-menu p-12 border bg-base shadow">
                                            <li>
                                                <a class="duplicate-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                    Duplicate
                                                </a>
                                            </li>
                                            <li>
                                                <a class="delete-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                
                            <div class="connectedSortable ps-24 pt-24 pe-24" id="sortable2">
                                
                            </div>
                            <!-- Add Task Button -->
                            <button type="button" class="d-flex align-items-center gap-2 fw-medium w-100 text-primary-600 justify-content-center text-hover-primary-800 add-task-button">
                                <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                Add Task
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-20 kanban-item radius-12 done-card">
                    <div class="card p-0 radius-12 overflow-hidden shadow-none">
                        <div class="card-body p-0 pb-24">
                            <div class="d-flex align-items-center gap-2 justify-content-between ps-24 pt-24 pe-24">
                                <h6 class="text-lg fw-semibold mb-0">Payment Collection</h6>
                                <div class="d-flex align-items-center gap-3 justify-content-between mb-0">
                                    <button type="button" class="text-2xl hover-text-primary add-task-button">
                                        <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                    </button>
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="entypo:dots-three-vertical" class="text-xl"></iconify-icon>
                                        </button>
                                        <ul class="dropdown-menu p-12 border bg-base shadow">
                                            <li>
                                                <a class="duplicate-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                    Duplicate
                                                </a>
                                            </li>
                                            <li>
                                                <a class="delete-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                
                            <div class="connectedSortable ps-24 pt-24 pe-24" id="sortable3">
                              
                            </div>

                            <!-- Add Task Button -->
                            <button type="button" class="d-flex align-items-center gap-2 fw-medium w-100 text-primary-600 justify-content-center text-hover-primary-800 add-task-button">
                                <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                Add Task
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-20 kanban-item radius-12 done-card">
                    <div class="card p-0 radius-12 overflow-hidden shadow-none">
                        <div class="card-body p-0 pb-24">
                            <div class="d-flex align-items-center gap-2 justify-content-between ps-24 pt-24 pe-24">
                                <h6 class="text-lg fw-semibold mb-0">Completed</h6>
                                <div class="d-flex align-items-center gap-3 justify-content-between mb-0">
                                    <button type="button" class="text-2xl hover-text-primary add-task-button">
                                        <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                    </button>
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="entypo:dots-three-vertical" class="text-xl"></iconify-icon>
                                        </button>
                                        <ul class="dropdown-menu p-12 border bg-base shadow">
                                            <li>
                                                <a class="duplicate-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                    Duplicate
                                                </a>
                                            </li>
                                            <li>
                                                <a class="delete-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                
                            <div class="connectedSortable ps-24 pt-24 pe-24" id="sortable3">
                              
                            </div>

                            <!-- Add Task Button -->
                            <button type="button" class="d-flex align-items-center gap-2 fw-medium w-100 text-primary-600 justify-content-center text-hover-primary-800 add-task-button">
                                <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                Add Task
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-20 kanban-item radius-12 done-card">
                    <div class="card p-0 radius-12 overflow-hidden shadow-none">
                        <div class="card-body p-0 pb-24">
                            <div class="d-flex align-items-center gap-2 justify-content-between ps-24 pt-24 pe-24">
                                <h6 class="text-lg fw-semibold mb-0">Rejected</h6>
                                <div class="d-flex align-items-center gap-3 justify-content-between mb-0">
                                    <button type="button" class="text-2xl hover-text-primary add-task-button">
                                        <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                    </button>
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="entypo:dots-three-vertical" class="text-xl"></iconify-icon>
                                        </button>
                                        <ul class="dropdown-menu p-12 border bg-base shadow">
                                            <li>
                                                <a class="duplicate-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                    Duplicate
                                                </a>
                                            </li>
                                            <li>
                                                <a class="delete-button dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-2" href="javascript:void(0)">
                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                
                            <div class="connectedSortable ps-24 pt-24 pe-24" id="sortable3">
                              
                            </div>

                            <!-- Add Task Button -->
                            <button type="button" class="d-flex align-items-center gap-2 fw-medium w-100 text-primary-600 justify-content-center text-hover-primary-800 add-task-button">
                                <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                Add Task
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Task Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-xl mb-0" id="addTaskModalLabel">Add New Task</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="taskForm">
                    <input type="hidden" id="editTaskId" value="">
                    <div class="mb-3">
                        <label for="taskTitle" class="form-label fw-semibold text-primary-light text-sm mb-8">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Event Title " id="taskTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="taskTag" class="form-label fw-semibold text-primary-light text-sm mb-8">Tag</label>
                        <input type="text" class="form-control" placeholder="Enter tag" id="taskTag" required>
                    </div>
                    <div class="mb-3">
                        <label for="startDate" class="form-label fw-semibold text-primary-light text-sm mb-8">Start Date</label>
                        <input type="date" class="form-control" id="startDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="form-label fw-semibold text-primary-light text-sm mb-8">Description</label>
                        <textarea class="form-control" id="taskDescription" rows="3" placeholder="Write some text" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="taskImage" class="form-label fw-semibold text-primary-light text-sm mb-8">Attachments <span class="text-sm">(Jpg, Png format)</span> </label>
                        <input type="file" class="form-control" id="taskImage">
                        <img id="taskImagePreview" src="assets/images/carousel/carousel-img1.png" alt="Image Preview">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center gap-3">
                <button type="button" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-50 py-11 radius-8" data-bs-dismiss="modal"> 
                    Cancel
                </button>
                <button type="button" class="btn btn-primary border border-primary-600 text-md px-28 py-12 radius-8" id="saveTaskButton"> 
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>
       
       <!-- dashboard end-->
        
@endsection

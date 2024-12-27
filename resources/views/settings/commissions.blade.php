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
 <div class="card basic-data-table">
        <div class="card-header">
          <h5 class="card-title mb-0">Agents </h5>
         
        </div>
        <div class="card-body">
          <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
            <thead>
              <tr>
                <th scope="col">
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      S.L
                    </label>
                  </div>
                </th>
                <th scope="col">Invoice ID</th>
                <th scope="col">Agent Name</th>
                <th scope="col">Commision Rate</th>
                <th scope="col">Milestone</th>
                <th scope="col">Admission Date</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      01
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                  </div>
                </td>
                <td>5%</td>
                <td><span class="bg-primary-light text-primary-600 px-24 py-4 rounded-pill fw-medium text-sm">Sliver</span></td>
                <td>25 Jan 2024</td>
                <td>50000.00</td>
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                <td>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      01
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                  </div>
                </td>
                <td>5%</td>
                <td><span class="bg-primary-light text-primary-600 px-24 py-4 rounded-pill fw-medium text-sm">Sliver</span></td>
                <td>25 Jan 2024</td>
                <td>50000.00</td>
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                <td>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      01
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                  </div>
                </td>
                <td>5%</td>
                <td><span class="bg-primary-light text-primary-600 px-24 py-4 rounded-pill fw-medium text-sm">Sliver</span></td>
                <td>25 Jan 2024</td>
                <td>50000.00</td>
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                <td>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      01
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                  </div>
                </td>
                <td>5%</td>
                <td><span class="bg-primary-light text-primary-600 px-24 py-4 rounded-pill fw-medium text-sm">Sliver</span></td>
                <td>25 Jan 2024</td>
                <td>50000.00</td>
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                <td>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      01
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                  </div>
                </td>
                <td>5%</td>
                <td><span class="bg-primary-light text-primary-600 px-24 py-4 rounded-pill fw-medium text-sm">Sliver</span></td>
                <td>25 Jan 2024</td>
                <td>50000.00</td>
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                <td>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                  </a>
                  <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                  </a>
                </td>
              </tr>
             
            </tbody>
          </table>
        </div>
      </div>
       
       <!-- dashboard end-->

@endsection

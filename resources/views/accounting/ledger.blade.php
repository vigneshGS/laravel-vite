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
 <div class="card">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3">
          <div class="d-flex flex-wrap align-items-center gap-3">
            <div class="d-flex align-items-center gap-2">
              <span>Show</span>
              <select class="form-select form-select-sm w-auto">
                <option>10</option>
                <option>15</option>
                <option>20</option>
              </select>
            </div>
            <div class="icon-field">
              <input type="text" name="#0" class="form-control form-control-sm w-auto" placeholder="Search">
              <span class="icon">
                <iconify-icon icon="ion:search-outline"></iconify-icon>
              </span>
            </div>
          </div>
          <div class="d-flex flex-wrap align-items-center gap-3">
            <select class="form-select form-select-sm w-auto">
              <option>Type</option>
              <option>Debit</option>
              <option>Credit</option>
            </select>
            <a href="invoice-add.html" class="btn btn-sm btn-primary-600"><i class="ri-add-line"></i> Add Transactions</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table bordered-table mb-0">
            <thead>
              <tr>
                <th scope="col">
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="" id="checkAll">
                    <label class="form-check-label" for="checkAll">
                      S.L
                    </label>
                  </div>
                </th>
                <th scope="col">Transaction Id</th>
                <th scope="col">Details</th>
                <th scope="col">Issued Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check style-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="" id="check1">
                    <label class="form-check-label" for="check1">
                      01
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#52653446</a></td>
                <td>
                  <div class="d-flex align-items-center">
                  
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Admission Fee</h6>
                  </div>
                </td>
                <td>25 Jan 2024</td>
                <td>20,000.00</td>
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Credit</span> </td>
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
                    <input class="form-check-input" type="checkbox" value="" id="check1">
                    <label class="form-check-label" for="check1">
                      02
                    </label>
                  </div>
                </td>
                <td><a href="javascript:void(0)" class="text-primary-600">#52653446</a></td>
                <td>
                  <div class="d-flex align-items-center">
                   
                    <h6 class="text-md mb-0 fw-medium flex-grow-1">Admission Fee</h6>
                  </div>
                </td>
                <td>25 Jan 2024</td>
                <td>20,000.00</td>
                <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Debit</span> </td>
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
  
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
            <span>Showing 1 to 10 of 12 entries</span>
            <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
              <li class="page-item">
                <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                  href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
              </li>
              <li class="page-item">
                <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                  href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                  href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                  href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                  href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
       
       <!-- dashboard end-->

@endsection

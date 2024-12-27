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
 <div class="row gy-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title mb-0">API Credentials</h6>
            </div>
            <div class="card-body">
              <div class="row gy-3">
                <div class="col-12">
                  <label class="form-label">Base URL</label>
                  <input type="text" name="#0" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">API Key</label>
                  <input type="text" name="#0" class="form-control" placeholder="5187459877523158">
                </div>
                <div class="col-12">
                  <label class="form-label">API Secret </label>
                  <input type="text" class="form-control flex-grow-1" placeholder="****************">
                </div>
              
              </div>
            </div>
          </div><!-- card end -->
          
        </div>
       </div>
       <!-- dashboard end-->


@endsection

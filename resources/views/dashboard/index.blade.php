@extends('dashboard.layouts.main')

@section('container')
<!-- page content -->

<div class="right_col" role="main">
    <!-- top tiles -->

    <div class="row" style="display: inline-block;" >
        <!-- Dashboard START -->
        <!-- Dashboard END -->
        <div class="">
            <div class="row" style="display: inline-block;">
                <div class="top_tiles d-flex flex-row bg-info mb-3">
                    <div class="card w-75">
                        <div class="card-body">
                          <h5 class="card-title">Schedule</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="/newschedule" class="btn btn-primary">Buat</a>
                        </div>
                      </div>
                      <div class="card w-75">
                        <div class="card-body">
                          <h5 class="card-title">Personal</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="/newpersonal" class="btn btn-primary">Buat</a>
                        </div>
                      </div>
                </div>


          </div>
        </div>
          <!-- /top tiles -->
          
        <!-- /page content -->
@endsection

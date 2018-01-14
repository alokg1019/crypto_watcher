@extends('master.master');

@section('main-content')

    <div class="row">

    </div>
    <div class="col-lg-6">
        <div class="card">
            <h4 class="card-title">Total Symbols - <strong>{{  $total_count }}</strong></h4>

            <div class="card-body">
                <canvas class="mx-auto chart-symbols-summary" width="280" height="280"></canvas>
            </div>
        </div>
    </div>

@endsection

@section('extra-script')

@endsection
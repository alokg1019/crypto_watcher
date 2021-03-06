@extends('master.master');

@section('main-content')


    <div class="col-lg-12">
        <div class="card">
            <h4 class="card-title">Crypto Currencies</h4>

            <div class="card-body">
                <div class="col-md-12">

                    <table class="table table-separated">
                        <thead>
                        <tr>
                            <th>Symbol</th>
                            <th>Currency</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th class="text-center w-100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($cc_list as $crypt_curr)

                            <tr class="bg-dark">
                                    {{--@if($symbol->diff < 0)--}}
                                    {{--bg-danger--}}
{{--@elseif($symbol->diff > 0)--}}
                                    {{--bg-success--}}
{{--@else--}}
                                    {{--bg-dark--}}
{{--@endif--}}
                                    {{--">--}}
                                <td><a class="a-white" href="/crypto/{{$crypt_curr->symbol}}">  {{ $crypt_curr->symbol  }}</a></td>
                                <td>{{ $crypt_curr->currency_name  }}</td>
                                <td>{{ number_format($crypt_curr->price,2) }}</td>
                                <td>{{ $crypt_curr->date}}</td>

                                {{--<td><a href="#" data-symbol="{{ $symbol->symbol }}" class="a-white symbol-main-js-sync ml-1"--}}
                                       {{--title="Refresh" data-provide="tooltip"><i class="fa fa-refresh"></i></a></td>--}}
                                {{--<td class="text-right table-actions">--}}
                                    {{--<a class="table-action hover-primary" href="#"><i class="ti-pencil"></i></a>--}}
                                    {{--<a class="table-action hover-danger" href="#"><i class="ti-trash"></i></a>--}}
                                    {{--<div class="dropdown table-action">--}}
                                        {{--<span class="dropdown-toggle no-caret hover-primary" data-toggle="dropdown"><i--}}
                                                    {{--class="ti-more-alt rotate-90"></i></span>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-menu-alt"></i> Details</a>--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-clip"></i> Add file</a>--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-bar-chart"></i>--}}
                                                {{--Performance</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('extra-script')
    {{--<script>--}}

        {{--app.ready(function () {--}}


            {{--$('.symbol-main-js-sync').click(function () {--}}

                {{--//alert($(this).attr('data-symbol'));--}}
                {{--$.get("/refresh-symbol/" + $(this).attr('data-symbol'));--}}

            {{--});--}}


        {{--});--}}

    {{--</script>--}}
@endsection
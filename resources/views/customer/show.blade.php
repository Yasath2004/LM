@extends('layouts.default')


@section('content')
<div class="container mt-4 animate__animated animate__fadeIn">

    <h1 class="text-primary fw-bold mb-4 d-flex align-items-center">
        Customer Profile
    </h1>

    <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-12">

            <div class="card border-0 rounded-3 mt-3 ">
                <table class="table">
                    @foreach ($details as $title=>$item)
                    <tr>
                        <td>{{ $title }}</td>
                        <td>{{ $item }}</td>
                    </tr>
                        @endforeach
                </table>
            </div>

        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6>Loan History</h6>
                </div>

                <div class="card-body">
                    asdas
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


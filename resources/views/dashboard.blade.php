@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Simbibot Stats</h4>
                    <p class="card-category">Based on Test Data received</p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>ID</th>
                            <th>Statistic Key</th>
                            <th>Statistic Value</th>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
                                $curCount = 0;
                            @endphp
                            @foreach ($basic as $basicCollection)
                                @php
                                    $curCount = ++$count;
                                @endphp
                                @foreach ($basicCollection as $item => $value)
                                    <tr>
                                        <td>{{ $curCount }}</td>
                                        <td>{{ $item }}</td>
                                        <td>{{ $value }}</td>
                                    </tr>                      
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Simbibot Stats</h4>
                    <p class="card-category">Number of tests in below exams </p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>ID</th>
                            <th>Statistic Key</th>
                            <th class="text-center">Test in Exam</th>
                            <th class="text-center">Questions in Exam</th>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
                                $curCount = 0;
                            @endphp
                            @foreach ($numTest as $numTestCollection)
                                @php
                                    $curCount = ++$count;
                                @endphp
                                @foreach ($numTestCollection as $item => $value)
                                    <tr>
                                        <td>{{ $curCount }}</td>
                                        <td>{{ $item }}</td>
                                        <td class="text-center">{{ $value['test'] }}</td>
                                        <td class="text-center">{{ $value['question'] }}</td>
                                    </tr>                      
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
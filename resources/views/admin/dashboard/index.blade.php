@extends('layouts.admin_layout')

@section('content')
    <div class="flex-inline w-full">
        <div class="bg-white pb-4 px-4 rounded-md w-full mt-5">
            <div class="flex justify-between w-full pt-6">
                <div class="flex-inline">
                    <h3 class="font-medium text-2xl">Dashboard</h3>
                </div>
            </div>
            <h3 class="mt-10 font-bold">User Chart</h3>
            <div class="overflow-x-auto mt-6 flex">
                <div class="chart-container relative w-1/2">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="chart-container relative w-1/2">
                    <canvas id="question-category"></canvas>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js-script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Admin', 'Guest'],
                datasets: [{
                    label: '# of Votes',
                    data: ['{{  $admin  }}','{{  $guest  }}'],
                    overOffset: 4,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        {{--const qc = document.getElementById('question-category').getContext('2d');--}}
        {{--const qcc = new Chart(qc, {--}}
        {{--    type: 'pie',--}}
        {{--    data: {--}}
        {{--        labels: ['SD','SMP'],--}}
        {{--        datasets: [{--}}
        {{--            label: '# of Votes',--}}
        {{--            data: ['{{  $admin  }}','{{  $guest  }}'],--}}
        {{--            overOffset: 4,--}}
        {{--            backgroundColor: [--}}
        {{--                'rgba(255, 99, 132, 0.2)',--}}
        {{--                'rgba(54, 162, 235, 0.2)',--}}
        {{--            ],--}}
        {{--            borderColor: [--}}
        {{--                'rgba(255, 99, 132, 1)',--}}
        {{--                'rgba(54, 162, 235, 1)',--}}
        {{--            ],--}}
        {{--            borderWidth: 1--}}
        {{--        }]--}}
        {{--    },--}}
        {{--    options: {--}}
        {{--        scales: {--}}
        {{--            y: {--}}
        {{--                beginAtZero: true--}}
        {{--            }--}}
        {{--        }--}}
        {{--    }--}}
        {{--});--}}
    </script>
@endpush

@extends('layouts.app')
@section('title') Tracking Artists @endsection
@section('type') User @endsection
@section('page') Tracking Artists @endsection

@section('style')
    <style>
        .myslider {
            position: absolute;
            top: 15%;
        }
    </style>
    <style>

        @media (min-width: 971px) {
            .mysearchdiv {
                max-width: 20%;
            }
        }

        @media (max-width: 640px) {
            .mrg_top {
                margin-top: 24px !important;
            }
        }

        .accordion-button {
            font-size: 0.9rem !important;
            color: #7b809a;
            text-align: left;
        }

        .accordion .accordion-button {
            margin: 0 auto;
            font-size: 0.9rem !important;
        }

        .taskspan {
            min-width: 62px;
            max-height: 32px;
        }

        .visiontab-cotent {
            max-height: 138px;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 3%;
        }
        .carousel-indicators {
            top: 105%;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1 col-lg-1">
                <div class="btn-group">
                    <button type="button" class="btn bg-gradient-dark btn-sm m-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Artist
                    </button>

                    <ul class="dropdown-menu bg-gradient-dark px-2 py-3 rounded border" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="form-check p-0">
                                    <input type="checkbox" class="form-check-input" checked="" id="customCheckDisabled">
                                    <label class="custom-control-label" for="customCheckDisabled">Taylor Smith</label>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="form-check p-0">
                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                    <label class="custom-control-label" for="customCheckDisabled">Johan Team</label>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="form-check p-0">
                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                    <label class="custom-control-label" for="customCheckDisabled">Salena Lewis</label>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="form-check p-0">
                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled" checked="">
                                    <label class="custom-control-label" for="customCheckDisabled">Pavel Danilyuk</label>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 text-end  mt-2">
                <label class="text-white pe-3">Event Date</label>
            </div>
            <div class="col-md-2 col-lg-2">
                <div class="input-group input-group-static">
                    <input class="form-control datetimepicker" type="date" placeholder="Select date" data-input>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card  mb-2">
                    <div class="card-body p-4 pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-dollar text-white text-lg mt-2"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white m-0">$230</h6>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card  mb-2">
                    <div class="card-body p-4 pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-tag text-white text-lg mt-2"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white m-0">$230</h6>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card  mb-2">
                    <div class="card-body p-4 pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-signal text-white text-lg mt-2"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white m-0">$230</h6>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card  mb-2">
                    <div class="card-body p-4 pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-compact-disc text-white text-lg mt-2"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white m-0">$230</h6>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-md-12 col-lg-12">
                <div class="card" id="card_panel3">
                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">

                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-basic" style="text-align: center;vertical-align: middle;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Artist Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event Time</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event Venue</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event State</th>
{{--                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">8/10/2022</th>--}}
{{--                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">7/10/2022</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($artist->artist->artistEvents) > 0)
                                            @foreach($artist->artist->artistEvents as $event)
                                            <tr>
                                                <td class="text-sm font-weight-normal">
                                                    <div class="form-check p-0">
                                                        <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                    </div>
                                                </td>
                                                <td class="text-sm font-weight-normal">{{ ucwords($event->singer) }}</td>
                                                <td class="text-sm font-weight-normal">{{ $event->date }}</td>
                                                <td class="text-sm font-weight-normal">{{ $event->time }}</td>
                                                <td class="text-sm font-weight-normal">{{ $event->venue }}</td>
                                                <td class="text-sm font-weight-normal">{{ $event->location }}</td>
                                            </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row pt-3">
            <div class="col-lg-8 col-sm-8 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Lorem Ipsum</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bar-chart-horizontal" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Lorem Ipsum</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bubble-chart" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-8 col-sm-8 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Profit</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Lorem Ipsum</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pb-0 p-3 mt-4">
                        <div class="row">
                            <div class="col-7 text-start">
                                <div class="chart">
                                    <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                                </div>
                            </div>
                            <div class="col-5 my-auto">
                            <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-info"></i>
                                <span class="text-dark text-xs">Lorem ipsum</span>
                            </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-primary"></i>
                                <span class="text-dark text-xs">Lorem ipsum</span>
                            </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-dark"></i>
                                <span class="text-dark text-xs">Lorem ipsum</span>
                            </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-secondary"></i>
                                <span class="text-dark text-xs">Lorem ipsum</span>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        // Bar chart horizontal
        var ctx6 = document.getElementById("bar-chart-horizontal").getContext("2d");

        new Chart(ctx6, {
            type: "bar",
            data: {
                labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
                datasets: [{
                    label: "",
                    weight: 5,
                    borderWidth: 0,
                    borderRadius: 4,
                    backgroundColor: '#3A416F',
                    data: [15, 20, 12, 60, 20, 15],
                    fill: false
                }],
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: true,
                            drawTicks: true,
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        // Bubble chart
        var ctx8 = document.getElementById("bubble-chart").getContext("2d");

        new Chart(ctx8, {
            type: "bubble",
            data: {
                labels: ['0', '10', '20', '30', '40', '50'],
                datasets: [{
                    label: 'Dataset 1',
                    data: [{
                        x: 20,
                        y: 0,
                        r: 10
                    }, {
                        x: 30,
                        y: 30,
                        r: 20
                    }, {
                        x: 22,
                        y: 27,
                        r: 10
                    }, {
                        x: 34,
                        y: 3,
                        r: 10
                    }, {
                        x: 20,
                        y: 30,
                        r: 15
                    }, {
                        x: 0,
                        y: 15,
                        r: 5
                    }],
                    backgroundColor: '#e91e63',
                },
                    {
                        label: 'Dataset 2',
                        data: [{
                            x: 11,
                            y: 21,
                            r: 10
                        }, {
                            x: 30,
                            y: 16,
                            r: 20
                        }, {
                            x: 10,
                            y: 5,
                            r: 25
                        }, {
                            x: 19,
                            y: 30,
                            r: 10
                        }, {
                            x: 32,
                            y: 34,
                            r: 15
                        }, {
                            x: 20,
                            y: 9,
                            r: 5
                        }],
                        backgroundColor: '#3A416F',
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        // Pie chart
        var ctx4 = document.getElementById("chart-pie").getContext("2d");

        new Chart(ctx4, {
            type: "pie",
            data: {
                labels: ['', '', '', ''],
                datasets: [{
                    label: "Projects",
                    weight: 9,
                    cutout: 0,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ['#03A9F4', '#e91e63', '#3A416F', '#a8b8d8'],
                    data: [15, 20, 12, 60],
                    fill: false
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        }
                    },
                },
            },
        });


        // Line chart
        var ctx1 = document.getElementById("chart-line").getContext("2d");
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Vision",
                    tension: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "#e91e63",
                    pointBorderColor: "transparent",
                    borderColor: "#e91e63",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 100, 200, 190, 400, 350, 500, 450, 700],
                    maxBarThickness: 6
                },
                    {
                        label: "Tasks",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#3A416F",
                        pointBorderColor: "transparent",
                        borderColor: "#3A416F",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [10, 30, 40, 120, 150, 220, 280, 250, 280],
                        maxBarThickness: 6
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>

    <script>

        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            });
            // flatpickr
        }

    </script>
@endsection

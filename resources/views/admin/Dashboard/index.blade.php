@extends('layouts.app')
@section('title') Dashboard @endsection
@section('type') Admin @endsection
@section('page') Dashboard @endsection

@section('style')@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Lorem Ipsum</p>
                            <h4 class="mb-0 text-white">281</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3 d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 ">Updated Now</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">leaderboard</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Lorem Ipsum</p>
                            <h4 class="mb-0 text-white">24</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3 d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 ">Updated Now</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">store</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Lorem Ipsum</p>
                            <h4 class="mb-0 text-white">12</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3 d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 ">Updated Now</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                <div class="card ">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person_add</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Lorem Ipsum</p>
                            <h4 class="mb-0 text-white">91</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3 d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 ">Updated Now</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0 text-white">Lorem Ipsum</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="mixed-chart" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0 text-white">Lorem Ipsum</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mt-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0 text-white">Lorem Ipsum</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
                                <i class="material-icons text-sm">priority_high</i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pb-0 p-3 mt-4">
                        <div class="row">
                            <div class="col-md-7 col-lg-7 col text-start">
                                <div class="chart">
                                    <canvas id="doughnut-chart" class="chart-canvas" height="200"></canvas>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5 my-auto">
                            <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-info"></i>
                                <span class="text-gradient-dark text-xs">Lorem Ipsum</span>
                            </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-primary"></i>
                                <span class="text-gradient-dark text-xs">Lorem Ipsum</span>
                            </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-white"></i>
                                <span class="text-gradient-dark text-xs">Lorem Ipsum</span>
                            </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                <i class="bg-secondary"></i>
                                <span class="text-gradient-dark text-xs">Lorem Ipsum</span>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <p class="text-sm">
                                Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem
                            </p>
                        </div>
                        <div class="col-md-5 col-lg-5 text-end">
                            <a class="btn bg-gradient-dark mb-0 text-end" href="javascript:;">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset("assets/js/plugins/chartjs.min.js") }}"></script>
    <script>
        // Doughnut chart
        var ctx3 = document.getElementById("doughnut-chart").getContext("2d");

        new Chart(ctx3, {
            type: "doughnut",
            data: {
                labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
                datasets: [{
                    label: "Projects",
                    weight: 9,
                    cutout: 60,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ['#03A9F4', '#3A416F', '#fb8c00', '#a8b8d8', '#e91e63'],
                    data: [15, 20, 12, 60, 20],
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

        // Bar chart
        var ctx5 = document.getElementById("bar-chart").getContext("2d");

        new Chart(ctx5, {
            type: "bar",
            data: {
                labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
                datasets: [{
                    label: "Sales by age",
                    weight: 5,
                    borderWidth: 0,
                    borderRadius: 4,
                    backgroundColor: '#3A416F',
                    data: [15, 20, 12, 60, 20, 15],
                    fill: false,
                    maxBarThickness: 35
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


        // Mixed chart
        var ctx7 = document.getElementById("mixed-chart").getContext("2d");

        new Chart(ctx7, {
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    type: "bar",
                    label: "Organic Search",
                    weight: 5,
                    tension: 0.4,
                    borderWidth: 0,
                    pointBackgroundColor: "#3A416F",
                    borderColor: "#3A416F",
                    backgroundColor: '#3A416F',
                    borderRadius: 4,
                    borderSkipped: false,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 10,
                },
                    {
                        type: "line",
                        label: "Referral",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        pointBackgroundColor: "#e91e63",
                        borderColor: "#e91e63",
                        borderWidth: 3,
                        backgroundColor: "transparent",
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        fill: true,
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
                            drawTicks: true,
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
                labels: ['Facebook', 'Direct', 'Organic', 'Referral'],
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
                    label: "Facebook Ads",
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
                        label: "Google Ads",
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
@endsection

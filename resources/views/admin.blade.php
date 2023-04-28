{{-- @foreach ($aturan as $key)
{{ $key->aturanToPenyakit->kodePenyakit}}  {{ $key->aturanToPenyakit->namaPenyakit}}<br>
{{ $key->aturanToGejala->kodeGejala}}  {{ $key->aturanToGejala->namaGejala}}<br>
@endforeach --}}


{{-- @foreach ($penyakit as $s)
    {{$s->penyakitToAturan->aturanToGejala}}
   @foreach ($s->penyakitToAturan as $c)
       {{ $c->aturanToGejala->namaGejala}}
   @endforeach
@endforeach --}}
@extends('layouts.main')

@section('page')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <a class="block block-rounded block-link-pop border-start border-primary border-4" href="/">
                <div class="block-content block-content-full" style="background-color: #06d47b">
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Hello, Admin</div>
                    <div class="fs-2 fw-bold text-dark">Selamat Datang Di Sistem Pakar Penyakit Tanaman Buah Dikotil</div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $dataUser }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Admin</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-user-gear fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="{{ route('data-admin') }}">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $dataPetani }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Petani</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-user-plus fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="{{ route('data-petani') }}">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $dataPenyakit1 }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Penyakit</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-disease fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="{{ route('data-penyakit')}}">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $dataGejala }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Gejala</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-retweet fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="{{route('data-gejala')}}">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3 col-lg-3 col-xl-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B9F3E4">
                    <h3 class="block-title fw-bold" style="color: #000000!important">Data Laporan Penyakit Tanaman Buah
                        Petani</h3>
                    <div class="block-options">
                        {{-- <div class="block-options-item text-danger">Special!</div> --}}
                    </div>
                </div>
                <div class="block-content block-content-full text-center">

                    <div class="py-3 px-xxl-7">
                        <!-- Pie Chart Container -->
                        <canvas id="disease-chart"></canvas>
                        {{-- <canvas id="pie-chart"></canvas> --}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B9F3E4">
                    <h3 class="block-title fw-bold" style="color: #000000!important">Data Obat Yang Sering Digunakan Petani
                        Petani</h3>
                    <div class="block-options">
                        {{-- <div class="block-options-item text-danger">Special!</div> --}}
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3 px-xxl-7">
                        <!-- Pie Chart Container -->
                        <canvas id="obat-donut"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B9F3E4">
                    <h3 class="block-title fw-bold" style="color: #000000!important">Data Laporan Penyakit 6 Bulan Terakhir
                        Petani</h3>
                    <div class="block-options">
                        {{-- <div class="block-options-item text-danger">Special!</div> --}}
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3 ">
                        <!-- Pie Chart Container -->
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('chart')
        <script>
            var data = @json($data);
            var months = @json($months);
            var colors = ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)',
                'rgba(173, 231, 146, 0.5)', 'rgba(167, 93, 93, 0.5)', 'rgba(255, 112, 0, 0.5)', 'rgba(139, 0, 139, 0.5)',
                'rgba(84, 180, 53, 0.5)'
            ];
            var bgcolors = ['rgba(255, 99, 132, 0.1)', 'rgba(54, 162, 235, 0.1)', 'rgba(255, 206, 86, 0.1)',
                'rgba(173, 231, 146, 0.1)', 'rgba(167, 93, 93, 0.1)', 'rgba(255, 112, 0, 0.1)', 'rgba(139, 0, 139, 0.1)',
                'rgba(84, 180, 53, 0.1)'
            ];

            var colorIndex = 0;
            var datasets = [];
            for (var name in data) {
                if (data.hasOwnProperty(name)) {
                    var counts = [];
                    for (var i = 0; i < months.length; i++) {
                        var month = months[i];
                        var count = data[name][month] || 0;
                        counts.push(count);
                    }
                    datasets.push({
                        label: name,
                        data: counts,
                        fill: !0,
                        backgroundColor: bgcolors[colorIndex % bgcolors.length],
                        borderColor: colors[colorIndex % colors.length],
                        // pointBackgroundColor: colors[colorIndex % colors.length],
                        // pointBorderColor: '#fff',
                        // pointHoverBackgroundColor: '#fff',
                        // pointHoverBorderColor: colors[colorIndex % colors.length],
                        tension: 0.1
                    });
                    colorIndex++;
                }
            }


            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: datasets
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });


            function getRandomColor(alpha) {
                var letters = '0123456789ABCDEF';
                var color = 'rgba(';
                for (var i = 0; i < 3; i++) {
                    color += Math.floor(Math.random() * 256) + ',';
                }
                color += alpha + ')';
                return color;
            }
        </script>

        <script>
            var data = {
                labels: {!! json_encode($dataPenyakit->keys()) !!},
                datasets: [{
                    data: {!! json_encode($dataPenyakit->values()) !!},
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#ADE792',
                        '#A75D5D',
                        '#FF7000',
                        '#8B008B',
                        '#54B435'
                    ]
                }]
            };

            var options = {
                responsive: true
            };

            var chart = new Chart(document.getElementById('disease-chart'), {
                type: 'pie',
                data: data,
                options: options
            });
        </script>

        <script>
            var data = {
                labels: {!! json_encode($dataobat->keys()) !!},
                datasets: [{
                    data: {!! json_encode($dataobat->values()) !!},
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#ADE792',
                        '#A75D5D',
                        '#FF7000',
                        '#8B008B',
                        '#54B435'
                    ]
                }]
            };

            var options = {
                responsive: true
            };

            var chart = new Chart(document.getElementById('obat-donut'), {
                type: 'doughnut',
                data: data,
                options: options
            });
        </script>
    @endpush

    {{-- @push('chart')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            $(function() {
                //get the pie chart canvas
                var cData = JSON.parse(`<?php echo $tittle; ?>`);
                var ctx = $("#pie-chart");

                //pie chart data
                var data = {
                    labels: cData.label,
                    datasets: [{
                        label: "Users Count",
                        data: cData.data,
                        backgroundColor: [
                            "#DEB887",
                            "#A9A9A9",
                            "#DC143C",
                            "#F4A460",
                            "#2E8B57",
                            "#1D7A46",
                            "#CDA776",
                        ],
                        borderColor: [
                            "#CDA776",
                            "#989898",
                            "#CB252B",
                            "#E39371",
                            "#1D7A46",
                            "#F4A460",
                            "#CDA776",
                        ],
                        borderWidth: [1, 1, 1, 1, 1, 1, 1]
                    }, {
                        label: "This Week",
                        fill: !0,
                        backgroundColor: "rgba(0, 0, 0, .1)",
                        borderColor: "rgba(0, 0, 0, .3)",
                        pointBackgroundColor: "rgba(0, 0, 0, .3)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(0, 0, 0, .3)",
                        data: [30, 32, 40, 45, 43, 38, 55]
                    }]
                };

                //options
                var options = {
                    responsive: true,
                    title: {
                        display: true,
                        position: "top",
                        text: "Last Week Registered Users -  Day Wise Count",
                        fontSize: 18,
                        fontColor: "#111"
                    },
                    legend: {
                        display: true,
                        position: "bottom",
                        labels: {
                            fontColor: "#333",
                            fontSize: 16
                        }
                    }
                };

                //create Pie Chart class object
                var chart1 = new Chart(ctx, {
                    type: "line",
                    data: data,
                    options: options
                });

            });
        </script>
    @endpush --}}
@endsection

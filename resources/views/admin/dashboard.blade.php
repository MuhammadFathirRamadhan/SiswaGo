@extends('layouts.main') <!-- Menggunakan template layout utama -->

@section('style')
    <style>
        .circle-dots {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid blue;
        }

        /* Styling untuk card */
        .card-custom {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk header */
        .dashboard-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4e73df;
        }

        .badge-status {
            font-weight: bold;
        }
    </style>
@endsection

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 dashboard-header">Dashboard Penjemputan Siswa</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Total Students -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card card-custom border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Siswa
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countStudents }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-fill fs-2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Pickups -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card card-custom border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Jumlah Penjemput
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countPickups }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-check-fill fs-2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card card-custom border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Kelas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countClasses }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-building fs-2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Today's Pickups -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Penjemputan Hari Ini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-table" class="table mb-0 table-striped" role="grid">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Waktu Penjemputan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todayPickups as $pickup)
                                    <tr>
                                        <td>{{ $pickup->student->name }}</td>
                                        <td>{{ $pickup->pickup_time }}</td>
                                        <td>
                                            @if ($pickup->status === 'completed')
                                                <span class="badge bg-success badge-status">Selesai</span>
                                            @elseif ($pickup->status === 'pending')
                                                <span class="badge bg-warning badge-status">Menunggu</span>
                                            @else
                                                <span class="badge bg-danger badge-status">Gagal</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Upcoming Pickups -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Penjemputan Berikutnya</h6>
                </div>
                <div class="card-body">
                    @foreach ($upcomingPickups as $pickup)
                        <div class="mb-2 d-flex profile-media align-items-top">
                            <div class="mt-1 circle-dots"></div>
                            <div class="ms-4">
                                <h6 class="mb-1">{{ $pickup->student->name }}</h6>
                                <span class="mb-0 text-secondary">{{ $pickup->pickup_time }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

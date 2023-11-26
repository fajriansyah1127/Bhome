@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="block-header">
                <h2>DATA KEUANGAN</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info-box hover-expand-effect hover-zoom-effect">
                        <div class="icon bg-blue">
                            <i class="material-icons">home</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH RUMAH</div>
                            <div class="number">157</div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info-box hover-expand-effect hover-zoom-effect">
                        <div class="icon bg-green">
                            <i class="material-icons">check_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">LUNAS</div>
                            <div class="number">{{$total_lunas}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info-box hover-expand-effect hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">clear</i>
                        </div>
                        <div class="content">
                            <div class="text">BELUM LUNAS</div>
                            <div class="number">{{$total_belum_lunas}}</div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- #END# Hover Zoom Effect -->
            <!-- Hover Expand Effect -->
            
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info-box hover-zoom-effect hover-expand-effect">
                        <div class="icon bg-yellow">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL NILAI BAYAR</div>
                            {{-- <div class="number">1462767000</div> --}}
                            <div class="number">{{$total_nilai_lunas_dan_belum}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info-box hover-zoom-effect hover-expand-effect">
                        <div class="icon bg-yellow">
                            <i class="material-icons">attach_money</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL SUDAH BAYAR</div>
                            {{-- <div class="number">755078500</div> --}}
                            <div class="number">{{$total_nilai_lunas}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info-box hover-zoom-effect hover-expand-effect">
                        <div class="icon bg-yellow">
                            <i class="material-icons">money_off</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL BELUM BAYAR</div>
                            {{-- <div class="number">707688500</div> --}}
                            <div class="number">{{$total_nilai_belum}}</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LUNAS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>Nama</th>
                                            <th>Perusahaan</th>
                                            <th>No Hp</th>
                                            <th>Nilai Sewa</th>
                                            <th>Tanggal Bayar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>Nama</th>
                                            <th>Perusahaan</th>
                                            <th>No Hp</th>
                                            <th>Nilai Sewa</th>
                                            <th>Tanggal Bayar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($data_lunas as $data)
                                        <tr>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->perusahaan}}</td>
                                            <td>{{$data->kontak}}</td>
                                            <td>Rp {{ number_format($data->nilai_sudah_bayar, 0, ',', '.') }}</td>
                                            <td>{{$data -> tanggal_bayar}}</td>
                                        </tr>
                                        @endforeach
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->


            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BELUM LUNAS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>Nama</th>
                                            <th>Perusahaan</th>
                                            <th>No Hp</th>
                                            <th>Nilai Sewa</th>
                                        </tr>
                                    </thead>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>Nama</th>
                                            <th>Perusahaan</th>
                                            <th>No Hp</th>
                                            <th>Nilai Sewa</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                        @foreach ($data_belum_lunas as $datas)
                                            <tr>
                                                <td>{{$datas->alamat}}</td>
                                                <td>{{$datas->nama}}</td>
                                                <td>{{$datas->perusahaan}}</td>
                                                <td>{{$datas->kontak}}</td>
                                                <td>Rp {{ number_format($datas->nilai_belum_bayar, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

        </div>
        <!-- #END# Masked Input -->
        </div>
    </section>
@endsection

@push('javascript')
    <!-- Jquery Core Js -->
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('template') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('template') }}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('template') }}/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="{{ asset('template') }}/js/admin.js"></script>
    <script src="{{ asset('template') }}/js/pages/ui/animations.js"></script>

    <!-- Demo Js -->
    <script src="{{ asset('template') }}/js/demo.js"></script>

     <!-- Jquery DataTable Plugin Js -->
     <script src="{{ asset('template') }}/plugins/jquery-datatable/jquery.dataTables.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
     <script src="{{ asset('template') }}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <script src="{{ asset('template') }}/js/pages/tables/jquery-datatable.js"></script>
@endpush

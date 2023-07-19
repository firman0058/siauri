<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong>Data Monitoring</strong>
                        <a href="{{ url('download') }}" target="_blank" class="btn btn-success float-right"><i
                                class="fas fa-fw fa-print"></i><strong> Unduh Data</strong></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Tanggal</th>
                                    <th style="text-align: center">Waktu</th>
                                    <th style="text-align: center">Suhu</th>
                                    <th style="text-align: center">Kelembaban Udara</th>
                                    <th style="text-align: center">Kelembaban Tanah</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_monitoring as $data)
                                        <tr>
                                            <td style="text-align: center">{{ $loop->iteration }}</td>
                                            <td style="text-align: center">{{ $data->tanggal }}</td>
                                            <td style="text-align: center">{{ $data->waktu }}</td>
                                            <td style="text-align: center">{{ $data->suhu }}℃</td>
                                            <td style="text-align: center">{{ $data->udara }} %</td>
                                            <td style="text-align: center">{{ $data->tanah }} %</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>

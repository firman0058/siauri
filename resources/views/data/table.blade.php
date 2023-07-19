<link href="css/sb-admin-2.min.css" rel="stylesheet">
<div class="table-responsive">
    <table id="dataTable" class="table table-striped table-bordered nowrap" width="100%">
        <thead>
            <th style="text-align: center">No</th>
            <th style="text-align: center">Tanggal</th>
            <th style="text-align: center">Waktu</th>
            <th style="text-align: center">Suhu</th>
            <th style="text-align: center">Udara</th>
            <th style="text-align: center">Tanah</th>
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

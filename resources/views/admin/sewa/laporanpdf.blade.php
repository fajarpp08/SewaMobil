<!DOCTYPE html>
<html>

<head>
    <title>Laporan sewa</title>
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
            font-size: 10pt;
            /* Ukuran font diperkecil */
        }
    </style>
</head>

<body>
    <div class="text-center">
        <h5 class="card-header" style="text-align: center;">Laporan Penyewaan</h5>

        <table>
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor SIM</th>
                    <th>Merek Mobil</th>
                    <th>Model Mobil</th>
                    <th>Nomor Plat</th>
                    <th>Lama Sewa</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($sewas as $sewa)
                    <tr class="text-center">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="table-cell">
                            @if ($sewa->user)
                                {{ $sewa->user->nama }}
                            @else
                                nama tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($sewa->user)
                                {{ $sewa->user->nosim }}
                            @else
                                nosim tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($sewa->mobil)
                                {{ $sewa->mobil->merek }}
                            @else
                                merk tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($sewa->mobil)
                                {{ $sewa->mobil->model }}
                            @else
                                merk tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($sewa->mobil)
                                {{ $sewa->mobil->noplat }}
                            @else
                                noplat tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">{{ \Carbon\Carbon::parse($sewa->tgl_mulai)->isoFormat('DD MMMM') }}
                            -
                            {{ \Carbon\Carbon::parse($sewa->tgl_akhir)->isoFormat('DD MMMM YYYY') }}</td>
                        <td class="table-cell">{{ $sewa->total_harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

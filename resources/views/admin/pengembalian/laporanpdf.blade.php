<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pengembalian</title>
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
        <h5 class="card-header" style="text-align: center;">Laporan Pengembalian</h5>

        <table>
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor SIM</th>
                    <th>Merek Mobil</th>
                    <th>Model Mobil</th>
                    <th>Nomor Plat</th>
                    <th>Tanggal Kembali</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($pengembalians as $pengembalian)
                    <tr class="text-center">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="table-cell">
                            @if ($pengembalian->sewa && $pengembalian->sewa->user)
                                {{ $pengembalian->sewa->user->nama }}
                            @else
                                Data tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($pengembalian->sewa && $pengembalian->sewa->user)
                                {{ $pengembalian->sewa->user->nosim }}
                            @else
                                Data tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($pengembalian->sewa && $pengembalian->sewa->mobil)
                                {{ $pengembalian->sewa->mobil->merek }}
                            @else
                                Data tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($pengembalian->sewa && $pengembalian->sewa->mobil)
                                {{ $pengembalian->sewa->mobil->model }}
                            @else
                                Data tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            @if ($pengembalian->sewa && $pengembalian->sewa->mobil)
                                {{ $pengembalian->sewa->mobil->noplat }}
                            @else
                                Data tidak ditemukan
                            @endif
                        </td>
                        <td class="table-cell">
                            {{ \Carbon\Carbon::parse($pengembalian->tgl_kembali)->isoFormat('DD MMMM YYYY') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

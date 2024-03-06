<html>

<head>
    <title> Detail Transaksi </title>
</head>
<h3>
    <center>Report Data Transaksi</center>
</h3>
<center>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>#ID</th>
            <th>Nama Barang</th>
            <th>Costumer</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Sub Total</th>
        </tr>
        @foreach ($cetak as $no => $hasil)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $hasil->barang_name->barang }}</td>
                <td>{{ $hasil->costumer_name->costumer }}</td>
                <td>{{ $hasil->jumlah }}</td>
                <td>Rp. {{ number_format($hasil->total_harga, 0, ',', '.') }}</td>
                <td>{{ $hasil->tanggal }}</td>
                <td>Rp. {{ number_format($hasil->total_harga * $hasil->jumlah, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
</center>
<br>
<p align="right">
    Tanggal: ......./Bulan : ......./Tahun .......<br><br><br><br><br>
    (........................................................)<br>
</p>

</html>

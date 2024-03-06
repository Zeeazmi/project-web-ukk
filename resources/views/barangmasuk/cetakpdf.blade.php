<html>

<head>
    <title> Detail Masuk Barang </title>
</head>
<h3>
    <center>Report Data Transaksi</center>
</h3>
<center>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>#ID</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($cetak as $no => $hasil)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $hasil->barang_name->barang }}</td>
                <td>{{ $hasil->jumlah }}</td>
                <td>{{ $hasil->tanggal }}</td>
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

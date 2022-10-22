<table class="table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Mata Kuliah </th>
        <th>Jumlah SKS</th>
    </tr>
  <?php
include "hubung.php";

$no=1;
$ambildata = mysqli_query($konek,"select * from matakuliah");
while($tampil = mysqli_fetch_array($ambildata)){
echo "
<tr>
    <td>$no</td>
    <td>$tampil[kode_matakuliah]</td>
    <td>$tampil[nama_matakuliah]</td>
    <td>$tampil[sks]</td>
<tr>";
$no++;
}
?>
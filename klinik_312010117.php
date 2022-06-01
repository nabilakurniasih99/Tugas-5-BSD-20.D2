<?php
$servername = "localhost";
$database = "klinik_312010117";
$username = "adminklinik";
$password = "312010117";
 
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    	$buka=mysqli_select_db($conn,$database);
	echo "Database dapat terhubung";
	if (!$buka){
	echo "Koneksi gagal";}
}else{
	echo "Koneksi gagal";}

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Users</h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama Lengkap</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['username'].'</td>
			<td>'.$row['password'].'</td>
			<td>'.$row['nama_lengkap'].'</td>
			</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM obat';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Obat </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Obat</th>
				<th>Nama Obat</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_obat'].'</td>
			<td>'.$row['nama_obat'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM resep_obat';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Resep Obat </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Resep</th>
				<th>ID Berobat</th>
				<th>ID Obat</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_resep'].'</td>
			<td>'.$row['id_berobat'].'</td>
			<td>'.$row['id_obat'].'</td>
			</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM berobat';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Berobat</h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Berobat</th>
				<th>ID Pasien</th>
				<th>ID Dokter</th>
				<th>Keluhan Pasien</th>
				<th>Hasil Diagnosa</th>
				<th>Penatalaksanaan</th>
				<th>Tanggal Berobat</th>
				</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_berobat'].'</td>
			<td>'.$row['id_pasien'].'</td>
			<td>'.$row['id_dokter'].'</td>
			<td>'.$row['keluhan_pasien'].'</td>
			<td>'.$row['hasil_diagnosa'].'</td>
			<td>'.$row['penatalaksanaan'].'</td>
			<td>'.$row['tgl_berobat'].'</td>
			</tr>';
}
echo '
		</tbody>
	</thead>
</table>';


$sql = 'SELECT * FROM dokter';
$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Dokter </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Dokter</th>
				<th>Nama dokter</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_dokter'].'</td>
			<td>'.$row['nama_dokter'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

$sql = 'SELECT * FROM pasien';
$result = mysqli_query($conn, $sql);


if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<h3> Tabel Pasien </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Pasien</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
			</tr>';
		
while ($row = mysqli_fetch_array($result))
{
	echo '<tr>
			<td>'.$row['id_pasien'].'</td>
			<td>'.$row['nama_pasien'].'</td>
			<td>'.$row['jenis_kelamin'].'</td>
			<td>'.$row['umur'].'</td>
		</tr>';
}
echo '
		</tbody>
	</thead>
</table>';

mysqli_free_result($result);

mysqli_close($conn);
?>


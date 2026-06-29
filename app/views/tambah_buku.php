<?php

require 'header.php';

require_once '../app/models/Category.php';

$category = new Category();

$kategori =
$category->getAll();

?>

<form
action="../app/controllers/BookController.php?action=create"
method="POST"
enctype="multipart/form-data">

<div class="mb-3">

<label>Judul</label>

<input
type="text"
name="judul"
class="form-control">

</div>

<div class="mb-3">

<label>Kategori</label>

<select
name="category_id"
class="form-control">

<?php foreach($kategori as $k): ?>

<option value="<?= $k['id']; ?>">
<?= $k['nama_kategori']; ?>
</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label>Penulis</label>

<input
type="text"
name="penulis"
class="form-control">

</div>

<div class="mb-3">

<label>Penerbit</label>

<input
type="text"
name="penerbit"
class="form-control">

</div>

<div class="mb-3">

<label>Tahun</label>

<input
type="number"
name="tahun_terbit"
class="form-control">

</div>

<div class="mb-3">

<label>Harga</label>

<input
type="number"
name="harga"
class="form-control">

</div>

<div class="mb-3">

<label>Stok</label>

<input
type="number"
name="stok"
class="form-control">

</div>

<div class="mb-3">

<label>Gambar</label>

<input
type="file"
name="gambar"
class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"></textarea>

</div>

<button
class="btn btn-success">

Simpan

</button>

</form>

<?php require 'footer.php'; ?>
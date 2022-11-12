<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

</div>
<!-- /.container-fluid -->
<form class="dokter" method="post" action="<?= base_url('Materi/editmateri2') ?>">
    <div class="form-group">
        <input type="hidden" class="form-control" id="id_materi" name="id_materi" value="<?php echo $materi['id_materi'];  ?>">

        <label for="nama">Nama Materi</label>
        <input type="text" class="form-control" id="nama_materi" name="nama_materi" value="<?php echo $materi['nama_materi'];  ?>">
        <label for="link">Link Materi</label>
        <input type="text" class="form-control" id="link_materi" name="link_materi" value="<?php echo $materi['link_materi'];  ?>">
        <label for="id_ipk">IPK</label>

        <select id="inputState" class="form-control" name="id_ipk">
            <?php
            foreach ($ipk_only as $j) {
                if ($j['id_ipk'] == $materi['id_ipk']) {
                    echo "<option value='" . $j['id_ipk'] . "' selected>" . $j['nama_ipk'] . "</option>";
                } else {
                    echo "<option value='" . $j['id_ipk'] . "'>" . $j['nama_ipk'] . "</option>";
                }
            }
            ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>


</div>
<!-- End of Main Content -->
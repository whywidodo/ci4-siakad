<table class="table table-bordered table-sm display nowrap" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($datasiswa as $d_siswa) :
        ?>
            <tr>
                <td class="text-center"><?= $i++; ?></td>
                <td><?= $d_siswa['nis']; ?></td>
                <td><?= $d_siswa['nama']; ?></td>
                <td><?= $d_siswa['gender']; ?></td>
                <td><?= $d_siswa['alamat']; ?></td>
                <td><?= $d_siswa['kelas']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
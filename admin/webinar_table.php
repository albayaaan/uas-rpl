<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Webinar</h1>
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Webinar
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Topik</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>Harga</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Topik</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>Harga</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        include "connect.php";
                        $i = 1;
                        $sql = "SELECT * FROM webinar";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['topik'] ?></td>
                                <td><?= $row['jam'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary bi bi-pencil"></a>
                                    <a href="" class="btn btn-danger bi bi-trash"></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
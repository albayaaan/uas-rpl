<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Konseling</h1>
        <!-- alert -->
        <?php
        if (isset($_SESSION["message"])) {
            if (isset($_SESSION["success"])) {
        ?>
                <div class="container-fluid alert alert-primary mt-2" role="alert">
                    <?= $_SESSION["message"]; ?>
                </div>
            <?php
                unset($_SESSION["success"]);
            } else {
            ?>
                <div class="container-fluid alert alert-danger mt-2" role="alert">
                    <?= $_SESSION["message"]; ?>
                </div>
        <?php
            }
        }
        unset($_SESSION["message"]);
        ?>
        <!-- end alert -->
        <div class="card mt-2">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Konseling
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Paket</th>
                            <th>Harga</th>
                            <th>Poster</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Paket</th>
                            <th>Harga</th>
                            <th>Poster</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        include "connect.php";
                        $i = 1;
                        $sql = "SELECT * FROM konseling ORDER BY id DESC";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['paket'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['poster'] ?></td>
                                <td class="text-center">
                                    <a href="app_admin.php?page=page_edit_konseling&id=<?= $row['id'] ?>" class="btn btn-primary bi bi-pencil"></a>
                                    <a href="delete_konseling.php?id=<?= $row['id'] ?>" class="btn btn-danger bi bi-trash"></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
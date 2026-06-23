<?php
include "01_nav.php";
include_once "../config/koneksi.php";
error_reporting(0);

$year = date('Y');
$message = '';

function getYearCondition($kon, $table, $year)
{
    $check = mysqli_query($kon, "SHOW COLUMNS FROM `$table` LIKE 'tahun_pendaftaran'");
    if ($check && mysqli_num_rows($check) > 0) {
        return "tahun_pendaftaran = '$year'";
    }

    return "YEAR(tanggal_daftar) = '$year'";
}

function getCount($kon, $table, $field, $year)
{
    $where = getYearCondition($kon, $table, $year);
    $where .= " AND status='Sudah Membayar' AND `$field` != 'Lulus'";
    $query = mysqli_query($kon, "SELECT COUNT(*) AS jumlah FROM `$table` WHERE $where");
    $row = mysqli_fetch_assoc($query);
    return $row ? intval($row['jumlah']) : 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['action'])) {
    $actions = [
        'prestasi' => [
            'table' => 'tb_formulir3',
            'field' => 'status_pmdp',
            'label' => 'SPMB Prestasi',
        ],
        'mandiri1' => [
            'table' => 'tb_formulir5',
            'field' => 'status_kelulusan_2',
            'label' => 'SPMB Mandiri 1 Pilihan',
        ],
        'mandiri2' => [
            'table' => 'tb_formulir4',
            'field' => 'status_lulus_2',
            'label' => 'SPMB Mandiri 2 Pilihan',
        ],
    ];

    $action = $_POST['action'];

    if (isset($actions[$action])) {
        $target = $actions[$action];
        $where = getYearCondition($GLOBALS['kon'], $target['table'], $year);
        $where .= " AND status='Sudah Membayar' AND `{$target['field']}` != 'Lulus'";
        $sql = "UPDATE `{$target['table']}` SET `{$target['field']}` = 'Tidak Lulus' WHERE $where";
        $result = mysqli_query($GLOBALS['kon'], $sql);

        if ($result) {
            $count = mysqli_affected_rows($GLOBALS['kon']);
            $message = "Berhasil memperbarui $count pendaftar $target[label] tahun $year menjadi Tidak Lulus.";
        } else {
            $message = "Gagal memperbarui data untuk $target[label]. Error: " . mysqli_error($GLOBALS['kon']);
        }
    } else {
        $message = 'Aksi tidak dikenal.';
    }
}

$prestasiCount = getCount($GLOBALS['kon'], 'tb_formulir3', 'status_pmdp', $year);
$mandiri1Count = getCount($GLOBALS['kon'], 'tb_formulir5', 'status_lulus', $year);
$mandiri2Count = getCount($GLOBALS['kon'], 'tb_formulir4', 'status_lulus', $year);
?>

<aside class="right-side">
    <section class="content-header">
        <h1>Set Semua Pendaftar Tahun Ini Tidak Lulus</h1>
        <p>Gunakan tombol di bawah untuk menandai semua pendaftar tahun ini sebagai "Tidak Lulus" sesuai jalur.</p>

        <?php if (!empty($message)): ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>

        <div class="row" style="margin-bottom:20px;">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">SPMB Prestasi</div>
                    <div class="panel-body">
                        <p>Jumlah pendaftar tahun <?php echo $year; ?>: <strong><?php echo $prestasiCount; ?></strong>
                        </p>
                        <form method="post"
                            onsubmit="return confirm('Yakin ingin menjadikan semua pendaftar SPMB Prestasi tahun ini tidak lulus?');">
                            <input type="hidden" name="action" value="prestasi">
                            <button type="submit" class="btn btn-danger btn-block">Set Tidak Lulus
                                (tb_formulir3)</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">SPMB Mandiri 1 Pilihan</div>
                    <div class="panel-body">
                        <p>Jumlah pendaftar tahun <?php echo $year; ?>: <strong><?php echo $mandiri1Count; ?></strong>
                        </p>
                        <form method="post"
                            onsubmit="return confirm('Yakin ingin menjadikan semua pendaftar SPMB Mandiri 1 Pilihan tahun ini tidak lulus?');">
                            <input type="hidden" name="action" value="mandiri1">
                            <button type="submit" class="btn btn-danger btn-block">Set Tidak Lulus
                                (tb_formulir5)</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">SPMB Mandiri 2 Pilihan</div>
                    <div class="panel-body">
                        <p>Jumlah pendaftar tahun <?php echo $year; ?>: <strong><?php echo $mandiri2Count; ?></strong>
                        </p>
                        <form method="post"
                            onsubmit="return confirm('Yakin ingin menjadikan semua pendaftar SPMB Mandiri 2 Pilihan tahun ini tidak lulus?');">
                            <input type="hidden" name="action" value="mandiri2">
                            <button type="submit" class="btn btn-danger btn-block">Set Tidak Lulus
                                (tb_formulir4)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-info">
            <strong>Catatan:</strong> Status yang diperbarui:
            <ul>
                <li>SPMB Prestasi =&gt; <code>tb_formulir3.status_pmdp</code></li>
                <li>SPMB Mandiri 1 Pilihan =&gt; <code>tb_formulir5.status_lulus</code></li>
                <li>SPMB Mandiri 2 Pilihan =&gt; <code>tb_formulir4.status_lulus</code></li>
            </ul>
            Kondisi tahun menggunakan kolom <code>tahun_pendaftaran</code> jika ada, atau <code>tanggal_daftar</code>
            untuk fallback.
        </div>
    </section>
</aside>
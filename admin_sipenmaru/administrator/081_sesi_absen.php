<?php
include "01_nav.php";
?>
<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <div class="row mb-2">
                <tr class="info">
                    <td align="left" colspan="6"><b>
                            <h4>Cetak Absensi Peserta SPMB 2 Pilihan Mandiri
                        </b></h4>
                    </td>

                </tr>
                <?php
        // Daftar sesi ujian
        $sesi_list = [
            'Sesi 1 Pukul 08.00 - 09.30 WIB',
            'Sesi 2 Pukul 10.00 - 11.30 WIB',
            'Sesi 3 Pukul 13.00 - 14.30 WIB',
            'Sesi 4 Pukul 08.00 - 09.30 WIB',
            'Sesi 5 Pukul 10.00 - 11.30 WIB',
            'Sesi 6 Pukul 13.00 - 14.30 WIB',
            'Sesi 7 Pukul 08.00 - 09.30 WIB',
            'Sesi 8 Pukul 10.00 - 11.30 WIB',
            'Sesi 9 Pukul 13.00 - 14.30 WIB',
        ];

        require_once("../config/koneksi.php");
        error_reporting(E_ALL);
        ini_set('display_errors', 0);

        foreach ($sesi_list as $label) {
            // Hitung jumlah di tb_formulir4
            $query4 = mysqli_query($kon, "SELECT COUNT(*) as jumlah FROM tb_formulir4 WHERE sesi_ujian='$label' AND tahun_pendaftaran = YEAR(CURDATE())");
            $row4 = mysqli_fetch_assoc($query4);
            $jumlah4 = $row4['jumlah'];

            // Hitung jumlah di tb_formulir5
            $query5 = mysqli_query($kon, "SELECT COUNT(*) as jumlah FROM tb_formulir5 WHERE sesi_ujian='$label' AND tahun_pendaftaran = YEAR(CURDATE())");
            $row5 = mysqli_fetch_assoc($query5);
            $jumlah5 = $row5['jumlah'];

            $jumtot = $jumlah4 + $jumlah5;

            echo '<div style="display:inline-block; margin-right:10px; margin-bottom:5px;">'
                . '<a href="081_cetak_sesi_absen.php?sesi='.urlencode($label).'&tab=tb_formulir4" class="btn btn-info">'
                . htmlspecialchars($label) . ': ' . $jumtot .
                 '</a>'
                . '<a href="081_cetak_sesi_credentials.php?sesi='.urlencode($label).'" target="_blank" class="btn btn-warning" style="margin-left:5px;">Cetak User/Pass</a>'
                . '</div>';
        }
        ?>
            </div>


    </section>
</aside>
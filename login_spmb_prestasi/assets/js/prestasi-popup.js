// ============================================
// NOTIFIKASI SETELAH HAPUS
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    // Ambil parameter status dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    
    if (status === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Dihapus!',
            text: 'Data prestasi berhasil dihapus dari sistem',
            confirmButtonColor: '#28a745',
            confirmButtonText: '<i class="fa fa-check"></i> OK',
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                confirmButton: 'btn btn-success'
            },
            buttonsStyling: false
        }).then(() => {
            // Hapus parameter status dari URL
            window.history.replaceState({}, document.title, '04_upload_prestasi.php');
        });
    } else if (status === 'error') {
        Swal.fire({
            icon: 'error',
            title: 'Gagal Menghapus!',
            text: 'Data prestasi gagal dihapus. Silakan coba lagi.',
            confirmButtonColor: '#d33',
            confirmButtonText: '<i class="fa fa-times"></i> OK',
            customClass: {
                confirmButton: 'btn btn-danger'
            },
            buttonsStyling: false
        }).then(() => {
            // Hapus parameter status dari URL
            window.history.replaceState({}, document.title, '04_upload_prestasi.php');
        });
    }
});

// ============================================
// FUNGSI KONFIRMASI HAPUS
// ============================================
function konfirmasiHapus(id, nama) {
    Swal.fire({
        title: 'Hapus Data Prestasi?',
        html: `Apakah Anda yakin ingin menghapus:<br><strong>${nama}</strong>`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: '<i class="fa fa-trash"></i> Ya, Hapus!',
        cancelButtonText: '<i class="fa fa-times"></i> Batal',
        reverseButtons: true,
        focusCancel: true,
        customClass: {
            confirmButton: 'btn btn-danger btn-lg',
            cancelButton: 'btn btn-secondary btn-lg'
        },
        buttonsStyling: false,
        allowOutsideClick: false,
        allowEscapeKey: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Tampilkan loading saat proses hapus
            Swal.fire({
                title: 'Menghapus...',
                html: 'Mohon tunggu sebentar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            
            // Redirect ke halaman delete
            window.location.href = '04_delete_prestasi.php?id=' + id;
        }
    });
}
// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable({
    scrollX: true,
    "language": {
      "lengthMenu": "Menampilkan _MENU_ data",
      "zeroRecords": "Data tidak ditemukan ...",
      "info": "Halaman _PAGE_ dari _PAGES_",
      "infoFiltered": "(dari _MAX_ data keseluruhan)",
      "infoEmpty": "Tidak ada data yang tersedia",
      "search": "Cari:",
      "paginate": {
        "first": "Pertama",
        "last": "Terakhir",
        "next": "Selanjutnya",
        "previous": "Sebelumnya"
      }
    }
  });
});

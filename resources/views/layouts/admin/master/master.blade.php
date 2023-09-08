<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicon.png">
    <link href="{{ asset('dist/vendor/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">

    <!-- bs icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assetsusers/css/my.apm.css') }}">
    
    <script src="https://cdn.tiny.cloud/1/wqyi5vc0q3u1deozo91qz64uc8d7qarn49jiradhfuygyuda/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
 <body>

    
@yield('content')
  
  
<!--search data-->
<script>
  // Ambil elemen input pencarian dan tabel
  var searchInput = document.getElementById('search');
  var table = document.getElementById('data-table');

  // Tambahkan event listener untuk input pencarian
  searchInput.addEventListener('input', function() {
      var searchTerm = searchInput.value.toLowerCase();
      var rows = table.querySelectorAll('tbody tr');

      rows.forEach(function(row) {
          var cells = row.querySelectorAll('td');
          var found = false;

          cells.forEach(function(cell) {
              var text = cell.textContent.toLowerCase();

              if (text.includes(searchTerm)) {
                  found = true;
              }
          });

          if (found) {
              row.style.display = ''; // Tampilkan baris jika ditemukan
          } else {
              row.style.display = 'none'; // Sembunyikan baris jika tidak ditemukan
          }
      });
  });
</script>


<!--Filter by category and by status-->
<script>
  // Ambil elemen select filter status dan filter kategori
  const filterStatus = document.getElementById('filter-by-status');
  const filterCategory = document.getElementById('filter-by-category');

  // Ambil tabel dan semua baris dalam tabel
  const table = document.getElementById('laporan-table');
  const rows = table.querySelectorAll('tbody tr');

  // Simpan data asli tabel
  const originalData = Array.from(rows).map(row => ({
      row: row,
      display: row.style.display,
  }));

  // Tambahkan event listener untuk perubahan pada filter status dan filter kategori
  filterStatus.addEventListener('change', filterTable);
  filterCategory.addEventListener('change', filterTable);

  function filterTable() {
      const selectedStatus = filterStatus.value;
      const selectedCategory = filterCategory.value;

      // Loop melalui semua baris dalam tabel
      originalData.forEach(data => {
          const statusCell = data.row.querySelector('#status');
          const categoryCell = data.row.querySelector('td:nth-child(4)'); // Ganti dengan indeks kolom kategori yang sesuai

          // Jika tidak ada yang dipilih atau status dan kategori cocok dengan yang dipilih, tampilkan baris
          if (
              (selectedStatus === '' || statusCell.textContent.includes(selectedStatus)) &&
              (selectedCategory === '' || categoryCell.textContent === selectedCategory)
          ) {
              data.row.style.display = data.display;
          } else {
              data.row.style.display = 'none';
          }
      });
  }
</script>

  

<!-- wsi-->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
  });
</script>

<!--Scripts-->
 <!-- Required vendors -->
 <script src="{{ asset('dist/vendor/global/global.min.js') }}"></script>
 <script src="{{ asset('dist/js/quixnav-init.js') }}"></script>
 <script src="{{ asset('dist/js/custom.min.js') }}"></script>

 <script src="{{ asset('dist/vendor/chartist/js/chartist.min.js') }}"></script>

 <script src="{{ asset('dist/vendor/moment/moment.min.js') }}"></script>
 <script src="{{ asset('dist/vendor/pg-calendar/js/pignose.calendar.min.js') }}"></script>


 <script src="{{ asset('dist/js/dashboard/dashboard-2.js') }}"></script>
 <!-- Circle progress -->


  <!-- Jquery Validation -->
  <script src="{{ asset('dist/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
  <!-- -------- -->

  <!-- Form validate init -->
  <script src="{{ asset('dist/js/plugins-init/jquery.validate-init.js') }}"></script>

</body>

</html>
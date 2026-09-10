 @section('title','Data Jurusan')
 @extends('layout.app')
 @section('content')

<div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Data Jurusan</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Jurusan</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
</div>
<div class="app-content">
          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 16rem">
                    <span class="input-group-text">
                      <i class="bi bi-search" aria-hidden="true"></i>
                    </span>
                    <input
                      id="table-filter"
                      type="search"
                      class="form-control"
                      placeholder="Filter rows&hellip;"
                      aria-label="Filter rows"
                    />
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex gap-2 mb-3">
                  <button id="export-csv" type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-filetype-csv me-1" aria-hidden="true"></i>
                    Export CSV
                  </button>
                  <button id="export-json" type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-filetype-json me-1" aria-hidden="true"></i>
                    Export JSON
                  </button>
                  <button id="print-table" type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-printer me-1" aria-hidden="true"></i>
                    Print
                  </button>
                </div>
                <div id="users-table">
                   
                </div>
              </div>
              <div class="card-footer text-secondary small">
                Powered by
                <a href="https://tabulator.info/" target="_blank" rel="noopener">Tabulator</a>
                &mdash; vanilla JS, no jQuery required.
              </div>
            </div>
          </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        const table = new Tabulator('#users-table', {

            // Data dari database Laravel
            ajaxURL: "{{ route('data_jurusan.json') }}",

            layout: 'fitColumns',

            pagination: true,
            paginationSize: 10,
            paginationSizeSelector: [10, 25, 50, 100],

            movableColumns: true,

            columns: [

                // ID
                {
                    title: '#',
                    field: 'id_data',
                    width: 60,
                    headerSort: true
                },

                // NAMA
                {
                    title: 'Nama Jurusan',
                    field: 'nama_jurusan',

                    // INI yang membuat kotak pencarian di bawah Nama
                    headerFilter: 'input',

                    headerSort: true
                },

                // ALAMAT
                {
                    title: 'Deskripsi Jurusan',
                    field: 'deskripsi_jurusan',

                    // Kotak pencarian di bawah Alamat
                    headerFilter: 'input',

                    headerSort: true
                },

                // TANGGAL
                // {
                //     title: 'Tanggal',
                //     field: 'tanggal',

                //     // Kotak filter tanggal
                //     headerFilter: 'input',

                //     headerSort: true,

                //     sorter: 'date'
                // },
                {
    title: 'Action',
    field: 'action',
    width: 180,
    hozAlign: 'center',
    headerSort: false,

    formatter: function(cell) {

        const id = cell.getRow().getData().id_data;

        return `
            <a href="/edit/${id}"
               class="btn btn-sm btn-primary">
                Edit
            </a>

            <a href="/delete/${id}"
               class="btn btn-sm btn-danger"
               onclick="return confirm('Yakin ingin menghapus data ini?')">
                Delete
            </a>
        `;
    }
}
            ]
        });


        /*
        |--------------------------------------------------------------------------
        | SEARCH UTAMA
        |--------------------------------------------------------------------------
        */

        const search =
            document.getElementById('table-filter');

        if (search) {

            search.addEventListener('input', function (e) {

                const value = e.target.value.trim();

                if (value !== '') {

                    table.setFilter([
                        [
                            {
                                field: 'nama_jurusan',
                                type: 'like',
                                value: value
                            },

                            {
                                field: 'deskripsi_jurusan',
                                type: 'like',
                                value: value
                            }
                        ]
                    ]);

                } else {

                    table.clearFilter();

                }

            });

        }


        /*
        |--------------------------------------------------------------------------
        | EXPORT CSV
        |--------------------------------------------------------------------------
        */

        const exportCSV =
            document.getElementById('export-csv');

        if (exportCSV) {

            exportCSV.addEventListener('click', function () {

                table.download(
                    'csv',
                    'data-jurusan.csv'
                );

            });

        }


        /*
        |--------------------------------------------------------------------------
        | EXPORT JSON
        |--------------------------------------------------------------------------
        */

        const exportJSON =
            document.getElementById('export-json');

        if (exportJSON) {

            exportJSON.addEventListener('click', function () {

                table.download(
                    'json',
                    'data-jurusan.json'
                );

            });

        }


        /*
        |--------------------------------------------------------------------------
        | PRINT
        |--------------------------------------------------------------------------
        */

        const printTable =
            document.getElementById('print-table');

        if (printTable) {

            printTable.addEventListener('click', function () {

                table.print(false, true);

            });

        }

    });
</script>
 @endsection
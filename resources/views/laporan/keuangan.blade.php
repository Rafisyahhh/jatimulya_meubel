@extends('layouts.app')
@section('judul', 'Jual/Beli | Jatimulya Mebel')
@section('content')
    <link rel="shortcut icon" href="{{ asset('dist-template/assets/compiled/svg/favicon.svg" type="image/x-icon') }}">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">
    <link rel="stylesheet" href="{{ asset('dist-template/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-template/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-template/assets/compiled/css/iconly.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <div class="page-heading">
        <h3 style="color: #960404">Jual/Beli</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Jual/Beli</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                            role="tab" aria-controls="home" aria-selected="true">Pembelian</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                            role="tab" aria-controls="profile" aria-selected="false">Penjualan</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive" id="home">
                        <table class="table" id="pembelianTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Tanggal Beli</th>
                                    <th>Harga Total</th>
                                    <th><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#beliModal">Export Excel</button></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_masuk as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->barang->nama_barang }}</td>
                                        <td>{{ $item->barang->jenis_barang }}</td>
                                        <td>Rp {{ number_format($item->barang->harga_barang, 0, ',', '.') }}</td>
                                        <td>{{ $item->stok_masuk }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->tanggal_masuk)->isoFormat('D MMMM YYYY') }}</td>
                                        <td>Rp {{ number_format($item->harga_total, 0, ',', '.') }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive" id="profile">
                        <table class="table" id="penjualanTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Tanggal Jual</th>
                                    <th>Harga Total</th>
                                    <th><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#jualModal">Export Excel</button></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_keluar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->barang->nama_barang }}</td>
                                        <td>{{ $item->barang->jenis_barang }}</td>
                                        <td>Rp {{ number_format($item->barang->harga_barang, 0, ',', '.') }}</td>
                                        <td>{{ $item->stok_keluar }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->tanggal_keluar)->isoFormat('D MMMM YYYY') }}
                                        </td>
                                        <td>Rp {{ number_format($item->harga_total, 0, ',', '.') }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Filter for Pembelian -->
        <div class="modal fade text-left" id="beliModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel33">Filter Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="filterType" class="form-label">Filter Tipe</label>
                            <select id="filterType" class="form-select" onchange="handleFilterChange(this.value)">
                                <option value="all">Semua Transaksi</option>
                                <option value="date">Berdasarkan Tanggal</option>
                            </select>
                        </div>
                        <div id="dateFilterContainer" class="mb-3" style="display: none;">
                            <label for="filterDate" class="form-label">Pilih Tanggal</label>
                            <input type="date" id="filterDate" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            onclick="applyFilter('pembelian')">Export</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Filter for Penjualan -->
        <div class="modal fade text-left" id="jualModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel33">Filter Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="filterType" class="form-label">Filter Tipe</label>
                            <select id="filterType" class="form-select" onchange="handleFilterChange(this.value)">
                                <option value="all">Semua Transaksi</option>
                                <option value="date">Berdasarkan Tanggal</option>
                            </select>
                        </div>
                        <div id="dateFilterContainer" class="mb-3" style="display: none;">
                            <label for="filterDate" class="form-label">Pilih Tanggal</label>
                            <input type="date" id="filterDate" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            onclick="applyFilter('penjualan')">Export</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the JS script -->
    <script>
        const originalPembelianData = @json($barang_masuk);
        const originalPenjualanData = @json($barang_keluar);

        function handleFilterChange(value) {
            const dateFilterContainer = document.getElementById('dateFilterContainer');
            const filterDate = document.getElementById('filterDate');

            if (value === 'all') {
                dateFilterContainer.style.display = 'none';
                filterDate.value = '';
            } else {
                dateFilterContainer.style.display = 'block';
                filterDate.value = new Date().toISOString().split('T')[0];
            }
        }

        function applyFilter(type) {
            const filterDate = document.getElementById('filterDate').value;
            const filterType = document.getElementById('filterType').value;
            let filteredData;

            if (type === 'pembelian') {
                filteredData = originalPembelianData.filter(item => {
                    const reservationDate = new Date(item.tanggal_masuk).toISOString().split('T')[0];
                    return filterType === 'all' || reservationDate === filterDate;
                });
            } else {
                filteredData = originalPenjualanData.filter(item => {
                    const reservationDate = new Date(item.tanggal_keluar).toISOString().split('T')[0];
                    return filterType === 'all' || reservationDate === filterDate;
                });
            }

            // Prepare data for export
            const exportData = filteredData.map((item, index) => ({
                'No': index + 1,
                'Nama Barang': item.barang.nama_barang || 'N/A',
                'Jenis Barang': item.barang.jenis_barang || 'N/A',
                'Harga Barang': `Rp ${parseInt(item.barang.harga_barang || 0).toLocaleString('id-ID')}`,
                'Jumlah Barang': item.stok_masuk || item.stok_keluar,
                'Tanggal': type === 'pembelian' ? new Date(item.tanggal_masuk).toLocaleDateString('id-ID') :
                    new Date(item.tanggal_keluar).toLocaleDateString('id-ID'),
                'Harga Total': `Rp ${parseInt(item.harga_total || 0).toLocaleString('id-ID')}`
            }));

            if (exportData.length === 0) {
                alert('Tidak ada data untuk diekspor');
                return;
            }

            // Export to Excel
            const worksheet = XLSX.utils.json_to_sheet(exportData);
            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, filterType === 'all' ? 'Semua Transaksi' :
                `Transaksi ${filterDate}`);
            XLSX.writeFile(workbook, filterType === 'all' ? 'Semua_Transaksi.xlsx' : `Transaksi_${filterDate}.xlsx`);
        }

        // Load XLSX library dynamically
        document.addEventListener('DOMContentLoaded', () => {
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js';
            document.head.appendChild(script);
        });
    </script>
@endsection

@extends('layouts.app')
@section('judul', 'Transaksi | Jatimulya Mebel')
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
        <h3 style="color: #960404">Transaksi</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Transaksi
                    <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#tambahModal">Tambah</button>
                </h4>
            </div>
            <!-- table head dark -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Harga Barang</th>
                            <th>Jumlah Beli</th>
                            <th>Tanggal Beli</th>
                            <th>Harga Total</th>
                            <th>No Transaksi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->barang->nama_barang }}</td>
                                <td>{{ $item->barang->jenis_barang }}</td>
                                <td>Rp {{ number_format($item->barang->harga_barang, 0, ',', '.') }}</td>
                                <td>{{ $item->jumlah_beli }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_beli)->isoFormat('D MMMM YYYY') }}</td>
                                <td>Rp {{ number_format($item->harga_total, 0, ',', '.') }}</td>
                                <td>{{ $item->no_transaksi }}</td>
                                <td class="d-flex gap-2">
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $item->id }}"><i
                                        class="bi bi-pencil" style="color: #fff"></i></button>
                                    <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST"
                                        id="deleteForm-{{ $item->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="confirmDelete({{ $item->id }})"
                                            class="btn btn-sm btn-danger fw-bold" type="button">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-sm btn-info"
                                        onclick="printReceipt({{ $item->id }})">
                                        <i class="bi bi-printer" style="color: #fff"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- Modal Tambah -->
    <div class="modal fade text-left" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Tambah Transaksi</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('transaksi.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <label for="alamat">Nama Pelanggan: </label>
                        <div class="form-group">
                            <input id="alamat" name="nama_pelanggan" value="{{ old('name') }}" type="text"
                                placeholder="Masukkan Nama Pelanggan" class="form-control">
                        </div>
                        <label for="alamat">Alamat: </label>
                        <div class="form-group">
                            <textarea id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat Pelanggan" class="form-control">{{ old('alamat') }}</textarea>
                        </div>
                        <label for="alamat">No HP: </label>
                        <div class="form-group">
                            <input id="alamat" name="no_hp" value="{{ old('no_hp') }}" type="text"
                                placeholder="Masukkan No HP" class="form-control">
                        </div>
                        <label for="alamat">Pilih Barang: </label>
                        <div class="form-group">
                            <select name="barang_id" class="form-select" id="basicSelect">
                                <option>Pilih Barang</option>
                                @foreach ($barang as $b)
                                    <option value="{{ $b->id }}"
                                        {{ old('barang_id') == $b->id ? 'selected' : '' }}>
                                        {{ $b->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <label for="alamat">Jumlah Beli: </label>
                        <div class="form-group">
                            <input id="alamat" name="jumlah_beli" value="{{ old('jumlah_beli') }}" type="text"
                                placeholder="Masukkan Jumlah Beli" class="form-control">
                        </div>
                        <label for="deskripsi">Tanggal Beli: </label>
                        <div class="form-group">
                            <input id="alamat" name="tanggal_beli" value="{{ old('tanggal_beli') }}" type="date"
                                placeholder="Masukkan Tanggal Beli" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal ubah -->
    @foreach ($transaksi as $item)
        <div class="modal fade text-left" id="modalEdit{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Ubah Transaksi</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="{{ route('transaksi.update', $item->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <label for="alamat">Nama Pelanggan: </label>
                            <div class="form-group">
                                <input id="alamat" name="nama_pelanggan" value="{{ $item->nama_pelanggan }}"
                                    type="text" placeholder="Masukkan Status Penduduk" class="form-control">
                            </div>
                            <label for="alamat">Alamat: </label>
                            <div class="form-group">
                                <textarea id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat Pelanggan"
                                    class="form-control">{{ $item->alamat }}</textarea>
                            </div>
                            <label for="alamat">No HP: </label>
                            <div class="form-group">
                                <input id="alamat" name="no_hp" value="{{ $item->no_hp }}" type="text"
                                    placeholder="Masukkan No HP" class="form-control">
                            </div>
                            <label for="alamat">Pilih Barang: </label>
                            <div class="form-group">
                                <select name="barang_id" class="form-select" id="basicSelect" disabled>
                                    <option>Pilih Barang</option>
                                    @foreach ($barang as $b)
                                        <option value="{{ $b->id }}"
                                            {{ $b->id == $item->barang_id ? 'selected' : '' }}>
                                            {{ $b->nama_barang }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="alamat">Jumlah Beli: </label>
                            <div class="form-group">
                                <input id="alamat" name="jumlah_beli" value="{{ $item->jumlah_beli }}"
                                    type="text" placeholder="Masukkan Jumlah Beli" class="form-control">
                            </div>
                            <label for="deskripsi">Tanggal Beli: </label>
                            <div class="form-group">
                                <input id="alamat" name="tanggal_beli" value="{{ $item->tanggal_beli }}"
                                    type="text" placeholder="Masukkan Tanggal Beli" class="form-control">
                            </div>
                            <input type="hidden" name="barang_id" value="{{ $item->barang_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tutup</span>
                            </button>
                            <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ubah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script type="text/javascript">
        function printReceipt(id) {
            const transaksi = @json($transaksi);
            const selectedTransaksi = transaksi.find(item => item.id === id);

            if (!selectedTransaksi) {
                Swal.fire('Error', 'Data transaksi tidak ditemukan.', 'error');
                return;
            }

            const receiptContent = `
                <html>
                    <head>
                        <title>Struk Transaksi</title>
                        <style>
                            body { font-family: 'Arial', sans-serif; margin: 0; padding: 0; background: #f4f4f9; }
                            .container { width: 80mm; margin: auto; padding: 20px; background: #fff; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
                            .header { text-align: center; margin-bottom: 20px; }
                            .header img { max-width: 50px; }
                            .header h2 { margin: 5px 0; font-size: 18px; }
                            .header p { margin: 0; font-size: 12px; color: #555; }
                            .details { margin-bottom: 20px; }
                            .details table { width: 100%; border-collapse: collapse; }
                            .details td { padding: 5px 0; font-size: 14px; color: #333; }
                            .details td:first-child { font-weight: bold; }
                            .divider { margin: 20px 0; border-top: 1px dashed #bbb; }
                            .footer { text-align: center; font-size: 12px; color: #777; }
                            .footer p { margin: 5px 0; }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="header">
                                <img src="././images/header/logo2.jpg" alt="Logo">
                                <h2>Jatimulya Mebel</h2>
                                <p>Jl. Bromo No.7, Gurit, Babadan, Kec. Wlingi, Kabupaten Blitar, Jawa Timur 66184</p>
                                <p>Telp: 0852762824824</p>
                            </div>
                            <div class="details">
                                <table>
                                    <tr>
                                        <td>Nama Pelanggan</td>
                                        <td>: ${selectedTransaksi.nama_pelanggan}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>: ${selectedTransaksi.alamat}</td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td>: ${selectedTransaksi.no_hp}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>: ${selectedTransaksi.barang.nama_barang}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Barang</td>
                                        <td>: ${selectedTransaksi.barang.jenis_barang}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Barang</td>
                                        <td>: Rp ${selectedTransaksi.barang.harga_barang.toLocaleString('id-ID')}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Beli</td>
                                        <td>: ${selectedTransaksi.jumlah_beli}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Beli</td>
                                        <td>: ${selectedTransaksi.tanggal_beli}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Total</td>
                                        <td>: Rp ${selectedTransaksi.harga_total.toLocaleString('id-ID')}</td>
                                    </tr>
                                    <tr>
                                        <td>No Transaksi</td>
                                        <td>: ${selectedTransaksi.no_transaksi}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="divider"></div>
                            <div class="footer">
                                <p>Terima kasih telah berbelanja di Jatimulya Mebel</p>
                                <p>Semoga barang kami memberikan kenyamanan!</p>
                            </div>
                        </div>
                    </body>
                </html>
            `;

            const receiptWindow = window.open('', '_blank');
            receiptWindow.document.write(receiptContent);
            receiptWindow.document.close();
            receiptWindow.print();
        }
    </script>

    <script type="text/javascript">
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm-' + id).submit();
                }
            });
        }
    </script>
@endsection

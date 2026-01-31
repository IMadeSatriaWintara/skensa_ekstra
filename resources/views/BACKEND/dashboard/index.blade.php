@extends('BACKEND.Layout.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<!-- Stats Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-header">
            <span class="stat-title">Total Ekstrakurikuler</span>
            <div class="stat-icon blue">
                <i class="fas fa-book"></i>
            </div>
        </div>
        <div class="stat-value">24</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+12% dari bulan lalu</span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <span class="stat-title">Total Peserta</span>
            <div class="stat-icon green">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="stat-value">456</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+8% dari bulan lalu</span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <span class="stat-title">Total Pengajar</span>
            <div class="stat-icon orange">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
        </div>
        <div class="stat-value">18</div>
        <div class="stat-change">
            <i class="fas fa-minus"></i>
            <span>Tidak ada perubahan</span>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <span class="stat-title">Aktivitas Bulan Ini</span>
            <div class="stat-icon purple">
                <i class="fas fa-calendar-check"></i>
            </div>
        </div>
        <div class="stat-value">142</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+15% dari bulan lalu</span>
        </div>
    </div>
</div>

<!-- Content Cards -->
<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
    <!-- Recent Activities -->
    <div class="content-card">
        <div class="card-header">
            <h2 class="card-title">Aktivitas Terbaru</h2>
            <button class="btn btn-secondary">
                <i class="fas fa-filter"></i>
                Filter
            </button>
        </div>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <th style="padding: 12px; text-align: left; font-weight: 600; color: var(--text-gray); font-size: 14px;">Aktivitas</th>
                        <th style="padding: 12px; text-align: left; font-weight: 600; color: var(--text-gray); font-size: 14px;">Ekstrakurikuler</th>
                        <th style="padding: 12px; text-align: left; font-weight: 600; color: var(--text-gray); font-size: 14px;">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 12px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(37, 99, 235, 0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-user-plus" style="color: var(--primary-blue);"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 500; color: var(--text-dark);">Peserta Baru</div>
                                    <div style="font-size: 12px; color: var(--text-gray);">John Doe mendaftar</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 12px; color: var(--text-dark);">Futsal</td>
                        <td style="padding: 12px; color: var(--text-gray); font-size: 14px;">2 jam yang lalu</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 12px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(34, 197, 94, 0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check-circle" style="color: #22c55e;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 500; color: var(--text-dark);">Kegiatan Selesai</div>
                                    <div style="font-size: 12px; color: var(--text-gray);">Latihan Basket selesai</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 12px; color: var(--text-dark);">Basket</td>
                        <td style="padding: 12px; color: var(--text-gray); font-size: 14px;">5 jam yang lalu</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 12px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(249, 115, 22, 0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-calendar-alt" style="color: #f97316;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 500; color: var(--text-dark);">Jadwal Baru</div>
                                    <div style="font-size: 12px; color: var(--text-gray);">Jadwal baru ditambahkan</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 12px; color: var(--text-dark);">Pramuka</td>
                        <td style="padding: 12px; color: var(--text-gray); font-size: 14px;">1 hari yang lalu</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 12px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(168, 85, 247, 0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-image" style="color: #a855f7;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 500; color: var(--text-dark);">Foto Baru</div>
                                    <div style="font-size: 12px; color: var(--text-gray);">5 foto ditambahkan ke galeri</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 12px; color: var(--text-dark);">Paskibra</td>
                        <td style="padding: 12px; color: var(--text-gray); font-size: 14px;">2 hari yang lalu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="content-card">
        <div class="card-header">
            <h2 class="card-title">Aksi Cepat</h2>
        </div>
        
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <button class="btn btn-primary" style="width: 100%; justify-content: center;">
                <i class="fas fa-plus"></i>
                Tambah Ekstrakurikuler Baru
            </button>
            <button class="btn btn-secondary" style="width: 100%; justify-content: center;">
                <i class="fas fa-user-plus"></i>
                Tambah Peserta
            </button>
            <button class="btn btn-secondary" style="width: 100%; justify-content: center;">
                <i class="fas fa-calendar-plus"></i>
                Buat Jadwal Baru
            </button>
            <button class="btn btn-secondary" style="width: 100%; justify-content: center;">
                <i class="fas fa-file-export"></i>
                Export Laporan
            </button>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-color);">
            <h3 style="font-size: 16px; font-weight: 600; margin-bottom: 15px; color: var(--text-dark);">Ringkasan Hari Ini</h3>
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="color: var(--text-gray); font-size: 14px;">Kegiatan Hari Ini</span>
                    <span style="font-weight: 600; color: var(--text-dark);">8</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="color: var(--text-gray); font-size: 14px;">Peserta Hadir</span>
                    <span style="font-weight: 600; color: var(--text-dark);">342</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="color: var(--text-gray); font-size: 14px;">Tingkat Kehadiran</span>
                    <span style="font-weight: 600; color: #22c55e;">92%</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming Schedule -->
<div class="content-card">
    <div class="card-header">
        <h2 class="card-title">Jadwal Mendatang</h2>
        <button class="btn btn-secondary">
            <i class="fas fa-eye"></i>
            Lihat Semua
        </button>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-gray);">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px;">
                <div>
                    <h3 style="font-size: 18px; font-weight: 600; color: var(--text-dark); margin-bottom: 5px;">Futsal</h3>
                    <p style="font-size: 14px; color: var(--text-gray);">Lapangan Futsal A</p>
                </div>
                <span style="padding: 6px 12px; background: rgba(37, 99, 235, 0.1); color: var(--primary-blue); border-radius: 20px; font-size: 12px; font-weight: 600;">Aktif</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                <i class="fas fa-calendar" style="color: var(--text-gray);"></i>
                <span style="font-size: 14px; color: var(--text-dark);">Senin, 27 Jan 2025</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-clock" style="color: var(--text-gray);"></i>
                <span style="font-size: 14px; color: var(--text-dark);">15:00 - 17:00 WIB</span>
            </div>
        </div>

        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-gray);">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px;">
                <div>
                    <h3 style="font-size: 18px; font-weight: 600; color: var(--text-dark); margin-bottom: 5px;">Basket</h3>
                    <p style="font-size: 14px; color: var(--text-gray);">Lapangan Basket</p>
                </div>
                <span style="padding: 6px 12px; background: rgba(34, 197, 94, 0.1); color: #22c55e; border-radius: 20px; font-size: 12px; font-weight: 600;">Aktif</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                <i class="fas fa-calendar" style="color: var(--text-gray);"></i>
                <span style="font-size: 14px; color: var(--text-dark);">Selasa, 28 Jan 2025</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-clock" style="color: var(--text-gray);"></i>
                <span style="font-size: 14px; color: var(--text-dark);">14:00 - 16:00 WIB</span>
            </div>
        </div>

        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-gray);">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px;">
                <div>
                    <h3 style="font-size: 18px; font-weight: 600; color: var(--text-dark); margin-bottom: 5px;">Pramuka</h3>
                    <p style="font-size: 14px; color: var(--text-gray);">Aula Sekolah</p>
                </div>
                <span style="padding: 6px 12px; background: rgba(249, 115, 22, 0.1); color: #f97316; border-radius: 20px; font-size: 12px; font-weight: 600;">Aktif</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                <i class="fas fa-calendar" style="color: var(--text-gray);"></i>
                <span style="font-size: 14px; color: var(--text-dark);">Rabu, 29 Jan 2025</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-clock" style="color: var(--text-gray);"></i>
                <span style="font-size: 14px; color: var(--text-dark);">13:00 - 15:00 WIB</span>
            </div>
        </div>
    </div>
</div>
@endsection

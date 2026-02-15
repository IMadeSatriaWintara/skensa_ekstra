@extends('backend.layout.admin')
@section('content')
<style>
  .superadmin-page-title {
    font-weight: 700;
    color: #2d3748;
    font-size: 1.5rem;
    letter-spacing: -0.02em;
  }
  .superadmin-page-sub {
    color: #718096;
    font-size: 0.9rem;
    margin-top: 0.25rem;
  }
  .superadmin-stat-card {
    background: #fff;
    border-radius: 16px;
    padding: 1.5rem;
    height: 100%;
    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    border: 1px solid #e2e8f0;
    transition: box-shadow 0.2s, border-color 0.2s;
    position: relative;
    overflow: hidden;
  }
  .superadmin-stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
  }
  .superadmin-stat-card:hover {
    box-shadow: 0 10px 25px -5px rgba(0,0,0,0.08);
    border-color: #cbd5e0;
  }
  .superadmin-stat-card.card-1::before { background: linear-gradient(90deg, #6366f1, #8b5cf6); }
  .superadmin-stat-card.card-2::before { background: linear-gradient(90deg, #0d9488, #14b8a6); }
  .superadmin-stat-card.card-3::before { background: linear-gradient(90deg, #ea580c, #f59e0b); }
  .superadmin-stat-card.card-4::before { background: linear-gradient(90deg, #dc2626, #ef4444); }
  .superadmin-stat-card .stat-icon-wrap {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    font-size: 1.4rem;
  }
  .superadmin-stat-card.card-1 .stat-icon-wrap { background: #eef2ff; color: #6366f1; }
  .superadmin-stat-card.card-2 .stat-icon-wrap { background: #ccfbf1; color: #0d9488; }
  .superadmin-stat-card.card-3 .stat-icon-wrap { background: #ffedd5; color: #ea580c; }
  .superadmin-stat-card.card-4 .stat-icon-wrap { background: #fee2e2; color: #dc2626; }
  .superadmin-stat-card .stat-number {
    font-weight: 800;
    font-size: 2rem;
    line-height: 1.2;
    color: #1a202c;
    margin-bottom: 0.25rem;
  }
  .superadmin-stat-card .stat-label {
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 1rem;
  }
  .superadmin-stat-card .stat-link {
    font-size: 0.85rem;
    font-weight: 600;
    color: #475569;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
  }
  .superadmin-stat-card .stat-link:hover { color: #0f172a; }
  .superadmin-stat-card .stat-link i { font-size: 0.75rem; transition: transform 0.2s; }
  .superadmin-stat-card:hover .stat-link i { transform: translateX(4px); }
</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="superadmin-page-title m-0">Dashboard Super Admin</h1>
                    <p class="superadmin-page-sub m-0">Ringkasan data sistem ekstrakurikuler</p>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6 mb-4">
                    <div class="superadmin-stat-card card-1">
                        <div class="stat-icon-wrap">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <div class="stat-number">{{ $jumlahAkunEkstra ?? 0 }}</div>
                        <div class="stat-label">Akun Ekstra</div>
                        <a href="/akun" class="stat-link">Lihat akun <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="superadmin-stat-card card-2">
                        <div class="stat-icon-wrap">
                            <i class="ion ion-trophy"></i>
                        </div>
                        <div class="stat-number">{{ $jumlahPrestasi ?? 0 }}</div>
                        <div class="stat-label">Prestasi</div>
                        <a href="/prestasi" class="stat-link">Lihat prestasi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="superadmin-stat-card card-3">
                        <div class="stat-icon-wrap">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <div class="stat-number">{{ $jumlahBerita ?? 0 }}</div>
                        <div class="stat-label">Berita</div>
                        <a href="/newss" class="stat-link">Lihat berita <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="superadmin-stat-card card-4">
                        <div class="stat-icon-wrap">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <div class="stat-number">{{ $jumlahSuperAdmin ?? 0 }}</div>
                        <div class="stat-label">Akun Super Admin</div>
                        <a href="/admin_siekstra" class="stat-link">Lihat super admin <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

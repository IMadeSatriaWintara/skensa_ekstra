<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard') - Skensa Ekstra</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #2563eb;
            --dark-blue: #1e40af;
            --light-blue: #3b82f6;
            --bg-white: #ffffff;
            --bg-gray: #f8fafc;
            --text-dark: #1e293b;
            --text-gray: #64748b;
            --border-color: #e2e8f0;
            --sidebar-width: 260px;
            --header-height: 70px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-gray);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
        }

        .sidebar-brand i {
            font-size: 28px;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-section {
            margin-bottom: 30px;
        }

        .menu-section-title {
            padding: 10px 20px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .menu-item {
            display: block;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .menu-item:hover,
        .menu-item.active {
            background: rgba(255, 255, 255, 0.15);
            border-left-color: white;
            color: white;
        }

        .menu-item i {
            width: 24px;
            margin-right: 12px;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        /* Header */
        .header {
            height: var(--header-height);
            background: var(--bg-white);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-dark);
            cursor: pointer;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 10px 40px 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            width: 300px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-gray);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 15px;
            background: var(--bg-gray);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .user-profile:hover {
            background: var(--border-color);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .user-role {
            font-size: 12px;
            color: var(--text-gray);
        }

        /* Content Area */
        .content-wrapper {
            padding: 30px;
        }

        /* Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--bg-white);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .stat-title {
            font-size: 14px;
            color: var(--text-gray);
            font-weight: 500;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-icon.blue {
            background: rgba(37, 99, 235, 0.1);
            color: var(--primary-blue);
        }

        .stat-icon.green {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
        }

        .stat-icon.orange {
            background: rgba(249, 115, 22, 0.1);
            color: #f97316;
        }

        .stat-icon.purple {
            background: rgba(168, 85, 247, 0.1);
            color: #a855f7;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 5px;
        }

        .stat-change {
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .stat-change.positive {
            color: #22c55e;
        }

        .stat-change.negative {
            color: #ef4444;
        }

        /* Content Card */
        .content-card {
            background: var(--bg-white);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary-blue);
            color: white;
        }

        .btn-primary:hover {
            background: var(--dark-blue);
        }

        .btn-secondary {
            background: var(--bg-gray);
            color: var(--text-dark);
            border: 1px solid var(--border-color);
        }

        .btn-secondary:hover {
            background: var(--border-color);
        }

        /* Footer */
        .footer {
            background: var(--bg-white);
            padding: 20px 30px;
            margin-left: var(--sidebar-width);
            border-top: 1px solid var(--border-color);
            text-align: center;
            color: var(--text-gray);
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .header {
                padding: 0 15px;
            }

            .menu-toggle {
                display: block;
            }

            .search-box input {
                width: 200px;
            }

            .content-wrapper {
                padding: 20px 15px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .footer {
                margin-left: 0;
            }
        }

        /* Scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
                <i class="fas fa-graduation-cap"></i>
                <span>Skensa Ekstra</span>
            </a>
        </div>
        
        <nav class="sidebar-menu">
            <div class="menu-section">
                <div class="menu-section-title">Dashboard</div>
                <a href="{{ route('admin.dashboard') }}" class="menu-item {{ request()->routeIs('admin.dashboard') || request()->routeIs('admin.index') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
      </div>

            <div class="menu-section">
                <div class="menu-section-title">Management</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Management User</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-book"></i>
                    <span>Management Ekstrakurikuler</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Management Jadwal</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-file-alt"></i>
                    <span>Management Laporan</span>
                </a>
      </div>

            <div class="menu-section">
                <div class="menu-section-title">Fitur</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-image"></i>
                    <span>Galeri Foto</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-newspaper"></i>
                    <span>Berita & Artikel</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </div>
      </nav>
  </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-left">
                <button class="menu-toggle" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="page-title">@yield('page-title', 'Dashboard')</h1>
            </div>
            
            <div class="header-right">
                <div class="search-box">
                    <input type="text" placeholder="Cari sesuatu...">
                    <i class="fas fa-search"></i>
                </div>
                
                <div class="user-profile">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-info">
                        <span class="user-name">Admin</span>
                        <span class="user-role">Administrator</span>
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </header>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Skensa Ekstra. All rights reserved.</p>
  </footer>

    <!-- Scripts -->
    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const menuToggle = document.querySelector('.menu-toggle');
            
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
    </script>
    
@stack('scripts')
</body>
</html>
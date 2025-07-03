<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            min-height: calc(100vh - 56px);
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .sidebar .nav-link {
            color: #333;
        }
        .sidebar .nav-link.active {
            background-color: #e9ecef;
        }
        .stats-card {
            transition: transform 0.3s;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name ?? 'Admin' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="py-3 col-md-3 col-lg-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-people"></i> Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-post"></i> Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-shield-lock"></i> Roles & Permissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-gear"></i> Settings</a>
                    </li>
                </ul>
            </div>
            <div class="py-3 col-md-9 col-lg-10">
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h2>Dashboard</h2>
                    <div>
                        <span class="badge bg-primary">{{ date('Y-m-d') }}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-4 col-xl-3 col-md-6">
                        <div class="py-2 shadow card border-left-primary h-100 stats-card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="mr-2 col">
                                        <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                            Users</div>
                                        <div class="mb-0 text-gray-800 h5 font-weight-bold">10</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="text-gray-300 bi bi-people fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 col-xl-3 col-md-6">
                        <div class="py-2 shadow card border-left-success h-100 stats-card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="mr-2 col">
                                        <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                            Posts</div>
                                        <div class="mb-0 text-gray-800 h5 font-weight-bold">5</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="text-gray-300 bi bi-file-post fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 col-xl-3 col-md-6">
                        <div class="py-2 shadow card border-left-info h-100 stats-card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="mr-2 col">
                                        <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">
                                            Roles</div>
                                        <div class="mb-0 text-gray-800 h5 font-weight-bold">3</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="text-gray-300 bi bi-person-badge fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 col-xl-3 col-md-6">
                        <div class="py-2 shadow card border-left-warning h-100 stats-card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="mr-2 col">
                                        <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                                            Permissions</div>
                                        <div class="mb-0 text-gray-800 h5 font-weight-bold">2</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="text-gray-300 bi bi-shield-lock fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 row">
                    <div class="col-12">
                        <div class="mb-4 shadow card">
                            <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Recent Activity</h6>
                            </div>
                            <div class="card-body">
                                <p>Welcome to your admin dashboard. This is a starter template that you can customize.</p>
                                <p>This boilerplate includes:</p>
                                <ul>
                                    <li>Role and permission management with Spatie</li>
                                    <li>Basic admin layout</li>
                                    <li>User authentication</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-3 mt-auto bg-light">
        <div class="container-fluid">
            <div class="text-center">
                <span>Laravel Spatie Boilerplate &copy; {{ date('Y') }}</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
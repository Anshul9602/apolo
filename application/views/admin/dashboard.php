<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: white;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            border-radius: 8px;
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .main-content {
            padding: 2rem;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            border: none;
        }
        
        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-danger {
            border-radius: 10px;
            padding: 8px 20px;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
        }
        
        .logo-circle {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .stats-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .stats-card .icon {
            font-size: 2.5rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="p-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="logo-circle me-3">
                            <i class="fas fa-dice"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Maa Laxmi</h5>
                            <small>Admin Panel</small>
                        </div>
                    </div>
                    
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="<?php echo base_url('admin/dashboard'); ?>">
                            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/settings'); ?>">
                            <i class="fas fa-cog me-2"></i>Settings
                        </a>
                        <a class="nav-link" href="<?php echo base_url(); ?>" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i>View Website
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/logout'); ?>">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h2>
                    <span class="text-muted">Welcome, <?php echo $this->session->userdata('admin_username'); ?>!</span>
                </div>
                
                <?php if (isset($success)): ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <i class="fas fa-check-circle me-2"></i>
                        <?php echo $success; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="stats-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">App Link</h6>
                                    <small><?php echo isset($settings['app_link']) ? 'Configured' : 'Not Set'; ?></small>
                                </div>
                                <i class="fas fa-link icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">WhatsApp</h6>
                                    <small><?php echo isset($settings['whatsapp_number']) ? 'Configured' : 'Not Set'; ?></small>
                                </div>
                                <i class="fab fa-whatsapp icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Telegram</h6>
                                    <small><?php echo isset($settings['telegram_number']) ? 'Configured' : 'Not Set'; ?></small>
                                </div>
                                <i class="fab fa-telegram icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Settings Form -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-cog me-2"></i>App Settings</h5>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('admin/dashboard'); ?>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="app_link" class="form-label">
                                        <i class="fas fa-link me-2"></i>App Download Link
                                    </label>
                                    <input type="url" class="form-control" id="app_link" name="app_link" 
                                           value="<?php echo isset($settings['app_link']) ? $settings['app_link'] : ''; ?>" 
                                           placeholder="https://play.google.com/store/apps/details?id=com.maalaxmi.app" required>
                                    <?php echo form_error('app_link', '<div class="text-danger small mt-1">', '</div>'); ?>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="whatsapp_number" class="form-label">
                                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Number
                                    </label>
                                    <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" 
                                           value="<?php echo isset($settings['whatsapp_number']) ? $settings['whatsapp_number'] : ''; ?>" 
                                           placeholder="+91-9876543210" required>
                                    <?php echo form_error('whatsapp_number', '<div class="text-danger small mt-1">', '</div>'); ?>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="telegram_number" class="form-label">
                                        <i class="fab fa-telegram me-2"></i>Telegram Number
                                    </label>
                                    <input type="text" class="form-control" id="telegram_number" name="telegram_number" 
                                           value="<?php echo isset($settings['telegram_number']) ? $settings['telegram_number'] : ''; ?>" 
                                           placeholder="+91-9876543210" required>
                                    <?php echo form_error('telegram_number', '<div class="text-danger small mt-1">', '</div>'); ?>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Save Settings
                                </button>
                                <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary" target="_blank">
                                    <i class="fas fa-external-link-alt me-2"></i>Preview Website
                                </a>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                
                <!-- Current Settings Display -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Current Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h6>App Link:</h6>
                                <p class="text-muted">
                                    <?php echo isset($settings['app_link']) ? $settings['app_link'] : 'Not configured'; ?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h6>WhatsApp:</h6>
                                <p class="text-muted">
                                    <?php echo isset($settings['whatsapp_number']) ? $settings['whatsapp_number'] : 'Not configured'; ?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h6>Telegram:</h6>
                                <p class="text-muted">
                                    <?php echo isset($settings['telegram_number']) ? $settings['telegram_number'] : 'Not configured'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

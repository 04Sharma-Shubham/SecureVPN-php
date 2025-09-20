<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title><?php echo isset($page_title) ? $page_title . ' - SecureVPN' : 'SecureVPN - Fast, Secure, and Private VPN Service'; ?></title>
    <meta name="description" content="SecureVPN - Fast, secure, and private VPN service. Protect your online privacy with military-grade encryption, global servers, and no-logs policy.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/vpn-favicon.png">
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loader">
            <div class="plate-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <div class="loading-text">SecureVPN</div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="index.php">
                        <i class="fas fa-shield-alt"></i>
                        <span>SecureVPN</span>
                    </a>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="servers.php" class="nav-link">
                                <i class="fas fa-server"></i>
                                <span>Servers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.php" class="nav-link">
                                <i class="fas fa-tags"></i>
                                <span>Pricing</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="features.php" class="nav-link">
                                <i class="fas fa-shield-alt"></i>
                                <span>Features</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="fas fa-info-circle"></i>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="fas fa-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav-toggle" id="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="scroll-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>

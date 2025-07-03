<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Tabs in Owl Carousel</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .container {
            max-width: 1000px;
            margin-top: 30px;
        }
        
        .card {
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            border: none;
            background: rgba(255, 255, 255, 0.95);
        }
        
        .card-header {
            background: white;
            padding: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .tab-carousel-container {
            padding: 15px 30px;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .tab-content {
            padding: 30px;
            background: white;
        }
        
        .owl-carousel .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            pointer-events: none;
        }
        
        .owl-carousel .owl-nav button {
            background: rgba(255, 255, 255, 0.9) !important;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            pointer-events: all;
            outline: none;
        }
        
        .owl-carousel .owl-nav button:hover {
            background: white !important;
            transform: scale(1.1);
        }
        
        .owl-carousel .owl-nav button span {
            font-size: 24px;
            line-height: 1;
            color: var(--primary);
            display: block;
            margin-top: -2px;
        }
        
        .tab-btn {
            background: white;
            border: 2px solid #eaeaea;
            border-radius: 50px;
            padding: 12px 20px;
            text-align: center;
            margin: 5px;
            transition: all 0.3s ease;
            font-weight: 600;
            color: #555;
            cursor: pointer;
            white-space: nowrap;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .tab-btn:hover {
            border-color: var(--accent);
            color: var(--primary);
            transform: translateY(-3px);
        }
        
        .tab-btn.active {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }
        
        .tab-btn i {
            margin-right: 8px;
            font-size: 18px;
        }
        
        .tab-pane {
            display: none;
        }
        
        .tab-pane.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .tab-content h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-weight: 700;
            position: relative;
            padding-bottom: 10px;
        }
        
        .tab-content h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent);
            border-radius: 3px;
        }
        
        .feature-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }
        
        .feature-list li:hover {
            background: rgba(67, 97, 238, 0.05);
            transform: translateX(5px);
        }
        
        .feature-list li i {
            color: var(--primary);
            margin-right: 15px;
            font-size: 20px;
            min-width: 24px;
        }
        
        .card-footer {
            background: #f8f9fa;
            padding: 15px 30px;
            text-align: right;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        }
        
        .header-title {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .header-title h1 {
            font-weight: 800;
            font-size: 2.8rem;
            margin-bottom: 15px;
        }
        
        .header-title p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .logo i {
            font-size: 48px;
            color: white;
            background: rgba(255, 255, 255, 0.2);
            width: 100px;
            height: 100px;
            line-height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .tab-btn {
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .tab-content {
                padding: 20px;
            }
            
            .header-title h1 {
                font-size: 2.2rem;
            }
        }
        
        .stats {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin: 30px 0;
            flex-wrap: wrap;
        }
        
        .stat-item {
            padding: 15px;
            min-width: 120px;
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <i class="fas fa-layer-group"></i>
    </div>
    
    <div class="header-title">
        <h1>Bootstrap Tabs in Owl Carousel</h1>
        <p>Toggleable navigation tabs integrated with a responsive carousel slider</p>
    </div>
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="tab-carousel-container">
                    <div class="owl-carousel owl-theme" id="tabCarousel">
                        <!-- Tab buttons will be generated by JavaScript -->
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="tabContent">
                <div class="tab-pane active" id="dashboard">
                    <h3><i class="fas fa-tachometer-alt"></i> Dashboard Overview</h3>
                    <p class="lead">Get a comprehensive view of your business performance with real-time analytics.</p>
                    
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">4,872</div>
                            <div class="stat-label">Visitors</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">$12,479</div>
                            <div class="stat-label">Revenue</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">78%</div>
                            <div class="stat-label">Conversion</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">1.2k</div>
                            <div class="stat-label">Orders</div>
                        </div>
                    </div>
                    
                    <ul class="feature-list list-unstyled">
                        <li><i class="fas fa-chart-line"></i> Real-time analytics and performance metrics</li>
                        <li><i class="fas fa-bell"></i> Customizable alerts and notifications</li>
                        <li><i class="fas fa-download"></i> Export reports in multiple formats</li>
                        <li><i class="fas fa-mobile-alt"></i> Responsive design for all devices</li>
                        <li><i class="fas fa-sync-alt"></i> Automatic data synchronization</li>
                    </ul>
                </div>
                
                <div class="tab-pane" id="analytics">
                    <h3><i class="fas fa-chart-pie"></i> Advanced Analytics</h3>
                    <p>Dive deep into your data with our powerful analytics tools.</p>
                    <ul class="feature-list list-unstyled">
                        <li><i class="fas fa-check-circle"></i> Customizable data visualization</li>
                        <li><i class="fas fa-check-circle"></i> Predictive analytics and forecasting</li>
                        <li><i class="fas fa-check-circle"></i> User behavior tracking</li>
                        <li><i class="fas fa-check-circle"></i> Conversion funnel analysis</li>
                        <li><i class="fas fa-check-circle"></i> A/B testing results</li>
                    </ul>
                </div>
                
                <div class="tab-pane" id="users">
                    <h3><i class="fas fa-users"></i> User Management</h3>
                    <p>Efficiently manage your users, roles, and permissions.</p>
                    <ul class="feature-list list-unstyled">
                        <li><i class="fas fa-check-circle"></i> Role-based access control</li>
                        <li><i class="fas fa-check-circle"></i> User activity monitoring</li>
                        <li><i class="fas fa-check-circle"></i> Bulk import/export</li>
                        <li><i class="fas fa-check-circle"></i> Two-factor authentication</li>
                        <li><i class="fas fa-check-circle"></i> Custom permission sets</li>
                    </ul>
                </div>
                
                <div class="tab-pane" id="settings">
                    <h3><i class="fas fa-cog"></i> System Configuration</h3>
                    <p>Customize the platform to match your business requirements.</p>
                    <ul class="feature-list list-unstyled">
                        <li><i class="fas fa-check-circle"></i> Brand customization</li>
                        <li><i class="fas fa-check-circle"></i> API management</li>
                        <li><i class="fas fa-check-circle"></i> Email templates</li>
                        <li><i class="fas fa-check-circle"></i> Backup & restore</li>
                        <li><i class="fas fa-check-circle"></i> Audit logs</li>
                    </ul>
                </div>
                
                <div class="tab-pane" id="billing">
                    <h3><i class="fas fa-credit-card"></i> Billing & Payments</h3>
                    <p>Manage subscriptions, invoices, and payment methods.</p>
                    <ul class="feature-list list-unstyled">
                        <li><i class="fas fa-check-circle"></i> Multiple payment gateways</li>
                        <li><i class="fas fa-check-circle"></i> Automated invoicing</li>
                        <li><i class="fas fa-check-circle"></i> Subscription management</li>
                        <li><i class="fas fa-check-circle"></i> Tax configuration</li>
                        <li><i class="fas fa-check-circle"></i> Expense tracking</li>
                    </ul>
                </div>
            </div>
            
            <div class="card-footer">
                <button class="btn btn-outline-secondary mr-2"><i class="fas fa-sync-alt"></i> Refresh</button>
                <button class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script>
        $(document).ready(function(){
            // Tab data
            const tabs = [
                {id: "dashboard", icon: "fas fa-tachometer-alt", title: "Dashboard"},
                {id: "analytics", icon: "fas fa-chart-pie", title: "Analytics"},
                {id: "users", icon: "fas fa-users", title: "Users"},
                {id: "settings", icon: "fas fa-cog", title: "Settings"},
                {id: "billing", icon: "fas fa-credit-card", title: "Billing"}
            ];
            
            // Generate tab buttons
            tabs.forEach((tab, index) => {
                const isActive = index === 0 ? "active" : "";
                const tabBtn = `
                    <div class="item">
                        <div class="tab-btn ${isActive}" data-tab="${tab.id}">
                            <i class="${tab.icon}"></i>${tab.title}
                        </div>
                    </div>
                `;
                $("#tabCarousel").append(tabBtn);
            });
            
            // Initialize Owl Carousel
            $("#tabCarousel").owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 2 },
                    576: { items: 3 },
                    768: { items: 4 },
                    992: { items: 5 }
                },
                navText: [
                    '<span aria-label="Previous"><i class="fas fa-chevron-left"></i></span>',
                    '<span aria-label="Next"><i class="fas fa-chevron-right"></i></span>'
                ]
            });
            
            // Tab switching functionality
            $(document).on("click", ".tab-btn", function() {
                const tabId = $(this).data("tab");
                
                // Update active tab button
                $(".tab-btn").removeClass("active");
                $(this).addClass("active");
                
                // Show corresponding tab content
                $(".tab-pane").removeClass("active");
                $(`#${tabId}`).addClass("active");
                
                // Center the active tab in the carousel
                const carousel = $("#tabCarousel");
                const activeIndex = $(this).parent().index();
                carousel.trigger('to.owl.carousel', activeIndex);
            });
        });
    </script>
</body>
</html>
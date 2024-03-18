<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="adminstyles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>ELRDAAS Admin's Interface</title>
</head>
<body>

    <div class="container">
        <!--Sidebar Section-->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/elr towers logo.png" alt="logo">
                    <h2>ELR Towers Hall<span class = "danger"> Domestic Affairs</span></h2>
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">
                            close
                        </span>
                        
                    </div>

                </div>

                <div class="sidebar">
                   
                    <div>
                    <a href = "index.php" class ="active">
                        <span class="material-icons-sharp">
                            dashboard
                        </span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href = "requests.php">
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <h3>View Assigned Requests</h3>
                        </a>
                    <a href = "notifications.php">
                            <span class="material-icons-sharp">
                                notifications
                            </span>
                            <h3>Notifications</h3>
                            </a>
                    <a href = "notice.php">
                        <span class="material-icons-sharp">
                            announcement
                        </span>
                        <h3>Create Notice</h3>
                        </a>

                        <a href = "admingennotices.php">                           
                            <span class="material-icons-sharp">
                                info
                                </span>
                                <h3>View General Notice Board</h3>
                                </a>
                    <a href = "laundryappointments.php">
                        <span class="material-icons-sharp">
                            event
                        </span>
                        <h3>View Laundry Appointments</h3>
                        </a>
                    <a href = "requestfeedback.php">
                        <span class="material-icons-sharp">
                            star
                        </span>
                        <h3>Get Feedback</h3>
                    </a>
                    <a href = "adminprofile.php">
                        <span class="material-icons-sharp">
                            person_outline
                        </span>
                        <h3>Profile</h3>
                        </a>
                    <a href = "adminsettings.php">
                        <span class="material-icons-sharp">
                            settings
                        </span>
                        <h3>Settings</h3>
                        </a>
                    <a href="login.html" target="_blank">
                        <span class="material-icons-sharp">
                            login
                        </span>
                        <h3>New Login</h3>
                    </a>
                    <a href = "logout.html" target="_blank">
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        <h3>Logout</h3>
                        </a>
                </div>
            
            </div>
        </aside>
        <!--End of Sidebar Section-->

        <!--Main Section-->
       
<main>
    <h1>Admin's Portal</h1>
    <!--Analytics-->
    <div class="analysis">
        <div class="panel">
            <div class="status">
                <div class="info">
                    <h3>Total Assigned Requests</h3>
                    <h1>10</h1>
                </div>
                                    
                </div>
                </div>
        <div class="panel">
            <div class="status">
                <div class="info">
                    <h3>Requests Resolved by Admin</h3>
                    <h1>8</h1>
                </div>
                <div class="progress">
                    <svg viewBox="0 0 60 60">
                        <circle cx="30" cy="30" r="25" stroke="#4caf50" stroke-width="5" fill="none"></circle>
                    </svg>                    
                    <div class="percentage">
                        <p>80<span>%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="status">
                <div class="info">
                    <h3>Average hours to get request resolved</h3>
                    <h1>70.6 </h1>
                </div>
                    </div>
                </div>
            </div>
            <!--End of Analytics-->
            <!--Start of New User-->
            <div class="new-users">
                <h2>New Admins</h2>
                <div class="user-list">
                    <div class="user">
                        <div class="user-info">
                            <img src="images/ELR DAAS Shaniel Dennis.webp" alt="user">
                            <div class="user-name">
                                <h3>Shaniel Dennis</h3>
                                <p>Resident Advisor</p>
                                <p>joined 54 Min Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="user">
                        <div class="user-info">
                            <img src="images/ELR DAAS Rajaye.png" alt="user">
                            <div class="user-name">
                                <h3>Rajaye Bennett</h3>
                                <p>Domestic Affairs Chairperson</p>
                                <p>joined 5 Hrs Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="user">
                        <div class="user-info">
                            <img src="images/ELRDAAS Erica Harris.webp" alt="user">
                            <div class="user-name">
                                <h3>Erica Harris</h3>
                                <p>Senior Resident Advisor</p>
                                <p>joined 23 Hrs Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="user">
                        <div class="user-info">
                            <img src="images/ELR DAAS BERTRAM.webp" alt="user">
                            <div class="user-name">
                                <h3>Mr. Bertram Anderson</h3>
                                <p>Student Services and Development Manager</p>
                                <p>joined 2 Days Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="user">
                        <div class="user-info">
                            <button id="add-admin-button" class="add-button" onclick="window.location.href='register.html'">+</button>
                            <div class="user-name">
                                <p>Add New Admin</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End of New User-->
            <!--Start of Recent Activities-->
            <div class="recent-requests">
                <h2>Recent Requests</h2>
                <table id="requestsTable">
                    <thead>
                        <tr>
                            <th>Resident Name</th>
                            <th>Activity Type</th>
                            <th>Activity ID</th>
                            <th>Activity Date</th>
                            <th>Activity Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                
                
                <a href = "#">View All</a>
                    </div>
                    <!--End of Recent Requests-->
                </div>                
        </div>
        
    </div>
        
        </div>
    
    </div>
    
</main>
<!-- End of Main Section -->

<!--Right Section-->

<div class="right-section">
    <div class="nav">
        <button id ="menu-btn">
            <span class="material-icons-sharp">
                menu
            </span>
        </button>
        <div class="dark-mode">
            <span class="material-icons-sharp active">
                light_mode
            </span>
            <span class="material-icons-sharp">
                dark_mode
            </span>
        </div>
        <div class="profile">
            <a href="adminprofile.html" class="profile-link">
                <div class="profil-photo">
                    <img src="images/elf wolf 1.jpeg" alt="Profile Picture">
                </div>
            </a>
            <div class="info">
                <label id = "name">[Admin Name]</label><br>
                <small class="text-muted">Admin</small>
            </div>

        </div>
        </div>
        <!--End of Right Section-->
    </div>

        
</div>
    
</div>

<script src="requests.js"></script>
<script src="index.js"></script>
<script>
    const darkModeToggle = document.querySelector('.dark-mode');
    const bodyElement = document.body;

    darkModeToggle.addEventListener('click', () => {
        bodyElement.classList.toggle('dark-mode-variables');
        saveModePreference();
        updateModeIndicator();
    });

    function saveModePreference() {
        const isDarkMode = bodyElement.classList.contains('dark-mode-variables');
        localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
    }

    function loadModePreference() {
        const darkMode = localStorage.getItem('darkMode');
        if (darkMode === 'enabled') {
            bodyElement.classList.add('dark-mode-variables');
        } else {
            bodyElement.classList.remove('dark-mode-variables');
        }
    }

    function updateModeIndicator() {
        const isDarkMode = bodyElement.classList.contains('dark-mode-variables');
        const lightIcon = document.querySelector('.dark-mode .light_mode');
        const darkIcon = document.querySelector('.dark-mode .dark_mode');

        if (isDarkMode) {
            lightIcon.classList.add('active');
            darkIcon.classList.remove('active');
        } else {
            lightIcon.classList.remove('active');
            darkIcon.classList.add('active');
        }
    }

    
    loadModePreference();
    updateModeIndicator();
</script>
</body>
</html>
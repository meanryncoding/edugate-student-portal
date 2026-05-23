<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EduGate Dashboard for Academic overview, GPA, charts and announcements." />
    <meta name="author" content="EduGate Team" />
    <title>EduGate - Dashboard</title>

<!-- Dark Mode -->
  <script>
    var htmlElement = document.documentElement;
    var savedTheme = localStorage.getItem("theme") || "light";
    htmlElement.setAttribute("data-bs-theme", savedTheme);
 
    function updateIcon(theme) {
      var icon = document.getElementById("darkModeIcon");
      if (!icon) return;
      icon.className = theme === "dark" ? "bi bi-sun-fill" : "bi bi-moon-stars-fill";
    }
    updateIcon(savedTheme);
 
    document.addEventListener("DOMContentLoaded", function() {
      var btn = document.getElementById("darkModeToggle");
      if (btn) {
        btn.addEventListener("click", function() {
          var current = htmlElement.getAttribute("data-bs-theme");
          var next = current === "light" ? "dark" : "light";
          htmlElement.setAttribute("data-bs-theme", next);
          localStorage.setItem("theme", next);
          updateIcon(next);
        });
      }
    });
    </script>

<!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icon CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <!-- Google Font API -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" />   
</head>


<body>
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- ════════════════ SIDEBAR ══════════════ -->
<nav id="sidebar">
    <div class="sidebar-brand">
      <div class="s-icon"><i class="bi bi-mortarboard-fill"></i></div>
      <div>
        <div class="s-name">EduGate</div>
        <div class="s-sub">Student Info System</div>
      </div>
    </div>
    <div class="sidebar-user">
      <div class="s-avatar user-initials">PY</div>
      <div>
        <div class="s-uname" id="sidebarName">Puteri Yasmin</div>
        <div class="s-uid"   id="sidebarId">2024123456</div>
      </div>
    </div>
    <div class="sidebar-section mt-2">Main</div>
    <ul class="sidebar-nav">
      <li><a href="dashboard.html"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a></li>
      <li><a href="courses.html"><i class="bi bi-book-fill"></i> My Courses</a></li>
      <li><a href="grades.html"><i class="bi bi-bar-chart-fill"></i> Grades &amp; GPA</a></li>
      <li><a href="schedule.html"><i class="bi bi-calendar3"></i> Schedule</a></li>
    </ul>
    <div class="sidebar-section">Academic</div>
    <ul class="sidebar-nav">
      <li><a href="assignments.html"><i class="bi bi-file-earmark-text"></i> Assignments</a></li>
      <li><a href="announcements.html"><i class="bi bi-bell"></i> Announcements</a></li>
      <li><a href="profile.html"><i class="bi bi-person-fill"></i> My Profile</a></li>
    </ul>
    <div class="sidebar-footer">
      <a href="#" onclick="logout()"><i class="bi bi-box-arrow-left"></i> Logout</a>
    </div>
  </nav>

<!-- ═══════════════ MAIN CONTENT ═════════════════════-->
 <div id="content">

 <!-- Topbar -->
    <div class="topbar">
      <div class="d-flex align-items-center gap-3">
        <button class="hamburger-btn" id="hamburgerBtn"><i class="bi bi-list"></i></button>
        <div>
          <div class="page-title">Dashboard</div>
          <div class="page-sub">Welcome back! Here's your academic overview.</div>
        </div>
      </div>
      <div class="topbar-right">
        <!-- Dark Mode Toggle -->
        <button class="dark-mode-toggle" id="darkModeToggle" title="Toggle Dark Mode">
          <i class="bi bi-moon-stars-fill" id="darkModeIcon"></i>
        </button>
        <a href="announcements.html" class="notif-btn"><i class="bi bi-bell-fill"></i><span class="notif-dot"></span></a>
        <a href="profile.html" class="d-flex align-items-center gap-2" style="text-decoration:none;">
  <div class="topbar-avatar user-initials">PY</div>
  <div class="d-none d-sm-block">
    <div class="t-name" id="topbarName">Puteri Yasmin</div>
    <div class="t-role">Student</div>
  </div>
</a>
      </div>
    </div>

<!-- Page Content -->
    <div class="page-content">

      <!-- Semester badge -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <span class="pill pill-primary"><i class="bi bi-calendar2-check me-1"></i>Semester 3 &nbsp;·&nbsp; Session 2025/2026</span>
        <span class="pill pill-success"><i class="bi bi-circle-fill me-1" style="font-size:.45rem;"></i>Active</span>
      </div>

      <!-- ── Stat Cards ── -->
      <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
          <div class="stat-card s-primary">
            <div class="stat-icon" style="background:rgba(79,70,229,.12);"><i class="bi bi-trophy-fill text-primary-c"></i></div>
            <div class="stat-value text-primary-c">3.71</div>
            <div class="stat-label">Cumulative GPA</div>
            <span class="stat-badge prim"><i class="bi bi-info-circle"></i> Sem 1 &amp; 2 avg</span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card s-success">
            <div class="stat-icon" style="background:rgba(16,185,129,.12);"><i class="bi bi-book-fill" style="color:var(--success);"></i></div>
            <div class="stat-value" style="color:var(--success);">5</div>
            <div class="stat-label">Enrolled Courses</div>
            <span class="stat-badge up" style="background:rgba(16,185,129,.12);color:var(--success);"><i class="bi bi-check-circle-fill"></i> 15 credit hours</span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card s-accent">
            <div class="stat-icon" style="background:rgba(245,158,11,.12);"><i class="bi bi-person-check-fill" style="color:var(--accent);"></i></div>
            <div class="stat-value" style="color:var(--accent);">87%</div>
            <div class="stat-label">Attendance Rate</div>
            <span class="stat-badge warn"><i class="bi bi-exclamation-circle"></i> Needs improvement</span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card s-info">
            <div class="stat-icon" style="background:rgba(6,182,212,.12);"><i class="bi bi-clipboard2-check-fill" style="color:var(--info);"></i></div>
            <div class="stat-value" style="color:var(--info);">3</div>
            <div class="stat-label">Assignments Due</div>
            <span class="stat-badge info"><i class="bi bi-clock-fill"></i> Within 7 days</span>
          </div>
        </div>
      </div>

      <!-- ── Charts Row ── -->
     <div class="row g-3 mb-4">
        <div class="col-12 col-lg-8">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-bar-chart-fill me-2 text-primary-c"></i>Grade Performance by Subject</h6>
              <span class="pill pill-primary fs-xs">Semester 3</span>
            </div>
            <div class="card-box-body">
              <div style="position:relative;height:265px;"><canvas id="barChart"></canvas></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-pie-chart-fill me-2" style="color:var(--accent);"></i>GPA Overview</h6>
            </div>
            <div class="card-box-body text-center">
              <div style="position:relative;height:190px;"><canvas id="donutChart"></canvas></div>
              <div class="mt-3">
                <div class="gpa-big">3.71 <span class="gpa-denom">/ 4.00</span></div>
                <div class="gpa-label">Cumulative GPA (Sem 1 &amp; 2)</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Progress + Announcements -->
      <div class="row g-3">
        <div class="col-12 col-lg-5">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-journals me-2 text-primary-c"></i>Course Progress</h6>
              <a href="courses.html" class="fs-xs fw-bold text-decoration-none text-primary-c">View All</a>
            </div>
            <div class="card-box-body">
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1"><span class="fs-sm fw-bold">IMS511 – Problem Solving & Program Design 2</span><span class="fs-xs text-muted-c">80%</span></div>
                <div class="prog-track"><div class="prog-fill" style="width:80%;background:var(--primary);"></div></div>
              </div>
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1"><span class="fs-sm fw-bold">IMS555 – Decision Theory</span><span class="fs-xs text-muted-c">72%</span></div>
                <div class="prog-track"><div class="prog-fill" style="width:72%;background:var(--success);"></div></div>
              </div>
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1"><span class="fs-sm fw-bold">LCC402 – English for Oral Reporting</span><span class="fs-xs text-muted-c">85%</span></div>
                <div class="prog-track"><div class="prog-fill" style="width:85%;background:var(--info);"></div></div>
              </div>
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1"><span class="fs-sm fw-bold">TMC451 – Introductory Mandarin (Level II)</span><span class="fs-xs text-muted-c">78%</span></div>
                <div class="prog-track"><div class="prog-fill" style="width:78%;background:var(--accent);"></div></div>
              </div>
              <div>
                <div class="d-flex justify-content-between mb-1"><span class="fs-sm fw-bold">IMS560 – Advanced Database Management</span><span class="fs-xs text-muted-c">70%</span></div>
                <div class="prog-track"><div class="prog-fill" style="width:70%;background:var(--pink);"></div></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-7">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-megaphone-fill me-2" style="color:var(--accent);"></i>Announcements</h6>
              <span class="pill pill-danger fs-xs">3 New</span>
            </div>
            <div class="card-box-body">
              <div class="ann-item"><div class="ann-dot" style="background:var(--danger);"></div><div><div class="fs-sm fw-bold">📌 IMS566 Assignment 2 Deadline Extended</div><div class="fs-xs text-muted-c mt-1">Submission deadline moved to <strong>11 May 2025</strong>. Submit GitHub Pages link on Moodle.</div><div class="fs-xs text-muted-c mt-1"><i class="bi bi-clock me-1"></i>2 hours ago &nbsp;·&nbsp; Dr. Siti Norzalina</div></div></div>
              <div class="ann-item"><div class="ann-dot" style="background:var(--primary);"></div><div><div class="fs-sm fw-bold">📝 Mid-Term Exam Schedule Released</div><div class="fs-xs text-muted-c mt-1">Mid-term exams held during <strong>Week 9 (19–23 May 2025)</strong>.</div><div class="fs-xs text-muted-c mt-1"><i class="bi bi-clock me-1"></i>Yesterday &nbsp;·&nbsp; Academic Office</div></div></div>
              <div class="ann-item"><div class="ann-dot" style="background:var(--success);"></div><div><div class="fs-sm fw-bold">🎓 Dean's List Nominations Open</div><div class="fs-xs text-muted-c mt-1">Students with CGPA 3.50 and above are eligible for Dean's List — Sem 2 2023/2024.</div><div class="fs-xs text-muted-c mt-1"><i class="bi bi-clock me-1"></i>2 days ago &nbsp;·&nbsp; Faculty Office</div></div></div>
              <div class="ann-item"><div class="ann-dot" style="background:var(--accent);"></div><div><div class="fs-sm fw-bold">🔧 Moodle Maintenance This Weekend</div><div class="fs-xs text-muted-c mt-1">Moodle unavailable Sat 26 Apr 2025, 12AM–6AM.</div><div class="fs-xs text-muted-c mt-1"><i class="bi bi-clock me-1"></i>3 days ago &nbsp;·&nbsp; IT Unit</div></div></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Footer -->
    <footer class="site-footer">
      <div>&copy; 2026 EduGate &nbsp;·&nbsp; Universiti Teknologi MARA &nbsp;·&nbsp; IMS566 Individual Project</div>
      <div class="footer-links">
        <a href="#">Help</a>
        <a href="#">Privacy</a>
        <a href="#">Contact IT</a>
      </div>
    </footer>
  </div>

<!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
  <!-- Shared JS -->
  <script src="js/main.js"></script>

  <script>
    Chart.defaults.font.family = "'Roboto', sans-serif";
    Chart.defaults.color = '#64748b';

    /* Bar Chart */
    new Chart(document.getElementById('barChart').getContext('2d'), {
      type:'bar',
      data:{
        labels:['IMS511','IMS555','LCC402','TMC451','IMS560'],
        datasets:[
          {label:'Coursework (%)',data:[80,72,85,78,70],backgroundColor:'rgba(79,70,229,.8)',borderRadius:6,borderSkipped:false},
          {label:'Mid-Term (%)',data:[75,68,82,74,65],backgroundColor:'rgba(16,185,129,.8)',borderRadius:6,borderSkipped:false},
        ],
      },
      options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'top',labels:{boxWidth:12,padding:14,font:{size:11}}}},scales:{x:{grid:{display:false}},y:{beginAtZero:true,max:100,grid:{color:'rgba(0,0,0,.05)'},ticks:{callback:v=>v+'%',font:{size:11}}}}},
    });

    /* Doughnut Chart */
    new Chart(document.getElementById('donutChart').getContext('2d'), {
      type:'doughnut',
      data:{labels:['Sem 1 (3.72)','Sem 2 (3.70)'],datasets:[{data:[3.72,3.70],backgroundColor:['#f7c738dc','#10b981'],borderWidth:0,hoverOffset:8}]},
      options:{responsive:true,maintainAspectRatio:false,cutout:'72%',plugins:{legend:{position:'bottom',labels:{boxWidth:10,padding:10,font:{size:11}}}}},
    });
  </script>

<!-- logout function -->
<script>
    // Backup logout function
    if (typeof logout === "undefined") {
      function logout() {
        sessionStorage.clear();
        window.location.href = "index.html";
      }
    }
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="EduGate – Track your grades, GPA progression and academic performance." />
  <meta name="author" content="IMS566 Individual Project" />
  <title>Grades &amp; GPA – EduGate</title>

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

  <!-- Bootstrap CSS -->
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
      <div><div class="s-name">EduGate</div><div class="s-sub">Student Info System</div></div>
    </div>
    <div class="sidebar-user">
      <div class="s-avatar user-initials">PY</div>
      <div><div class="s-uname" id="sidebarName">Puteri Yasmin</div><div class="s-uid" id="sidebarId">2024123456</div></div>
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
    <div class="topbar">
      <div class="d-flex align-items-center gap-3">
        <button class="hamburger-btn" id="hamburgerBtn"><i class="bi bi-list"></i></button>
        <div>
          <div class="page-title">Grades &amp; GPA</div>
          <div class="page-sub">Academic performance across all semesters</div>
        </div>
      </div>
      <div class="topbar-right">
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

    <div class="page-content">

      <!-- GPA Summary Cards -->
      <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
          <div class="stat-card s-primary">
            <div class="stat-icon" style="background:rgba(79,70,229,.1);"><i class="bi bi-trophy-fill text-primary-c"></i></div>
            <div class="stat-value text-primary-c">3.71</div>
            <div class="stat-label">Cumulative GPA</div>
            <span class="stat-badge info" style="font-size:.65rem;">Sem 1 &amp; 2 completed</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-card s-success">
            <div class="stat-icon" style="background:rgba(16,185,129,.1);"><i class="bi bi-patch-check-fill" style="color:var(--success);"></i></div>
            <div class="stat-value" style="color:var(--success);">3.72</div>
            <div class="stat-label">Sem 1 GPA</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-card s-info">
            <div class="stat-icon" style="background:rgba(6,182,212,.1);"><i class="bi bi-patch-check-fill" style="color:var(--info);"></i></div>
            <div class="stat-value" style="color:var(--info);">3.70</div>
            <div class="stat-label">Sem 2 GPA</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-card s-accent">
            <div class="stat-icon" style="background:rgba(245,158,11,.1);"><i class="bi bi-graph-up-arrow" style="color:var(--accent);"></i></div>
            <div class="stat-value" style="color:var(--accent);font-size:1.1rem;">In Progress</div>
            <div class="stat-label">Sem 3 GPA</div>
          </div>
        </div>
      </div>

      <!-- Charts Row -->
      <div class="row g-3 mb-4">
        <!-- Line chart -->
        <div class="col-12 col-lg-7">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-graph-up me-2 text-primary-c"></i>GPA Progression</h6>
              <span class="pill pill-success fs-xs">All Semesters</span>
            </div>
            <div class="card-box-body">
              <div style="position:relative;height:235px;"><canvas id="lineChart"></canvas></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-pie-chart-fill me-2" style="color:var(--pink);"></i>Grade Distribution</h6>
              <span class="fs-xs text-muted-c">Semester 1 &amp; 2</span>
            </div>
            <div class="card-box-body">
              <div style="position:relative;height:185px;"><canvas id="distChart"></canvas></div>
              <div class="row g-2 mt-3 text-center">
                <div class="col-4"><div class="grade-chip gc-A mx-auto mb-1">A</div><div class="fs-xs text-muted-c">4 subjects</div></div>
                <div class="col-4"><div class="grade-chip gc-B mx-auto mb-1">A-</div><div class="fs-xs text-muted-c">5 subjects</div></div>
                <div class="col-4"><div class="grade-chip gc-C mx-auto mb-1">B+</div><div class="fs-xs text-muted-c">5 subjects</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Semester selector -->
      <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
        <h6 class="fw-bold mb-0">Semester Results</h6>
        <div class="d-flex gap-2 flex-wrap">
          <button class="sem-btn active" id="s1btn" onclick="showSem(1)">Semester 1</button>
          <button class="sem-btn"        id="s2btn" onclick="showSem(2)">Semester 2</button>
          <button class="sem-btn"        id="s3btn" onclick="showSem(3)">Semester 3 (Current)</button>
        </div>
      </div>

      <!-- Sem 1 Table -->
      <div id="sem1" class="card-box">
        <div class="card-box-header">
          <h6><i class="bi bi-clipboard2-data me-2 text-primary-c"></i>Semester 1 – Session 2023/2024</h6>
          <span class="pill pill-success">Completed &nbsp;·&nbsp; GPA 3.60</span>
        </div>
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr><th>#</th><th>Code</th><th>Course Name</th><th>Credit Hrs</th><th>Grade</th><th>Grade Point</th><th>Status</th></tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-muted-c fs-xs">1</td>
                <td><span class="pill pill-primary">IMC401</span></td>
                <td><div class="fw-bold fs-sm">Foundation of Information and Communications Technology</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A</span></td>
                <td><strong style="color:var(--success);">4.00</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">2</td>
                <td><span class="pill pill-primary">IMC411</span></td>
                <td><div class="fw-bold fs-sm">Database Management System</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A-</span></td>
                <td><strong style="color:var(--success);">3.67</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">3</td>
                <td><span class="pill pill-primary">IMC412</span></td>
                <td><div class="fw-bold fs-sm">Fundamentals of Information Science</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A</span></td>
                <td><strong style="color:var(--success);">4.00</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">4</td>
                <td><span class="pill pill-primary">IMC413</span></td>
                <td><div class="fw-bold fs-sm">Information Storage &amp; Retrieval Systems</div></td>
                <td>3</td><td><span class="grade-chip gc-B">B+</span></td>
                <td><strong style="color:var(--primary);">3.33</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">5</td>
                <td><span class="pill pill-primary">IMC414</span></td>
                <td><div class="fw-bold fs-sm">Digital Citizenship and Social Media</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A-</span></td>
                <td><strong style="color:var(--success);">3.67</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">6</td>
                <td><span class="pill pill-primary">IMC451</span></td>
                <td><div class="fw-bold fs-sm">Organisation of Information</div></td>
                <td>3</td><td><span class="grade-chip gc-B">B+</span></td>
                <td><strong style="color:var(--primary);">3.33</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">7</td>
                <td><span class="pill pill-primary">CTU554</span></td>
                <td><div class="fw-bold fs-sm">Values and Civilization II</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A</span></td>
                <td><strong style="color:var(--success);">4.00</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr style="background:rgba(79,70,229,.04);">
                <td colspan="3" class="fw-bold text-end">Total / GPA</td>
                <td class="fw-900 text-primary-c">21</td>
                <td></td>
                <td class="fw-900" style="color:var(--success);font-size:1.05rem;">3.72</td>
                <td><span class="pill pill-success">Dean's List</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Sem 2 Table -->
      <div id="sem2" class="card-box" style="display:none;">
        <div class="card-box-header">
          <h6><i class="bi bi-clipboard2-data me-2 text-primary-c"></i>Semester 2 – Session 2023/2024</h6>
          <span class="pill pill-success">Completed &nbsp;·&nbsp; GPA 3.70</span>
        </div>
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr><th>#</th><th>Code</th><th>Course Name</th><th>Credit Hrs</th><th>Grade</th><th>Grade Point</th><th>Status</th></tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-muted-c fs-xs">1</td>
                <td><span class="pill pill-primary">IMC452</span></td>
                <td><div class="fw-bold fs-sm">Introduction to Metadata</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A-</span></td>
                <td><strong style="color:var(--success);">3.67</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">2</td>
                <td><span class="pill pill-primary">IMS450</span></td>
                <td><div class="fw-bold fs-sm">Problem Solving and Program Design 1</div></td>
                <td>3</td><td><span class="grade-chip gc-B">B+</span></td>
                <td><strong style="color:var(--primary);">3.33</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">3</td>
                <td><span class="pill pill-primary">IMS457</span></td>
                <td><div class="fw-bold fs-sm">Multimedia for Information Professionals</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A</span></td>
                <td><strong style="color:var(--success);">4.00</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">4</td>
                <td><span class="pill pill-primary">IMS458</span></td>
                <td><div class="fw-bold fs-sm">Web Design and Development</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A</span></td>
                <td><strong style="color:var(--success);">4.00</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">5</td>
                <td><span class="pill pill-primary">MGT400</span></td>
                <td><div class="fw-bold fs-sm">Introduction to Management</div></td>
                <td>3</td><td><span class="grade-chip gc-B">B+</span></td>
                <td><strong style="color:var(--primary);">3.33</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">6</td>
                <td><span class="pill pill-primary">TMC401</span></td>
                <td><div class="fw-bold fs-sm">Introductory Mandarin (Level I)</div></td>
                <td>3</td><td><span class="grade-chip gc-A">A-</span></td>
                <td><strong style="color:var(--success);">3.67</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">7</td>
                <td><span class="pill pill-primary">ENT530</span></td>
                <td><div class="fw-bold fs-sm">Principles of Entrepreneurship</div></td>
                <td>3</td><td><span class="grade-chip gc-B">B+</span></td>
                <td><strong style="color:var(--primary);">3.33</strong></td>
                <td><span class="pill pill-success">Pass</span></td>
              </tr>
              <tr style="background:rgba(79,70,229,.04);">
                <td colspan="3" class="fw-bold text-end">Total / GPA</td>
                <td class="fw-900 text-primary-c">21</td>
                <td></td>
                <td class="fw-900" style="color:var(--success);font-size:1.05rem;">3.70</td>
                <td><span class="pill pill-success">Dean's List</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Sem 3 Table -->
      <div id="sem3" class="card-box" style="display:none;">
        <div class="card-box-header">
          <h6><i class="bi bi-clipboard2-data me-2 text-primary-c"></i>Semester 3 – Session 2024/2025</h6>
          <span class="pill pill-accent">In Progress</span>
        </div>
        <!-- Notice -->
        <div style="padding:.85rem 1.4rem;background:rgba(245,158,11,.06);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:8px;">
          <i class="bi bi-info-circle-fill" style="color:var(--accent);flex-shrink:0;"></i>
          <span class="fs-xs text-muted-c">CGPA will be updated after Semester 3 results are released.</span>
        </div>
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr><th>#</th><th>Code</th><th>Course Name</th><th>Credit Hrs</th><th>Coursework %</th><th>Mid-Term %</th><th>Projected</th></tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-muted-c fs-xs">1</td>
                <td><span class="pill pill-primary">IMS511</span></td>
                <td><div class="fw-bold fs-sm">Problem Solving and Program Design 2</div></td>
                <td>3</td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:80%;background:var(--primary);"></div></div><span class="fs-xs fw-bold">80%</span></div></td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:75%;background:var(--success);"></div></div><span class="fs-xs fw-bold">75%</span></div></td>
                <td><span class="grade-chip gc-A" style="width:auto;padding:.2rem .55rem;font-size:.78rem;">A-</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">2</td>
                <td><span class="pill pill-primary">IMS555</span></td>
                <td><div class="fw-bold fs-sm">Decision Theory</div></td>
                <td>3</td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:72%;background:var(--primary);"></div></div><span class="fs-xs fw-bold">72%</span></div></td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:68%;background:var(--success);"></div></div><span class="fs-xs fw-bold">68%</span></div></td>
                <td><span class="grade-chip gc-B" style="width:auto;padding:.2rem .55rem;font-size:.78rem;">B+</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">3</td>
                <td><span class="pill pill-primary">LCC402</span></td>
                <td><div class="fw-bold fs-sm">English for Oral Reporting</div></td>
                <td>3</td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:85%;background:var(--primary);"></div></div><span class="fs-xs fw-bold">85%</span></div></td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:82%;background:var(--success);"></div></div><span class="fs-xs fw-bold">82%</span></div></td>
                <td><span class="grade-chip gc-A" style="width:auto;padding:.2rem .55rem;font-size:.78rem;">A</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">4</td>
                <td><span class="pill pill-primary">TMC451</span></td>
                <td><div class="fw-bold fs-sm">Introductory Mandarin (Level II)</div></td>
                <td>3</td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:78%;background:var(--primary);"></div></div><span class="fs-xs fw-bold">78%</span></div></td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:74%;background:var(--success);"></div></div><span class="fs-xs fw-bold">74%</span></div></td>
                <td><span class="grade-chip gc-A" style="width:auto;padding:.2rem .55rem;font-size:.78rem;">A-</span></td>
              </tr>
              <tr>
                <td class="text-muted-c fs-xs">5</td>
                <td><span class="pill pill-primary">IMS560</span></td>
                <td><div class="fw-bold fs-sm">Advanced Database Management System</div></td>
                <td>3</td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:70%;background:var(--primary);"></div></div><span class="fs-xs fw-bold">70%</span></div></td>
                <td><div class="d-flex align-items-center gap-2"><div class="prog-track flex-grow-1"><div class="prog-fill" style="width:65%;background:var(--accent);"></div></div><span class="fs-xs fw-bold">65%</span></div></td>
                <td><span class="grade-chip gc-B" style="width:auto;padding:.2rem .55rem;font-size:.78rem;">B+</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="padding:.9rem 1.4rem;background:rgba(245,158,11,.05);border-top:1px solid var(--border);">
          <i class="bi bi-clock-history me-2" style="color:var(--accent);"></i>
          <span class="fs-xs text-muted-c">Projected grades are estimates based on coursework and mid-term performance. Final grades will be released after examination.</span>
        </div>
      </div>

    </div>

    <!-- footer -->
    <footer class="site-footer">
      <div>&copy; 2026 EduGate &nbsp;·&nbsp; Universiti Teknologi MARA &nbsp;·&nbsp; IMS566 Individual Project</div>
      <div class="footer-links"><a href="#">Help</a><a href="#">Privacy</a><a href="#">Contact IT</a></div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    Chart.defaults.font.family = "'Roboto', sans-serif";
    Chart.defaults.color = '#64748b';

    /* GPA Line Chart */
    new Chart(document.getElementById('lineChart').getContext('2d'), {
      type: 'line',
      data: {
        labels: ['Sem 1', 'Sem 2', 'Sem 3 (projected)'],
        datasets: [{
          label: 'GPA',
          data:  [3.72, 3.70, null],
          borderColor: '#4f46e5',
          backgroundColor: 'rgba(79,70,229,.1)',
          pointBackgroundColor: ['#4f46e5','#4f46e5','#f59e0b'],
          pointRadius: 6, pointHoverRadius: 8,
          tension: .4, fill: true, borderWidth: 3,
          spanGaps: false,
        }],
      },
      options: {
        responsive: true, maintainAspectRatio: false,
        plugins: { legend: { display: false },
          tooltip: { callbacks: { label: ctx => ctx.parsed.y ? ` GPA: ${ctx.parsed.y.toFixed(2)}` : ' In Progress' } }
        },
        scales: {
          x: { grid: { display: false } },
          y: { min: 3.0, max: 4.0, grid: { color: 'rgba(0,0,0,.05)' }, ticks: { stepSize: .5, callback: v => v.toFixed(1) } },
        },
      },
    });

    /* Grade Distribution Doughnut Chart */
    new Chart(document.getElementById('distChart').getContext('2d'), {
      type: 'doughnut',
      data: {
        labels: ['A (4.00)', 'A- (3.67)', 'B+ (3.33)'],
        datasets: [{ data: [4, 5, 5], backgroundColor: ['#4f46e5','#10b981','#f59e0b'], borderWidth: 0, hoverOffset: 8 }],
      },
      options: {
        responsive: true, maintainAspectRatio: false, cutout: '70%',
        plugins: { legend: { position: 'bottom', labels: { boxWidth: 10, padding: 10, font: { size: 11 } } } },
      },
    });

    /* Semester Toggle */
    function showSem(n) {
      ['sem1','sem2','sem3'].forEach(id => document.getElementById(id).style.display = 'none');
      document.getElementById('sem' + n).style.display = 'block';
      ['s1btn','s2btn','s3btn'].forEach((id, i) => {
        document.getElementById(id).classList.toggle('active', i + 1 === n);
      });
    }
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

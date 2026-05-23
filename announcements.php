<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="EduGate – Faculty and university announcements." />
  <meta name="author" content="IMS566 Individual Project" />
  <title>Announcements – EduGate</title>

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

  <style>
    .ann-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 1.3rem 1.4rem;
      box-shadow: var(--shadow);
      transition: var(--transition);
      display: flex;
      gap: 1.1rem;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    .ann-card:hover { transform: translateY(-2px); box-shadow: var(--shadow-lg); border-color: var(--primary); }
    .ann-card.unread::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 4px; height: 100%;
      background: var(--primary);
      border-radius: var(--radius) 0 0 var(--radius);
    }
    .ann-card-icon {
      width: 46px; height: 46px; border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.3rem; flex-shrink: 0;
    }
    .ann-card-title { font-size: .92rem; font-weight: 700; color: var(--text); line-height: 1.3; margin-bottom: .3rem; }
    .ann-card-body  { font-size: .82rem; color: var(--text-muted); line-height: 1.6; margin-bottom: .5rem; }
    .ann-card-meta  { font-size: .73rem; color: var(--text-muted); display: flex; align-items: center; gap: .75rem; flex-wrap: wrap; }

    .ann-badge-unread {
      position: absolute; top: 1rem; right: 1rem;
      width: 8px; height: 8px;
      background: var(--primary); border-radius: 50%;
    }

    /* Category filter pills */
    .cat-pill {
      padding: .38rem .9rem; border-radius: 20px;
      font-size: .78rem; font-weight: 700; cursor: pointer;
      border: 1.5px solid var(--border); background: var(--card-bg);
      color: var(--text-muted); transition: var(--transition);
      font-family: 'Roboto', sans-serif;
    }
    .cat-pill:hover, .cat-pill.active {
      background: var(--primary); color: white; border-color: var(--primary);
    }
  </style>
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
      <li><a href="dashboard.php"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a></li>
      <li><a href="courses.php"><i class="bi bi-book-fill"></i> My Courses</a></li>
      <li><a href="grades.php"><i class="bi bi-bar-chart-fill"></i> Grades &amp; GPA</a></li>
      <li><a href="schedule.php"><i class="bi bi-calendar3"></i> Schedule</a></li>
    </ul>
    <div class="sidebar-section">Academic</div>
    <ul class="sidebar-nav">
      <li><a href="assignments.php"><i class="bi bi-file-earmark-text"></i> Assignments</a></li>
      <li><a href="announcements.php"><i class="bi bi-bell"></i> Announcements</a></li>
      <li><a href="profile.php"><i class="bi bi-person-fill"></i> My Profile</a></li>
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
          <div class="page-title">Announcements</div>
          <div class="page-sub">Faculty &amp; university updates</div>
        </div>
      </div>
      <div class="topbar-right">
        <button class="dark-mode-toggle" id="darkModeToggle" title="Toggle Dark Mode">
          <i class="bi bi-moon-stars-fill" id="darkModeIcon"></i>
        </button>
        <a href="announcements.php" class="notif-btn"><i class="bi bi-bell-fill"></i><span class="notif-dot"></span></a>
        <a href="profile.php" class="d-flex align-items-center gap-2" style="text-decoration:none;">
  <div class="topbar-avatar user-initials">PY</div>
  <div class="d-none d-sm-block">
    <div class="t-name" id="topbarName">Puteri Yasmin</div>
    <div class="t-role">Student</div>
  </div>
</a>
      </div>
    </div>

    <div class="page-content">

      <!-- Summary cards -->
      <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
          <div class="stat-card s-primary">
            <div class="stat-icon" style="background:rgba(79,70,229,.1);"><i class="bi bi-bell-fill text-primary-c"></i></div>
            <div class="stat-value text-primary-c">8</div>
            <div class="stat-label">Total</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-card s-info">
            <div class="stat-icon" style="background:rgba(6,182,212,.1);"><i class="bi bi-envelope-fill" style="color:var(--info);"></i></div>
            <div class="stat-value" style="color:var(--info);">3</div>
            <div class="stat-label">Unread</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-card s-accent">
            <div class="stat-icon" style="background:rgba(245,158,11,.1);"><i class="bi bi-building-fill" style="color:var(--accent);"></i></div>
            <div class="stat-value" style="color:var(--accent);">3</div>
            <div class="stat-label">Faculty</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-card s-success">
            <div class="stat-icon" style="background:rgba(16,185,129,.1);"><i class="bi bi-mortarboard-fill" style="color:var(--success);"></i></div>
            <div class="stat-value" style="color:var(--success);">5</div>
            <div class="stat-label">Academic</div>
          </div>
        </div>
      </div>

      <!-- Filter & Search -->
      <div class="d-flex align-items-center gap-2 flex-wrap mb-3">
        <div class="search-wrap" style="max-width:320px;flex:1;">
          <i class="bi bi-search"></i>
          <input type="text" class="search-input" id="annSearch" placeholder="Search announcements…" oninput="filterAnn()" />
        </div>
        <div class="d-flex gap-2 flex-wrap">
          <button class="cat-pill active" data-cat="" onclick="setCat(this,'')">All</button>
          <button class="cat-pill" data-cat="Academic" onclick="setCat(this,'Academic')">📚 Academic</button>
          <button class="cat-pill" data-cat="Faculty"  onclick="setCat(this,'Faculty')">🏛️ Faculty</button>
          <button class="cat-pill" data-cat="IT"       onclick="setCat(this,'IT')">💻 IT &amp; System</button>
          <button class="cat-pill" data-cat="Event"    onclick="setCat(this,'Event')">🎉 Events</button>
        </div>
        <button class="sem-btn ms-auto" onclick="markAllRead()" style="font-size:.78rem;">
          <i class="bi bi-check2-all me-1"></i>Mark all read
        </button>
      </div>

      <!-- Announcements list -->
      <div id="annList" class="d-flex flex-column gap-3"></div>

      <!-- Empty state -->
      <div id="annEmpty" style="display:none;" class="text-center py-5">
        <div style="font-size:3rem;">📭</div>
        <h6 class="mt-2 text-muted-c">No announcements found</h6>
        <p class="fs-xs text-muted-c">Try adjusting your search or category.</p>
      </div>

    </div>

    <footer class="site-footer">
      <div>&copy; 2026 EduGate &nbsp;·&nbsp; Universiti Teknologi MARA &nbsp;·&nbsp; IMS566 Individual Project</div>
      <div class="footer-links"><a href="#">Help</a><a href="#">Privacy</a><a href="#">Contact IT</a></div>
    </footer>
  </div>

  <!-- Detail Modal -->
  <div class="modal fade" id="annModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content" style="border-radius:14px;border:none;font-family:'Roboto',sans-serif;background:var(--card-bg);color:var(--text);">
        <div class="modal-header border-0" style="border-radius:14px 14px 0 0;padding:1.2rem 1.5rem;" id="mAnnHeader">
          <div>
            <h6 class="modal-title fw-bold text-white mb-0" id="mAnnTitle">Title</h6>
            <div class="fs-xs mt-1" style="color:rgba(255,255,255,.7);" id="mAnnMeta">—</div>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <p id="mAnnBody" style="font-size:.9rem;line-height:1.75;color:var(--text);">—</p>
        </div>
        <div class="modal-footer border-0 pt-0">
          <button class="sem-btn" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    let ANNOUNCEMENTS = [
      { id:1, title:'IMS566 Assignment 2 Deadline Extended', cat:'Academic', icon:'📌', color:'#ef4444', from:'Dr. Siti Norzalina', date:'2 hours ago', unread:true,
        body:'The submission deadline for the IMS566 Individual Project (Assignment 2) has been officially extended to 11 May 2026. Please ensure your GitHub Pages live link and GitHub Repository link are submitted through Moodle before 11:59 PM. Late submissions will not be accepted unless prior approval has been given.' },
      { id:2, title:'Mid-Term Exam Schedule Released', cat:'Academic', icon:'📝', color:'#4f46e5', from:'Academic Office', date:'Yesterday', unread:true,
        body:'Mid-term examinations for Semester 3 Session 2025/2026 will be held during Week 9 (19–23 May 2026). The full timetable is now available on the Academic Portal. Please check your allocated seats and examination venues carefully. Bring your student ID card and do not bring any electronic devices into the examination hall.' },
      { id:3, title:"Dean's List Nominations Open", cat:'Academic', icon:'🎓', color:'#10b981', from:'Faculty Office', date:'2 days ago', unread:true,
        body:"Students who have achieved a CGPA of 3.50 and above in Semester 2 Session 2025/2026 are eligible to be nominated for the Dean's List award. Please visit the Faculty Office to collect the nomination form or download it from the student portal. Completed forms must be submitted by 15 May 2026." },
      { id:4, title:'Moodle Maintenance This Weekend', cat:'IT', icon:'🔧', color:'#f59e0b', from:'IT Unit', date:'3 days ago', unread:false,
        body:'Scheduled maintenance for the Moodle Learning Management System will take place on Saturday, 26 April 2026 from 12:00 AM to 6:00 AM. During this period, Moodle will be completely inaccessible. Please plan your submissions and downloads accordingly. We apologise for any inconvenience caused.' },
      { id:5, title:'Free Seminar: AI in Education', cat:'Event', icon:'🤖', color:'#06b6d4', from:'Faculty of CS', date:'4 days ago', unread:false,
        body:'You are invited to a free seminar on "Artificial Intelligence in Education" organised by the Faculty of Computer and Mathematical Sciences. The seminar will be held on 10 May 2026 at 2:00 PM in Dewan Kuliah 1. Industry speakers from leading tech companies will share insights on AI tools for academic productivity. Registration is open to all students.' },
      { id:6, title:'Library Extended Hours During Exam Week', cat:'Faculty', icon:'📚', color:'#ec4899', from:'UiTM Library', date:'5 days ago', unread:false,
        body:'The UiTM Puncak Perdana Library (PTAR) will be operating with extended hours starting Week 8 until the end of the examination period. New operating hours will be Monday–Friday: 7:00 AM – 12:00 AM, Saturday–Sunday: 8:00 AM – 10:00 PM. Study rooms can be booked online through the library portal.' },
      { id:7, title:'Campus Wi-Fi Upgrade Notice', cat:'IT', icon:'📶', color:'#f59e0b', from:'IT Unit', date:'1 week ago', unread:false,
        body:'The campus Wi-Fi infrastructure will be upgraded progressively across all faculties over the coming weeks. During the upgrade, you may experience temporary disconnections in your area. The upgrade aims to improve network speed and coverage for all students and staff. Thank you for your patience.' },
      { id:8, title:'Student Leadership Programme 2026', cat:'Event', icon:'🏆', color:'#4f46e5', from:"Student Affairs", date:'1 week ago', unread:false,
        body:'Applications are now open for the UiTM Student Leadership Programme 2026. This intensive 3-day programme is designed for students who wish to develop their leadership, communication, and teamwork skills. Open to all full-time students with a minimum CGPA of 2.75. Apply via the Student Affairs portal before 30 April 2026.' },
    ];

    let currentCat = '', filteredAnn = [...ANNOUNCEMENTS];

    const catColors = {
      Academic: '#4f46e5', Faculty: '#10b981', IT: '#f59e0b', Event: '#ec4899'
    };

    function renderAnn(data) {
    // Update unread count card
    var unreadCount = ANNOUNCEMENTS.filter(function(a) { return a.unread; }).length;
    var unreadEl = document.querySelector('.stat-value[style*="color:var(--info)"]');
  if (unreadEl) unreadEl.textContent = unreadCount;
      const list = document.getElementById('annList');
      if (!data.length) {
        list.innerHTML = '';
        document.getElementById('annEmpty').style.display = 'block';
        return;
      }
      document.getElementById('annEmpty').style.display = 'none';
      list.innerHTML = data.map(a => `
        <div class="ann-card ${a.unread ? 'unread' : ''}" onclick="openAnn(${a.id})" id="annCard${a.id}">
          ${a.unread ? '<div class="ann-badge-unread"></div>' : ''}
          <div class="ann-card-icon" style="background:${a.color}18;">
            <span style="font-size:1.4rem;">${a.icon}</span>
          </div>
          <div class="flex-grow-1">
            <div class="d-flex align-items-start justify-content-between gap-2">
              <div class="ann-card-title">${a.title}</div>
              <span class="pill fs-xs flex-shrink-0" style="background:${catColors[a.cat]}18;color:${catColors[a.cat]};">${a.cat}</span>
            </div>
            <div class="ann-card-body">${a.body.slice(0,130)}…</div>
            <div class="ann-card-meta">
              <span><i class="bi bi-person-fill me-1"></i>${a.from}</span>
              <span><i class="bi bi-clock me-1"></i>${a.date}</span>
              ${a.unread ? '<span style="color:var(--primary);font-weight:700;"><i class="bi bi-circle-fill me-1" style="font-size:.5rem;"></i>Unread</span>' : ''}
            </div>
          </div>
        </div>`).join('');
    }

    function filterAnn() {
      const q = document.getElementById('annSearch').value.toLowerCase();
      filteredAnn = ANNOUNCEMENTS.filter(a =>
        (!currentCat || a.cat === currentCat) &&
        (!q || a.title.toLowerCase().includes(q) || a.body.toLowerCase().includes(q) || a.from.toLowerCase().includes(q))
      );
      renderAnn(filteredAnn);
    }

    function setCat(btn, cat) {
      currentCat = cat;
      document.querySelectorAll('.cat-pill').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      filterAnn();
    }

    function openAnn(id) {
  const a = ANNOUNCEMENTS.find(x => x.id === id); if (!a) return;
  // Mark as read
  a.unread = false;

  var unreadEl = document.querySelector('.stat-value[style*="color:var(--info)"]');
  if (unreadEl) unreadEl.textContent = ANNOUNCEMENTS.filter(function(x) { return x.unread; }).length;

  const card = document.getElementById(`annCard${id}`);
      if (card) {
        card.classList.remove('unread');
        card.querySelector('.ann-badge-unread')?.remove();
      }
      document.getElementById('mAnnHeader').style.background = a.color;
      document.getElementById('mAnnTitle').textContent = a.title;
      document.getElementById('mAnnMeta').textContent  = `${a.from} · ${a.date} · ${a.cat}`;
      document.getElementById('mAnnBody').textContent  = a.body;
      new bootstrap.Modal(document.getElementById('annModal')).show();
    }

    function markAllRead() {
  ANNOUNCEMENTS.forEach(function(a) { a.unread = false; });
  filterAnn();
  showToast('All announcements marked as read.', 'success');
}

    renderAnn(ANNOUNCEMENTS);
  </script>

<!-- logout function -->
<script>
    // Backup logout function
    if (typeof logout === "undefined") {
      function logout() {
        sessionStorage.clear();
        window.location.href = "index.php";
      }
    }
  </script>

</body>
</html>

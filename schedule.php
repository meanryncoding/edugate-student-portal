<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="EduGate – Weekly class timetable and upcoming deadlines." />
  <meta name="author" content="IMS566 Individual Project" />
  <title>Schedule – EduGate</title>

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
          <div class="page-title">Weekly Schedule</div>
          <div class="page-sub">Semester 3 &nbsp;·&nbsp; Session 2025/2026</div>
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

            <!-- Week info + colour legend -->
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
        <span class="pill pill-primary"><i class="bi bi-calendar-week me-1"></i>Semester 3 &nbsp;·&nbsp; Session 2025/2026</span>
        <div class="d-flex flex-wrap gap-3 fs-xs fw-bold">
          <span><span style="display:inline-block;width:9px;height:9px;border-radius:2px;background:#4f46e5;margin-right:5px;"></span>IMS511</span>
          <span><span style="display:inline-block;width:9px;height:9px;border-radius:2px;background:#10b981;margin-right:5px;"></span>IMS555</span>
          <span><span style="display:inline-block;width:9px;height:9px;border-radius:2px;background:#06b6d4;margin-right:5px;"></span>LCC402</span>
          <span><span style="display:inline-block;width:9px;height:9px;border-radius:2px;background:#f59e0b;margin-right:5px;"></span>TMC451</span>
          <span><span style="display:inline-block;width:9px;height:9px;border-radius:2px;background:#ec4899;margin-right:5px;"></span>IMS560</span>
        </div>
      </div>

      <!-- Timetable -->
      <div class="card-box mb-4">
        <div class="card-box-header">
          <h6><i class="bi bi-table me-2 text-primary-c"></i>Weekly Timetable</h6>
          <span class="fs-xs text-muted-c">Click any class for details</span>
        </div>
        <div class="card-box-body p-0">
          <div class="timetable-wrap">
            <table class="timetable">
              <thead>
                <tr>
                  <th style="width:82px;">Time</th>
                  <th id="hMon">Monday</th>
                  <th id="hTue">Tuesday</th>
                  <th id="hWed">Wednesday</th>
                  <th id="hThu">Thursday</th>
                  <th id="hFri">Friday</th>
                </tr>
              </thead>
              <tbody>
                <!-- 8:00 – 9:00 -->
                <tr>
                  <td class="time-label">8:00<br/>9:00</td>
                  <td></td><td></td><td></td><td></td><td></td>
                </tr>

                <!-- 9:00 – 11:00 -->
                <tr>
                  <td class="time-label">9:00<br/>11:00</td>
                  <!-- Monday: IMS511 -->
                  <td>
                    <div class="class-block cb-ims" onclick="showClass('IMS511','Problem Solving and Program Design 2','Dr. Hafiza Abas','Lab CS03','9:00–11:00 AM','Lecture + Lab')">
                      <div class="cb-code">IMS511</div>
                      <div class="cb-info">Prob. Solving &amp; Prog. Design 2</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Lab CS03</div>
                    </div>
                  </td>
                  <!-- Tuesday: IMS555 -->
                  <td>
                    <div class="class-block cb-csc1" onclick="showClass('IMS555','Decision Theory','Dr. Rosmawati Othman','Room DK2','9:00–11:00 AM','Lecture')">
                      <div class="cb-code">IMS555</div>
                      <div class="cb-info">Decision Theory</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Room DK2</div>
                    </div>
                  </td>
                  <!-- Wednesday: IMS511 Lab -->
                  <td>
                    <div class="class-block cb-ims" onclick="showClass('IMS511','Problem Solving and Program Design 2','Dr. Hafiza Abas','Lab CS03','9:00–11:00 AM','Lab')">
                      <div class="cb-code">IMS511</div>
                      <div class="cb-info">Prob. Solving &amp; Prog. Design 2</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Lab CS03</div>
                    </div>
                  </td>
                  <!-- Thursday: IMS555 Tutorial -->
                  <td>
                    <div class="class-block cb-csc1" onclick="showClass('IMS555','Decision Theory','Dr. Rosmawati Othman','Room DK2','9:00–11:00 AM','Tutorial')">
                      <div class="cb-code">IMS555</div>
                      <div class="cb-info">Decision Theory</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Room DK2</div>
                    </div>
                  </td>
                  <!-- Friday: IMS560 -->
                  <td>
                    <div class="class-block cb-mgt" onclick="showClass('IMS560','Advanced Database Management System','Dr. Azman Yasin','Lab CS07','9:00 AM–12:00 PM','Lecture + Lab')">
                      <div class="cb-code">IMS560</div>
                      <div class="cb-info">Adv. Database Mgmt</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Lab CS07</div>
                    </div>
                  </td>
                </tr>

                <!-- 11:00 – 12:00 -->
                <tr>
                  <td class="time-label">11:00<br/>12:00</td>
                  <td></td><td></td><td></td><td></td><td></td>
                </tr>

                <!-- Lunch Break -->
                <tr>
                  <td class="time-label" style="color:#94a3b8;">12:00<br/>1:00</td>
                  <td colspan="5" class="class-block cb-break" style="text-align:center;">
                    🍚 &nbsp; Lunch Break &nbsp; (12:00 PM – 1:00 PM)
                  </td>
                </tr>

                <!-- 1:00 – 2:00 -->
                <tr>
                  <td class="time-label">1:00<br/>2:00</td>
                  <td></td><td></td><td></td><td></td><td></td>
                </tr>

                <!-- 2:00 – 4:00 -->
                <tr>
                  <td class="time-label">2:00<br/>4:00</td>
                  <!-- Monday: LCC402 -->
                  <td>
                    <div class="class-block cb-csc2" onclick="showClass('LCC402','English for Oral Reporting','Ms. Norizan Md Nor','Room DK4','2:00–4:00 PM','Lecture')">
                      <div class="cb-code">LCC402</div>
                      <div class="cb-info">English for Oral Reporting</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Room DK4</div>
                    </div>
                  </td>
                  <td></td>
                  <!-- Wednesday: TMC451 -->
                  <td>
                    <div class="class-block cb-mat" onclick="showClass('TMC451','Introductory Mandarin (Level II)','Mr. Lee Chong Wei','Room B102','2:00–4:00 PM','Lecture')">
                      <div class="cb-code">TMC451</div>
                      <div class="cb-info">Mandarin Level II</div>
                      <div class="cb-info"><i class="bi bi-geo-alt"></i> Room B102</div>
                    </div>
                  </td>
                  <td></td><td></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Deadlines + Today -->
      <div class="row g-3">
        <!-- Upcoming Deadlines -->
        <div class="col-12 col-lg-6">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-calendar-event-fill me-2" style="color:var(--pink);"></i>Upcoming Deadlines</h6>
            </div>
            <div class="card-box-body">
              <div class="event-row">
                <div class="event-dot" style="background:#4f46e5;"></div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <span class="fs-sm fw-bold">IMS566 – Individual Project</span>
                    <span class="pill pill-danger fs-xs">11 May</span>
                  </div>
                  <div class="fs-xs text-muted-c mt-1">Submit GitHub Pages link + repository on Moodle</div>
                </div>
              </div>
              <div class="event-row">
                <div class="event-dot" style="background:#4f46e5;"></div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <span class="fs-sm fw-bold">IMS511 – Lab Assignment 2</span>
                    <span class="pill pill-accent fs-xs">8 May</span>
                  </div>
                  <div class="fs-xs text-muted-c mt-1">Algorithm implementation using Python</div>
                </div>
              </div>
              <div class="event-row">
                <div class="event-dot" style="background:#10b981;"></div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <span class="fs-sm fw-bold">IMS555 – Decision Case Study</span>
                    <span class="pill pill-accent fs-xs">6 May</span>
                  </div>
                  <div class="fs-xs text-muted-c mt-1">Group case study report submission</div>
                </div>
              </div>
              <div class="event-row">
                <div class="event-dot" style="background:#ec4899;"></div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <span class="fs-sm fw-bold">IMS560 – Database Project</span>
                    <span class="pill pill-primary fs-xs">3 May</span>
                  </div>
                  <div class="fs-xs text-muted-c mt-1">Advanced database design and implementation</div>
                </div>
              </div>
              <div class="event-row">
                <div class="event-dot" style="background:#f59e0b;"></div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <span class="fs-sm fw-bold">TMC451 – Oral Test</span>
                    <span class="pill pill-success fs-xs">2 May</span>
                  </div>
                  <div class="fs-xs text-muted-c mt-1">Mandarin Level II oral examination</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Today's Classes -->
        <div class="col-12 col-lg-6">
          <div class="card-box h-100">
            <div class="card-box-header">
              <h6><i class="bi bi-sun-fill me-2" style="color:var(--accent);"></i>Today's Classes</h6>
              <span class="fs-xs text-muted-c" id="todayDate"></span>
            </div>
            <div class="card-box-body" id="todayPanel"></div>
          </div>
        </div>
      </div>

    </div>

    <!-- Footer -->
    <footer class="site-footer">
      <div>&copy; 2026 EduGate &nbsp;·&nbsp; Universiti Teknologi MARA &nbsp;·&nbsp; IMS566 Individual Project</div>
      <div class="footer-links"><a href="#">Help</a><a href="#">Privacy</a><a href="#">Contact IT</a></div>
    </footer>
  </div>

  <!-- Class Detail Modal -->
  <div class="modal fade" id="classModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius:14px;border:none;font-family:'Roboto',sans-serif;background:var(--card-bg);color:var(--text);">
        <div class="modal-header border-0" style="background:var(--primary);border-radius:14px 14px 0 0;">
          <h6 class="modal-title text-white fw-bold" id="mCode">Class</h6>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <p class="fw-bold mb-3" id="mName">Name</p>
          <div class="row g-3 fs-sm">
            <div class="col-6"><div class="fs-xs text-muted-c fw-bold text-uppercase mb-1">Lecturer</div><div id="mLect">—</div></div>
            <div class="col-6"><div class="fs-xs text-muted-c fw-bold text-uppercase mb-1">Venue</div><div id="mVenue">—</div></div>
            <div class="col-6"><div class="fs-xs text-muted-c fw-bold text-uppercase mb-1">Time</div><div id="mTime">—</div></div>
            <div class="col-6"><div class="fs-xs text-muted-c fw-bold text-uppercase mb-1">Type</div><div id="mType">—</div></div>
          </div>
        </div>
        <div class="modal-footer border-0 pt-0">
          <a href="courses.html" class="sem-btn active">View Course →</a>
          <button class="sem-btn" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    /* Show class modal  */
    function showClass(code, name, lect, venue, time, type) {
      document.getElementById('mCode').textContent  = code;
      document.getElementById('mName').textContent  = name;
      document.getElementById('mLect').textContent  = lect;
      document.getElementById('mVenue').textContent = venue;
      document.getElementById('mTime').textContent  = time;
      document.getElementById('mType').textContent  = type;
      new bootstrap.Modal(document.getElementById('classModal')).show();
    }

    /* Highlight today's column */
    const todayNum = new Date().getDay();
    const hdrMap   = { 1:'hMon', 2:'hTue', 3:'hWed', 4:'hThu', 5:'hFri' };
    if (hdrMap[todayNum]) {
      const h = document.getElementById(hdrMap[todayNum]);
      h.classList.add('t-today');
      h.textContent += ' ★';
    }

    /*  Today's date  */
    document.getElementById('todayDate').textContent =
      new Date().toLocaleDateString('en-MY', { weekday:'long', year:'numeric', month:'long', day:'numeric' });

    /* Today's classes  */
    const todaySched = {
      1: [ // Monday
        { code:'IMS511', name:'Problem Solving and Program Design 2', time:'9:00–11:00 AM', venue:'Lab CS03',  color:'#4f46e5' },
        { code:'LCC402', name:'English for Oral Reporting',           time:'2:00–4:00 PM',  venue:'Room DK4', color:'#06b6d4' },
      ],
      2: [ // Tuesday
        { code:'IMS555', name:'Decision Theory', time:'9:00–11:00 AM', venue:'Room DK2', color:'#10b981' },
      ],
      3: [ // Wednesday
        { code:'IMS511', name:'Problem Solving and Program Design 2', time:'9:00–11:00 AM', venue:'Lab CS03',   color:'#4f46e5' },
        { code:'TMC451', name:'Introductory Mandarin (Level II)',      time:'2:00–4:00 PM',  venue:'Room B102', color:'#f59e0b' },
      ],
      4: [ // Thursday
        { code:'IMS555', name:'Decision Theory', time:'9:00–11:00 AM', venue:'Room DK2', color:'#10b981' },
      ],
      5: [ // Friday
        { code:'IMS560', name:'Advanced Database Management System', time:'9:00 AM–12:00 PM', venue:'Lab CS07', color:'#ec4899' },
      ],
    };

    const panel = document.getElementById('todayPanel');
    const list  = todaySched[todayNum];
    if (list && list.length) {
      panel.innerHTML = list.map(cl => `
        <div class="event-row mb-2">
          <div class="event-dot" style="background:${cl.color};"></div>
          <div class="flex-grow-1">
            <div class="d-flex justify-content-between align-items-center">
              <span class="fs-sm fw-bold">${cl.code}</span>
              <span class="pill pill-success fs-xs">${cl.time}</span>
            </div>
            <div class="fs-xs text-muted-c mt-1">${cl.name}</div>
            <div class="fs-xs text-muted-c mt-1"><i class="bi bi-geo-alt me-1"></i>${cl.venue}</div>
          </div>
        </div>`).join('');
    } else {
      panel.innerHTML = `
        <div class="text-center py-4">
          <div style="font-size:2.5rem;">🎉</div>
          <div class="fs-sm fw-bold mt-2">No classes today!</div>
          <div class="fs-xs text-muted-c mt-1">Enjoy your free day.</div>
        </div>`;
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

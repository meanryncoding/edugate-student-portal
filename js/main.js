
/* ── Auth Guard ──────────────────────────────────────────────── */
function requireAuth() {
  if (!sessionStorage.getItem('edu_logged_in')) {
    window.location.href = 'index.html';
  }
}

function getCurrentUser() {
  return {
    name:      sessionStorage.getItem('edu_name')      || 'Puteri Yasmin',
    studentId: sessionStorage.getItem('edu_studentId') || '2024123456',
    email:     sessionStorage.getItem('edu_email')     || 'student@uitm.edu.my',
    initials:  sessionStorage.getItem('edu_initials')  || 'PY',
  };
}

/* ── Logout ──────────────────────────────────────────────────── */
function logout() {
  sessionStorage.clear();
  window.location.href = 'index.html';
}

/* ── Populate User UI ────────────────────────────────────────── */
function populateUser() {
  var u = getCurrentUser();

  function capitalizeName(name) {
    return name.replace(/\b\w/g, function(c) { return c.toUpperCase(); });
  }

  document.querySelectorAll('.user-initials').forEach(function(el) {
    el.textContent = u.initials;
  });
  var sn = document.getElementById('sidebarName'); if (sn) sn.textContent = capitalizeName(u.name);
  var si = document.getElementById('sidebarId');   if (si) si.textContent = u.studentId;
  var tn = document.getElementById('topbarName');  if (tn) tn.textContent = capitalizeName(u.name.split(' ')[0]);
}

/* ── Active Nav ──────────────────────────────────────────────── */
function setActiveNav() {
  var page = window.location.pathname.split('/').pop() || 'dashboard.html';
  document.querySelectorAll('.sidebar-nav a').forEach(function(a) {
    a.classList.toggle('active', a.getAttribute('href') === page);
  });
}

/* ── Sidebar Toggle ──────────────────────────────────────────── */
/* ── Sidebar Toggle ──────────────────────────────────────────── */
function initSidebar() {
  var sidebar = document.getElementById('sidebar');
  var content = document.getElementById('content');
  var btn     = document.getElementById('hamburgerBtn');
  if (!sidebar || !btn) return;

  btn.addEventListener('click', function() {
    sidebar.classList.toggle('collapsed');
    content.classList.toggle('expanded');
  });
}


/* ── Toast Notification ──────────────────────────────────────── */
function showToast(msg, type) {
  type = type || 'info';
  var colors = { success:'#10b981', error:'#ef4444', info:'#4f46e5', warn:'#f59e0b' };
  var t = document.createElement('div');
  t.style.cssText = 'position:fixed;bottom:1.5rem;right:1.5rem;z-index:9999;background:' + (colors[type] || colors.info) + ';color:#fff;padding:.7rem 1.2rem;border-radius:10px;font-family:Roboto,sans-serif;font-size:.85rem;font-weight:500;box-shadow:0 8px 24px rgba(0,0,0,.2);max-width:300px;';
  t.textContent = msg;
  document.body.appendChild(t);
  setTimeout(function() {
    t.style.cssText += 'opacity:0;transition:opacity .3s ease;';
    setTimeout(function() { t.remove(); }, 300);
  }, 3500);
}

/* ── DOM Ready ───────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('sidebar')) {
    requireAuth();
    populateUser();
    setActiveNav();
    initSidebar();
  }
});
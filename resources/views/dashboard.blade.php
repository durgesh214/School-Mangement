<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SMS — Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: #f1f5f9;
      color: #1e293b;
    }
  </style>
</head>
<body>

  <!-- ==================== TOPBAR / HEADER ==================== -->
  <header style="position: fixed; top: 0; left: 0; right: 0; height: 64px; background: white; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: space-between; padding: 0 24px; z-index: 1000; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
    <div style="font-size: 1.8rem; font-weight: bold; color: #6366f1;">SMS</div>
    <div style="display: flex; align-items: center; gap: 24px;">
      <i class="fa fa-bell" style="font-size: 1.3rem; color: #64748b; cursor: pointer;"></i>
      <i class="fa fa-cog" style="font-size: 1.3rem; color: #64748b; cursor: pointer;"></i>
      <div style="width: 38px; height: 38px; background: #6366f1; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.1rem;">
        ST
      </div>
    </div>
  </header>

  <!-- ==================== LAYOUT WRAPPER ==================== -->
  <div style="display: flex; min-height: 100vh; padding-top: 64px;">

    <!-- ==================== SIDEBAR ==================== -->
    <nav style="width: 260px; background: #0f172a; color: #cbd5e1; position: fixed; top: 64px; bottom: 0; left: 0; display: flex; flex-direction: column; overflow-y: auto;">

      <div style="padding: 24px 24px 8px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.8px; color: #94a3b8;">
        MAIN
      </div>

      <a href="/dashboard" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: white; text-decoration: none; background: #1e293b;">
        <i class="fa fa-home" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Dashboard
      </a>
      <!-- <a href="/schools" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-school" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Schools
      </a> -->
      <a href="/students" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-user-graduate" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Students
      </a>
      <a href="/teachers" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-chalkboard-teacher" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Teachers
      </a>

      <div style="padding: 32px 24px 8px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.8px; color: #94a3b8;">
        ACADEMIC
      </div>

      <a href="/subjects" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-book" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Subjects
      </a>
      <a href="/attendances" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-check-square" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Attendance
      </a>
      <a href="/exams" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-file-alt" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Exams
      </a>
      <a href="/results" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-chart-bar" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
        Results
      </a>


      <a href="/classes" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-chart-bar" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
       Classes
      </a>
      <a href="/fees" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-chart-bar" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
       Fees
      </a><a href="/library" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-chart-bar" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
       Library
      </a><a href="/timetables" class="sidebar-link" style="display: flex; align-items: center; gap: 16px; padding: 14px 24px; color: #cbd5e1; text-decoration: none;">
        <i class="fa fa-chart-bar" style="width: 24px; text-align: center; font-size: 1.2rem;"></i>
       Timetables
      </a>


      <!-- LOGOUT -->
      <div style="margin-top: auto; padding: 16px 24px; border-top: 1px solid #1e3b2d;">
        <a href="{{ route('logout') }}" style="display: flex; align-items: center; gap: 16px; padding: 12px 16px; color: #f87171; text-decoration: none; font-weight: 500; border-radius: 8px; transition: 0.2s;">
          <i class="fa fa-sign-out-alt" style="font-size: 1.2rem;"></i>
          Logout
        </a>
      </div>

    </nav>

    <!-- ==================== MAIN CONTENT AREA ==================== -->
    <main style="margin-left: 260px; padding: 32px; width: 100%;">
      
      <!-- Yeh div sirf content change hoga -->
      <div id="main-content">

        <!-- <div style="margin-bottom: 32px;">
          <h1 style="margin: 0; font-size: 2.4rem; color: #0f172a;">Dashboard</h1>
          <p style="margin: 8px 0 0; color: #64748b; font-size: 1.05rem;">
            Welcome back — here's what's happening today.
          </p>
        </div> -->
        
        <!-- Stats Cards -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); gap: 10px;">
          <div style="background: white; border-radius: 10px; padding: 18px 20px; box-shadow: 0 3px 6px rgba(0,0,0,0.08);">
            <div style="color: #64748b; font-size: 0.9rem; margin-bottom: 6px;">Total Schools</div>
            <div style="font-size: 2.4rem; font-weight: 700; color: #0f172a; line-height: 1;">24</div>
            <div style="color: #10b981; font-size: 0.875rem; margin-top: 6px;">↑ 2 this year</div>
          </div>
          <div style="background: white; border-radius: 10px; padding: 18px 20px; box-shadow: 0 3px 6px rgba(0,0,0,0.08);">
            <div style="color: #64748b; font-size: 0.9rem; margin-bottom: 6px;">Total Students</div>
            <div style="font-size: 2.4rem; font-weight: 700; color: #0f172a; line-height: 1;">3,812</div>
            <div style="color: #10b981; font-size: 0.875rem; margin-top: 6px;">↑ 148 enrolled</div>
          </div>
          <div style="background: white; border-radius: 10px; padding: 18px 20px; box-shadow: 0 3px 6px rgba(0,0,0,0.08);">
            <div style="color: #64748b; font-size: 0.9rem; margin-bottom: 6px;">Total Teachers</div>
            <div style="font-size: 2.4rem; font-weight: 700; color: #0f172a; line-height: 1;">216</div>
            <div style="color: #10b981; font-size: 0.875rem; margin-top: 6px;">↑ 8 new hires</div>
          </div>
          <div style="background: white; border-radius: 10px; padding: 18px 20px; box-shadow: 0 3px 6px rgba(0,0,0,0.08);">
            <div style="color: #64748b; font-size: 0.9rem; margin-bottom: 6px;">Avg. Attendance</div>
            <div style="font-size: 2.4rem; font-weight: 700; color: #0f172a; line-height: 1;">91%</div>
            <div style="color: #10b981; font-size: 0.875rem; margin-top: 6px;">↑ 3% vs last term</div>
          </div>
        </div>

      </div> 

    </main>
  </div>
  
   

  
  <!-- ==================== JAVASCRIPT  ==================== -->
  <script>
    function loadContent(url) {
      history.pushState({}, '', url);

      fetch(url, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'   
        }
      })
      .then(response => {
        if (!response.ok) throw new Error('Network error');
        return response.text();
      })
      .then(html => {
        document.getElementById('main-content').innerHTML = html;
        window.scrollTo({ top: 0, behavior: 'smooth' });
      })
      .catch(err => {
        console.error(err);
        alert('Content load nahi ho paya. Page refresh kar ke try karo.');
      });
    }

    
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.sidebar-link').forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          loadContent(this.getAttribute('href'));
        });
      });
    });

    
    window.addEventListener('popstate', function() {
      loadContent(location.pathname);
    });
  </script>

</body>
</html>
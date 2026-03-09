<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SMS — Dashboard</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!-- TOPBAR -->
  <header class="topbar">
    <span class="topbar-logo">SMS</span>
    <div class="topbar-right">
      <i class="fa fa-bell icon-btn"></i>
      <i class="fa fa-cog icon-btn"></i>
      <div class="avatar">ST</div>
    </div>
  </header>
  <div class="layout">
    <!-- SIDEBAR -->
    <nav class="sidebar">
      <span class="sidebar-section">Main</span>
      <a href="/dashboard" class="active"><i class="fa fa-home"></i> Dashboard</a>
      <a href="/schools"><i class="fa fa-school"></i> Schools</a>
      <a href="/students"><i class="fa fa-user-graduate"></i> Students</a>
      <a href="/teachers"><i class="fa fa-chalkboard-teacher"></i> Teachers</a>

      <span class="sidebar-section">Academic</span>
      <a href="/subjects"><i class="fa fa-book"></i> Subjects</a>
      <a href="/attendances"><i class="fa fa-check-square"></i> Attendance</a>
      <a href="/exams"><i class="fa fa-file-alt"></i> Exams</a>
      <a href="/results"><i class="fa fa-chart-bar"></i> Results</a>
    </nav>
    <!-- MAIN CONTENT -->
    <main class="main">
      <div class="page-header">
        <h1>Dashboard</h1>
        <p>Welcome back — here's what's happening today.</p>
      </div>
      <!-- Stat Strip -->
      <div class="stat-strip">
        <div class="stat-card">
          <span class="label">Total Schools</span>
          <span class="value">24</span>
          <span class="delta">↑ 2 this year</span>
        </div>
        <div class="stat-card">
          <span class="label">Total Students</span>
          <span class="value">3,812</span>
          <span class="delta">↑ 148 enrolled</span>
        </div>
        <div class="stat-card">
          <span class="label">Total Teachers</span>
          <span class="value">216</span>
          <span class="delta">↑ 8 new hires</span>
        </div>
        <div class="stat-card">
          <span class="label">Avg. Attendance</span>
          <span class="value">91%</span>
          <span class="delta">↑ 3% vs last term</span>
        </div>
      </div>  

      
    </main>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timetable List</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; padding: 40px; }

        .header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; }
        .header h2 { font-size: 28px; font-weight: 800; color: #0f172a; }
        .header p { color: #64748b; font-size: 14px; margin-top: 4px; }

        .btn-add {
            background: #2563eb; color: #fff; border: none;
            padding: 11px 24px; border-radius: 8px; cursor: pointer;
            font-size: 14px; font-weight: 700; text-decoration: none;
            box-shadow: 0 4px 14px rgba(37,99,235,0.35);
        }
        .btn-add:hover { background: #1d4ed8; }

        .alert-success {
            background: #dcfce7; color: #166534;
            border: 1px solid #bbf7d0; padding: 12px 18px;
            border-radius: 8px; margin-bottom: 20px;
            font-weight: 600; font-size: 14px;
        }

        .table-wrap {
            background: #fff; border-radius: 14px;
            overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }

        table { width: 100%; border-collapse: collapse; }
        thead tr { background: #1e293b; }
        thead th {
            padding: 14px 18px; text-align: left;
            color: #e2e8f0; font-weight: 600;
            font-size: 13px; letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        tbody tr:nth-child(even) { background: #f8fafc; }
        tbody tr:nth-child(odd)  { background: #ffffff; }
        tbody tr { border-bottom: 1px solid #e2e8f0; }
        tbody tr:hover { background: #eff6ff; }
        tbody td { padding: 13px 18px; color: #374151; font-size: 14px; }

        .badge-class {
            background: #dbeafe; color: #1e40af;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 700; font-size: 12px;
        }
        .badge-section {
            background: #f3e8ff; color: #6b21a8;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 700; font-size: 12px;
        }
        .badge-day {
            background: #fef9c3; color: #854d0e;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 700; font-size: 12px;
        }
        .badge-time {
            background: #dcfce7; color: #166534;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 600; font-size: 12px;
        }

        .btn-edit {
            background: #f59e0b; color: #fff; border: none;
            padding: 7px 14px; border-radius: 6px; cursor: pointer;
            font-weight: 600; font-size: 13px;
            text-decoration: none; margin-right: 6px;
        }
        .btn-edit:hover { background: #d97706; }

        .btn-delete {
            background: #ef4444; color: #fff; border: none;
            padding: 7px 14px; border-radius: 6px;
            cursor: pointer; font-weight: 600; font-size: 13px;
        }
        .btn-delete:hover { background: #dc2626; }
    </style>
</head>
<body>

    <div class="header">
        <div>
            <h2>🗓️ Timetable List</h2>
            <p>Total Entries: <strong>{{ $timetables->count() }}</strong></p>
        </div>
        <a href="{{ route('timetables.create') }}" class="btn-add">+ Add Timetable</a>
    </div>

    @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Room No.</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($timetables as $timetable)
                <tr>
                    <td>{{ $timetable->id }}</td>
                    <td><span class="badge-class">{{ $timetable->class_name }}</span></td>
                    <td><span class="badge-section">{{ $timetable->section }}</span></td>
                    <td><strong>{{ $timetable->subject }}</strong></td>
                    <td>{{ $timetable->teacher }}</td>
                    <td><span class="badge-day">{{ $timetable->day }}</span></td>
                    <td><span class="badge-time">🕐 {{ $timetable->start_time }}</span></td>
                    <td><span class="badge-time">🕐 {{ $timetable->end_time }}</span></td>
                    <td>🚪 {{ $timetable->room_no }}</td>
                    <td>
                        <a href="{{ route('timetables.edit', $timetable->id) }}" class="btn-edit">✏️ Edit</a>
                        <form action="{{ route('timetables.destroy', $timetable->id) }}"
                              method="POST" style="display:inline"
                              onsubmit="return confirm('Delete karna chahte hain?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">🗑️ Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10" style="text-align:center; padding:40px; color:#94a3b8;">
                        Koi timetable nahi mila. Pehle add karein!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
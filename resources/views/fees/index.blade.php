<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee Structure List</title>
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
        .badge-term {
            background: #fef9c3; color: #854d0e;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 600; font-size: 12px;
        }
        .badge-active {
            background: #dcfce7; color: #166534;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 700; font-size: 12px;
        }
        .badge-inactive {
            background: #fee2e2; color: #991b1b;
            padding: 3px 10px; border-radius: 20px;
            font-weight: 700; font-size: 12px;
        }
        .amount { font-weight: 800; color: #0f172a; font-size: 15px; }

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
            <h2>💰 Fee Structure List</h2>
            <p>Total Fee Structures: <strong>{{ $fees->count() }}</strong></p>
        </div>
        <a href="{{ route('fees.create') }}" class="btn-add">+ Add Fee Structure</a>
    </div>

    @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fee Title</th>
                    <th>Class</th>
                    <th>Term</th>
                    <th>Amount (₹)</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($fees as $fee)
                <tr>
                    <td>{{ $fee->id }}</td>
                    <td><strong>{{ $fee->fee_title }}</strong></td>
                    <td><span class="badge-class">{{ $fee->class_name }}</span></td>
                    <td><span class="badge-term">{{ $fee->term }}</span></td>
                    <td><span class="amount">₹ {{ number_format($fee->amount, 2) }}</span></td>
                    <td>📅 {{ $fee->due_date }}</td>
                    <td>
                        @if($fee->status == 'Active')
                            <span class="badge-active">✅ Active</span>
                        @else
                            <span class="badge-inactive">❌ Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('fees.edit', $fee->id) }}" class="btn-edit">✏️ Edit</a>
                        <form action="{{ route('fees.destroy', $fee->id) }}"
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
                    <td colspan="8" style="text-align:center; padding:40px; color:#94a3b8;">
                        Koi fee structure nahi mili. Pehle add karein!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
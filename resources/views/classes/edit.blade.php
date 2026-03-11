<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Class</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; padding: 40px; }

        .card {
            background: #fff; max-width: 580px; margin: 0 auto;
            border-radius: 16px; padding: 36px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.10);
        }
        .card-header {
            display: flex; align-items: center;
            justify-content: space-between; margin-bottom: 28px;
        }
        .card-header h2 { font-size: 24px; font-weight: 800; color: #0f172a; }

        .btn-back {
            background: #f1f5f9; color: #334155; border: none;
            padding: 9px 18px; border-radius: 8px;
            font-size: 13px; font-weight: 600; text-decoration: none;
        }
        .btn-back:hover { background: #e2e8f0; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
        .form-group { display: flex; flex-direction: column; }
        .form-group.full { grid-column: 1 / -1; }

        label { font-weight: 600; font-size: 13px; color: #475569; margin-bottom: 6px; }

        input {
            padding: 10px 13px; border: 1.5px solid #e2e8f0;
            border-radius: 8px; font-size: 14px;
            color: #1e293b; outline: none; width: 100%;
        }
        input:focus { border-color: #2563eb; }

        .error { color: #ef4444; font-size: 12px; margin-top: 4px; }

        .btn-update {
            width: 100%; background: #f59e0b; color: #fff; border: none;
            padding: 13px; border-radius: 9px; cursor: pointer;
            font-size: 15px; font-weight: 700; margin-top: 24px;
        }
        .btn-update:hover { background: #d97706; }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            <h2>✏️ Edit Class</h2>
            <a href="{{ route('classes.index') }}" class="btn-back">← Back</a>
        </div>

        <form action="{{ route('classes.update', $class->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grid">

                <div class="form-group full">
                    <label>Class Name</label>
                    <input type="text" name="class_name"
                           value="{{ old('class_name', $class->class_name) }}"
                           placeholder="e.g. 10th A">
                    @error('class_name')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Section</label>
                    <input type="text" name="section"
                           value="{{ old('section', $class->section) }}"
                           placeholder="e.g. A">
                    @error('section')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Room No.</label>
                    <input type="text" name="room_no"
                           value="{{ old('room_no', $class->room_no) }}"
                           placeholder="e.g. 101">
                    @error('room_no')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group full">
                    <label>Teacher Name</label>
                    <input type="text" name="teacher"
                           value="{{ old('teacher', $class->teacher) }}"
                           placeholder="e.g. Mr. Sharma">
                    @error('teacher')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject"
                           value="{{ old('subject', $class->subject) }}"
                           placeholder="e.g. Mathematics">
                    @error('subject')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Total Students</label>
                    <input type="number" name="total_students"
                           value="{{ old('total_students', $class->total_students) }}"
                           placeholder="e.g. 35" min="1">
                    @error('total_students')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn-update">✏️ Update Class</button>
        </form>
    </div>

</body>
</html>
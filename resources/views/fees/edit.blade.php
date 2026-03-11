@extends('layouts.app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Fee Structure</title>
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
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
        .form-group { display: flex; flex-direction: column; }
        .form-group.full { grid-column: 1 / -1; }
        label { font-weight: 600; font-size: 13px; color: #475569; margin-bottom: 6px; }
        input, select {
            padding: 10px 13px; border: 1.5px solid #e2e8f0;
            border-radius: 8px; font-size: 14px;
            color: #1e293b; outline: none; width: 100%;
            background: #fff;
        }
        input:focus, select:focus { border-color: #2563eb; }
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
            <h2>Edit Fee Structure</h2>
            <a href="{{ route('fees.index') }}" class="btn-back">← Back</a>
        </div>

        <form action="{{ route('fees.update', $fee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grid">

                <div class="form-group full">
                    <label>Fee Title</label>
                    <input type="text" name="fee_title"
                           value="{{ old('fee_title', $fee->fee_title) }}"
                           placeholder="e.g. Tuition Fee">
                    @error('fee_title')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Class Name</label>
                    <input type="text" name="class_name"
                           value="{{ old('class_name', $fee->class_name) }}"
                           placeholder="e.g. 10th">
                    @error('class_name')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Term</label>
                    <select name="term">
                        <option value="">-- Select Term --</option>
                        <option value="Monthly"    {{ old('term', $fee->term) == 'Monthly'    ? 'selected' : '' }}>Monthly</option>
                        <option value="Quarterly"  {{ old('term', $fee->term) == 'Quarterly'  ? 'selected' : '' }}>Quarterly</option>
                        <option value="Half Yearly" {{ old('term', $fee->term) == 'Half Yearly' ? 'selected' : '' }}>Half Yearly</option>
                        <option value="Yearly"     {{ old('term', $fee->term) == 'Yearly'     ? 'selected' : '' }}>Yearly</option>
                    </select>
                    @error('term')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Amount (₹)</label>
                    <input type="number" name="amount"
                           value="{{ old('amount', $fee->amount) }}"
                           placeholder="e.g. 5000" min="0" step="0.01">
                    @error('amount')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Due Date</label>
                    <input type="text" name="due_date"
                           value="{{ old('due_date', $fee->due_date) }}"
                           placeholder="e.g. 10th of every month">
                    @error('due_date')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group full">
                    <label>Status</label>
                    <select name="status">
                        <option value="">-- Select Status --</option>
                        <option value="Active"   {{ old('status', $fee->status) == 'Active'   ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ old('status', $fee->status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn-update"> Update Fee Structure</button>
        </form>
    </div>
</body>
</html>
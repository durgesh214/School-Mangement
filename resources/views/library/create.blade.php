<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; padding: 40px; }
        .card {
            background: #fff; max-width: 620px; margin: 0 auto;
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
        input, select {
            padding: 10px 13px; border: 1.5px solid #e2e8f0;
            border-radius: 8px; font-size: 14px;
            color: #1e293b; outline: none; width: 100%; background: #fff;
        }
        input:focus, select:focus { border-color: #2563eb; }
        .error { color: #ef4444; font-size: 12px; margin-top: 4px; }
        .btn-save {
            width: 100%; background: #2563eb; color: #fff; border: none;
            padding: 13px; border-radius: 9px; cursor: pointer;
            font-size: 15px; font-weight: 700; margin-top: 24px;
        }
        .btn-save:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>📚 Add New Book</h2>
            <a href="{{ route('library.index') }}" class="btn-back">← Back</a>
        </div>

        <form action="{{ route('library.store') }}" method="POST">
            @csrf
            <div class="form-grid">

                <div class="form-group full">
                    <label>Book Title</label>
                    <input type="text" name="book_title"
                           value="{{ old('book_title') }}"
                           placeholder="e.g. Mathematics Part 1">
                    @error('book_title')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Author</label>
                    <input type="text" name="author"
                           value="{{ old('author') }}"
                           placeholder="e.g. R.D. Sharma">
                    @error('author')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" name="isbn"
                           value="{{ old('isbn') }}"
                           placeholder="e.g. 978-3-16-148410-0">
                    @error('isbn')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="category">
                        <option value="">-- Select Category --</option>
                        <option value="Science"     {{ old('category') == 'Science'     ? 'selected' : '' }}>Science</option>
                        <option value="Mathematics" {{ old('category') == 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
                        <option value="History"     {{ old('category') == 'History'     ? 'selected' : '' }}>History</option>
                        <option value="Geography"   {{ old('category') == 'Geography'   ? 'selected' : '' }}>Geography</option>
                        <option value="English"     {{ old('category') == 'English'     ? 'selected' : '' }}>English</option>
                        <option value="Hindi"       {{ old('category') == 'Hindi'       ? 'selected' : '' }}>Hindi</option>
                        <option value="Computer"    {{ old('category') == 'Computer'    ? 'selected' : '' }}>Computer</option>
                        <option value="Other"       {{ old('category') == 'Other'       ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('category')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Total Copies</label>
                    <input type="number" name="total_copies"
                           value="{{ old('total_copies') }}"
                           placeholder="e.g. 10" min="1">
                    @error('total_copies')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Available Copies</label>
                    <input type="number" name="available_copies"
                           value="{{ old('available_copies') }}"
                           placeholder="e.g. 8" min="0">
                    @error('available_copies')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Shelf No.</label>
                    <input type="text" name="shelf_no"
                           value="{{ old('shelf_no') }}"
                           placeholder="e.g. A-12">
                    @error('shelf_no')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option value="">-- Select Status --</option>
                        <option value="Available" {{ old('status') == 'Available' ? 'selected' : '' }}>Available</option>
                        <option value="Issued"    {{ old('status') == 'Issued'    ? 'selected' : '' }}>Issued</option>
                        <option value="Lost"      {{ old('status') == 'Lost'      ? 'selected' : '' }}>Lost</option>
                    </select>
                    @error('status')
                        <span class="error">⚠ {{ $message }}</span>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn-save">💾 Save Book</button>
        </form>
    </div>
</body>
</html>
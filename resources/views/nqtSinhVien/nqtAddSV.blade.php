<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới thông tin sinh viên</h3>
            </div>
            <div class="card-body">
                <!-- Form Thêm mới thông tin môn học -->
                <form action="{{route('nqtSinhVien.nqtAddSVSubmit')}}" method="POST">
                    @csrf

                    <!-- Mã môn học -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtMaSV">Mã sinh viên</span>
                        <input type="text" class="form-control"
                               name="nqtMaSV" value="{{ old('nqtMaSV') }}">
                    </div>
                    @error('nqtMaSV')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <!-- Tên môn học -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtHoSV">Họ sinh viên</span>
                        <input type="text" class="form-control" aria-describedby="nqtHoSV"
                               name="nqtHoSV" value="{{ old('nqtHoSV') }}">
                    </div>
                    @error('nqtHoSV')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtTenSV">Tên sinh viên</span>
                        <input type="text" class="form-control" aria-describedby="nqtTenSV"
                               name="nqtTenSV" value="{{ old('nqtTenSV') }}">
                    </div>
                    @error('nqtTenSV')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <!-- Số tiết -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtGioiTinh">Giới tính (0-nữ | 1-nam)</span>
                        <input type="number" class="form-control" aria-describedby="nqtGioiTinh"
                               name="nqtGioiTinh" value="{{ old('nqtGioiTinh') }}">
                    </div>
                    @error('nqtGioiTinh')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtNgaySinh">Ngày sinh</span>
                        <input type="date" class="form-control" aria-describedby="nqtNgaySinh"
                               name="nqtNgaySinh" value="{{ old('nqtNgaySinh') }}">
                    </div>
                    @error('nqtNgaySinh')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtNoiSinh">Nơi sinh</span>
                        <input type="text" class="form-control" aria-describedby="nqtNoiSinh"
                               name="nqtNoiSinh" value="{{ old('nqtNoiSinh') }}">
                    </div>
                    @error('nqtNoiSinh')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtHocBong">Học bổng</span>
                        <input type="number" class="form-control" aria-describedby="nqtHocBong"
                               name="nqtHocBong" value="{{ old('nqtHocBong') }}">
                    </div>
                    @error('nqtHocBong')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtMaKhoa">Mã Khoa</span>
                        <select class="form-control" aria-describedby="nqtMaKhoa" name="nqtMaKhoa">
                            <option value="">Chọn Mã Khoa</option>
                            @foreach ($nqtKhoa as $id => $name)
                                <option value="{{ $id }}" {{ old('nqtMaKhoa') == $id ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('nqtMaKhoa')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror




                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtDiemTB">Điểm TB</span>
                        <input type="number" class="form-control" aria-describedby="nqtDiemTB"
                               name="nqtDiemTB" value="{{ old('nqtDiemTB') }}">
                    </div>
                    @error('nqtDiemTB')
                            <div class='error-message mb-3 text-danger'>{{$message}}</div>
                    @enderror
                    <!-- Thêm mới -->
                    <div class="card-footer ">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/ListSinhVien" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới thông tin môn học</h3>
            </div>
            <div class="card-body">
                <!-- Form Thêm mới thông tin môn học -->
                <form action="{{route('nqtMonHoc.nqtNewSubmitmh')}}" method="POST">
                    @csrf

                    <!-- Mã môn học -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtMaMH">Mã môn học</span>
                        <input type="text" class="form-control"
                               name="nqtMaMH" value="{{ old('nqtMaMH') }}">
                    </div>

                    <!-- Tên môn học -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtTenMH">Tên môn học</span>
                        <input type="text" class="form-control" aria-describedby="nqtTenMH"
                               name="nqtTenMH" value="{{ old('nqtTenMH') }}">
                    </div>
                    <!-- Số tiết -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nqtSoTiet">Số tiết</span>
                        <input type="number" class="form-control" aria-describedby="nqtSoTiet"
                               name="nqtSoTiet" value="{{ old('nqtSoTiet') }}">
                    </div>

                    <!-- Thêm mới -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/khoa" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết môn học cần sửa</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nqtMonHoc.nqtEditSubmit')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết môn học cần sửa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nqtMaMH" class="col-sm-2 col-form-label">Mã môn học</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="nqtMaMH" name="nqtMaMH" value="{{$monhoc->mamh}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nqtTenMH" class="col-sm-2 col-form-label">Tên môn học</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nqtTenMH" name="nqtTenMH" value="{{$monhoc->tenmh}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nqtSoTiet" class="col-sm-2 col-form-label">Số tiết</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nqtSoTiet" name="nqtSoTiet" value="{{$monhoc->sotiet}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-2">Submit</button>
                    <a href="/monhocs" class="btn btn-primary">Back</a>
                </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
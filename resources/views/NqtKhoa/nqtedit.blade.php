<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết khoa cần sửa</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('NqtKhoa.nqtEditSubmit')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết khoa cần sửa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nqtMaKhoa" class="col-sm-2 col-form-label">Mã Khoa</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="nqtMaKhoa" name="nqtMaKhoa" value="{{$khoa->nqtMaKhoa}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nqtTenKhoa" class="col-sm-2 col-form-label">Mã Khoa</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nqtTenKhoa" name="nqtTenKhoa" value="{{$khoa->nqtTenKhoa}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-primary">Back</a>
                </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
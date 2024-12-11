<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết khoa</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
    <div class="card">
        <div class="card-header">
            <h3>Thêm mới thông tin khoa</h3>
        </div>
        <div class="card-body">
            <form action="{{route('NqtKhoa.nqtNewSubmit')}}" method="POST">
                @csrf
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="makh">Mã khoa</span>

                    <input type="text" class="form-control"
                    name="makh" placeholder="Điền mã khoa" value="{{ old('makh') }}">
                </div>
                @error('makh') 
                        <div class='error-message mb-3 text-danger'>{{$message}}</div>
                @enderror
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="TenKH">Tên khoa</span>

                    <input type="text" class="form-control"

                    name="tenkh" placeholder="Điền tên khoa" value="{{ old('tenkh') }}">
                       
                </div>
                @error('TenKH') 
                        <div class='error-message mb-3 text-danger'>{{$message}}</div>
                @enderror
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary"

                    name="submit" value="Thêm mới">

                    <a href="/khoa" class="btn btn-secondary">Trở lại</a>
                </div>
            </form>
        </div>
    </div>
    </section>
</body>
</html>
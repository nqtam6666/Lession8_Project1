<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết sinh viên</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết sinh viên</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã sinh viên:</b>
                    {{$sinhvien->nqtMaSV}}
                </p>
                <p>
                    <b>Họ tên sinh viên:</b>
                    {{$sinhvien->nqtHoSV}} {{$sinhvien->nqtTenSV}}
                </p>
                <p>
                    <b>Giới tính:</b>
                    {{ $sinhvien->nqtGioiTinh == 1 ? 'Nam' : 'Nữ' }}
                </p>
                <p>
                    <b>Ngày sinh:</b>
                    {{ $sinhvien->nqtNgaySinh}}
                </p>
                <p>
                    <b>Nơi sinh:</b>
                    {{ $sinhvien->nqtNoiSinh}}
                </p>
                <p>
                    <b>Học bổng:</b>
                    {{ $sinhvien->nqtHocBong}}
                </p>
                <p>
                    <b>Khoa:</b>
                    {{ $sinhvien->nqtMaKhoa}}
                </p>
                <p>
                    <b>Điểm TB:</b>
                    {{ $sinhvien->nqtDiemTB}}
                </p>
            </div>
            <div class="card-footer">
                <a href="/ListSinhVien" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
</body>
</html>

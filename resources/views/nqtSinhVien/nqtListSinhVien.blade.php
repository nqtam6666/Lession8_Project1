<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách sinh viên</h1>
                <a href="/SinhVien/add" class="btn btn-primary">Thêm mới</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class='text-center'>
                            <th>#</th>
                            <th>Mã sinh viên</th>
                            <th>Họ tên sinh viên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Học bổng</th>
                            <th>Điểm trung bình</th>
                            <th>Khoa</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($ListSV as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr class='text-center'>
                                <th>{{ $stt }}</th>
                                <td>{{ $item->nqtMaSV }}</td>
                                <td>{{ $item->nqtHoSV }} {{ $item->nqtTenSV }}</td>
                                <td>
                                    @if($item->nqtGioiTinh == 1)
                                        Nam
                                    @else
                                        Nữ
                                    @endif
                                </td>
                                <td>{{ $item->nqtNgaySinh }}</td>
                                <td>{{ $item->nqtNoiSinh }}</td>
                                <td>{{ $item->nqtHocBong }}</td>
                                <td>{{ $item->nqtDiemTB }}</td>
                                <td>{{ $item->nqtMaKhoa }}</td>
                                <td class="text-center">
                                    <a href="/SinhVien/detail/{{ $item->nqtMaSV }}" class="btn btn-success" >
                                    <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/SinhVien/edit/{{ $item->nqtMaSV }}" class="btn btn-primary">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="/SinhVien/delete/{{ $item->nqtMaSV }}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa môn học: {{ $item->nqtMaSV }} không?');"><i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

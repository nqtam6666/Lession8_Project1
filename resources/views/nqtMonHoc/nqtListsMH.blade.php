<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách môn học</h1>
                <a href="/monhoc/create" class="btn btn-primary">Thêm mới</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class='text-center'>
                            <th>#</th>
                            <th>Mã môn học</th>
                            <th>Tên môn học</th>
                            <th>Số tiết</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($monHocs as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr class='text-center'>
                                <th>{{ $stt }}</th>
                                <td>{{ $item->mamh }}</td>
                                <td>{{ $item->tenmh }}</td>
                                <td>{{ $item->sotiet }}</td>
                                <td class="text-center">
                                    <a href="/monhoc/detail/{{ $item->mamh }}" class="btn btn-success" >
                                    <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/monhoc/edit/{{ $item->mamh }}" class="btn btn-primary">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="/monhoc/delete/{{ $item->mamh }}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa môn học: {{ $item->mamh }} không?');"><i class="fa-solid fa-trash"></i>
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

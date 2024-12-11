<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách khoa</h1>
        <a href="/khoa/new" class="btn btn-info mb-3">Thêm mới</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($nqtKhoas as $item)
                @php
                    $stt++;
                @endphp
                <tr>
                    <th>{{$stt}}</th>
                    <td>{{$item->nqtMaKhoa}}</td>
                    <td>{{$item->nqtTenKhoa}}</td>
                    <td class="">
                    <a href="/khoa/detail/{{$item->nqtMaKhoa}}" class="btn btn-success">
                    Chi tiết <i class="fa-solid fa-circle-info"></i></a>
                    <a href="/khoa/edit/{{$item->nqtMaKhoa}}" class="btn btn-primary" >
                    Sửa <i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/khoa/delete/{{$item->nqtMaKhoa}}" class="btn btn-danger" onclick="return confirm('Bạn muốn xóa không?');" >
                    Xóa <i class="fa-solid fa-trash"></i> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
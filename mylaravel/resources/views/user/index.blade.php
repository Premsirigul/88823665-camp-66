@extends('layouts.default_with_menu')

@section('content')
    <style>
        table tbody tr:hover td {
            /*ใช้กับตารางที่มี tbody เมื่อเอาเม้าส์ไปวางที่แถวข้อมูลทั้งแถวนั้นที่มีเม้าส์วางจะเปลี่ยนสี*/
            color: hotpink;
            transition: color 0.3s ease-in-out;
            /* ระยะเวลาการเปลี่ยนสี + ทำให้สีค่อยๆเปลี่ยนแบบสวยๆ */
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th style="width: 240px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr class="align-middle">
                                    <td>{{ $index + 1 }}.</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ url('/user/' . $user->id) }}">
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                        </a>
                                        <form action="{{ url('/user') }}" onclick="return false;" method="post"
                                            id="user-{{ $user->id }}" style="display: inline"> {{-- id="user-{{ $user->id }}" ใช้เพื่อให้เจาะจงไปยังผู้ใช้ได้ถูกคนโดยจะเป็น user-ลำดับของid --}}
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="confirm_delete('{{ $user->id }}')">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button class="btn" onclick="confirm_delete('clickMe')">Click Me</button>
            {{-- /.card --}}
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script>
        function confirm_delete() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                console.log("Result", result);
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        document.getElementById("user").submit()
                    });
                }
            });
        }
    </script> --}}
    <script>
        function confirm_delete(userId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                console.log("Result", result);
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        if (userId === 'clickMe') {
                            console.log("Result", result);
                        } else {
                            console.log("Result", result);
                            document.getElementById("user-" + userId)
                                .submit(); // "user-" + userId ใช้เพื่อให้เจาะจงไปยังผู้ใช้ได้ถูกคนโดยจะเป็น user-ลำดับของid จะได้ลบถูก
                        }
                    });
                }
            });
        }
    </script>
@endsection
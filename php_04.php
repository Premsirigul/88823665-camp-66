<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class ="container mt-5">
        <h1>ตรวจสอบเลขคู่หรือเลขคี่</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="start" class="form-label">กรอกค่าเริ่มต้น:</label>
                <input type="number" class="form-control" id="start" name="start" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">กรอกค่าสิ้นสุด:</label>
                <input type="number" class="form-control" id="end" name="end" required>
            </div>
            <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["start"]) && isset($_POST["end"])) {
            $start = intval($_POST["start"]);
            $end = intval($_POST["end"]);

            if ($start <= $end) {
                echo "<h2 class='mt-4'>ผลลัพธ์</h2>";
                echo "<div class='d-flex flex-column align-items-center'>";
                for ($i = $start; $i <= $end; $i++) {
                    $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                    echo "<div class='mb-1'>$i: $type</div>";
                }
                echo "</div>";
            } else {
                echo "<div class='mt-4 text-danger'>กรุณากรอกค่าเริ่มต้นให้น้อยกว่าหรือเท่ากับค่าสิ้นสุด</div>";
            }
        }
        ?>


        </div>
</body>
</html>
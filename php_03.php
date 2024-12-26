<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
<body>
    <div class ="container mt-5">
    <h1>เลือกแม่สูตรคูณ</h1>
    <form method="POST" action="">
    <div class="mb-3">
                    <label for="number" class="form-label">กรอกแม่สูตรคูณ:</label>
                    <input type="number" class="form-control" id="number" name="number" required>
                </div>
                <button type="submit" class="btn btn-primary">แสดงสูตรคูณ</button>

                <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
                $number = intval($_POST["number"]); // รับค่าแม่สูตรคูณจากฟอร์ม
                $number = intval($_POST["number"]); // รับค่าแม่สูตรคูณจากฟอร์ม
                echo "<h2 class='mt-4'>สูตรคูณแม่ $number</h2>";
                echo "<div class='d-flex flex-column align-items-center'>";
                for ($i = 1; $i <= 12; $i++) {
                    $result = $number * $i;
                    echo "<div class='mb-1'>$number x $i = $result</div>";
                }
                echo "</div>";
            }
            ?>
            </form>



    </div>
</body>
</html>
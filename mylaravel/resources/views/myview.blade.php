<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&family=Prompt:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa;
            margin-top: 20px;
        }

        h1 {
            display: flex;
            justify-content: center;
            font-family: 'Prompt', sans-serif;
            font-weight: 700;
        }

        table {
            display: flex;
            justify-content: center;
        }
    </style>

 </head>
<body>
    <div class="container">
        <h1 class="text-center text-primary mb-4">ตารางสูตรคูณ</h1>
        <form method="post" action="{{ url('/mycontroller') }}">
            @csrf
            <div class="mb-3">
                <label for="myinput" class="form-label">กรอกตัวเลข</label>
                <input type="number" name="myinput" id="myinput" class="form-control" placeholder="กรอกตัวเลข" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

            <table>
                <?php
                if (isset($myinput) && $myinput !== '') {
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<tr>";
                        echo "<td>" .  $myinput . " x " . $i . "</td>";
                        echo "<td> = </td>";
                        echo "<td>" . $myinput * $i . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </form>
    </div>
</body>

</html>
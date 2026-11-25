<?php
$menus = ["Trang chu", "Tin tuc", "Lien he","Gioi thieu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
[
"id" => "SV001",
"name" => "Nguyễn Văn An",
"gender" => "Nam",
"class" => "CNTT1"
],
[
"id" => "SV002",
"name" => "Trần Thị Bình",
"gender" => "Nữ",
"class" => "CNTT2"
],
[
"id" => "SV001",
"name" => "Nguyễn Văn An",
"gender" => "Nam",
"class" => "CNTT1"
],
[
"id" => "SV002",
"name" => "Trần Thị Bình",
"gender" => "Nữ",
"class" => "CNTT2"
]
];
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];

$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];

$genders = ["Nam", "Nữ", "Khác"];

$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        a{
            text-decoration:none;
            display:block;
            text-align:center;
            padding:10px;
            font-weight: bold;
            color :white;
        }
        nav{
            background:rgb(4, 40, 94);
        }
        nav ul{
            list-style-type: none;
            display:flex;
        }
        nav li{
            flex: 1;
        }
        nav ul li:hover{
            background:#084298;
            
        }
        .s1 h3{
            color:blue;
            text-align:center;
            margin-bottom: 10px;
        }
        .s1 {
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            width: 80%;
            margin: 20px auto;
            border-radius: 5px;
            padding: 20px;


        }
        .s1 ul{
            list-style-type: none;
            
            
        }
        .s1 li{
            margin:5px;
            padding: 5px;
            border-radius: 5px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            transition: .3s;
        }
        .s1 li:hover{
            background:yellow;
            transform: translateX(5px);
        }
        body{
            padding:20px;
        }
        .s2 {
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            width: 80%;
            margin: auto;
            border-radius: 5px;
            padding: 20px;


        }
        .s2 table {
            width: 100%;
            border-collapse: collapse;
            
        }
        .s2 th,
        .s2 td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .s2 th {
            background-color: #0d6efd;
            color: white;
        }
        .s2 tbody tr:nth-child(odd) {
            background-color: #f5f6f7;
        }
        .s2 tbody tr:hover {
            background-color: #d9e7fa;
        }
        .s2 tbody tr:nth-child(odd) {
            background-color: #e7f1ff;
        }
        .s3 {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            width: 80%;
            margin: 25px auto;
            border-radius: 5px;
            padding: 20px;
            background-color: #ffffff;
        }

        .s3 h3 {
            color: #04285e;
            text-align: center;
            margin-bottom: 18px;
        }

        .s3 .form-group {
            margin-bottom: 14px;
        }

        .s3 .form-group > label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #1f2937;
        }

        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            font-size: 14px;
        }

        .s3 .inline-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .s3 .inline-group label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-weight: normal;
            cursor: pointer;
        }

        .s3 .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 18px;
        }

        .s3 button[type="submit"] {
            background-color: #0d6efd;
            color: #ffffff;
            border: none;
            padding: 9px 18px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        .s3 button[type="submit"]:hover {
            background-color: #084298;
        }

        .s3 button[type="reset"] {
            background-color: #6c757d;
            color: #ffffff;
            border: none;
            padding: 9px 18px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        .s3 button[type="reset"]:hover {
            background-color: #5c636a;
        }

        .s3 .result-box {
            margin-top: 20px;
            padding: 14px;
            border-radius: 4px;
            background-color: #e7f1ff;
            border-left: 5px solid #0d6efd;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <?php foreach ($menus as $menu) {
                ?>
                <li>
                    <a href="#"><?=$menu ?></a>
                </li>
            
            <?php } ?>
        </ul>
    </nav>
    <section class= "s1">
        <h3>Danh sach ngon ngu su dung trong mon hoc</h3>
        <ul>
            <?php foreach ($subjects as $item){
                ?>
                <li>
                    <?=$item ?>
                    
                </li>
            <?php } ?>
        </ul>
    </section>
    <section class="s2">
        <h3>Danh sach sinh vien</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ma sinh vien</th>
                    <th>Ho va ten</th>
                    <th>gioi tinh</th>
                    <th>lop</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $index => $student){
                    ?>
                    <tr>
                        <td><?= $index +1 ?></td>
                        <td><?= $student["id"] ?></td>
                        <td><?= $student["name"] ?></td>
                        <td><?= $student["gender"] ?></td>
                        <td><?= $student["class"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <section class="s3">
    <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>

    <form action="#" method="post">
        <div class="form-group">
            <label for="fullname">Họ và tên</label>
            <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên" required>
        </div>

        <div class="form-group">
            <label for="faculty">Khoa</label>
            <select id="faculty" name="faculty">
                <?php foreach ($faculties as $faculty): ?>
                    <option value="<?= htmlspecialchars($faculty, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($faculty, ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="class">Lớp</label>
            <select id="class" name="class">
                <?php foreach ($classes as $key => $class): ?>
                    <option value="<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($class, ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Giới tính</label>
            <div class="inline-group">
                <?php foreach ($genders as $index => $gender): ?>
                    <label>
                        <input
                            type="radio"
                            name="gender"
                            value="<?= htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') ?>"
                            <?= $index === 0 ? 'checked' : '' ?>
                        >
                        <?= htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="form-group">
            <label>Sở thích</label>
            <div class="inline-group">
                <?php foreach ($hobbies as $key => $hobby): ?>
                    <label>
                        <input
                            type="checkbox"
                            name="hobbies[]"
                            value="<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
                        >
                        <?= htmlspecialchars($hobby, ENT_QUOTES, 'UTF-8') ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="submit_register">Đăng ký</button>
            <button type="reset">Làm mới</button>
        </div>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit_register"])): ?>
        <?php
            $fullname = trim($_POST["fullname"] ?? "");
            $selectedFaculty = $_POST["faculty"] ?? "";
            $selectedClassKey = $_POST["class"] ?? "";
            $selectedClassName = $classes[$selectedClassKey] ?? $selectedClassKey;
            $selectedGender = $_POST["gender"] ?? "Chưa chọn";
            $selectedHobbiesKeys = $_POST["hobbies"] ?? [];
            $selectedHobbiesNames = [];

            foreach ($selectedHobbiesKeys as $hobbyKey) {
                if (isset($hobbies[$hobbyKey])) {
                    $selectedHobbiesNames[] = $hobbies[$hobbyKey];
                }
            }
        ?>
        <div class="result-box">
            <p><strong>Họ và tên:</strong> <?= htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>Khoa:</strong> <?= htmlspecialchars($selectedFaculty, ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>Lớp:</strong> <?= htmlspecialchars($selectedClassName, ENT_QUOTES, 'UTF-8') ?> (Mã: <?= htmlspecialchars($selectedClassKey, ENT_QUOTES, 'UTF-8') ?>)</p>
            <p><strong>Giới tính:</strong> <?= htmlspecialchars($selectedGender, ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>Sở thích:</strong>
                <?= !empty($selectedHobbiesNames)
                    ? htmlspecialchars(implode(", ", $selectedHobbiesNames), ENT_QUOTES, 'UTF-8')
                    : "Không chọn" ?>
            </p>
        </div>
    <?php endif; ?>
</section>
</body>
</html>
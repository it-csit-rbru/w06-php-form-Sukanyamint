<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <from action ="Project_data.php" method="get">
    <fieldset id ="sect1">
        <legend> ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
        <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
        <label for="fname">ชื่อ</label><input type="text" name="fname">
        <label for="lname">นามสกุล</label><input type="text" name="lname">
        <label for="program">สาขาวิชา</label>
        <select name="program">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">เทคโนโลยีสารสนเทศ</option>
            <option value="3">เทคโนโลยีเครือข่ายสารสนเทศ</option>
            <option value="4">ภูมิศาสตร์สารสนเทศ</option>
            <option value="5">คอมพิวเตอร์ศึกษา</option>
</select>
<label for="facilty">คณะ</label>
<select name="facilty">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">คอมพิวเตอร์ศึกษา</option>
</select>
<br><label form="std_year"> ชั้นปี </lable>
<input type="radio" name ="std_year" valus="1"></label>ปี 1</label>
<input type="radio" name ="std_year" valus="2"></label>ปี 2</label>
<input type="radio" name ="std_year" valus="3"></label>ปี 3</label>
<input type="radio" name ="std_year" valus="4"></label>ปี 4</label>
<input type="radio" name ="std_year" valus="5"></label>ปี 5</label>
</fieldset>
<fieldset>
      
    <legend> ส่วนที่ 2 </legend>
    <label for="prj_name_th">ชื่อโครงงาน(ไทย)</label><input type="textarea" name="prj_name_th">
       <label for="prj_name_en">ชื่อโครงงาน(อังกฤษ)<label><input type="texttarea" name="prj_name_en">
       <label for="drj_type">ประเภทโครงการ</label>
<select name="drj_type">
            <option value="1">เกม</option>
            <option value="2">โปรแกรมมือถือ</option>
</select>  
    <br><lable>เครื่องมือที่ใช้</label>
        <input type="checkbox" name="prj_tool[]"><label>HTML</label>
        <input type="checkbox" name="prj_tool[]"><label>Css</label>
        <input type="checkbox" name="prj_tool[]"><label>Java5cript</label>
        <input type="checkbox" name="prj_tool[]"><label>Bootstraps</label>
        <input type="checkbox" name="prj_tool[]"><label>Material Design</label>
        <input type="checkbox" name="prj_tool[]"><label>Angular</label>
        <input type="checkbox" name="prj_tool[]"><label>Reart</label>
        <input type="checkbox" name="prj_tool[]"><label>PHP</label>
        <input type="checkbox" name="prj_tool[]"><label>My SQL</label>
        <input type="checkbox" name="prj_tool[]"><label>ChartJ5</label><br>
        <lable>อาจารย์ที่ปรึกษา</label>
        <select name="prj_advisor">
            <option value="1">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
            <option value="2">ผศ.ทิพย์วรรค ฟุเฟือง</option>>
            </select>
    </from>
</body>
</html>
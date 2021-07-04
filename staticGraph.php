<!-- Pie chart Design Pre-Test ------------------------------------------------------ -->
<input type="hidden" id="design_pre_pass" value="<?php echo $design_pre_pass ?>">
<input type="hidden" id="design_pre_fail" value="<?php echo $design_pre_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartDesignPre);

    var design_pre_pass = Number(document.getElementById("design_pre_pass").value);
    var design_pre_fail = Number(document.getElementById("design_pre_fail").value);
    alert(pre1 + " " + pre2);
    function drawChartDesignPre() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', design_pre_pass],
            ['ไม่ผ่าน', design_pre_fail]
        ]);

        var options = {'title':'แบบทดสอบก่อนเรียน - การออกแบบฐานข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_designpre'));
        chart.draw(data, options);
    }
</script>

<!-- Pie chart Design Post-Test -->
<input type="hidden" id="design_post_pass" value="<?php echo $design_post_pass ?>">
<input type="hidden" id="design_post_fail" value="<?php echo $design_post_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartDesignPost);

    var design_post_pass = Number(document.getElementById("design_post_pass").value);
    var design_post_fail = Number(document.getElementById("design_post_fail").value);

    function drawChartDesignPost() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', design_post_pass],
            ['ไม่ผ่าน', design_post_fail]
        ]);

        var options = {'title':'แบบทดสอบหลังเรียน - การออกแบบฐานข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_designpost'));
        chart.draw(data, options);
    }
</script>


<!-- Pie chart Connect Pre-Test ------------------------------------------------------ -->
<input type="hidden" id="connect_pre_pass" value="<?php echo $connect_pre_pass ?>">
<input type="hidden" id="connect_pre_fail" value="<?php echo $connect_pre_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartConnectPre);

    var connect_pre_pass = Number(document.getElementById("connect_pre_pass").value);
    var connect_pre_fail = Number(document.getElementById("connect_pre_fail").value);

    function drawChartConnectPre() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', connect_pre_pass],
            ['ไม่ผ่าน', connect_pre_fail]
        ]);

        var options = {'title':'แบบทดสอบก่อนเรียน - การเชื่อมต่อฐานข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_connectpre'));
        chart.draw(data, options);
    }
</script>

<!-- Pie chart Design Post-Test -->
<input type="hidden" id="connect_post_pass" value="<?php echo $connect_post_pass ?>">
<input type="hidden" id="connect_post_fail" value="<?php echo $connect_post_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartConnectPost);

    var connect_post_pass = Number(document.getElementById("connect_post_pass").value);
    var connect_post_fail = Number(document.getElementById("connect_post_fail").value);

    function drawChartConnectPost() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', connect_post_pass],
            ['ไม่ผ่าน', connect_post_fail]
        ]);

        var options = {'title':'แบบทดสอบหลังเรียน - การเชื่อมต่อฐานข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_connectpost'));
        chart.draw(data, options);
    }
</script>


<!-- Pie chart Insert Pre-Test ------------------------------------------------------ -->
<input type="hidden" id="insert_pre_pass" value="<?php echo $insert_pre_pass ?>">
<input type="hidden" id="insert_pre_fail" value="<?php echo $insert_pre_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartInsertPre);

    var insert_pre_pass = Number(document.getElementById("insert_pre_pass").value);
    var insert_pre_fail = Number(document.getElementById("insert_pre_fail").value);

    function drawChartInsertPre() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', insert_pre_pass],
            ['ไม่ผ่าน', insert_pre_fail]
        ]);

        var options = {'title':'แบบทดสอบก่อนเรียน - การเพิ่มข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_insertpre'));
        chart.draw(data, options);
    }
</script>

<!-- Pie chart Insert Post-Test -->
<input type="hidden" id="insert_post_pass" value="<?php echo $insert_post_pass ?>">
<input type="hidden" id="insert_post_fail" value="<?php echo $insert_post_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartInsertPost);

    var insert_post_pass = Number(document.getElementById("insert_post_pass").value);
    var insert_post_fail = Number(document.getElementById("insert_post_fail").value);

    function drawChartInsertPost() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', insert_post_pass],
            ['ไม่ผ่าน', insert_post_fail]
        ]);

        var options = {'title':'แบบทดสอบหลังเรียน - การเพิ่มข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_insertpost'));
        chart.draw(data, options);
    }
</script>


<!-- Pie chart Display Pre-Test ------------------------------------------------------ -->
<input type="hidden" id="display_pre_pass" value="<?php echo $display_pre_pass ?>">
<input type="hidden" id="display_pre_fail" value="<?php echo $display_pre_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartDisplayPre);

    var display_pre_pass = Number(document.getElementById("display_pre_pass").value);
    var display_pre_fail = Number(document.getElementById("display_pre_fail").value);

    function drawChartDisplayPre() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', display_pre_pass],
            ['ไม่ผ่าน', display_pre_fail]
        ]);

        var options = {'title':'แบบทดสอบก่อนเรียน - การแสดงข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_displaypre'));
        chart.draw(data, options);
    }
</script>

<!-- Pie chart Display Post-Test -->
<input type="hidden" id="display_post_pass" value="<?php echo $display_post_pass ?>">
<input type="hidden" id="display_post_fail" value="<?php echo $display_post_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartDisplayPost);

    var display_post_pass = Number(document.getElementById("display_post_pass").value);
    var display_post_fail = Number(document.getElementById("display_post_fail").value);

    function drawChartDisplayPost() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', display_post_pass],
            ['ไม่ผ่าน', display_post_fail]
        ]);

        var options = {'title':'แบบทดสอบหลังเรียน - การแสดงข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_displaypost'));
        chart.draw(data, options);
    }
</script>


<!-- Pie chart Edit Pre-Test ------------------------------------------------------ -->
<input type="hidden" id="edit_pre_pass" value="<?php echo $edit_pre_pass ?>">
<input type="hidden" id="edit_pre_fail" value="<?php echo $edit_pre_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartEditPre);

    var edit_pre_pass = Number(document.getElementById("edit_pre_pass").value);
    var edit_pre_fail = Number(document.getElementById("edit_pre_fail").value);

    function drawChartEditPre() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', edit_pre_pass],
            ['ไม่ผ่าน', edit_pre_fail]
        ]);

        var options = {'title':'แบบทดสอบก่อนเรียน - การแก้ไขข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_editpre'));
        chart.draw(data, options);
    }
</script>

<!-- Pie chart Edit Post-Test -->
<input type="hidden" id="edit_post_pass" value="<?php echo $edit_post_pass ?>">
<input type="hidden" id="edit_post_fail" value="<?php echo $edit_post_fail ?>">
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartEditPost);

    var edit_post_pass = Number(document.getElementById("edit_post_pass").value);
    var edit_post_fail = Number(document.getElementById("edit_post_fail").value);

    function drawChartEditPost() {
        var data = google.visualization.arrayToDataTable([
            ['Pass', 'Count'],
            ['ผ่าน', edit_post_pass],
            ['ไม่ผ่าน', edit_post_fail]
        ]);

        var options = {'title':'แบบทดสอบหลังเรียน - การแก้ไขข้อมูล', 'width':400, 'height':400, backgroundColor: '#fafafa', is3D: false};
        var chart = new google.visualization.PieChart(document.getElementById('piechart_editpost'));
        chart.draw(data, options);
    }
</script>
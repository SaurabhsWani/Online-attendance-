<?php
include('header.php');
?>
    <script>
        var x=localStorage.getItem("t5");
        var y=localStorage.getItem("t6");
        if (x==undefined && y==undefined) 
        {
        alert("Please Fill Form");
         window.location.replace("trial.php");
        }
        var m=localStorage.getItem("m");
        var q=localStorage.getItem("t1");
        var w=localStorage.getItem("t2");
        var e=localStorage.getItem("t3");
        var r=localStorage.getItem("t4");
        function exportToExcel(tableID, filename = q+w+e+r){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':q+'-'+w+'-'+e+'-'+r+'.xls';
    
    // Create download link element
    downloadurl = document.createElement("a");
    
    document.body.appendChild(downloadurl);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
    
        // Setting the file name
        downloadurl.download = filename;
        
        //triggering the function
        downloadurl.click();
    }
    localStorage.removeItem("t1");
    localStorage.removeItem("t2");
    localStorage.removeItem("t3");
    localStorage.removeItem("t4");
    localStorage.removeItem("t5");
    localStorage.removeItem("t6");
    localStorage.removeItem("m");
    alert("We Are Vary Thankfull To See YOU. Thanks For Saving Trees because you are using online attendance")
    window.location.replace("trial.php");
}
    if (m!=null) 
    {
    alert("Total Present Students Are "+m+"");        
    }
    function dis()
        {
            
    localStorage.removeItem("t1");
    localStorage.removeItem("t2");
    localStorage.removeItem("t3");
    localStorage.removeItem("t4");
    localStorage.removeItem("t5");
    localStorage.removeItem("t6");
    localStorage.removeItem("m");
        }
    </script>
    <br><br><br><br><div class="container">
    <style type="text/css">
        .wave{
            position: fixed;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
        }
    </style>
    <img class="wave" src="../admin/image/indd.png"/>
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class=" ml-auto mr-auto contact-form">
        <form action="index.php">
            <button class="m btn btn-user btn-info btn-block btn-round" onclick="dis();"> Start New Attendance</button></form><br>
    <h5><label >Teacher Name :-&emsp;</label><span  id="t1"></span></h5>
    <table id="tblexportData" class="table table-bordered table-head-bg-secondary table-bordered-bd-secondary mt-4">
        <thead style='text-align:center;'>
            <tr>
                <th scope="col">Date</th>
                <th ><span id="t3"></span></th>
            </tr>
            <tr>
                <td scope="col">Class</td>
                <td ><span id="t2"></span></td>
            </tr>
            <tr>
                <th scope="col">Subject</th>
                <th ><span id="t4"></span></th>
            </tr>
            <tr>
                <td scope="col">Present Students</td>
                <td ><span id="m"></span></td>
            </tr>
        <tr>
            <th><b>PRN</b></th>
            <th><b>Attendance</b></th>
        </tr>
        </thead>
    <tbody>
        <script>
            
            for(var i=x;i<=y;i++)
            {
                document.writeln("<tr><td style='text-align:center'>"+i+"</td><td style='text-align:center;text-transform: capitalize;'><span id="+i+" ></span></td></tr>");
            }
        </script>
    </tbody>
</table>
<br>
<button class="btn btn-user btn-primary btn-block btn-round" onclick="alert('Login to Get Detain List')"> Get Detain List</button>
<button onclick="exportToExcel('tblexportData','');" class="m btn btn-user btn-success btn-block btn-round"> Download Attendance</button>
</div>
</div></div></div><br>
<script>
    // var m=0;
    for(var i=x;i<=y;i++)
    {
        document.getElementById(i).innerHTML=localStorage.getItem(i);        
    }
    document.getElementById("t1").innerHTML=localStorage.getItem("t1");
    document.getElementById("t2").innerHTML=localStorage.getItem("t2");
    document.getElementById("t3").innerHTML=localStorage.getItem("t3");
    document.getElementById("t4").innerHTML=localStorage.getItem("t4");    
    document.getElementById("m").innerHTML=localStorage.getItem("m");
</script>
<?php
include('footer.php');
?>
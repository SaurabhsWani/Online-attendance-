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
            var b=0;
            for(var i=x;i<=y;i++)
            {
                b+=1;
            }
            var f=localStorage.getItem("t1");
        </script>
        <style type="text/css">
        .larg
{
    width: 23px;
    height: 23px;    
        </style>
        <br><br><br><br>
        <div class="container">
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
                <div class="  ml-auto mr-auto p-4 contact-form">
            <form action="index.html#register" >
                <button class="m btn btn-block btn-info btn-round" onclick="dis();"> Start New Attendance</button><hr></form>
                <h5 class="col-md-12 ml-auto mr-auto">Welcome "<script>document.write(f);</script>"To Online Attendance</h5>
                <Table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4" >
                    <thead>
                        <tr>
                            <th style="text-align: center;" scope="col">Title</th>
                            <th style="text-align: center;" scope="col">Your Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teacher Name </td>
                            <td style='text-align:center;'><span id="t1"></span></td>
                        </tr><tr>
                            <td> Class Name</td>
                            <td style='text-align:center;'><span id="t2"></span></td>
                        </tr><tr>
                            <td>Date Of Lecture.</td>
                            <td style='text-align:center;'><span id="t3"></span></td>
                        </tr><tr>
                            <td>Subject Name</td>
                            <td style='text-align:center;'><span id="t4"></span></td>
                        </tr>
                    </tbody>
                </Table>
                <h4 class="col-md-12 ml-auto mr-auto">Tik a box if student is "Present"</h4>
                <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Students</th>
                            <th scope="col">Action For all Students</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><script>document.write(b);</script></td>
                            <td><input type="checkbox" class="larg" onclick="p()" id="c" ><span style="position: absolute;padding-top: 0px;">&emsp;Present All</span></td>
                        </tr>
                    </tbody>
                </table>
                <table id="tblexportData" class="table table-bordered table-head-bg-secondary table-bordered-bd-secondary mt-4">
                    <thead>
                        <tr>
                            <th scope="col">PRN</th>
                            <th scope="col">Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <script>
                            document.writeln("<form action='Get-Excel-File.php'>");
                                for (let i = x; i <= y; i++) 
                                {
                                    document.write("<tr><td style='text-align:center;'>"+i+"</td><td style='text-align:center;'><input type='checkbox' class='larg' value='' id="+i+"></td></tr>");
                                }
                                document.writeln("<tr style='text-align:center;'><td>Procced To Get excel file</td><td><button type='submit' class='m btn btn-user btn-primary btn-round' onclick='t();'> DONE</td></tr></form>");
                                </script>
                            </tbody>
                        </table>
                        <script>
                            document.getElementById("t1").innerHTML=localStorage.getItem("t1");
                            document.getElementById("t2").innerHTML=localStorage.getItem("t2");
                            document.getElementById("t3").innerHTML=localStorage.getItem("t3");
                            document.getElementById("t4").innerHTML=localStorage.getItem("t4");
                            var m=0;
                            function t()
                            {
                                for (let i = x; i <=y; i++) 
                                {
                                    var c=document.getElementById(i);
                                    if(c.checked)
                                    {
                                        var a="P"
                                        localStorage.setItem(i,a);
                                        m+=1;
                                    }
                                    else
                                    {
                                        var a="A"
                                        localStorage.setItem(i,a);
                                    }
                                }
                                localStorage.setItem("m",m);
                            }
                            function p()
                            {
                                
                                var c=document.getElementById("c");
                                if (c.checked) 
                                {
                                    // alert("All Students Are Present");
                                    for (let i = x; i <=y; i++) 
                                    {
                                        document.getElementById(i).checked=true;
                                    }
                                } 
                                else 
                                {
                                    // alert("All Students Are Absent");
                                    for (let i = x; i <=y; i++) 
                                    {
                                        document.getElementById(i).checked=false;
                                    }
                                }
                                
                            }
                        </script>
                    </div>
                </div></div></div><br>
                        <?php
include('footer.php');
?>
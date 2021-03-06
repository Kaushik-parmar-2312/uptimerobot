<?php
// session_start();
// if(!Session::has('useremail'))
// {
//   echo "<script>location.href='/'</script>";
// }
?>

@include('admin/customer/customer_slidebar');
<!--This is for chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Dashboard</h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($usercnt)}}</div>
                                <div>Total customer</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('admin/users')}}">
                        <div class="panel-footer">
                            <span class="pull-left">View Customer</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($monitor)}}</div>
                                <div>Monitors</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin/monitor">
                        <div class="panel-footer">
                            <span class="pull-left">View monitor</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($monitor_type)}}</div>
                                <div>Total monitor type </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('admin/monitor_type')}}">
                        <div class="panel-footer">
                            <span class="pull-left">View monitor type</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-arrow-down fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($Monitor_response)}}</div>
                                <div>Total Monitor Down </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('admin/admin')}}">
                        <div class="panel-footer">
                            <span class="pull-left">View Respomses</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="col-lg-8">
            <div class="panel panel-default">
            <div class="panel-body">
                        <div class="table-responsive">

                            <table style='text-align:Center;' class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                               
                                
                                <thead>
                                <th>
                                   New Customer 
                                </th>
                            </thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Name </th>
                                        <th>Email </th>
                                        
                                    </tr>
                                <tbody>
                                    @if(count($userLimit)>0)
                                    @php $id=1;
                                    @endphp
                                    @foreach($userLimit as $i)
                                    <tr class="odd gradeX">
                                        <td>{{$id}}</td>
                                        <td >{{$i->name}}</td>
                                        <td >{{$i->email}}</td>
                                       
                                        
                                    </tr>
                                    @php $id++;@endphp
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan=9><b style='color:red;'>Not found any inquiry !!!</b></td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                <!-- /.panel-heading -->

                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <!-- /.panel -->

            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->


        <!-- /.panel -->


        <!-- <canvas id="bar"
            style="border:1px solid grey;padding:25px;float:left;height:500px;width:100%;max-width:800px;"></canvas>
        <canvas id="pie"
            style="border:1px solid grey;padding:25px;float:left;height:300px;width:50%;max-width:800px;"></canvas> -->
        <!-- /.panel-body -->

        <!-- /.panel -->

        <!-- /.panel .chat-panel -->

        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
<?php
// $xarray=array();
// $yarray=array();
// foreach ($procus as $pc)
// {
//     array_push($xarray,$pc['p_name']);
//     array_push($yarray,$pc['total_like']);
// }

// $jsx_array = json_encode($xarray);
// $jsy_array = json_encode($yarray);

// echo "var xValues = ". $jsx_array . ";\n";
// echo "var yValues = ". $jsy_array . ";\n";

?>

// var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
//var yValues = [55, 49, 44, 24, 15];
function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ", 0.5)";
}

function poolColors(a) {
    var pool = [];
    for (i = 0; i < a; i++) {
        pool.push(dynamicColors());
    }
    return pool;
}
var barColors = ["red", "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", 'red', 'orange',
    'red'
];

new Chart("bar", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: poolColors(yValues.length),
            borderColor: poolColors(yValues.length),
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Total Likes of Your Village products"
        }
    }
});
<?php
// $x=array();
// $y=array();
// foreach ($proview as $p)
// {
//     array_push($x,$p['p_name']);
//     array_push($y,$p['total_view']);
// }

// $jsx = json_encode($x);
// $jsy = json_encode($y);

// echo "var x = ". $jsx . ";\n";
// echo "var y = ". $jsy . ";\n";
?>


//var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
//var yValues = [55, 49, 44, 24, 15];
var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
];

new Chart("pie", {
    type: "pie",
    data: {
        labels: x,
        datasets: [{
            backgroundColor: barColors,
            data: y
        }]
    },
    options: {
        title: {
            display: true,
            text: "Total Viewer of your Product"
        }
    }
});
</script>

<!-- jQuery -->
<script src="Customer/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="Customer/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="Customer/js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="Customer/js/raphael.min.js"></script>
<script src="Customer/js/morris.min.js"></script>
<script src="Customer/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="Customer/js/startmin.js"></script>

</body>

</html>
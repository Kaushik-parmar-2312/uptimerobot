<?php
// session_start();
// if(!Session::has('useremail'))
// {
//   echo "<script>location.href='/'</script>";
// }
?>

@include('admin/customer/customer_slidebar');
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Monitor details
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">

                            <table style='text-align:Center;' class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Monitor Type</th>
                                        <th>User</th>
                                        <th>Friendly Type</th>
                                        <th>URL IP</th>
                                        <th>Interval</th>
                                        <th>Time out</th>
                                        <th>Status</th>
                                        <!-- <th>Response time</th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($monitor)>0)
                                    @foreach($monitor as $i)
                                    @if($i['id']%2==0)
                                    <tr class="odd gradeX">
                                        <td>{{$i->id}}</td>
                                        <td>{{$i->monitor_type}}</td>
                                        <td>{{$i->name}}</td>
                                        <td >{{$i->friendly_name}}</td>
                                        <td >{{$i->url_ip}}</td>
                                        <td >{{$i->interval}}</td>
                                        <td >{{$i->timeout??"-"}}</td>
                                        <td >{{$i->status ??"-"}}</td>
                                        <!-- <td >{{$i->response_time ??"-"}}</td> -->
                                       

                                    </tr>
                                    @else
                                    <tr class="odd gradeX">
                                    <td>{{$i->id}}</td>
                                    <td>{{$i->monitor_type}}</td>
                                    <td>{{$i->name}}</td>
                                        <td >{{$i->friendly_name}}</td>
                                        <td >{{$i->url_ip}}</td>
                                        <td >{{$i->interval}}</td>
                                        <td >{{$i->timeout??"-"}}</td>
                                        <td >{{$i->status??"-"}}</td>
                                        <!-- <td >{{$i->response_time??"-"}}</td> -->
                                    
                                       
                                    </tr>
                                    @endif
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
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


        <!-- /.col-lg-6 -->

        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="Customer/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="Customer/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="Customer/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="Customer/js/dataTables/jquery.dataTables.min.js"></script>
<script src="Customer/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="Customer/js/startmin.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

<!-- Product Add model -->


</body>

</html>
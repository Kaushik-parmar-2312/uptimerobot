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
                <h1 class="page-header"> Contact details
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
                                        <th>Friedly Name</th>
                                        <th>Email </th>
                                        <th>Account type </th>
                                        <th>Alert start stop</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($contact)>0)
                                    @foreach($contact as $i)
                                    @if($i['id']%2==0)
                                    <tr class="odd gradeX">
                                        <td>{{$i->Friendly_Name}}</td>
                                        <td style='width:200px;'>{{$i->email}}</td>
                                        <td>{{$i->account_type}}</td>
                                        <td>{{$i->alert_start_stop}}</td>
                                        <td>{{$i->status}}</td>

                                    </tr>
                                    @else
                                    <tr class="odd gradeX">
                                    <td>{{$i->Friendly_Name}}</td>
                                        <td style='width:200px;'>{{$i->email}}</td>
                                        <td>{{$i->account_type}}</td>
                                        <td>{{$i->alert_start_stop}}</td>
                                        <td>{{$i->status}}</td>
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
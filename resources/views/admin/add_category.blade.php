@extends('admin_layout')
@section('admin_content')



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Category
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="box-content">


                    <div class="col-lg-6">

                        <form class="form-horizontal" action="" method="post">
                {{ csrf_field()  }}

                            <div class="control-group">
                                <label class ="control-label" for="date01">Category Name</label>
                                <div class="controls">
                                <input type="text" class="input-xlarge" name="category_name" value="02/12/14">
                            </div>

                            <div class="form-group">
                                <label>category description</label>
                                <div class="controls">
                                <textarea class="cleditor" name="category_description"row="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Publication status</label>
                                <div class="controls">
                                <input type="checkbox" name="publication_status" value"1">
                                </div>
                            </div>

                            

                                
                            <button type="submit" class="btn btn-default">Add button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


@endsection
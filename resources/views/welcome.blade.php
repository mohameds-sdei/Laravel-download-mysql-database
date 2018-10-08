<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin: 3% 0;">
                    <a href="/create-backup" class="btn btn-lg btn-primary">Backup Database</a>
                </div>
            </div>

            @if(isset($backup_files))
            <div class="table-responsive col-md-8 col-md-offset-2">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>S.No.</th>
                        <th>Database Backups</th>
                        <th>Action</th>
                    </tr>
                    @php ($i = 1)

                    @foreach($backup_files as $fileName)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$fileName}}</td>
                        <td><a class="btn btn-success" href="{{ route('download-database', [encrypt($fileName)]) }}">Download</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
            @endif
        </div>
    </body>
</html>
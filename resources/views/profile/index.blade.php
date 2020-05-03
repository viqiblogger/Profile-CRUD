<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
        <body>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1> PROFILE </h1>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info float-right btn btn-sm" data-toggle="modal" data-target="#exampleModalScrollable">
                    Tambah Data Profil
                    </button>

                   
                </div>
           
            <table class="table">
                <tr>
                @foreach($data_profile as $profile)
                    <td> NPM </td>
                    <td>{{$profile->npm_input}}</td>
                </tr>
                    <td> Nama Lengkap </td>
                    <td>{{$profile->nama_input}}</td>
                </tr>
                    <td> Kelas </td>
                    <td>{{$profile->kelas_input}}</td>
                </tr>
                    <td> Avatar </td>
                    <td>  <input name="avatar_input" type="file" class="form-control-file" id="exampleFormControlFile1"></td>
                    
                                
                              
                            
                </tr>
                
                @endforeach
               
            </table>
           
                        </div>
                    </div>
         <!-- Modal -->
         <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Insert Please !</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{action('ProfileController@create') }}" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">NPM</label>
                                <input name="npm_input" type="text" class="form-control" id="exampleFormControlInput1" placeholder="NPM">
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Lengkap</label>
                                <input name="nama_input" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kelas</label>
                                <input name="kelas_input" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kelas">
                            </div>
                            
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">submit</button>
                        </div>
                       
                        </div>
                    </div>
                    </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </body>
</html>

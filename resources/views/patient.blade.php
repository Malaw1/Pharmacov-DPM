
@extends('layouts.app')

@section('header')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">

    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

@endsection

@section('content')
    <h1>Page des patients</h1>

    <br>
    <a class="btn btn-primary" href="javascript:void(0) " id="btnUpload" class="mb-2">Ajoouter un patient</a>
    <br><br>
    <table class="table table-bordered  " id="tablePatient">
        <thead class="table-header">
        <tr>
            <th>No</th>
            <th>Nom du fichier</th>
            <th>Date de creation</th>
            <th>Nom du dossier</th>
            <th>User</th>
            <th width="100px">Action</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <div class="modal fade" id="PatientModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="titleModal" class="mb-2"></h4>
                </div>
                <div class="modal-body">
                    <form id="FormPatient" class="form-horizontal" >
                        <input type="hidden" name="file_id" id="file_id" value="">
                        <div class="form-group">
                            <label for="numero_dossier" class="control-label">Numero de dossier</label>
                            <div class="col-sm-12">
                                <input type="text" name="numero_dossier" id="numero_dossier" class="form-control " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="initial" class="control-label">Initial</label>
                            <div class="col-sm-12">
                                <input type="text" name="initial" id="initial" class="form-control " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age" class="control-label">Age</label>
                            <div class="col-sm-12">
                                <input type="text" name="age" id="age" class="form-control " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sexe" class="control-label">Sexe</label>
                            <div class="col-sm-12">
                                <input type="text" name="sexe" id="sexe" class="form-control " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="poids" class="control-label">Poids</label>
                            <div class="col-sm-12">
                                <input type="text" name="poids" id="poids" class="form-control " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="taille" class="control-label">Taille</label>
                            <div class="col-sm-12">
                                <input type="text" name="taille" id="taille" class="form-control " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="facteur_associe" class="control-label">Facteur assicie</label>
                            <div class="col-sm-12">
                                <input type="text" name="facteur_associe" id="facteur_associe" class="form-control " required>
                            </div>
                        </div>

                        <div id="sousDossier" aria-hidden="false">

                        </div>
                        <div class=" col-sm-10">
                            <button type="submit" class="btn btn-success" id="btnSave">Uploader</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@section('script')

    <script type="text/javascript">

        $(function () {

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            // initialisation de DataTable js

            var table = $('#tablePatient').DataTable({

                "processing": true,
                "serverSide": true,

                "ajax": "{{route('patient.index')}}",

                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nom', name: 'nom'},
                    {data: 'dateCreation', name: 'dateCreation'},
                    {data: 'dossier.nomDossier', name: 'dossier.nomDossier'},
                    {data: 'user.name', name: 'user.name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            // $('#btnUpload').click(function () {

            //     $('#titleModal').html('Uploader un fichier');

            //     $('#btnSave').val('Upload');

            //     $('#FormPatient').trigger('reset');

            //     $('#PatientModal').modal('show');
            // });


            // migrer le dossier dans la base

            // $('#btnSaveDossier').click(function (e) {

            //     e.preventDefault();

            //     $(this).html('sending..');

            //     $.ajax({
            //         data: $('#FormDossier').serialize(),
            //         url: " ",
            //         type: "post",
            //         dataType: "json",
            //         success: function (data) {
            //             console.log('le dossier est cree');
            //             console.log(data);

            //             $('#formDossier').trigger('reset');

            //             $('#DossierModal').modal('hide');

            //             Swal.fire(
            //                 'Succes!',
            //                 'Le produit a ete ajoute!',
            //                 'success'
            //             )

            //         },
            //         error: function (data) {
            //             console.log('ca ne marche pas')
            //             console.log('erreur' + data);

            //             $('#btnSaveDossier').html('creer un dossier');

            //         }
            //     });

            // });


            //migrer le fichier

            // $('#FormPatient').on('submit', function (e) {

            //     e.preventDefault();

            //     $('#btnSave').html('sending..');

            //     var dataForm = new FormData(this);

            //     $.ajax({
            //         data: dataForm,
            //         url: " ",
            //         method: "POST",
            //         dataType: 'JSON',
            //         contentType: false,
            //         cache: false,
            //         processData: false,
            //         success: function (data) {
            //             console.log('ca marche');
            //             $('#PatientModal').modal('hide');
            //             chart();
            //             table.draw();
            //         },
            //         error: function (data) {
            //             console.log('ca ne marche pas');
            //             console.log('erreur ' + data);

            //             $('#btnSave').html('uploader un fichier');

            //         }
            //     });

            // });

            // $('body').on('click', '.editBtn', function () {

            //     var file_id = $(this).data('id');

            //     $('#PatientModal').trigger('reset');

            //     $.get("" + '/' + file_id, function (data) {
            //         $('#titleModal').html('Modifier fichier');
            //         $('#btnSave').html('modifier');
            //         $('#PatientModal').modal('show');
            //         $('#file_id').val(file_id);
            //         $('#nomFichier').val(data.nom);
            //         $('#folder').val(data.dossier.nomDossier);

            //     });
            // });

            // $('body').on('click', '.deleteBtn', function () {

            //     const swalWithBootstrapButtons = Swal.mixin({
            //         customClass: {
            //             confirmButton: 'btn btn-success',
            //             cancelButton: 'btn btn-danger'
            //         },
            //         buttonsStyling: false
            //     });

            //     swalWithBootstrapButtons.fire({
            //         title: 'Are you sure?',
            //         text: "You won't be able to revert this!",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonText: 'Yes, delete it!',
            //         cancelButtonText: 'No, cancel!',
            //         reverseButtons: true
            //     }).then((result) => {
            //         if (result.value) {

            //             var file_id = $(this).data('id');

            //             $.ajax({
            //                 type: 'DELETE',
            //                 url: "{" + '/' + file_id,
            //                 success: function (data) {
            //                     table.draw();
            //                 },

            //                 error: function (data) {

            //                     console.log('la suppresion ne marche pas');
            //                     console.log(data);
            //                 }

            //             });

            //             swalWithBootstrapButtons.fire(
            //                 'Deleted!',
            //                 'Your file has been deleted.',
            //                 'success'
            //             )
            //         } else if (
            //             /* Read more about handling dismissals below */
            //             result.dismiss === Swal.DismissReason.cancel
            //         ) {
            //             swalWithBootstrapButtons.fire(
            //                 'Cancelled',
            //                 'Your imaginary file is safe :)',
            //                 'error'
            //             )
            //         }
            //     });


            // });

            // $('#folder').on('input', function () {

            //     var champ = $('#folder').val();

            //     $.ajax({
            //         data: {champ: champ},
            //         url: "{,
            //         Type: 'POST',
            //         dataType: 'JSON',
            //         success: function (data) {
            //             console.log(data.check);
            //             if (!data.check) {
            //                 // si le dossier entré n'existe pas on desactive le bouton envoyer
            //                 $('#btnSave').prop('disabled', true);
            //             } else {
            //                 // s'il existe on active le bouton
            //                 $('#btnSave').prop('disabled', false);

            //             }
            //         }

            //     })
            // });

        });


    </script>
@endsection

@endsection

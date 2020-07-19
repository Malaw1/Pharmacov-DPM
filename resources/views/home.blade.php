@extends('layouts.accueil')

@section('css')

    <!-- Font Awesome -->
    <link href="{{asset('build/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <h1>Page des fiches</h1>

    <br>
    <a class="btn btn-primary" href="javascript:void(0) " id="btnAjoutFiche" class="mb-2">Signaler un médicament</a>
    <br><br>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tableau d'accueil </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                    class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a ><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        Les cas siganler ayant des effets secondaires constatés
                    </p>

                    {{--    table--}}
                    <table class="table table-striped table-bordered"  id="tableFiche">
                        <thead class="table-header">
                        <tr>
                            <th>No</th>
                            <th>Numero de fiche</th>
                            <th>Numero dossier</th>
                            <th>Medicament</th>
                            <th width="110px">Action</th>
                        </tr>
                        </thead>

                    </table>
                    {{--    fin de la tabel--}}
                </div>
            </div>
        </div>
{{--    le modal fade--}}
    <div class="modal fade " id="FicheModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <strong>
                        <h4 class="title" id="titleModal" class="mb-2"></h4>
                    </strong>

                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="grad1">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <div class="text-center">
                                <h2><strong>Renseignement de la fiche</strong></h2>
                                <p>Remplir tous les champs avec une étoile * pour aller au suivant</p>
                            </div>
                            <form action="" class="form-horizontal" id="FormFiche">

                                <div id="wizard" class="form_wizard wizard_horizontal">

                                    <ul class="wizard_steps">
                                        <li>
                                            <a href="#step-1">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">
                                              Etape 1<br/>
                                              <small>Notificateur</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">
                                              Etape 2<br/>
                                              <small>Patient</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">
                                              Etape 3<br/>
                                              <small>Médicament</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-4">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">
                                              Etape 4<br/>
                                              <small>Effet</small>
                                          </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#step-5">
                                                <span class="step_no">5</span>
                                                <span class="step_descr">
                                              Etape 5<br/>
                                              <small>Suivi</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-6">
                                                <span class="step_no">6</span>
                                                <span class="step_descr">
                                              Etape 6<br/>
                                              <small>Validation</small>
                                          </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="step-1">
                                        <div class="form-card">
                                            <h2 class="StepTitle">Informations du notificateur</h2>
                                            <div class="form-group">
                                                <input type="hidden" name="id_notificateur" value="">
                                                <label for="prenom" class="control-label">Prenom</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="prenom" id="prenom" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nom" class="control-label">Nom</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="nom" id="nom" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fonction" class="control-label">Fonction</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="fonction" id="fonction" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="specialite" class="control-label">Specialité</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="specialite" id="specialite" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label">Email</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="email" id="email" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="structure" class="control-label">Structure</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="structure" id="structure" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="adresse_structure" class="control-label">Adresse de la structure</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="adresse_structure" id="adresse_structure" class="form-control "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone" class="control-label">Téléphone</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="telephone" id="telephone" class="form-control " required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="step-2">
                                        <h2 class="StepTitle">Information du patient</h2>
                                        <div class="form-card">
                                            <div class="form-group">
                                                <input type="hidden" name="id_patient" value="">
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
                                                    <input type="number" name="taille" id="taille" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="facteur_associe" class="control-label">Facteur assicie</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="facteur_associe" id="facteur_associe" class="form-control "
                                                           required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <h2 class="StepTitle">Information du médicament à signaler</h2>
                                        <div class="form-card">
                                            <div class="form-group">
                                                <input type="hidden" name="id_medicament" value="">
                                                <label for="produit" class="control-label">Produit</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="produit" id="produit" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="voie" class="control-label">voie</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="voie" id="voie" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dci" class="control-label">dci</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="dci" id="dci" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="posologie" class="control-label">posologies</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="posologie" id="posologie" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="forme" class="control-label">Forme</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="forme" id="forme" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="lot" class="control-label">Lot</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="lot" id="lot" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fabricant" class="control-label">Fabricant</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="fabricant" id="fabricant" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="plante_medicinale" class="control-label">Plante medicinale</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="plante_medicinale" id="plante_medicinale" class="form-control "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="date_prise" class="control-label">Date de prise</label>
                                                <div class="col-sm-12">
                                                    <input type="date" name="date_prise" id="date_prise" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="date_fin_prise" class="control-label">Date fin de prise</label>
                                                <div class="col-sm-12">
                                                    <input type="date" name="date_fin_prise" id="date_fin_prise" class="form-control " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4">
                                        <h2 class="StepTitle">Effet du médicament</h2>
                                        <div class="form-card">
                                            <div class="form-group">
                                                <input type="hidden" name="id_effet" value="">
                                                <label for="pathologies" class="control-label">Pathologies</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="pathologies" id="pathologies" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="antecedents" class="control-label">Antecedents</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="antecedents" id="antecedents" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label">Description</label>
                                                <div class="col-sm-12">
                                                    <textarea name="description" id="description" class="form-control " rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-5">
                                        <h2 class="StepTitle">Suivi patient</h2>
                                        <div class="form-card">
                                            <div class="form-group">
                                                <input type="hidden" name="id_suivi" value="">
                                                <label for="apparition_effet" class="control-label">apparition_effet</label>
                                                <div class="col-sm-12">
                                                    <input type="date" name="apparition_effet" id="apparition_effet" class="form-control "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="disparition_effet" class="control-label">Disparition effet</label>
                                                <div class="col-sm-12">
                                                    <input type="date" name="disparition_effet" id="disparition_effet" class="form-control "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="readministration" class="control-label">Readministration</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="readministration" id="readministration" class="form-control "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="reapparition" class="control-label">Reapparition</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="reapparition" id="reapparition" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="traitement_correcteur" class="control-label">Traitement correcteur</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="traitement_correcteur" id="traitement_correcteur"
                                                           class="form-control "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="suivi_patient" class="control-label">Suivi patient</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="suivi_patient" id="suivi_patient" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="evolution" class="control-label">Evolution</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="evolution" id="evolution" class="form-control " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-6">
                                        <div class="col-md-12 col-sm-12 col-xs-12 justify-content-center">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2><i class="fa fa-bars"></i> Vérifier les informations entrées !</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div class="col-xs-3">
                                                        <!-- required for floating -->
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs tabs-left">
                                                            <li class="active"><a href="#notificateur" data-toggle="tab">Notificateur</a>
                                                            </li>
                                                            <li><a href="#patient" data-toggle="tab">Patient</a>
                                                            </li>
                                                            <li><a href="#medicament" data-toggle="tab">Medicament</a>
                                                            </li>
                                                            <li><a href="#effet" data-toggle="tab">Effet</a>
                                                            </li>
                                                            <li><a href="#suivi" data-toggle="tab">Suivi</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-xs-9">
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="notificateur">
                                                                <p class="lead">Informations sur le notificateur</p>
                                                                prenom: <strong id="checkPrenom"></strong><br>
                                                                nom: <strong id="checkNom"></strong><br>
                                                                fonction: <strong id="checkFonction"></strong><br>
                                                                specialite: <strong id="checkSpecialite"></strong><br>
                                                                email : <strong id="checkEmail"></strong><br>
                                                                structure : <strong id="checkStructure"></strong><br>
                                                                adresse de la sructure: <strong id="checkAdresse"></strong><br>
                                                                telephone: <strong id="checkTelephone"></strong><br>
                                                            </div>
                                                            <div class="tab-pane" id="patient">
                                                                <p class="lead">Informations sur le patient</p>
                                                                numero_dossier: <strong id="checknumero_dossier"></strong><br>
                                                                initial: <strong id="checkinitial"></strong><br>
                                                                age: <strong id="checkage"></strong><br>
                                                                sexe: <strong id="checksexe"></strong><br>
                                                                poids: <strong id="checkpoids"></strong><br>
                                                                taille: <strong id="checktaille"></strong><br>
                                                                facteur_associe: <strong id="checkfacteur_associe"></strong><br>
                                                            </div>
                                                            <div class="tab-pane" id="medicament">
                                                                <p class="lead">Informations sur le médicament</p>
                                                                produit: <strong id="checkproduit"></strong><br>
                                                                antecedents: <strong id="checkantecedents"></strong><br>
                                                                description: <strong id="checkdescription"></strong><br>
                                                                forme: <strong id="checkforme"></strong><br>
                                                                lot: <strong id="checklot"></strong><br>
                                                                fabricant: <strong id="checkfabricant"></strong><br>
                                                                plante_medicinale: <strong id="checkplante_medicinale"></strong><br>
                                                                date_prise: <strong id="checkdate_prise"></strong><br>
                                                                date_fin_prise: <strong id="checkdate_fin_prise"></strong><br>
                                                            </div>
                                                            <div class="tab-pane" id="effet">
                                                                <p class="lead">Informations sur les effets</p>
                                                                pathologies: <strong id="checkpathologies"></strong><br>
                                                                antecedents: <strong id="checkantecedents"></strong><br>
                                                                description: <strong id="checkdescription"></strong><br>
                                                            </div>
                                                            <div class="tab-pane" id="suivi">
                                                                <p class="lead">Informations sur le suivi</p>
                                                                apparition_effet: <strong id="checkapparition_effet"></strong><br>
                                                                disparition_effet: <strong id="checkdisparition_effet"></strong><br>
                                                                readministration: <strong id="checkreadministration"></strong><br>
                                                                reapparition: <strong id="checkreapparition"></strong><br>
                                                                traitement_correcteur: <strong id="checktraitement_correcteur"></strong><br>
                                                                suivi_patient: <strong id="checksuivi_patient"></strong><br>
                                                                evolution: <strong id="checkevolution"></strong><br>
                                                            </div>
                                                            <div class="clearfix"></div>

                                                        </div>

                                                    </div>

                                                    <div class="clearfix"></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    fin du modal fade--}}
    </div>


@section('script')

    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- End SmartWizard Content -->
    <script src=" {{asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}} "></script>

    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>

    <script src=" {{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}} "></script>
    <script src=" {{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}} "></script>
    <script src=" {{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}} "></script>
    <script src=" {{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}} "></script>
    <script src=" {{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}} "></script>
    <script src=" {{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}} "></script>
    <script src=" {{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}} "></script>
    <script src=" {{asset('vendors/jszip/dist/jszip.min.js')}} "></script>
    <script src=" {{asset('vendors/pdfmake/build/pdfmake.min.js')}} "></script>
    <script src=" {{asset('vendors/pdfmake/build/vfs_fonts.js')}} "></script>

    <script>
        // le csrftoken pour les requetes ajax
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        // DataTable
        var table = $('#tableFiche').DataTable({

            "processing": true,
            "serverSide": true,

            "ajax": "{{route('home')}}",

            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'numero', name: 'numero'},
                {data: 'patient.numero_dossier', name: 'patient.numero_dossier'},
                {data: 'medicament.produit', name: 'medicament.produit'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            dom: "Blfrtip",
            buttons: [
                {
                    extend: "copy",
                    className: "btn-sm"
                },
                {
                    extend: "csv",
                    className: "btn-sm"
                },
                {
                    extend: "excel",
                    className: "btn-sm"
                },
                {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                },
                {
                    extend: "print",
                    className: "btn-sm"
                },

            ],
            responsive: true
        });

        // fin de la configuration du dataTable

        $('#btnAjoutFiche').click(function () {

            $('#titleModal').html("Formulaire pour signaler un médicament");

            $('#buttonFinish').html('Finish');
            $('#telehone').val(' ');
            $('#FormFiche').trigger('reset');
            $('#FicheModal').modal('show');
        });

        /* prendre les valeurs des differents champs et l'afficher dans le fieldset check
         pour que l'utilisateur puisse verifier les informations entrées*/

         $('#nextToCheck').click(function (){
            $prenom = $("input[name='prenom']").val();
            $nom = $("input[name='nom']").val();
            $fonction = $("input[name='fonction']").val();
            $adresse = $("input[name='adresse_structure']").val();
            $email = $("input[name='email']").val();
            $structure = $("input[name='structure']").val();
            $specialite = $("input[name='specialite']").val();
            $telephone = $("input[name='telephone']").val();
            $numero_dossier = $("input[name='numero_dossier']").val();
            $initial = $("input[name='initial']").val();
            $age = $("input[name='age']").val();
            $sexe = $("input[name='sexe']").val();
            $poids = $("input[name='poids']").val();
            $taille = $("input[name='taille']").val();
            $facteur_associe = $("input[name='facteur_associe']").val();
            $produit = $("input[name='produit']").val();
            $antecedents = $("input[name='antecedents']").val();
            $description = $("input[name='description']").val();
            $forme = $("input[name='forme']").val();
            $lot = $("input[name='lot']").val();
            $fabricant = $("input[name='fabricant']").val();
            $plante_medicinale = $("input[name='plante_medicinale']").val();
            $date_prise = $("input[name='date_prise']").val();
            $date_fin_prise = $("input[name='date_fin_prise']").val();
            $pathologies = $("input[name='pathologies']").val();
            $antecedents = $("input[name='antecedents']").val();
            $description = $("input[name='description']").val();
            $apparition_effet = $("input[name='apparition_effet']").val();
            $disparition_effet = $("input[name='disparition_effet']").val();
            $readministration = $("input[name='readministration']").val();
            $reapparition = $("input[name='reapparition']").val();
            $traitement_correcteur = $("input[name='traitement_correcteur']").val();
            $suivi_patient = $("input[name='suivi_patient']").val();
            $evolution = $("input[name='evolution']").val();

            // pour le notificateur
            $('#checkPrenom').html($prenom)
            $('#checkNom').html($nom)
            $('#checkEmail').html($email)
            $('#checkFonction').html($fonction)
            $('#checkSpecialite').html($specialite)
            $('#checkStructure').html($structure)
            $('#checkAdresse').html($adresse)
            $('#checkTelephone').html($telephone)

            //pour le patient
            $('#checknumero_dossier').html($numero_dossier)
            $('#checkinitial').html($initial)
            $('#checkage').html($age)
            $('#checksexe').html($sexe)
            $('#checkpoids').html($poids)
            $('#checktaille').html($taille)
            $('#checkfacteur_associe').html($facteur_associe)
            // pour le médicament
            $('#checkproduit').html($produit)
            $('#checkantecedents').html($antecedents)
            $('#checkdescription').html($description)
            $('#checkforme').html($forme)
            $('#checklot').html($lot)
            $('#checkfabricant').html($fabricant)
            $('#checkplante_medicinale').html($plante_medicinale)
            $('#checkdate_prise').html($date_prise)
            $('#checkdate_fin_prise').html($date_fin_prise)
            // pour les effets
            $('#checkpathologies').html($pathologies)
            $('#checkantecedents').html($antecedents)
            $('#checkdescription').html($description)
            //pour la suivi
            $('#checkapparition_effet').html($apparition_effet)
            $('#checkdisparition_effet').html($disparition_effet)
            $('#checkreadministration').html($readministration)
            $('#checkreapparition').html($reapparition)
            $('#checktraitement_correcteur').html($traitement_correcteur)
            $('#checksuivi_patient').html($suivi_patient)
            $('#checkevolution').html($evolution)
         });

         //l'envoi du formulaire
         $('#FormFiche').on('submit', function (e) {

            e.preventDefault();

            $('.buttonFinish').html('sending..');

            var dataForm = new FormData(this);

            $.ajax({
                data: dataForm,
                url: " {{route('fiches.store')}} ",
                method: "POST",
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log('ca marche');
                    window.location.href = "{{route('home')}}"+'/'+"#step-1";
                    $('#FicheModal').modal('hide');
                    table.draw();
                },
                error: function (data) {
                    console.log('ca ne marche pas');
                    console.log('erreur ' + data);
                    window.location.href = "{{route('home')}}"+'/'+"#step-1";

                    $('.buttonFinish').html('Réessayer');

                }
            });

            });

        // modification d'un enregistrement
        $('body').on('click', '.editBtn', function () {
            var fiche_id = $(this).data('id');
            $.get("{{route('fiches.edit',12345)}}".replace(/12345/,fiche_id.toString()), function (data) {
                $('#titleModal').html('Modification');
                $('#btnEnvoyer').html('modifier');
                $('#id_fiche').val('fiche_id');
                $("input[name='prenom']").val(data.notificateur.prenom);
                $("input[name='nom']").val(data.notificateur.nom);
                $("input[name='fonction']").val(data.notificateur.fonction);
                $("input[name='adresse_structure']").val(data.notificateur.adresse_structure);
                $("input[name='email']").val(data.notificateur.email);
                $("input[name='structure']").val(data.notificateur.structure);
                $("input[name='specialite']").val(data.notificateur.specialite);
                $("input[name='telephone']").val(data.notificateur.telephone);
                $("input[name='numero_dossier']").val(data.patient.numero_dossier);
                $("input[name='initial']").val(data.patient.initial);
                $("input[name='age']").val(data.patient.age);
                $("input[name='sexe']").val(data.patient.sexe);
                $("input[name='poids']").val(data.patient.poids);
                $("input[name='taille']").val(data.patient.taille);
                $("input[name='facteur_associe']").val(data.patient.facteur_associe);
                $("input[name='produit']").val(data.medicament.produit);
                $("input[name='dci']").val(data.medicament.dci);
                $("input[name='voie']").val(data.medicament.voie);
                $("input[name='posologie']").val(data.medicament.posologie);
                $("input[name='description']").val(data.medicament.description);
                $("input[name='forme']").val(data.medicament.forme);
                $("input[name='lot']").val(data.medicament.lot);
                $("input[name='fabricant']").val(data.medicament.fabricant);
                $("input[name='plante_medicinale']").val(data.medicament.plante_medicinale);
                $("input[name='date_prise']").val(data.medicament.date_prise);
                $("input[name='date_fin_prise']").val(data.medicament.date_fin_prise);
                $("input[name='pathologies']").val();
                $("input[name='antecedents']").val();
                $("input[name='description']").val();
                $("input[name='apparition_effet']").val(data.suivis[0].apparition_effet);
                $("input[name='disparition_effet']").val(data.suivis[0].disparition_effet);
                $("input[name='readministration']").val(data.suivis[0].readministration);
                $("input[name='reapparition']").val(data.suivis[0].reapparition);
                $("input[name='traitement_correcteur']").val(data.suivis[0].traitement_correcteur);
                $("input[name='suivi_patient']").val(data.suivis[0].suivi_patient);
                $("input[name='evolution']").val(data.suivis[0].evolution);
                $('#FicheModal').trigger('reset');

                $('#FicheModal').modal('show');

            });
        });


    </script>
@endsection
@endsection



@extends('layouts.accueil')
@section('header')

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">

@endsection
@section('content')
    <!-- MultiStep Form -->
    <!-- Smart Wizard -->
    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
    <form action="" class="form-horizontal">

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
                <h2 class="StepTitle">Step 2 Content</h2>
                <div class="form-card">
                    <h2 class="StepTitle">Information du patient</h2>
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
                        <label for="antecedents" class="control-label">antecedents</label>
                        <div class="col-sm-12">
                            <input type="text" name="antecedents" id="antecedents" class="form-control " required>
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
                <div class="col-md-10 col-sm-6 col-xs-12 justify-content-center">
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
                    <div class="text-right">
                        <input type="submit" id="btnSignaler" value="Envoyer" class="btn btn-success">
                    </div>
                </div>

            </div>

        </div>
    </form>



@endsection
@section('script')

    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>

    <!-- End SmartWizard Content -->
    <script src=" {{asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}} "></script>

@endsection


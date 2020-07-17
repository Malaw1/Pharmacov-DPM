@extends('layouts.app')
@section('header')
<link rel="stylesheet" href=" {{asset('css/wizard.css')}} ">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
@endsection
@section('content')
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Renseignement de la fiche</strong></h2>
                <p>Remplir tous les champs avec une étoile * pour aller au suivant</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action=" {{route('fiche.store')}} " method="POST">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Notificateur</strong></li>
                                <li id="personal"><strong>Patient</strong></li>
                                <li id="payment"><strong>Médicament pris</strong></li>
                                <li id="confirm"><strong>Effet</strong></li>
                                <li id="confirm"><strong>Suivi</strong></li>
                                <li id="confirm"><strong>Verification</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            {{-- fieldset du notificateur --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Informations du notificateur</h2>
                                            <div class="form-group">
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
                                                <label for="email" class="control-label">Email</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="email" id="email" class="form-control " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fonction" class="control-label">Fonction</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="fonction" id="fonction" class="form-control " required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="specialite" class="control-label">specialite</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="specialite" id="specialite" class="form-control " required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="tel" class="control-label">Téléphone</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="tel" id="tel" class="form-control " required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="structure" class="control-label">Structure</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="structure" id="structure" class="form-control " required>
                                                </div>
                                            </div>
                                </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            {{-- fieldset du patient --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Information du patient</h2>
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
                                                <input type="number" name="taille" id="taille" class="form-control " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="facteur_associe" class="control-label">Facteur assicie</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="facteur_associe" id="facteur_associe" class="form-control " required>
                                            </div>
                                        </div>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            {{-- fieldset du medicament --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Information du médicament à signaler</h2>
                                    <div class="form-group">
                                        <label for="produit" class="control-label">Produit</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="produit" id="produit" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="antecedents" class="control-label">antecedents</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="antecedents" id="antecedents" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label">description</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="description" id="description" class="form-control " required>
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
                                            <input type="text" name="plante_medicinale" id="plante_medicinale" class="form-control " required>
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
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            {{-- fieldser effet --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Effet du médicament</h2>
                                    <div class="form-group">
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
                                            <textarea name="description" id="description" class="form-control "  rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />

                            </fieldset>

                            {{-- fieldser suivi --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Suivi patient</h2>
                                    <div class="form-group">
                                        <label for="apparition_effet" class="control-label">apparition_effet</label>
                                        <div class="col-sm-12">
                                            <input type="date" name="apparition_effet" id="apparition_effet" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disparition_effet" class="control-label">Disparition effet</label>
                                        <div class="col-sm-12">
                                            <input type="date" name="disparition_effet" id="disparition_effet" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="readministration" class="control-label">Readministration</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="readministration" id="readministration" class="form-control " required>
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
                                            <input type="text" name="traitement_correcteur" id="traitement_correcteur" class="form-control " required>
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
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            {{-- fieldset check --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">

                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="submit" name="confirmer" class="next action-button" value="Confirmer" />
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_script')
<script src=" {{asset('js/wizard.js')}} "></script>
@endsection

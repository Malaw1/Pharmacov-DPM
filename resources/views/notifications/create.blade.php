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
        <div class="col-11 col-sm-9 col-md-12 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Fiche de Notification</strong></h2>
                <p>Remplir tous les champs avec une étoile * pour aller au suivant</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="{{ route('fiches.store') }}" method="POST">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Notificateur</strong></li>
                                <li id="personal"><strong>Patient</strong></li>
                                <li id="payment"><strong>Médicament pris</strong></li>
                                <li id="confirm"><strong>Effet</strong></li>
                                <li id="confirm"><strong>Suivi</strong></li>
                                <li id="confirm"><strong>Validation</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            {{-- fieldset du notificateur --}}
                            <fieldset>
                                <div class="form-card">
                                    <!-- <h2 class="fs-title">Informations du notificateur</h2> -->
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
                                                    <select name="fonction" id="" class="form-control">
                                                        <option value="Medecin">Medecin</option>
                                                        <option value="Pharmacien">Pharmacien</option>
                                                        <option value="Dentiste">Dentiste</option>
                                                        <option value="Infirmier">Infirmier</option>
                                                        <option value="Sage-femme">Sage-Femme</option>
                                                        <option value="Masseur kinésithérapeute">Masseur kinésithérapeute</option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="specialite" class="control-label">Specialite</label>
                                                <div class="col-sm-12">
                                                    <select name="specialite" id="" class="form-control">
                                                        <option value="Médecin omnipraticien">Médecin omnipraticien</option>
                                                        <option value="Spécialiste en cardiologie">Spécialiste en cardiologie</option>
                                                        <option value="Spécialiste en dermatologie vénéréologie">Spécialiste en dermatologie vénéréologie</option>
                                                        <option value="Spécialiste en gynécologie médicale">Spécialiste en gynécologie médicale</option>
                                                        <option value="Spécialiste en gynécologie obstétrique">Spécialiste en gynécologie obstétrique</option>
                                                        <option value="Spécialiste en gastro-entérologie hépatologie">Spécialiste en gastro-entérologie hépatologie</option>
                                                        <option value="Spécialiste en psychiatrie">Spécialiste en psychiatrie</option>
                                                        <option value="Spécialiste en ophtalmologie ">Spécialiste en ophtalmologie </option>
                                                        <option value="Spécialiste en oto-rhino-laryngologie">Spécialiste en oto-rhino-laryngologie</option>
                                                        <option value="Spécialiste en pédiatrie">Spécialiste en pédiatrie</option>
                                                        <option value="Spécialiste en pneumologie">Spécialiste en pneumologie</option>
                                                        <option value="Spécialiste en radiodiagnostic et imagerie médicale">Spécialiste en radiodiagnostic et imagerie médicale</option>
                                                        <option value="Spécialiste en stomatologie">Spécialiste en stomatologie</option>
                                                        <option value="Chirurgien dentiste">Chirurgien dentiste</option>
                                                        <option value="Sage-femme">Sage-femme</option>
                                                        <option value="Orthophoniste">Orthophoniste</option>
                                                        <option value="Orthopediste">Orthopediste</option>
                                                        <option value="Pédicure-podologue">Pédicure-podologue</option>
                                                        <option value="Audio prothésiste">Audio prothésiste</option>
                                                        <option value="Ergothérapeute">Ergothérapeute</option>
                                                        <option value="Psychomotricien">Psychomotricien</option>
                                                    </select>
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

                                            <div class="form-group">
                                                <label for="service" class="control-label">Service</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="service" id="structure" class="form-control " required>
                                                </div>
                                            </div>
                                </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            {{-- fieldset du patient --}}
                            <fieldset>
                                <div class="form-card">
                                    <!-- <h2 class="fs-title">Information du patient</h2> -->
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
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="sexe" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">F</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="sexe" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">M</label>
                                            </div>
                                            <!-- <div class="col-sm-12">
                                                <input type="text" name="sexe" id="sexe" class="form-control " required>
                                            </div> -->
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
                                            <label for="facteur_associe" class="control-label">Antécédents / Facteurs associés</label>
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
                                    <!-- <h2 class="fs-title">Information du médicament à signaler</h2> -->
                                    <br>
                                    <div class="form-group">
                                        <label for="produit" class="control-label">Nom Commercial (ou DCI) / Dosage</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="produit" id="produit" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="antecedents" class="control-label">Voie</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="voie" id="antecedents" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label">Posologie</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="posologie" id="description" class="form-control " required>
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
                                        <label for="date_prise" class="control-label">Date et Heure de prise</label>
                                        <div class="col-sm-12">
                                            <input type="datetime-local" name="date_prise" id="date_prise" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_fin_prise" class="control-label">Date et Heure de fin de prise</label>
                                        <div class="col-sm-12">
                                            <input type="datetime-local" name="date_fin_prise" id="date_fin_prise" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="plante_medicinale" class="control-label">Prise de Plante medicinale</label>
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                            <!-- <label for="sexe" class="control-label">Sexe</label> -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="plante1" name="sexe" value="Oui" class="custom-control-input">
                                                <label class="custom-control-label" for="plante1">Oui</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="plante" name="plante_medicinale" value="Non" class="custom-control-input">
                                                <label class="custom-control-label" for="plante">Non</label>
                                            </div>
                                            <!-- <div class="col-sm-12">
                                                <input type="text" name="sexe" id="sexe" class="form-control " required>
                                            </div> -->
                                        </div>
                                            <input type="text" name="plante_medicinale" id="plante_medicinale" placeholder="Si Oui preciser le nom local et la partie utilisee" class="form-control " required>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            {{-- fieldser effet --}}
                            <fieldset>
                                <div class="form-card">
                                    <div class="form-group">
                                        <label for="pathologies" class="control-label">Pour quelles pathologies ces médicaments avaient été prescrits ?</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="pathologies" id="pathologies" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="antecedents" class="control-label">Antécédents médicamenteux ( <small>medicament pris auparavant</small> )</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="antecedents" id="antecedents" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label">Description de l'effet</label>
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
                                    <div class="form-group">
                                        <label for="apparition_effet" class="control-label">Date et Heure de l'apparition de l'effet</label>
                                        <div class="col-sm-12">
                                            <input type="datetime-local" name="apparition_effet" id="apparition_effet" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disparition_effet" class="control-label">Date et Heure de la disparition de l'effet</label>
                                        <div class="col-sm-12">
                                            <input type="datetime-local" name="disparition_effet" id="disparition_effet" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="readministration" class="control-label">Réadministration</label>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="readministration1" name="readministration" value="Oui" class="custom-control-input">
                                                <label class="custom-control-label" for="readministration1">Oui</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="readministration" name="readministration" value="Non" class="custom-control-input">
                                                <label class="custom-control-label" for="readministration">Non</label>
                                            </div>
                                            <!-- <input type="text" name="readministration" id="readministration" class="form-control " required> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reapparition" class="control-label">Réapparition</label>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="reapparition1" name="reapparition" value="Oui" class="custom-control-input">
                                                <label class="custom-control-label" for="reapparition1">Oui</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="reapparition" name="reapparition" value="Non" class="custom-control-input">
                                                <label class="custom-control-label" for="reapparition">Non</label>
                                            </div>
                                            <!-- <input type="text" name="readministration" id="readministration" class="form-control " required> -->
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="traitement_correcteur" class="control-label">Traitement correcteur</label>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="traitement_correcteur" name="traitement_correcteur" value="Oui" class="custom-control-input">
                                                <label class="custom-control-label" for="traitement_correcteur">Oui</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="traitement_correcteur" name="traitement_correcteur" value="Non" class="custom-control-input">
                                                <label class="custom-control-label" for="traitement_correcteur">Non</label>
                                            </div>

                                            <input type="text" name="traitement_correcteur" id="traitement_correcteur" placeholder="Si oui preciser lequel" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="suivi_patient" class="control-label">Suivi patient</label>
                                        <div class="col-sm-12">
                                            <select name="suivi_patient" id="suivi_patient" class="form-control ">
                                                <option value="Suivi Ambulatoire">Suivi Ambulatoire</option>
                                                <option value="Hospitalisation">Hospitalisation</option>
                                                <option value="Reference">Reference</option>
                                                <option value="Autre">Autre</option>
                                            </select>
                                            <input type="text" name="suivi_patient" id="suivi_patient" class="form-control" placeholder="Preciser si autre" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="evolution" class="control-label">Evolution</label>
                                        <div class="col-sm-12">
                                            <select name="evolution" id="evolution" class="form-control ">
                                                <option value="Guerison sans sequelle">Guerison sans sequelle</option>
                                                <option value="Guerison avec sequelle">Guerison avec sequelle</option>
                                                <option value="Deces">Deces</option>
                                                <option value="Inconnu">Inconnu</option>
                                            </select>
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
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Vous avez terminer de renseigner les donnees, Voulez-vous les enregistrer?</h5>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Enregistrer" />
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

<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
    Ajouter un nouveau
</button>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nouvelle tontine</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="tontine-for" method="POST">
                    @csrf
                    <div class="form-group col-md-12">
                        <label for="number_of_members">Nombre de membres:</label>
                        <select name="number_of_members" class="form-control" id="number_of_members">
                            <option value="">0</option>
                        </select>
                    </div>
                    <div class="row row-cols-2 text-start">
                        <div class="form-group col-md-6">
                            <label for="name">Nom:</label>
                            <input id="name" name="name" type="text" placeholder="Nom"
                                class="form-control required-field" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="profit">Frais:</label>
                            <select id="profit" name="profit" class="form-control required-field">
                                <option value="">0</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="amount">Montant:</label>
                            <input id="amountInput" name="amount" type="number" placeholder="Montant a payer"
                                class="form-control required-field" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="amountOutput">Montant à Payer:</label>
                            <input id="amountOutput" name="amount_payer" class="form-control type="number" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delay">Délai:</label>
                            {{-- <select name="delay" class="form-control required-field">
                                @for ($i=1; $i<=11 ; $i++)
                                <option value="{{$i}}">{{{$i}}}</option>
                                @endfor
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select> --}}
                            <input id="delay" name="delay" type="number" placeholder="Délai"
                                class="form-control" required-field>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="periode">Période:</label>
                            <select id="periode" name="periode" class="form-select" required-field>
                                <option value="">--Choisir--</option>
                                <option value="day">Jour</option>
                                <option value="week">Semaine</option>
                                <option value="month">Mois</option>
                                <option value="year">Année</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delay">Date début:</label>
                            <input name="date_debut" id="date_debut" type="date" class="form-control required-field">
                        </div>                        
                        <div class="form-group col-md-6">
                            <label for="periode">Date fin:</label>
                            <input name="date_fin" id="date_fin" type="date" placeholder="Délai"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group col-12">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" class="form-control" rows="2" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="submit" id="save-button" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

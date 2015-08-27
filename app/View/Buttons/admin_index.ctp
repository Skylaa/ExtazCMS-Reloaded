<?php $this->assign('title', 'Gérer les boutons'); ?>
<script type="text/javascript">
$(function() {
    $(window).load(function(){
        $(".confirm").confirm({
            text: "Voulez vous vraiment supprimer ce bouton ?",
            title: "Confirmation",
            confirmButton: "Oui",
            cancelButton: "Non"
        });
    });
    $('#data-table').dataTable({
        "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "Tout"]],
        "order": [],
        language: {
            processing:     "Traitement en cours...",
            search:         "Rechercher&nbsp;:",
            lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
            info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix:    "",
            loadingRecords: "Chargement en cours...",
            zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Aucune donnée disponible dans le tableau",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    });
    $(".select").selectBoxIt({
        showFirstOption: false
    });
    $('#ButtonsContent').change(function(){
        var content = $('#ButtonsContent').val();
        var icon = $('#ButtonsIcon').val();
        if(icon == -1){
            $('#apercu').html('<i class="fa fa-question-circle"></i> ' + ' ' + content);
        }
        else{
            $('#apercu').html('<i class="fa fa-' + icon + '"></i> ' + ' ' + content);
        }
    });
    $('#ButtonsIcon').change(function(){
        var content = $('#ButtonsContent').val();
        var icon = $('#ButtonsIcon').val();
        if(content == ''){
            $('#apercu').html('<i class="fa fa-' + icon + '"></i> ' + 'Texte à afficher');
        }
        else{
            $('#apercu').html('<i class="fa fa-' + icon + '"></i> ' + ' ' + content);
        }
    });
    $('#ButtonsColor').change(function(){
        var color = $('#ButtonsColor').val();
        $('#apercu').removeClass();
        $('#apercu').addClass('btn-u btn-u-' + color + ' btn-u-lg');
    });
});
</script>
<div class="main-content">
    <div class="container">  
        <div class="row">
            <div class="col-md-6">
                <div class="page-content">
                    <div class="single-head">
                        <h3 class="pull-left"><i class="fa fa-plus-square"></i>Ajouter un bouton dans la sidebar</h3>
                        <div class="clearfix"></div>
                    </div>
                    <?php echo $this->Form->create('Buttons', ['inputDefaults' => ['error' => false]]); ?>
                        <div class="form-group">
                            <?php echo $this->Form->input('content', array('type' => 'text', 'placeholder' => 'Texte à afficher', 'class' => 'form-control', 'label' => false, 'required' => 'required')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('url', array('type' => 'url', 'placeholder' => 'Adresse URL', 'class' => 'form-control', 'label' => false, 'required' => 'required')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('order', array('type' => 'number', 'placeholder' => 'Ordre d\'affichage (ex: 1, 2, 3)', 'class' => 'form-control', 'label' => false, 'required' => 'required')); ?>
                        </div>
                        <div class="form-group">
                            <select name="data[Buttons][icon]" class="select" id="ButtonsIcon">
                                <option value="-1">Icône du bouton</option>
                                <option value="facebook-square" data-text='<i class="fa fa-facebook-square"></i> Facebook'></option>
                                <option value="facebook" data-text='<i class="fa fa-facebook"></i> Facebook'></option>
                                <option value="twitter-square" data-text='<i class="fa fa-twitter-square"></i> Twitter'></option>
                                <option value="twitter" data-text='<i class="fa fa-twitter"></i> Twitter'></option>
                                <option value="github" data-text='<i class="fa fa-github"></i> GitHub'></option>
                                <option value="youtube-play" data-text='<i class="fa fa-youtube-play"></i> YouTube'></option>
                                <option value="twitch" data-text='<i class="fa fa-twitch"></i> Twitch'></option>
                                <option value="google-plus" data-text='<i class="fa fa-google-plus"></i> Google+'></option>
                                <option value="skype" data-text='<i class="fa fa-skype"></i> Skype'></option>
                                <option value="reddit" data-text='<i class="fa fa-reddit"></i> Reddit'></option>
                                <option value="pinterest-square" data-text='<i class="fa fa-pinterest-square"></i> Pinterest'></option>
                                <option value="instagram" data-text='<i class="fa fa-instagram"></i> Instagram'></option>
                                <option value="paypal" data-text='<i class="fa fa-paypal"></i> PayPal'></option>
                                <option value="flickr" data-text='<i class="fa fa-flickr"></i> Flickr'></option>
                                <option value="foursquare" data-text='<i class="fa fa-foursquare"></i> Foursquare'></option>
                                <option value="dribbble" data-text='<i class="fa fa-dribbble"></i> Dribbble'></option>
                                <option value="soundcloud" data-text='<i class="fa fa-soundcloud"></i> Soundcloud'></option>
                                <option value="spotify" data-text='<i class="fa fa-spotify"></i> Spotify'></option>
                                <option value="vine" data-text='<i class="fa fa-vine"></i> Vine'></option>
                                <option value="trello" data-text='<i class="fa fa-trello"></i> Trello'></option>
                                <option value="tumblr" data-text='<i class="fa fa-tumblr"></i> Tumblr'></option>
                                <option value="steam" data-text='<i class="fa fa-steam"></i> Steam'></option>
                                <option value="vimeo-square" data-text='<i class="fa fa-vimeo-square"></i> Vimeo'></option>
                            </select>
                            <select name="data[Buttons][color]" class="select" id="ButtonsColor">
                                <option value="-1">Couleur du bouton</option>
                                <option value="" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #5fb611;"></div> Vert'></option>
                                <option value="red" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #e74c3c;"></div> Rouge'></option>
                                <option value="dark-blue" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #4765a0;"></div> Bleu foncé'></option>
                                <option value="blue" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #3498db;"></div> Bleu'></option>
                                <option value="aqua" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #27d7e7;"></div> Bleu clair'></option>
                                <option value="orange" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #e67e22;"></div> Orange'></option>
                                <option value="yellow" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #f1c40f;"></div> Jaune'></option>
                                <option value="white" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #fff;"></div> Blanc'></option>
                                <option value="default" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #95a5a6;"></div> Gris'></option>
                                <option value="dark" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #555;"></div> Noir'></option>
                                <option value="purple" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #9b6bcc;"></div> Violet'></option>
                                <option value="brown" data-text='<div style="border: 1px solid rgb(0, 0, 0); width: 20px; height: 10px; top: 1px; left: 1px; display: inline-block; background-color: #9c8061;"></div> Marron'></option>
                            </select>
                        </div>
                        <hr>
                        <button class="btn btn-black pull-right" type="submit"><i class="fa fa-check"></i> Confirmer</button>
                        <a href="<?php echo $this->Html->url(['controller' => 'pages', 'action' => 'stats']); ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Annuler</a>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="page-content">
                    <div class="single-head">
                        <h3 class="pull-left"><i class="fa fa-desktop"></i>Aperçu <small>Zoom x2</small></h3>
                        <div class="clearfix"></div>
                    </div>
                    <center>
                        <button id="apercu" class="btn-u btn-u-dark btn-u-lg" type="button"><i class="fa fa-question-circle"></i> Votre texte ici</button>
                    </center>
                </div>
            </div>
            <div class="col-md-12">
            <br></br>
                <div class="page-content">
                    <div class="single-head">
                        <h3 class="pull-left"><i class="fa fa-list"></i>Liste des boutons déjà créés</h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="page-tables">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                                <thead>
                                    <tr>
                                        <th><b>Créateur</b></th>
                                        <th><b>Texte</b></th>
                                        <th><b>URL</b></th>
                                        <th><b>Icone</b></th>
                                        <th><b>Couleur</b></th>
                                        <th><b>Aperçu</b></th>
                                        <th><b>Ordre</b></th>
                                        <th><b>Date de création</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $colors = ['', 'red', 'dark-blue', 'blue', 'aqua', 'orange', 'yellow', 'white', 'default', 'dark', 'purple', 'brown'];
                                    $hexas = ['#5fb611', '#e74c3c', '#4765a0', '#3498db', '#27d7e7', '#e67e22', '#f1c40f', '#fff', '#95a5a6', '#555', '#9b6bcc', '#9c8061'];
                                    foreach($data as $d){ 
                                    $color = str_replace($colors, $hexas, $d['Button']['color']);
                                    ?>
                                    <tr>
                                        <td><?php echo $d['User']['username']; ?></td>
                                        <td><?php echo $d['Button']['content']; ?></td>
                                        <td>
                                            <a href="<?php echo $d['Button']['url']; ?>" target="_blank"><?php echo $d['Button']['url']; ?></a>
                                        </td>
                                        <td><i class="fa fa-<?php echo $d['Button']['icon']; ?>"></i></td>
                                        <td>
                                            <?php 
                                            if(empty($color)){
                                                echo '<div style="border: 1px solid rgb(0, 0, 0); width: 15px; height: 15px; top: 1px; left: 1px; display: inline-block; background-color: #5fb611;margin-top: 3px;"></div>';
                                            }
                                            else{
                                                echo '<div style="border: 1px solid rgb(0, 0, 0); width: 15px; height: 15px; top: 1px; left: 1px; display: inline-block; background-color: '.$color.';margin-top: 3px;"></div>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <button class="btn-u btn-u-<?php echo $d['Button']['color']; ?> btn-u-xs" type="button"><i class="fa fa-<?php echo $d['Button']['icon']; ?>"></i> <?php echo $d['Button']['content']; ?></button>
                                        </td>
                                        <td><?php echo $d['Button']['order']; ?></td>
                                        <td><?php echo $this->Time->format('d/m/Y à H:i', $d['Button']['created']); ?></td>
                                        <td>
                                            <a href="<?php echo $this->Html->url(['controller' => 'buttons', 'action' => 'edit', $d['Button']['id'], 'admin' => true]); ?>" class="label label-black"><i class="fa fa-pencil-square-o"></i> Editer</a>
                                            <a href="<?php echo $this->Html->url(['controller' => 'buttons', 'action' => 'delete', $d['Button']['id'], 'admin' => true]); ?>" class="label label-danger confirm"><i class="fa fa-trash-o"></i> Supprimer</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (!isConnect('admin')) {
    throw new Exception('{{401 - Accès non autorisé}}');
}
$plugin = plugin::byId('pulseaudio');
sendVarToJS('eqType', $plugin->getId());
$eqLogics = eqLogic::byType($plugin->getId());
?>

<div class="row row-overflow">
  <div class="col-xs-12 eqLogicThumbnailDisplay">
		<legend><i class="fas fa-cog"></i>  {{Gestion}}</legend>
		<!-- Boutons de gestion du plugin -->
		<div class="eqLogicThumbnailContainer">
			<div class="cursor eqLogicAction logoPrimary" data-action="add">
				<i class="fas fa-plus-circle"></i>
				<br>
				<span>{{Ajouter}}</span>
			</div>
			<div class="cursor eqLogicAction logoSecondary" data-action="gotoPluginConf">
				<i class="fas fa-wrench"></i>
				<br>
				<span>{{Configuration}}</span>
			</div>
		</div>
		<legend><i class="fas fa-podcast"></i> {{Mes enceintes Bluetooth}}</legend>
		<!-- Champ de recherche -->
		<div class="input-group" style="margin:5px;">
			<input class="form-control roundedLeft" placeholder="{{Rechercher}}" id="in_searchEqlogic"/>
			<div class="input-group-btn">
				<a id="bt_resetSearch" class="btn roundedRight" style="width:30px"><i class="fas fa-times"></i></a>
			</div>
		</div>
		<!-- Liste des équipements du plugin -->
		<div class="eqLogicThumbnailContainer">
			<?php
			foreach ($eqLogics as $eqLogic) {
				$opacity = ($eqLogic->getIsEnable()) ? '' : 'disableCard';
				echo '<div class="eqLogicDisplayCard cursor '.$opacity.'" data-eqLogic_id="' . $eqLogic->getId() . '">';
				echo '<img src="' . $plugin->getPathImgIcon() . '"/>';
				echo '<br>';
				echo '<span class="name">' . $eqLogic->getHumanName(true, true) . '</span>';
				echo '</div>';
			}
			?>
		</div>
	</div> <!-- /.eqLogicThumbnailDisplay -->


<div class="col-xs-12 eqLogic" style="display: none;">
  <div class="input-group pull-right" style="display:inline-flex;">
    <span class="input-group-btn">
      <a class="btn btn-sm btn-default eqLogicAction roundedLeft" data-action="configure"><i class="fa fa-cogs"></i><span class="hidden-xs"> {{Configuration avancée}}</span>
      </a><a class="btn btn-sm btn-success eqLogicAction" data-action="save"><i class="fas fa-check-circle"></i> {{Sauvegarder}}
      </a><a class="btn btn-sm btn-danger eqLogicAction roundedRight" data-action="remove"><i class="fas fa-minus-circle"></i> {{Supprimer}}
      </a>
    </span>
  </div>
  <!-- Onglets -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#" class="eqLogicAction" aria-controls="home" role="tab" data-toggle="tab" data-action="returnToThumbnailDisplay"><i class="fa fa-arrow-circle-left"></i></a></li>
    <li role="presentation" class="active"><a href="#eqlogictab" aria-controls="home" role="tab" data-toggle="tab"><i class="fas fa-tachometer-alt"></i> {{Equipement}}</a></li>
    <li role="presentation"><a href="#commandtab" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i> {{Commandes}}</a></li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="eqlogictab">
				<br/>
				<div class="row">
					<div class="col-lg-7">
          <form class="form-horizontal">
            <fieldset>
              <legend><i class="fas fa-wrench"></i> {{Général}}</legend>
              <div class="form-group">
                <label class="col-sm-3 control-label">{{Nom de l'enceinte Bluetooth}}</label>
                <div class="col-xs-11 col-sm-7">
                  <input type="text" class="eqLogicAttr form-control" data-l1key="id" style="display : none;" />
                  <input type="text" class="eqLogicAttr form-control" data-l1key="name" placeholder="{{Nom de l'enceinte Bluetooth}}"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" >{{Objet parent}}</label>
                <div class="col-xs-11 col-sm-7">
                  <select id="sel_object" class="eqLogicAttr form-control" data-l1key="object_id">
                    <option value="">{{Aucun}}</option>
                    <?php
                    $options = '';
                    foreach ((jeeObject::buildTree(null, false)) as $object) {
                      $options .= '<option value="' . $object->getId() . '">' . str_repeat('&nbsp;&nbsp;', $object->getConfiguration('parentNumber')) . $object->getName() . '</option>';
                    }
                    echo $options;
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">{{Catégorie}}</label>
                <div class="col-sm-9">
                  <?php
                  foreach (jeedom::getConfiguration('eqLogic:category') as $key => $value) {
                    echo '<label class="checkbox-inline">';
                    echo '<input type="checkbox" class="eqLogicAttr" data-l1key="category" data-l2key="' . $key . '" />' . $value['name'];
                    echo '</label>';
                  }
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">{{Options}}</label>
                <div class="col-xs-11 col-sm-7">
                  <label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isEnable" checked/>{{Activer}}</label>
                  <label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isVisible" checked/>{{Visible}}</label>
                </div>
              </div>

              <br/>
              <legend><i class="fas fa-cogs"></i> {{Paramètres}}</legend>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">{{Assistant}}</label>
                      <div class="col-xs-11 col-sm-7">
                        <a class="btn btn-infos" id="bt_bluetoothPair"><i class="fab fa-bluetooth-b"></i> {{Appairer l'enceinte Bluetooth}}
                        </a>
                      </div>
                    </div>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">{{Adresse MAC}}</label>
                    <div class="col-xs-11 col-sm-7">
                      <input id="mac_address" type="text" class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="address"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">{{Nom du Service}}</label>
                    <div class="col-xs-11 col-sm-7">
                      <input id="service_name" type="text" class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="name"/>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-sm-2 control-label">{{Port clef bluetooth}}</label>
                    <div class="col-sm-2">
                      <select class="configKey form-control" data-l1key="port">
                        <option value="none">{{Aucun}}</option>
                        <?php
                    //    foreach (jeedom::getBluetoothMapping() as $name => $value) {
                  //        echo '<option value="' . $name . '">' . $name . ' (' . $value . ')</option>';
                //        }
                        ?>
                      </select>
                    </div>
                  </div> -->
								<br/>
                  </fieldset>
              </form>
          </div>

          <span id="serviceName" class="eqLogicAttr" data-l1key="configuration" data-l2key="serviceName" style="display:none;"></span>
          <div class="col-lg-5">
              <form class="form-horizontal">
                  <fieldset>
                      <legend><i class="fas fa-terminal"></i> {{Informations}}</legend>
          						<div class="form-group">
          							<div class="col-sm-3">
          								<a class="btn btn-infos" id="bt_serviceStatus">
                            <i class="fas fa-check"></i> {{Status}}
                          </a>
          							</div>
          							<!-- <div class="col-sm-2">
          								<a class="btn btn-infos" id="bt_serviceLog">
                            <i class="fas fa-commenting-o"></i> {{Logs}}
                          </a>
          							</div> -->
          							<div class="col-sm-3">
          								<a class="btn btn-infos" id="bt_startsoundTest" data-toggle="tooltip" data-placement="right" title="A Beautiful Day - Esther Garcia - Creative Common">
          									<i class="fas fa-play-circle"></i> {{Tester}}
          								</a>
          							</div>
          						</div>
                  </fieldset>
              </form>
          </div>
        </div>
      </div>


      <div role="tabpanel" class="tab-pane" id="commandtab">
        <table id="table_cmd" class="table table-bordered table-condensed">
          <thead>
            <tr>
              <th style="width: 50px;">{{Id}}</th>
              <th style="width: 300px;">{{Nom}}</th>
              <th style="width: 160px;">{{Type}}</th>
              <th style="width: 200px;">{{Options}}</th>
              <th style="width: 100px;">{{Action}}</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<?php include_file('desktop', 'pulseaudio', 'js', 'pulseaudio'); ?>
<?php include_file('core', 'plugin.template', 'js'); ?>

<script>
	$("#bt_serviceStatus").click(function(){
			$('#md_modal').dialog({title: "{{Service Status}}"});
			$('#md_modal').load('index.php?v=d&plugin=pulseaudio&modal=status.pulseaudio').dialog('open');
  });

	$("#bt_serviceLog").click(function(){
			$('#md_modal').dialog({title: "{{Logs}}"});
			$('#md_modal').load('index.php?v=d&plugin=pulseaudio&modal=log.pulseaudio').dialog('open');
  });

	// $("#bt_bluetoothScan").click(function(){
	// 		$('#md_modal').dialog({title: "{{Bluetooth Scan}}"});
	// 		$('#md_modal').load('index.php?v=d&plugin=pulseaudio&modal=scanbluetooth.pulseaudio').dialog('open');
  // });

	$("#bt_startsoundTest").click(function(){
			$('#md_modal').dialog({title: "{{Tester}}"});
			$('#md_modal').load('index.php?v=d&plugin=pulseaudio&modal=soundtest.pulseaudio').dialog('open');
	});

	$("#bt_bluetoothPair").click(function(){
			// alert("Mettez votre enceinte BLuetooth en mode appairage");
			$('#md_modal').dialog({title: "{{Bluetooth Appairage}}"});
			// var mac = document.getElementById('mac_address').value;
			//  $(".form-group #mac_address_found").val( mac );
			// if (/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})/.test(mac)) {
					$('#md_modal').load('index.php?v=d&plugin=pulseaudio&modal=pairbluetooth.pulseaudio').dialog('open');
			// } else {
			//     alert("Adresse MAC invalide :" + mac);
			// }

	});

</script>

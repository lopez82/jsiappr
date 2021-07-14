<h1>
<?php echo ucfirst($title); ?>
</h1>
<!-- formulaire pour le choix d une date-->
<?php echo form_open('home/get_approvList')?>

<div class="form-group ">
Date debut : <input type="datetime-local" name="date_debut" class="form-control "> 
</div>
<div class="form-group ">
- Date Fin  : <input type="datetime-local" name="date_fin" class="form-control ">
</div>
<div class="form-control">
<input type="submit" value="Envoyer">
</div>
</form>
<div class="container">

</div>

<div syle="text-align:right"><button type="button" class="btn btn-outline-primary"><a href="<?php echo base_url();?>home/addapprov" target="_blank" rel="noopener noreferrer">Ajouter Approvisionnement</a></button></div>
	<table class="table table-hover">
  <thead>
    <tr>
	
      <th scope="col">Nom et Prenom du Patient</th>
      <th scope="col">Nombre des comprimees</th>
      <th scope="col">Date approv</th>
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($approv)):?>

	<?php foreach($approv as $app):?>
	<tr class="table-primary">
     
      <td><?php echo $app['nom_prenom']?></td>
	  <td><?php echo $app['nbre_comprime']?></td>
	  <td><?php echo $app['date_approv']?></td>
     
    </tr>

	<?php endforeach; ?>
    <h2>Nombre Total des patients approvisionnees : <span class="badge rounded-pill bg-success"><?php echo $total['total']?></span></h2>
	<?php endif;?> 
  </tbody>
</table>

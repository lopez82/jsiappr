<h2><?=$title;?></h2>
<h2><?=validation_errors();?></h2>
<?php echo form_open('home/saveApprov')?>

<div class="form-group">
    <label>Patient :</label>
    <select name="patient_id" class="form-control" id="patient_id"> 
<?php 
foreach($patients as $patient):
?>
    <option value="<?php echo $patient['patient_id']?>"><?php echo $patient['nom']." ".$patient['prenom']?></option>
    <?php 
endforeach;
?>
    </select>
  </div>

  <div class="form-group">
    <label>nombre Comprime :</label>
    <input type="number" name="nbre_comprime" class="form-control"  placeholder="nbre_comprime">
  </div>

  <div class="form-group">
    <label>Zip code</label>
    <input type="datetime-local" name="date_approv" class="form-control"  placeholder="zip code">
  </div>

  
<button type="submit" class="btn btn-primary">Submit</button>
</form>
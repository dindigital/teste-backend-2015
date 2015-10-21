<!-- intro close -->
	<section id="doctor" class="doctor-section">
<?php if(isset($arr_medico)) : ?>
	<?php foreach($arr_medico as $medico) : ?>
	<section id="about" class="about-section"><!-- about start -->
		<section id="doctor">
		  <div class="container">
		  	<img src='<?php echo site_url(); ?>fotos/medicos/<?php echo $medico->foto; ?>' title='Dr. <?php echo $medico->nome; ?>' width='400'/>
		    <div class="row">
		      <div class="col-md-7">
		        <h1><?php echo $medico->nome; ?></h1>
		        <h1><?php echo $medico->especialidade; ?></h1>
		        <p class="lead"><?php echo $medico->descricao; ?></p>      
		      </div>
		    </div>
		  </div>
		</section>
	</section>
	<?php endforeach; ?>
<?php endif; ?>
	</section>
<!-- about close -->
<!-- service close -->
<section class="container pt-5 " id=Course>


	<div class="card-head">
		<h3>Courses<h3>
	</div>
	<div class="row pb-5 " style="margin-left:5px;">
		<?php
        $directory = '_assets/courselogos';
		$files = array();
		foreach (scandir($directory) as $file) {
		    if ($file !== '.' && $file !== '..') {
		        $files[] = $file;
		    }
		}
		$get_class=new getFile();
		$Course_content_result=$get_class->getfile();
		$course_count=count($Course_content_result);
		$course_loop_counts=0;

		?>
		<?php  while ($course_loop_counts<$course_count) {?>
		<div class="col py-5">

		<div class="card">
			<div class="card-content">	
				<div class=" card-body-front">
					<img id="imag" class="card-image"
						src="/micireds/_assets/courselogos/<?php echo $files[$course_loop_counts] ?>">
					<h4 class="lead pt-5 " style="text-align: end;">
						<?php echo $Course_content_result[$course_loop_counts];?>
					</h4>
				</div>
				<div class="card-body-back">
					<h1>Download Broucher</h1>	
				</div>
			</div>
		</div>

		</div>



		<?php	$course_loop_counts++;
		}?>
	</div>

	</div>


</section>
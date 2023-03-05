<meta charset=utf8>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Micireds</title>

<link href="_assets/dist/css/bootstrap.min.css" rel="stylesheet">

<link type="image/x-icon" href="_assets/_brands/Micireds Logo Modern PNG 32x32.png" rel="icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<!-- <script src="_assets/dist/js/bootstrap.bundle.min.js/"></script> -->
<style>
	@media (max-width: 800px) {
		ul {

			margin-left: 0rem;
		}
	}



	.logo-size {

		width: 70%;
		height: auto;

		object-fit: fit;
		padding-top: 10px;

	}






	ul {
		/* text-align: end; */
		display: block;
		list-style-type: none;
		/* margin-left: 15rem; */
		padding-right: 20px;
		/* overflow: hidden; */

	}

	li {

		float: right;


	}

	li a {
		display: block;
		color: black;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover {
		/* border: 3px solid red;*/
		background-color: #ff0066;
		border-radius: 25px; 
		transition: 0.8s;
	}

	.text-large {

		font-size: 360%;
	}
	.c-red {
		color: red;
	}

	.card-head {
		text-align: center;
		border-bottom: 2px solid;
		border-color: red;
		font-weight: bold;
	}

	.card {		
		/* box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
		width: 18rem;
  		border-style: none;
		/* border: 0.8px solid whitesmoke; */
		border-radius: 20px;
		height: 30rem;
  		perspective: 1000px;

	}
	.card-content{
		position: relative;
  		width: 100%;
  		height: 100%;
  		text-align: center;
  		transition: transform 2s;
  		transform-style: preserve-3d;
  	 	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}
	.card-body-front, .card-body-back {
		position: absolute;
  		width: 100%;
  		height: 100%;
  		-webkit-backface-visibility: hidden;
  		backface-visibility: hidden;

	}

	.card-body-back{
		/* background-color: #ff4dff; */
		color:black;
		transform: rotateY(180deg);
	}
    .card:hover .card-content{
		background-color: #ff0066;
		border-radius: 20px;
		transition-delay: 0.2s;
		transform: rotateY(180deg);
		}
	.card-image {
		width: 250px;
		height: 200px;
	}
</style>
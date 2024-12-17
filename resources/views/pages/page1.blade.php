<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tamtam_Basic Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <div class="container-fluid">
        
<a  href="{{ url('/background') }}"> Educational Background</a>
	    
	  </div>
	</nav>

	<div class="container mt-3">
	  <div class="card card bg-info">
	    <div class="card-header">
	    	<h3>Personal Information </h3>
	    	<p>Basic Student Information</p>
	    </div>

	    <div class="card-body bg-light">
	    	<div class="row">
	    		<div class="col">
	    			 <table class="table table-hover">
                            <tr>
                                <td>
                                    <div class="row pt-2">
                                        <div class="col-md-4"><small><p class="text-muted m-0">NAME</p></small></div>
                                            <div class="col-md">{{ $lastname }}, {{ $firstname }}</div>
                                        
                                    </div>
                                </td>
                            </tr>
                               
                            <tr>
                                <td>
                                    <div class="row pt-2">
                                        <div class="col-md-4"><small><p class="text-muted m-0">SEX</p></small></div>
                                        <div class="col-md">FEMALE</div>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row pt-2">
                                        <div class="col-md-4"><small><p class="text-muted m-0">CIVIL STATUS</p></small></div>
                                        <div class="col-md">SINGLE</div>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row pt-2">
                                        <div class="col-md-4"><small><p class="text-muted m-0">NATIONALITY</p></small></div>
                                        <div class="col-md">FILIPINO</div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
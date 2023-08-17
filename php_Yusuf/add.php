<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learn</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-2">
            <div class="col-sm-6">
             <form action="action.php" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" placeholder="Enter first name..." class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" placeholder="Enter last name..." class="form-control" required />
                </div>

                <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" placeholder="Enter state..." class="form-control" required />
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-outline-warning" onclick="alertme()">
                Reset
            </button>
             </form>
             <div id="reset"></div>
            </div>
        </div>
    </div>
    <script>
        function alertme(){
            document.getElementById('reset').innerHTML = `
            <br>
            <div class="alert alert-sucess alert-dismissible fade show" role="alert">
  <strong>Form reset</strong> has been sucessfully done !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            `
        };
    </script>
</body>
</html>
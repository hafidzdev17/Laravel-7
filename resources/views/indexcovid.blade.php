


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pusdikom App Kawal Corona</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<body>
  <div class="container">
    <div class="row">

    <div class="row">
      <div class="col-md-12">
        <h3 class="alert alert-primary mt-3">Pusdikom App Kawal Corona 2020</h3>
      </div>
    </div>

    <div class="col-md-12">
      <table class="table table-striped table-inverse ">
        <thead class="bg-primary text-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $covid)   
              <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $covid['attributes']['Provinsi'] }}</td>
                <td>{{ $covid['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $covid['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $covid['attributes']['Kasus_Meni'] }}</td>
              </tr>
            @endforeach 
          </tbody>
          </table>
        </div>
</div>
</div>
</body>
</html>
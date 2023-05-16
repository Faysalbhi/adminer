<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Adminer</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
  </head>
  <body>
    <div class="row">
      <div class="col-4 language">Language:
        <select name="" id="language">
          <option value="">English</option>
          <option value="">Bangla</option>
          <option value="">Hindi</option>
        </select>
      </div>
      <div class="col-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Main>></a></li>
            <li class="breadcrumb-item"><a href="#">Sub>></a></li>
            <li class="breadcrumb-item active" aria-current="page">Active</li>
          </ol>
        </nav>
      </div>
      <div class="col-4 "><button class="btn btn-sm float-end">Logout</button></div>
    </div>
    <div class="row content">
      <div class="col-4">
        <div class="bg-light adminer-content border-bottom"><h4>Adminer</h4></div>
        <div class="db-select border-bottom">
          <span>DB:</span>
          <select name="" id="select-database">
            <option value="">Databse 1</option>
            <option value="">Databse 2</option>
            <option value="">Databse 3</option>
          </select>
        </div>

        <div>
            
            <ul class="d-flex justify-content-between">
              <li><a href="">SQL Command</a></li>
              <li><a href="">Import</a></li>
              <li><a href="">Export</a></li>
              <li><a href="">Create Table</a></li>
            </ul>
        </div>
      </div>
      <div class="col-6">
        <div class="bg-light adminer-content border-bottom"><h4 class="muted">Select Database</h4></div>
        <div >
            <ul class="d-flex justify-content-between">
              <li><a href="">Create database</a></li>
              <li><a href="">Privileges</a></li>
              <li><a href="">Process list</a></li>
              <li><a href="">Variables</a></li>
              <li><a href="">Status</a></li>
            </ul>
        </div>
        <p>MySQL version: <span>8.0.30</span> through PHP extension <span>MySQLi</span></p>
        <p>Logged as: <span>root@localhost</span></p>
            <div class="">
              <table >
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Database - <a href="">Refresh</a></th>
                    <th scope="col">Collation</th>
                    <th scope="col">Tables</th>
                    <th scope="col">Sizse - <a href="">Compute</a></th>
                  </tr>
                </thead>
                <tbody>
                  <form action="{{ route('dropdb') }}" method="post">
                    @csrf

                    @foreach ($alldb as $db)
                       <tr class="">
                        <td><input type="checkbox" class="databaseCheckbox" onchange="checkboxes()" name="databaseID[]" value="1"></td>
                        <td scope="row"><a href="{{ route('table',$db->Database) }}">{{ $db->Database }}</a></td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                      </tr> 
                    @endforeach
                      
                    
                  
                </tbody>
              </table>
          </div>
          <div>
            <fieldset>
              <legend>Selected: (<span id="selectedDb"></span>)</legend>
              <button type="submit">Drop</button>
            </fieldset>
            </form>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("select.js") }}"></script>
  </body>
</html>
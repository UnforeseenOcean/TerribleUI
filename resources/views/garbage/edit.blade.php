<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Yes
  </title>
  <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<script>
  function send(char){
  document.getElementById("value").value=char;
  document.getElementById("form").submit();
}
</script>
<style>
.rounded{
  border-radius: 10px;
}
</style>
<body>

  <div class="">
    @if ($garbage->max == $garbage->min && $garbage->min != null)
    <h2>YOUR NUMBER IS {{$garbage->number}}</h2>
    @else


    <form action="/garbage/{{$garbage->id}}" method="POST" id="form">
      @csrf
      @method('PATCH')
      <input type="hidden" id="value" name="value">
      <div class="row valign-wrapper">
        <div class="col s5">
          <h2>
            {{$garbage->number}}
          </h2>
        </div>
        <div class="col s2">
          <div class="row">
            <div class="col s12 rounded card">
              <a class="red-text" onclick="send('>')">
                <h4 class="center-align">
                  >
                </h4>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col s12 rounded card">
              <a class="red-text" onclick="send('=')">
                <h4 class="center-align">
                  =
                </h4>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col s12 rounded card">
              <a class="red-text" onclick="send('<')">
                <h4 class="center-align">
                  < </h4> </a> </div> </div> </div> <div class="col s5 valign-wrapper">
                    <h2>Your Number</h2>
            </div>
          </div>
    </form>
    @endif
  </div>
</body>

</html>
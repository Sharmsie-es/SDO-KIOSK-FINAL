<!DOCTYPE html>
<html>
<head>
  <title>Citizen Charter</title>
  <link rel="stylesheet" href="{{ asset('web/css/citizencharterstyle.css') }}">
</head>
<body>
  <div class="image-button-container">
    <button data-url="{{ url('/citizen-charter1') }}" class="image-button osic" style="background-image: url('/web/images/osic.png');" onclick="showCitizenCharter()">
    </button>
    <button data-url="{{ asset('web/charter/13. Curriulum Implementation Division.pdf') }}" class="image-button cid" style="background-image: url('/web/images/cid.png');">
    </button>
    <button data-url="{{ url('/citizen-charter2') }}" class="image-button sgod" style="background-image: url('/web/images/sgod.png');"  onclick="showCitizenCharter()">
    </button>
  </div>
  <script src="{{ asset('web/js/button1.js') }}"></script>
</body>
</html>
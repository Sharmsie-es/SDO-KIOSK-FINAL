<!DOCTYPE html>
<html>
<head>
  <title>Citizen Charter2</title>
  <link rel="stylesheet" href="{{ asset('web/css/citizencharterstyle2.css') }}">
</head>
<body>
  <div class="image-button-container">
    <button data-url="{{ asset('web/charter/9.School Health and Nutrition.pdf') }}" class="image-button schoolhealth" style="background-image: url('/web/images/nutrition.png');">
    </button>
    <button data-url="{{ asset('web/charter/Human Resource and Development.pdf') }}" class="image-button humanresource" style="background-image: url('/web/images/hr.png');">
    </button>
    <button data-url="{{ asset('web/charter/8.School Monitoring Management and Operation.pdf') }}" class="image-button schoolmonitoring" style="background-image: url('/web/images/monitor.png');">
    </button>
    <button data-url="{{ asset('web/charter/11. Education Facilities Unit.pdf') }}" class="image-button education" style="background-image: url('/web/images/facility.png');">
    </button>
    <button data-url="{{ asset('web/charter/10. Disaster Risk Reduction and Management.pdf') }}" class="image-button drrm" style="background-image: url('/web/images/drrm.png');">
    </button>
    <button data-url="{{ asset('web/charter/12. Social Mobilization and Networking.pdf') }}" class="image-button socialmobile" style="background-image: url('/web/images/mobilenet.png');">
    </button>
  </div>
  <div class="pdf-container"></div>
  <script src="{{ asset('web/js/pdf.js') }}"></script>
</body>
</html>
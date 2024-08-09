<!DOCTYPE html>
<html>
<head>
  <title>Citizen Charter1</title>
  <link rel="stylesheet" href="{{ asset('web/css/citizencharterstyle1.css') }}">
</head>
<body>
  <div class="image-button-container">
    <button data-url="{{ asset('web/charter/1.Cash Unit.pdf') }}" class="image-button cashunit" style="background-image: url('/web/images/cashunit.png');">
    </button>
    <button data-url="{{ asset('web/charter/3.Budget Unit.pdf') }}" class="image-button budgetunit" style="background-image: url('/web/images/budgetunit.png');">
    </button>
    <button data-url="{{ asset('web/charter/6. Property Unit.pdf') }}" class="image-button supplyunit" style="background-image: url('/web/images/supplyunit.png');">
    </button>
    <button data-url="{{ asset('web/charter/2.Legal Unit.pdf') }}" class="image-button legalunit" style="background-image: url('/web/images/legalunit.png');">
    </button>
    <button data-url="{{ asset('web/charter/4.Personnel Unit.pdf') }}" class="image-button personnelunit" style="background-image: url('/web/images/personnelunit.png');">
    </button>
    <button data-url="{{ asset('web/charter/7.Planning and Research.pdf') }}" class="image-button planningunit" style="background-image: url('/web/images/planningunit.png');">
    </button>
  </div>
  <div class="pdf-container"></div>
  <script src="{{ asset('web/js/pdf.js') }}"></script>
</body>
</html>
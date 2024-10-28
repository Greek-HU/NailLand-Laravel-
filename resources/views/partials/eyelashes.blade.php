<section class="u-align-center u-clearfix u-image u-shading u-section-5" id="carousel_4e92">
      <h2 class="u-align-center u-text u-text-default u-text-palette-4-base u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">Pillás szolgáltatások </h2>
      <div class="u-align-center u-border-2 u-border-palette-4-base u-line u-line-horizontal u-line-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"></div>
      <p class="u-align-center u-text u-text-palette-4-base u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> 21 naptól vagy a szett előkészítését követően 30%-osnál hiányosabb pilla esetén építési ára kerül felszámításra!<br>Az árak 2024.03.01-től érvényesek!
      </p>
      <div class="container" id="eyelash">
        <div class="d-table m-auto mt-5">
          <div class="d-flex text-center p-3 table-box row" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            @foreach($eyeTypes as $EyeType)
                @if($EyeType->id == 1)
            <div class="col p-1">
                <table class="card m-auto" style="width: 18rem;">
                    <img src="{{$EyeType->img_place}}" class="card-img-top u-image u-image-circle u-image-1" alt="{{$EyeType->type}}">
                    <thead class="d-flex justify-content-center">
                    <tr>
                        <th></th>
                        <th class="card-title">{{$EyeType->type}}</th>
                    </tr>
                    </thead>
                    @foreach($EyeType->eyeopp as $EyeOpp)
                        <tbody class="shadow p-4 bg-body-primery rounded-bottom d-flex justify-content-center">
                        <tr class="u-align-center">

                            <td class="u-align-left u-text u-text-palette-4-base px-4">
                                {{$OppPivot}}
                            </td>
                        </tr>
                        </tbody>
                    @endforeach

                  </table>
            </div>
                  @endif
            @endforeach
          </div>
        </div>
      </div>
      <a href="#" class="fixedbutton">
  <i class="bi bi-arrow-up-circle-fill " id="fixedbutton"></i>
</a>
    </section>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Styles -->
    </head>
    <body>


    <div class="form-group">
        <select name="country" id="country" class="form-control input-lg dynamic" data-dependent="state">
            <option value="">Select State</option>
            @foreach($country_list as $country)
                <option value="{{$country->COUNTRY_NAME}}" id="{{$country->COUNTRY_ID}}">{{$country->COUNTRY_NAME}}</option>
                @endforeach
        </select>
    </div>

    <div class="form-group">
        <select name="city" id="city" class="form-control input-lg" data-dependent="city">

            <option value="">Select City</option>
        </select>
    </div>
        <button class="submitBTN addnowBtn" id="added" >Сохранить</button>
        <p class="inf"></p>
    {{csrf_field()}}

    <script>
        $(document).ready(function () {
           $('.dynamic').change(function () {
              if($(this).val()!='')
              {
                var _token=$('input[name="_token"]').val();
                var id = $(this).children(":selected").attr("id");
                $.ajax({
                    url:"/fetch",
                    method:"POST",
                    data:{_token:_token,id:id},
                    success:function (result) {
                        $('#city').html(result);

                    }
                })
              }
           });

           $('#added').click(function () {
               var _token_=$('input[name="_token"]').val();
               var countryId=$('.dynamic').children(":selected").attr("id");
               var cityId=$('#city').children(":selected").attr("id");
               if(countryId!=undefined&&cityId!=undefined)
               {

                    $.ajax({
                        url:"/added",
                        method:"POST",
                        data:{_token:_token_,countryId:countryId,cityId:cityId},
                        success:function (resulta) {
                            $('.inf').html(resulta);
                        },error:function(){
                            alert("error!!!!");
                   }})
               }else{
                   alert('Выберите все значения');
               }


           })
        });
    </script>

    </body>
</html>

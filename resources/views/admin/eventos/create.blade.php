<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/form.css">
    
</head>
<body>
    <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Restaurante App</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Adicione Um Evento(So adicione para fins de teste, remova quando estiver concluido)</span>
              <form method="POST" action="{{route('admin.evento.store')}}" id="stripe-login">
                @csrf
                

                <div class="field padding-bottom--24">
                  <label for="email">Quantidade de pessoas</label>
                  <input type="number" name="quantity">
                   @error('quantity')
                  <div class="text-danger">
                    {{$message}}
                  </div>  
                  @enderror
                </div>

                 <div class="field padding-bottom--24">
                  <label for="email">Telefone</label>
                  <input type="text" name="telephone">
                   @error('telephone')
                  <div class="text-danger">
                    {{$message}}
                  </div>  
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="email">Data e hora Do Evento</label>
                  <input type="text" placeholder="A-M-D 00:00:00 "  name="date_time">
                   @error('quantity')
                  <div class="text-danger">
                    {{$message}}
                  </div>  
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="price"></label>
                  <select name="tipo_id">
                     @foreach($tipos as $t)
                        <option value="{{$t->id}}"> {{$t->name}} </option>
                     @endforeach 
                  </select>
                </div>

                
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continue">
                </div>
                
              </form>
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>

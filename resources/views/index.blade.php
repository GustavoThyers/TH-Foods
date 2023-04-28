
@include('layouts.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bem vindo a  <span>TH Burguer</span></h1>
          <h2>Seu proximo lanche favorito lhe espera logo abaixo</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Veja O Menu!</a>
            
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Experimente nossos deliciosos hambúrgueres artesanais e suculentas carnes em um ambiente acolhedor</h3>
            <p class="fst-italic">
              Bem-vindo ao nosso restaurante! Aqui, o sabor é a nossa prioridade número um, e estamos empenhados em oferecer aos nossos clientes as melhores opções de refeições de carne e hambúrguer da cidade.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Nós selecionamos cuidadosamente os ingredientes mais frescos e de alta qualidade para nossos pratos</li>
              <li><i class="bi bi-check-circle"></i> nossa equipe talentosa de chefs usa técnicas culinárias inovadoras para criar pratos deliciosos que satisfazem todos os paladares</li>
              <li><i class="bi bi-check-circle"></i> Também oferecemos uma variedade de bebidas e acompanhamentos deliciosos que combinam perfeitamente com nossos pratos. Nós temos uma extensa lista de cervejas artesanais e vinhos, bem como uma seleção de bebidas não alcoólicas.</li>
            </ul>
            <p>
              Venha nos visitar para uma experiência gastronômica incrível. Estamos ansiosos para recebê-lo em nosso restaurante e fazer você se sentir em casa.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tá, mas...</h2>
          <p>Porque escolher a este Restaurante ?</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Qualidade é nossa prioridade</h4>
              <p>Escolhemos os melhores ingredientes frescos e de alta qualidade para cada prato do nosso menu. Do suculento hambúrguer à carne macia e saborosa, você pode ter certeza de que cada mordida será uma experiência gastronômica excepcional.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Equipe Impecavel!</h4>
              <p>Nossa equipe de chefs talentosos é apaixonada por cozinhar e está sempre em busca de técnicas culinárias inovadoras para melhorar a qualidade de nossos pratos. Cada refeição é cuidadosamente preparada para oferecer aos nossos clientes uma experiência gastronômica memorável.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Nosso compromisso com a qualidade não para na comida -</h4>
              <p>Nossa equipe de atendimento ao cliente é amigável e atenciosa, garantindo que cada cliente seja recebido com um sorriso e tenha uma experiência agradável em nosso restaurante. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Aqui estão alguns de nossos deliciosos pratos</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          
          <div class="col-lg-12 d-flex justify-content-center">
            
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach($categorias as $c)
              <li data-filter=".filter-{{$c->id}}">{{$c->name}}</li>
              @endforeach
            </ul>
             
          </div>
         
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($produtos as $p)
          <div class="col-lg-6 menu-item filter-{{$p->categoria_id}}">
<img src="{{ url('/storage/' . $p->image) }}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="{{route('site.details', $p->id)}}">{{$p->name}}</a><span>R${{$p->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$p->description}}
            </div>
          </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mais Vendidos</h2>
          <p>Os Queridinhos Da Galera</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cheese Burguer </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Burguer Classico </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Picanha </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">   Pizza Três queijos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pizza Frango Com Catupiry </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cheese Burguer</h3>
                     <p>pão macio, carne bovina suculenta, queijo derretido e molho especial. O cheeseburger é uma opção popular para quem quer um pouco mais de sabor e textura em seu hambúrguer. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="/assets/img/CheeseBurguer.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Burguer Classico</h3>
                    <p>pão macio, carne bovina suculenta, alface crocante, tomate maduro, cebola e molho especial. O hambúrguer clássico é um favorito entre os amantes de hambúrgueres, graças à sua simplicidade e sabor clássico.  </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Burguer classico.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Picanha</h3>
                    <p>a picanha é um corte de carne bovina muito popular no Brasil, conhecido por seu sabor rico e suculento. É uma parte da alcatra que fica localizada na parte traseira do boi e é caracterizada por uma camada de gordura na parte superior. Na hora do preparo, a picanha é geralmente temperada com sal grosso e grelhada na brasa até atingir o ponto desejado. Quando cortada em fatias, a picanha apresenta uma textura macia e suculenta que derrete na boca.   </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Picanha.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pizza Três queijos </h3>
                    <p>a pizza três queijos é preparada com molho de tomate e uma mistura de três queijos diferentes - geralmente muçarela, , parmesão e catupiry. É uma opção perfeita para quem adora queijo e quer experimentar uma mistura de sabores.   </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/pizza tres queijos.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pizza Frango Com Catupiry</h3>
                    <p>a pizza de frango com catupiry é preparada com molho de tomate, muçarela, frango desfiado e uma generosa camada de catupiry. É uma opção cremosa e saborosa que agrada a todos os gostos. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/pizza frango.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Eventos</h2>
          <p>Comemore Aqui!!</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Aniversarios</h3>
                  <div class="price">
                    <p><span></span></p>
                  </div>
                  <p class="fst-italic">
                    "Venha celebrar o seu aniversário conosco! O TH Burguers é o local perfeito para uma festa inesquecível. Temos um ambiente acolhedor e sofisticado que certamente irá encantar você e seus convidados.

                    Oferecemos um menu diversificado e personalizado, com opções para todos os gostos e restrições alimentares. Além disso, nossa equipe está sempre pronta para ajudar a tornar o seu evento especial e memorável.

                    Não perca a oportunidade de celebrar seu aniversário em grande estilo. Entre em contato conosco para mais informações e reserve sua data agora mesmo!"
                  </p>
                 
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Casamentos</h3>
                  <div class="price">
                    <p><span></span></p>
                  </div>
                  <p class="fst-italic">
                    "O TH Burguers é o local perfeito para celebrar o dia mais especial da sua vida. Oferecemos um ambiente elegante e romântico, que irá encantar você e seus convidados.

                      Nosso espaço é perfeito para casamentos de pequeno e médio porte, com capacidade para [número de pessoas] convidados. Além disso, nossa equipe de eventos está sempre pronta para ajudar a tornar seu dia especial e memorável.

                      Oferecemos um menu personalizado e elaborado com ingredientes frescos e de qualidade, que certamente irá agradar a todos os paladares. E para garantir que seu casamento seja ainda mais especial, podemos personalizar a decoração e o serviço de acordo com as suas preferências.

                      O TH Burguers também oferece serviços de música ao vivo e iluminação, para tornar a sua celebração ainda mais animada e emocionante. Com uma equipe experiente e dedicada, você pode ter a certeza de que seu casamento será um sucesso.

                      Não perca a oportunidade de realizar seu sonho de casamento em um local exclusivo e elegante. Entre em contato conosco para mais informações e reserve sua data agora mesmo!"
                  </p>
                 
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Happy Hour</h3>
                  <div class="price">
                    <p><span> Bebidas a vontade por R$200 (Por pessoa)</span></p>
                  </div>
                  <p class="fst-italic">
                    "Venha aproveitar o melhor happy hour da cidade no TH Burguers! Temos o ambiente perfeito para você relaxar depois de um longo dia de trabalho ou para se reunir com amigos e colegas para celebrar a vida.

                    Oferecemos uma ampla seleção de bebidas, desde cervejas artesanais e vinhos finos até coquetéis exclusivos e deliciosos drinks sem álcool. E para acompanhar, temos um cardápio diversificado de petiscos e pratos leves, perfeitos para compartilhar e experimentar.

                    Nossa equipe de atendimento é treinada para oferecer o melhor serviço e garantir que você tenha uma experiência agradável e divertida. Além disso, nossa música ao vivo e ambiente descontraído tornam o TH Burguers o local ideal para um happy hour inesquecível.

                    Não perca a oportunidade de aproveitar nossas promoções especiais e desfrutar de uma noite animada com amigos e colegas. Venha nos visitar e descubra porque somos o melhor lugar para um happy hour na cidade!"
                  </p>
                  
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

   

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reserve seu Evento</h2>
          <p>Faça Seu Evento aqui!</p>
        </div>

        <form action="{{route('site.eventos.store')}}" method="post" role="form" class="php-email" >
          @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name_user" class="form-control"  placeholder="Seu nome" >
              @error('name_user')
                {{$message}}
              @enderror
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="telephone_user"  placeholder="Seu telefone" >
              @error('telephone_user')
                {{$message}}
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="quantity"  placeholder="Quantidade de pessoas" >
              @error('quantity')
                {{$message}}
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date_time" class="form-control"  placeholder="Data e Hora do Evento" >
              @error('date_time')
                {{$message}}
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="price">Tipo de evento</label>
                  <select class="form-control" name="tipo_id">
                     @foreach($tipo as $t)
                        <option  value="{{$t->id}}"> {{$t->name}} </option>
                     @endforeach 
                  </select>
                </div>
            
          </div>
          
          <div class="text-center"><button type="submit" name="button">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reviews</h2>
          <p>Como as pessoas avaliam nosso restaurante ?</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 "Os hambúrgueres do TH Burguers são simplesmente deliciosos! A carne é suculenta e saborosa, e os acompanhamentos são perfeitos. Além disso, o atendimento é excelente e o ambiente é muito aconchegante."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Anderson Batista</h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "O TH Burguers é o melhor lugar para matar a fome com um hambúrguer de qualidade. Tudo é muito bem preparado e os ingredientes são frescos. Sempre que vou lá, saio satisfeito e com vontade de voltar."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Fui ao TH Burguers com a família e adoramos tudo! Os hambúrgueres são deliciosos e o atendimento é muito simpático e atencioso. Sem dúvida, recomendo a todos que procuram um lugar com boa comida e ambiente agradável."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Angela Amorim</h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "O TH Burguers é uma excelente opção para quem ama hambúrguer. A variedade do cardápio é ótima e todos os pratos são muito bem servidos. Além disso, o ambiente é muito agradável e aconchegante, perfeito para um jantar com amigos."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Julio Freitas</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Sem dúvida, o TH Burguers é um dos melhores lugares para comer hambúrguer na cidade. Tudo é muito bem feito e os ingredientes são de qualidade. Além disso, o atendimento é muito bom e o ambiente é descontraído e animado."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Mario Camargo</h3>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Nosso Chefs Profissionais</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter Camargo</h4>
                  <span>Chef em Churrascos</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gloria Raquel</h4>
                  <span>Especialista em Hamburguers e Carnes</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Pizzayollo Renegado</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    
  <!-- ======= Footer ======= -->
  @include('layouts.footer');
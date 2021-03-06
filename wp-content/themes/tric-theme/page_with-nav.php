<?php /* Template Name: Page With Nav */ ?>
<?php include('inc/Walker_Side_Page_Nav.php') ?>
<?php get_header() ?>

<!--   <div class="breadcrumb">
      <div class="breadcrumb__item"><a href="/">Home</a></div>
      <div class="breadcrumb__item"><a href="/events.html">Events</a></div>
      <div class="breadcrumb__item breadcrumb__item--last"><span>Tour de Poncol Jilid 2</span></div>
    </div> -->
    <section id="page-main">
      <div class="page-nav">
        <ul data-accordion-group class="page-nav__navigation">
          <?php wp_list_pages( [
              'child_of' => 40,
              'depth' => 2,
              'title_li' => '',
              'walker' => new Walker_Side_Page_Nav()

          ]);

          ?>

          <li class="page-nav__nav-item">
            <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Sejarah</a></div>
          </li>
          <li class="page-nav__nav-item">
            <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Visi dan Misi</a></div>
          </li>
          <li class="page-nav__nav-item">
            <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Slogan</a></div>
          </li>
          <li data-accordion class="page-nav__nav-item page-nav__nav-item--has-child open">
            <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Struktur Organisasi</a></div>
            <ul data-content class="page-nav__nav-lvl2">
              <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">Regional Board</a></li>
              <li class="page-nav__nav-item-lvl2 page-nav--active"><a href="#" class="page-nav__nav-link-lvl2">Mother Chapter</a></li>
              <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">Chapter</a></li>
            </ul><span data-control class="page-nav__nav-expander"><span class="page-nav__nav-expander-icon">-</span></span>
          </li>
          <li data-accordion class="page-nav__nav-item page-nav__nav-item--has-child">
            <div class="page-nav__nav-link-wrapper"><a href="" class="page-nav__nav-link">Partnering Organizations</a></div>
            <ul data-content class="page-nav__nav-lvl2">
              <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">HTCI</a><span class="page-nav__nav-icon"></span></li>
              <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">Alliansi 19</a><span class="page-nav__nav-icon"></span></li>
            </ul><span data-control class="page-nav__nav-expander"><span class="page-nav__nav-expander-icon">+</span></span>
          </li>
        </ul>
      </div>
      <div class="page__wrapper page__wrapper--has-nav">
        <h1 class="page__title">Tour de Poncol Jilid 2</h1>
        <div class="page__content-main">
          <div class="page__content-gallery"><img src="assets/img/slideshow.jpg" alt="" class="page__content-gallery-main"></div>
          <div class="page__content-read"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cuius ad naturam apta ratio vera illa et summa lex a philosophis dicitur. Eam tum adesse, cum dolor omnis absit; An est aliquid per se ipsum flagitiosum, etiamsi nulla comitetur infamia? Non quam nostram quidem, inquit Pomponius iocans; Duo Reges: constructio interrete. Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Rhetorice igitur, inquam, nos mavis quam dialectice disputare? Paupertas si malum est, mendicus beatus esse nemo potest, quamvis sit sapiens. Quo plebiscito decreta a senatu est consuli quaestio Cn. </p><p>Quae similitudo in genere etiam humano apparet. <i>Nullus est igitur cuiusquam dies natalis.</i> <i>Si longus, levis dictata sunt.</i> Quodcumque in mentem incideret, et quodcumque tamquam occurreret. Quae duo sunt, unum facit. Odium autem et invidiam facile vitabis. </p><p>Quae similitudo in genere etiam humano apparet. Eadem nunc mea adversum te oratio est. <i>In schola desinis.</i> <mark>Sumenda potius quam expetenda.</mark> <b>Vide, quantum, inquam, fallare, Torquate.</b> Deinde disputat, quod cuiusque generis animantium statui deceat extremum. De quibus cupio scire quid sentias. Deinde disputat, quod cuiusque generis animantium statui deceat extremum. </p><ul><li>Quod si ita sit, cur opera philosophiae sit danda nescio.</li><li>Si enim ita est, vide ne facinus facias, cum mori suadeas.</li><li>De ingenio eius in his disputationibus, non de moribus quaeritur.</li><li>Non ego tecum iam ita iocabor, ut isdem his de rebus, cum L.</li></ul><p>An eiusdem modi? <b>Sed fac ista esse non inportuna;</b> <b>At certe gravius.</b> <code>Praeclarae mortes sunt imperatoriae;</code> <a href='http://loripsum.net/' target='_blank'>Quo igitur, inquit, modo?</a> <mark>Nescio quo modo praetervolavit oratio.</mark> Et hercule-fatendum est enim, quod sentio -mirabilis est apud illos contextus rerum. <a href='http://loripsum.net/' target='_blank'>Pollicetur certe.</a> </p><p>Apud ceteros autem philosophos, qui quaesivit aliquid, tacet; Hoc loco tenere se Triarius non potuit. Quae duo sunt, unum facit. Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest. Idemque diviserunt naturam hominis in animum et corpus. Haec et tu ita posuisti, et verba vestra sunt. <i>Bestiarum vero nullum iudicium puto.</i> Duo enim genera quae erant, fecit tria.</p><pre>At quicum ioca seria, ut dicitur, quicum arcana, quicumocculta omnia?An ea, quae per vinitorem antea consequebatur, per se ipsacurabit?</pre><dl><dt><dfn>Tu quidem reddes;</dfn></dt><dd>Quam ob rem tandem, inquit, non satisfacit?</dd><dt><dfn>Est, ut dicis, inquit;</dfn></dt><dd>Ergo hoc quidem apparet, nos ad agendum esse natos.</dd><dt><dfn>Falli igitur possumus.</dfn></dt><dd>Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus;</dd><dt><dfn>Scrupulum, inquam, abeunti;</dfn></dt><dd>Etsi ea quidem, quae adhuc dixisti, quamvis ad aetatem recte isto modo dicerentur.</dd></dl></div>
          <div class="page__content-meta-update"><strong>Last updated:</strong> 27 July 2016</div>
          <ul class="page__social-share">
            <li class="page__social-share-item"><a href="#" class="page__social-share-link page__social-share-link--facebook">fb</a></li>
            <li class="page__social-share-item"><a href="#" class="page__social-share-link page__social-share-link--twitter">fb</a></li>
            <li class="page__social-share-item"><a href="#" class="page__social-share-link page__social-share-link--googleplus">tw</a></li>
            <li class="page__social-share-item"><a href="#" class="page__social-share-link page__social-share-link--instagram">g+</a></li>
          </ul>
          <div class="page__related-content">
            <h3>Related Content</h3>
            <ul>
              <li class="page__related-content-item"><a href="">Tour de jemper</a></li>
              <li class="page__related-content-item"><a href="">Cara merawat motor yang baik</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>
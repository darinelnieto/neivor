   
<?php
/**
 * 
 * Partial Name: footer-content
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$social_networks = get_field('social_networks', 'options');
?>
<!--
<section class="footer-content-partial-7e1adc">
    <div class="container">
        <div class="row">
            <div class="col-5 col-md-8 p-0">
                <div class="logo-contain">
                        <img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="Neivor logo" class="logo-footer">
                </div>
            </div>
            <div class="col-7 col-lg-4 p-0">
                <?php if($social_networks): ?>
                    <ul class="social-networks">
                        <?php foreach($social_networks as $item): ?>
                            <li>
                                <a href="<?= $item['url']; ?>" target="_blank">
                                    <?= $item['fontawesome_icon']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col-12 p-0">
                <div class="nav-policies">
                    <?php wp_nav_menu(['menu'=>'Footer']); ?>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="copy-right-and-addres-contain">
                    <div class="address">
                        <p><?= get_field('address', 'option'); ?></p>
                    </div>
                    <div class="copy-right">
                        <p><?= get_field('copyright', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<script>
  (function () {
    const urlParams = new URLSearchParams(window.location.search);
    
    // 'utm_term' validator
    let tieneUtmTerm = false;
    for (const key of urlParams.keys()) {
      if (key.startsWith('utm_term')) {
        tieneUtmTerm = true;
        break;
      }
    }

    if (!tieneUtmTerm) return; 

    const fullQueryString = window.location.search;

    // get all params 
    const links = document.querySelectorAll('a[href]');

    links.forEach(link => {
      const href = link.getAttribute('href');

      if (href.startsWith('http') || href.startsWith('/')) {
        let url = new URL(href, window.location.origin);

        if (!url.search) {
          url.search = fullQueryString;
        }

        link.setAttribute('href', url.toString());
      }
    });
  })();
</script>


<section>

  <script type="module">
    import { SitesRuntime } from '/_runtimes/sites-runtime.baf2cbdcc8ea1bac5928a069cf7ceef50bace6705c42242e1daf3aedf881253e.js';
    const sitesRuntime = new SitesRuntime({
      container: document.getElementById('container'),
      env: 'published',
      bundleId: '4baf1486-44ca-4e0c-8278-259f57831027',

      loadComponentsOverNetwork: true,
      assetsVersion: 'v8',
      codeComponentsVersion: 'v1',
      wasServerRendered: true,
      withBaseStyles: true,
      reportingDomain: "https://www.figma.com",
      bundleCreationDate: '2025-05-26 14:06:01 UTC',
    });
  </script>

  <div id="container">
    <div data-page-overflowx="hidden" data-breakpoint-id="node-0_6" data-breakpoint="true" data-width="375"
      data-height="1080" class="css-ld0hsi css-j6ldtg css-ys9dmc">
      <div class="css-16wy77 css-trglf0 css-vd6a0u">
        <div class="css-rt1aze css-j9f0op">
          <div class="css-x92lyl css-7js8wp css-v27th6">
            <div class="css-uaaaod">
              <div class="css-bpd33r css-7js8wp css-v27th6">
                <div class="css-uaaaod">
                  <div class="css-ck97wh css-7js8wp css-v27th6">
                    <div class="css-uaaaod">
                      <div class="css-g3eimm css-7js8wp css-v27th6">
                        <div class="css-5knerd">
                          <div class="css-n12bdu css-7js8wp">
                            <div class="css-5knerd">
                              <div class="css-rt1aze css-j9f0op">
                                <div class="css-ybmo5z css-7js8wp">
                                  <div class="css-gtyprt css-wc1msa" data-isimage="true">
                                    <div class="css-roiesn css-wixxpz css-gs60ek">
                                        <img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="Neivor logo" class="logo-footer"/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="css-i5hbuo css-5knerd">
                      <div class="css-a3m5wj css-7js8wp css-i5hbuo">
                                        <?php if($social_networks): ?>
                    <div class="social-networks">
                        <?php foreach($social_networks as $item): ?>

                        <div class="css-2ljd5r css-5knerd">
                          <div class="css-8kkpf5 css-gs60ek css-2ljd5r">
                            <div class="css-ardmi css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img
                                  src="_assets/v8/b7a6ebae1fb7d56a0df63e5409586f716c181f72.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                            <div class="css-1ogtb2 css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek" style="--fill-0:rgba(255, 255, 255, 1)"><img
                                  src="_assets/v8/3b7389ea8fd5f8c5accce62d0723c5accbc49fab.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                          </div>
                        </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="css-uaaaod">
                  <div class="css-bkqry0 css-7js8wp css-v27th6">
                    <div class="css-uaaaod">
                      <div class="css-tr5aoa css-7js8wp css-v27th6">
                        <div class="css-hv01ud css-5dba7r">
                          <div class="css-lges1h css-7js8wp css-v27th6">
                            <div class="css-uaaaod">
                              <div class="css-vplhby css-7js8wp css-v27th6">
                                <div class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9" role="link"
                                  tabindex="0" data-paragraph-spacing="0px" data-list-spacing="0px">
                                  <p class="css-8zr56v css-ar07fa css-g9n9cb  adjustLetterSpacing">Soluciones</p>
                                </div>
                              </div>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Condominios y ACs</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Administradores de rentas</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Desarrolladores inmobiliarios</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Casos de éxito</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Comparar soluciones</p>
                            </div>
                          </div>
                        </div>
                        <div class="css-hv01ud css-5dba7r">
                          <div class="css-lges1h css-7js8wp css-v27th6">
                            <div class="css-uaaaod">
                              <div class="css-vplhby css-7js8wp css-v27th6">
                                <div class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9" role="link"
                                  tabindex="0" data-paragraph-spacing="0px" data-list-spacing="0px">
                                  <p class="css-8zr56v css-ar07fa css-g9n9cb  adjustLetterSpacing">Servicios Financieros
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Depósitos referenciados</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Pagos con tarjeta</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Domiciliación bancaria</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Seguros para inmuebles</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Conciliación automática</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="css-uaaaod">
                      <div class="css-tr5aoa css-7js8wp css-v27th6">
                        <div class="css-hv01ud css-5dba7r">
                          <div class="css-lges1h css-7js8wp css-v27th6">
                            <div class="css-uaaaod">
                              <div class="css-vplhby css-7js8wp css-v27th6">
                                <div class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9" role="link"
                                  tabindex="0" data-paragraph-spacing="0px" data-list-spacing="0px">
                                  <p class="css-8zr56v css-ar07fa css-g9n9cb  adjustLetterSpacing">Recursos</p>
                                </div>
                              </div>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Blog inmobiliario</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Neivor Academy</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Ebooks y guías prácticas</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Eventos y webinars</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Calculadoras y checklists</p>
                            </div>
                          </div>
                        </div>
                        <div class="css-hv01ud css-5dba7r">
                          <div class="css-lges1h css-7js8wp css-v27th6">
                            <div class="css-uaaaod">
                              <div class="css-vplhby css-7js8wp css-v27th6">
                                <div class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9" role="link"
                                  tabindex="0" data-paragraph-spacing="0px" data-list-spacing="0px">
                                  <p class="css-8zr56v css-ar07fa css-g9n9cb  adjustLetterSpacing">Empresa</p>
                                </div>
                              </div>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Nosotros</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Sala de prensa</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Eventos</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Contáctanos</p>
                            </div>
                            <div class="textContents css-wc1msa css-59rdls css-1x9ayl css-3hwh7f"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-ydwgaq  adjustLetterSpacing">Trabaja con nosotros</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="css-5knerd">
                  <div class="css-lges1h css-7js8wp">
                    <div class="css-5knerd">
                      <div class="css-8ul899 css-j9f0op">
                        <div class="css-sutng4 css-7js8wp">
                          <div class="textContents css-vkpzlc css-u0y8se css-qc1st9" role="link" tabindex="0"
                            data-paragraph-spacing="0px" data-list-spacing="0px">
                            <p class="css-8zr56v css-az5ltz css-6jeswk  adjustLetterSpacing">Política de privacidad</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="css-5knerd">
                      <div class="css-8ul899 css-j9f0op">
                        <div class="css-sutng4 css-7js8wp">
                          <div class="textContents css-vkpzlc css-u0y8se css-qc1st9" role="link" tabindex="0"
                            data-paragraph-spacing="0px" data-list-spacing="0px">
                            <div class="nav-policies">
                                <?php wp_nav_menu(['menu'=>'Footer']); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="css-i5gtd1 css-5knerd">
                  <div class="css-fokp20 css-7js8wp css-i5gtd1">
                    <div class="textContents css-wc1msa css-59rdls css-qpvddb css-3hwh7f" role="link" tabindex="0"
                      data-paragraph-spacing="0px" data-list-spacing="0px">
                      <p class="css-8zr56v css-mzqxot css-gpop2m  adjustLetterSpacing"><?= get_field('address', 'option'); ?></p>
                    </div>
                    <div class="textContents css-wc1msa css-59rdls css-qpvddb css-3hwh7f" role="link" tabindex="0"
                      data-paragraph-spacing="0px" data-list-spacing="0px">
                      <p class="css-8zr56v css-mzqxot css-gpop2m  adjustLetterSpacing"><?= get_field('address', 'option'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-page-overflowx="hidden" data-breakpoint-id="node-0_4" data-breakpoint="true" data-width="1280"
      data-height="1080" class="css-ld0hsi css-j6ldtg css-8vmj48">
      <div class="css-g1qjki css-trglf0 css-vd6a0u">
        <div class="css-rt1aze css-j9f0op">
          <div class="css-sa9thz css-7js8wp css-j9f0op">
            <div class="css-l1xxg7 css-5dba7r">
              <div class="css-4sgc css-7js8wp css-j9f0op">
                <div class="css-uaaaod">
                  <div class="css-m4mih0 css-7js8wp css-v27th6">
                    <div class="css-5knerd">
                      <div class="css-x7q7ad css-7js8wp">
                        <div class="css-5knerd">
                          <div class="css-kujjrk css-7js8wp">
                            <div class="css-5knerd">
                              <div class="css-rt1aze css-j9f0op">
                                <div class="css-vfwpqw css-7js8wp">
                                  <div class="css-opu8dy css-wc1msa" data-isimage="true">
                                    <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                        src="_assets/v8/5ab3b09ec8eb0716c224260b66801b8ade19a43d.svg" alt=""
                                        class="css-9j6u1t css-8zr56v" /></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="css-5knerd">
                      <div class="css-d034xb css-7js8wp">
                        <div class="css-b0oug5 css-5knerd">
                          <div class="css-8kkpf5 css-gs60ek css-b0oug5">
                            <div class="css-ardmi css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/6971c58aa70bbc1e51af2b9cf3e16bc578a553aa.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                            <div class="css-1ogtb2 css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/41e15fdc7c647e98f9f7f8208fb948ab85ac1318.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="css-b0oug5 css-5knerd">
                          <div class="css-8kkpf5 css-gs60ek css-b0oug5">
                            <div class="css-ardmi css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/d761b8bf07b7891235568b219fb2ba14af3c68f7.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                            <div class="css-7ckcc6 css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/01c57772de035cece8b9b543fbf461beb14702e9.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="css-b0oug5 css-5knerd">
                          <div class="css-8kkpf5 css-gs60ek css-b0oug5">
                            <div class="css-ardmi css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/ad191b6f5930d90fa83be08364f6b1c4c21ec1b8.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                            <div class="css-y6gq72 css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/d396d3e50af1c212e10f8416bfeb0b80350745d9.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="css-b0oug5 css-5knerd">
                          <div class="css-8kkpf5 css-gs60ek css-b0oug5">
                            <div class="css-ardmi css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/d5f554694222ebd4e6b7c3a88ea648fe81f53fe8.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                            <div class="css-1ogtb2 css-roiesn" data-isimage="true">
                              <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                                  src="_assets/v8/74ac514f3cb535b637244882fa673b3ce988511c.svg" alt=""
                                  class="css-9j6u1t css-8zr56v" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="css-qnxlx7 css-wc1msa" data-isimage="true">
                          <div class="css-roiesn css-wixxpz css-gs60ek"><img loading="lazy"
                              src="_assets/v8/766b2fe35a413ccd790e3544bf1fa2be5893c83b.svg" alt=""
                              class="css-9j6u1t css-8zr56v" /></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="css-uaaaod">
                  <div class="css-m4mih0 css-7js8wp css-v27th6">
                    <div class="css-hv01ud css-5dba7r">
                      <div class="css-j0or7i css-7js8wp css-v27th6">
                        <div class="css-uaaaod">
                          <div class="css-vplhby css-7js8wp css-v27th6"><a
                              class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9"
                              href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-hnt0es css-6jeswk  adjustLetterSpacing">Soluciones</p>
                            </a></div>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Condominios y ACs</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Administradores de rentas</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Desarrolladores inmobiliarios</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Casos de éxito</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Comparar soluciones</p>
                        </div>
                      </div>
                    </div>
                    <div class="css-hv01ud css-5dba7r">
                      <div class="css-j0or7i css-7js8wp css-v27th6">
                        <div class="css-uaaaod">
                          <div class="css-vplhby css-7js8wp css-v27th6"><a
                              class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9"
                              href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-hnt0es css-6jeswk  adjustLetterSpacing">Servicios Financieros</p>
                            </a></div>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Depósitos referenciados</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Pagos con tarjeta</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Domiciliación bancaria</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Seguros para inmuebles</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Conciliación automática</p>
                        </div>
                      </div>
                    </div>
                    <div class="css-hv01ud css-5dba7r">
                      <div class="css-j0or7i css-7js8wp css-v27th6">
                        <div class="css-uaaaod">
                          <div class="css-vplhby css-7js8wp css-v27th6"><a
                              class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9"
                              href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-hnt0es css-6jeswk  adjustLetterSpacing">Recursos</p>
                            </a></div>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Blog inmobiliario</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Neivor Academy</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Ebooks y guías prácticas</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Eventos y webinars</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Calculadoras y checklists</p>
                        </div>
                      </div>
                    </div>
                    <div class="css-hv01ud css-5dba7r">
                      <div class="css-j0or7i css-7js8wp css-v27th6">
                        <div class="css-uaaaod">
                          <div class="css-vplhby css-7js8wp css-v27th6"><a
                              class="textContents css-myl2ny css-5dba7r css-9wg4zi css-qc1st9"
                              href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                              data-paragraph-spacing="0px" data-list-spacing="0px">
                              <p class="css-8zr56v css-hnt0es css-6jeswk  adjustLetterSpacing">Empresa</p>
                            </a></div>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Nosotros</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Sala de prensa</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Eventos</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Contáctanos</p>
                        </div>
                        <div class="textContents css-wc1msa css-dnsydh css-3hwh7f" data-paragraph-spacing="0px"
                          data-list-spacing="0px">
                          <p class="css-8zr56v css-evv1mn  adjustLetterSpacing">Trabaja con nosotros</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="css-i5gp16 css-5knerd">
                  <div class="css-islyrh css-7js8wp css-i5gp16">
                    <div class="css-5knerd">
                      <div class="css-8ul899 css-j9f0op">
                        <div class="css-sutng4 css-7js8wp"><a class="textContents css-vkpzlc css-u0y8se css-qc1st9"
                            href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                            data-paragraph-spacing="0px" data-list-spacing="0px">
                            <p class="css-8zr56v css-42csuh css-6jeswk  adjustLetterSpacing">Política de privacidad</p>
                          </a></div>
                      </div>
                    </div>
                    <div class="css-5knerd">
                      <div class="css-8ul899 css-j9f0op">
                        <div class="nav-policies">
                            <?php wp_nav_menu(['menu'=>'Footer']); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="css-uaaaod">
                  <div class="css-m4mih0 css-7js8wp css-v27th6"><a
                      class="textContents css-i5eubj css-wc1msa css-qpvddb css-3hwh7f"
                      href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                      data-paragraph-spacing="0px" data-list-spacing="0px">
                      <p class="css-8zr56v css-mzqxot css-gpop2m  adjustLetterSpacing"><?= get_field('address', 'option'); ?></p>
                    </a><a class="textContents css-wc1msa css-3pu501 css-3hwh7f"
                      href="https://neivor.com/software-administracion-alquileres/" target="_blank"
                      data-paragraph-spacing="0px" data-list-spacing="0px">
                      <p class="css-8zr56v css-mzqxot css-gpop2m  adjustLetterSpacing"><?= get_field('address', 'option'); ?></p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

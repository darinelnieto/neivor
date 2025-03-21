   
<?php
/**
 * 
 * Partial Name: how-it-works
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
if(get_field('enable_how_it_works')):
$how_it_works = get_field('how_it_works');
if($how_it_works['enable_large_svg']): 
$key = 0;
?>
<style>
    .svg-large{
        top:<?= $how_it_works['postition_y']; ?>%;
        transform:translateY(-<?= $how_it_works['postition_y']; ?>%);
    }
</style>
<?php endif; ?>
<section class="how-it-works-partial-ed70bf">
    <?php if($how_it_works['enable_large_svg']): ?>
        <svg xmlns="http://www.w3.org/2000/svg" class="svg-large" width="1369" height="140" viewBox="0 0 1369 140" fill="none">
            <path d="M-176.075 57.7938C360.814 63.729 768.062 47.2778 1102.84 9.61558C1437.62 -28.0466 1466.39 56.2847 1127.21 101.235C788.019 146.186 452.714 43.3481 -173.465 117.45C-799.643 191.552 -712.964 51.8586 -176.075 57.7938Z" fill="url(#paint0_linear_1203_94465)" fill-opacity="0.2"/>
            <defs>
                <linearGradient id="paint0_linear_1203_94465" x1="-628.665" y1="108.198" x2="1376.63" y2="-425.071" gradientUnits="userSpaceOnUse">
                <stop stop-color="#723EC7"/>
                <stop offset="1" stop-color="white" stop-opacity="0"/>
                </linearGradient>
            </defs>
        </svg>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"><?= $how_it_works['title']; ?></h2>
                <p class="description"><?= $how_it_works['description']; ?></p>
            </div>
        </div>
        <?php if($how_it_works['how_it_works_list']): foreach($how_it_works['how_it_works_list'] as $item): ?>
            <div class="how-it-work-item <?php if($item['background'] === 'Gray'): ?>gray<?php else: ?>white<?php endif; ?>" style="border-radius:<?php if (is_mobile()): echo $item['borde_radius_movil']; else: echo $item['border_radius']; endif; ?>;position:relative;">
                <?php if($item['enable_circles_svg'] === true && $item['horizontal_svg']): ?>
                    <svg width="324" class="svg-horizontal" style="position:absolute;<?= $item['svg_position_x']; ?>:<?= $item['position_x']; ?>%;top:<?= $item['svg_position_y'] ?>%; transform:translateY(-<?= $item['svg_position_y'] ?>%);" height="75" viewBox="0 0 324 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4576 68.5168C12.4576 65.0767 9.66886 62.288 6.2288 62.288C2.78873 62.288 -4.2264e-07 65.0767 -2.72269e-07 68.5168C-1.21899e-07 71.9569 2.78873 74.7456 6.2288 74.7456C9.66887 74.7456 12.4576 71.9569 12.4576 68.5168ZM74.7456 68.5168C74.7456 65.0767 71.9568 62.288 68.5168 62.288C65.0767 62.288 62.288 65.0767 62.288 68.5168C62.288 71.9569 65.0767 74.7456 68.5168 74.7456C71.9568 74.7456 74.7456 71.9569 74.7456 68.5168ZM130.805 62.288C134.245 62.288 137.034 65.0767 137.034 68.5168C137.034 71.9569 134.245 74.7456 130.805 74.7456C127.365 74.7456 124.576 71.9569 124.576 68.5168C124.576 65.0767 127.365 62.288 130.805 62.288ZM199.321 68.5168C199.321 65.0767 196.533 62.288 193.093 62.288C189.653 62.288 186.864 65.0767 186.864 68.5168C186.864 71.9569 189.653 74.7456 193.093 74.7456C196.533 74.7456 199.321 71.9569 199.321 68.5168ZM255.381 62.288C258.821 62.288 261.609 65.0767 261.609 68.5168C261.609 71.9569 258.821 74.7456 255.381 74.7456C251.941 74.7456 249.152 71.9569 249.152 68.5168C249.152 65.0767 251.941 62.288 255.381 62.288ZM323.897 68.5168C323.897 65.0767 321.109 62.288 317.669 62.288C314.229 62.288 311.44 65.0767 311.44 68.5168C311.44 71.9569 314.229 74.7456 317.669 74.7456C321.109 74.7456 323.897 71.9569 323.897 68.5168ZM6.22879 4.55041e-05C9.66886 4.53537e-05 12.4576 2.78877 12.4576 6.22884C12.4576 9.66891 9.66886 12.4576 6.22879 12.4576C2.78872 12.4576 -2.84459e-06 9.66891 -2.99496e-06 6.22884C-3.14533e-06 2.78877 2.78872 4.56545e-05 6.22879 4.55041e-05ZM74.7455 6.22884C74.7455 2.78877 71.9568 4.2631e-05 68.5168 4.27814e-05C65.0767 4.29318e-05 62.288 2.78877 62.288 6.22884C62.288 9.66891 65.0767 12.4576 68.5168 12.4576C71.9568 12.4576 74.7455 9.66891 74.7455 6.22884ZM130.805 4.00587e-05C134.245 3.99083e-05 137.034 2.78877 137.034 6.22884C137.034 9.66891 134.245 12.4576 130.805 12.4576C127.365 12.4576 124.576 9.66891 124.576 6.22884C124.576 2.78877 127.365 4.02091e-05 130.805 4.00587e-05ZM199.321 6.22883C199.321 2.78876 196.533 3.71856e-05 193.093 3.7336e-05C189.653 3.74864e-05 186.864 2.78876 186.864 6.22884C186.864 9.66891 189.653 12.4576 193.093 12.4576C196.533 12.4576 199.321 9.66891 199.321 6.22883ZM255.381 3.46133e-05C258.821 3.4463e-05 261.609 2.78876 261.609 6.22883C261.609 9.6689 258.821 12.4576 255.381 12.4576C251.941 12.4576 249.152 9.6689 249.152 6.22883C249.152 2.78876 251.941 3.47637e-05 255.381 3.46133e-05ZM323.897 6.22883C323.897 2.78876 321.109 3.17403e-05 317.669 3.18906e-05C314.229 3.2041e-05 311.44 2.78876 311.44 6.22883C311.44 9.6689 314.229 12.4576 317.669 12.4576C321.109 12.4576 323.897 9.6689 323.897 6.22883Z" fill="#BDB6FF" fill-opacity="0.39"/>
                    </svg>
                <?php elseif($item['enable_circles_svg'] === true): ?>
                    <svg width="75" class="svg-vertical" style="position:absolute;<?= $item['svg_position_x']; ?>:<?= $item['position_x']; ?>%;top:<?= $item['svg_position_y'] ?>%; tranform:translate(-<?= $item['svg_position_y'] ?>%);" height="324" viewBox="0 0 75 324" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M68.5163 311.44C65.0762 311.44 62.2875 314.229 62.2875 317.669C62.2875 321.109 65.0763 323.897 68.5163 323.897C71.9564 323.897 74.7451 321.109 74.7451 317.669C74.7451 314.229 71.9564 311.44 68.5163 311.44ZM68.5163 249.152C65.0762 249.152 62.2875 251.941 62.2875 255.381C62.2875 258.821 65.0762 261.609 68.5163 261.609C71.9564 261.609 74.7451 258.821 74.7451 255.381C74.7451 251.941 71.9564 249.152 68.5163 249.152ZM62.2875 193.093C62.2875 189.653 65.0762 186.864 68.5163 186.864C71.9564 186.864 74.7451 189.653 74.7451 193.093C74.7451 196.533 71.9564 199.322 68.5163 199.322C65.0762 199.322 62.2875 196.533 62.2875 193.093ZM68.5163 124.576C65.0762 124.576 62.2875 127.365 62.2875 130.805C62.2875 134.245 65.0762 137.034 68.5163 137.034C71.9564 137.034 74.7451 134.245 74.7451 130.805C74.7451 127.365 71.9564 124.576 68.5163 124.576ZM62.2875 68.5168C62.2875 65.0768 65.0762 62.288 68.5163 62.288C71.9564 62.288 74.7451 65.0768 74.7451 68.5168C74.7451 71.9569 71.9564 74.7456 68.5163 74.7456C65.0762 74.7456 62.2875 71.9569 62.2875 68.5168ZM68.5163 6.15797e-05C65.0762 6.18804e-05 62.2875 2.78879 62.2875 6.22885C62.2875 9.66892 65.0762 12.4576 68.5163 12.4576C71.9564 12.4576 74.7451 9.66891 74.7451 6.22885C74.7451 2.78879 71.9564 6.1279e-05 68.5163 6.15797e-05ZM-0.000443049 317.669C-0.00044335 314.229 2.78828 311.44 6.22835 311.44C9.66843 311.44 12.4571 314.229 12.4571 317.669C12.4571 321.109 9.66843 323.897 6.22836 323.897C2.78828 323.897 -0.000442749 321.109 -0.000443049 317.669ZM6.22835 249.152C2.78828 249.152 -0.000448796 251.941 -0.000448495 255.381C-0.000448194 258.821 2.78828 261.61 6.22835 261.61C9.66842 261.61 12.4571 258.821 12.4571 255.381C12.4571 251.941 9.66842 249.152 6.22835 249.152ZM-0.00045394 193.093C-0.000454241 189.653 2.78827 186.864 6.22834 186.864C9.66841 186.864 12.4571 189.653 12.4571 193.093C12.4571 196.533 9.66842 199.322 6.22834 199.322C2.78827 199.322 -0.000453639 196.533 -0.00045394 193.093ZM6.22834 124.576C2.78827 124.576 -0.000459686 127.365 -0.000459386 130.805C-0.000459085 134.245 2.78827 137.034 6.22834 137.034C9.66841 137.034 12.4571 134.245 12.4571 130.805C12.4571 127.365 9.66841 124.576 6.22834 124.576ZM-0.000464831 68.5168C-0.000465132 65.0768 2.78826 62.288 6.22833 62.288C9.6684 62.288 12.4571 65.0768 12.4571 68.5168C12.4571 71.9569 9.6684 74.7456 6.22833 74.7456C2.78826 74.7456 -0.00046453 71.9569 -0.000464831 68.5168ZM6.22833 6.70251e-05C2.78826 6.73258e-05 -0.000470577 2.78879 -0.000470276 6.22886C-0.000469976 9.66892 2.78826 12.4576 6.22833 12.4576C9.6684 12.4576 12.4571 9.66892 12.4571 6.22886C12.4571 2.78879 9.6684 6.67243e-05 6.22833 6.70251e-05Z" fill="#BDB6FF" fill-opacity="0.39"/>
                    </svg>
                <?php endif; ?>
                <div class="row <?php if($item['row_reverse'] === true): ?>flex-row-reverse<?php endif; ?>">
                    <div class="col-12 <?php if($item['two_columns'] === true): ?>col-md-6<?php endif; ?>">
                        <h3 class="how-it-works-title"><?= $item['title']; ?></h3>
                        <div class="how-it-works-description">
                            <?= $item['description']; ?>
                        </div>
                    </div>
                    <div class="col-12 <?php if($item['two_columns'] === true): ?>col-md-6 <?php else: ?>text-center<?php endif; ?>">
                        <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['title']; ?>" class="how-it-works-image" <?php if($item['enable_manual_image_styles']): ?>style="max-width:<?= $item['max_width_image'] ?>; "<?php endif; ?>>
                    </div>
                </div>
            </div>
        <?php endforeach; endif; ?>
    </div>
</section>
<?php endif; ?>               